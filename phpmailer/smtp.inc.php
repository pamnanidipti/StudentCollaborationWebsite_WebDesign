<?php
    
    class SMTP {
        var $SMTP_PORT = 25; # the default SMTP PORT
        var $CRLF = "\r\n";  # CRLF pair

        var $smtp_conn;      # the socket to the server
        var $error;          # error if any on the last call
        var $helo_rply;      # the reply the server sent to us for HELO

        var $do_debug;       # the level of debug to perform

        tion SMTP() {
            $this->smtp_conn = 0;
            $this->error = null;
            $this->helo_rply = null;

            $this->do_debug = 0;
        }

        
        function Connect($host,$port=0,$tval=30) {
            # set the error val to null so there is no confusion
            $this->error = null;

            # make sure we are __not__ connected
            if($this->connected()) {
                
                $this->error =
                    array("error" => "Already connected to a server");
                return false;
            }

            if(empty($port)) {
                $port = $this->SMTP_PORT;
            }

            #connect to the smtp server
            $this->smtp_conn = fsockopen($host,    # the host of the server
                                         $port,    # the port to use
                                         $errno,   # error number if any
                                         $errstr,  # error message if any
                                         $tval);   # give up after ? secs
            # verify we connected properly
            if(empty($this->smtp_conn)) {
                $this->error = array("error" => "Failed to connect to server",
                                     "errno" => $errno,
                                     "errstr" => $errstr);
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": $errstr ($errno)" . $this->CRLF;
                }
                return false;
            }

            socket_set_timeout($this->smtp_conn, 1, 0);

            
            $announce = $this->get_lines();

            # set the timeout  of any socket functions at 1/10 of a second
            socket_set_timeout($this->smtp_conn, 0, 100000);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $announce;
            }

            return true;
        }

        function Connected() {
            if(!empty($this->smtp_conn)) {
                $sock_status = socket_get_status($this->smtp_conn);
                if($sock_status["eof"]) {
                    # hmm this is an odd situation... the socket is
                    # valid but we aren't connected anymore
                    if($this->do_debug >= 1) {
                        echo "SMTP -> NOTICE:" . $this->CRLF .
                             "EOF caught while checking if connected";
                    }
                    $this->Close();
                    return false;
                }
                return true; # everything looks good
            } 
            return false;
        }

        
        function Close() {
            $this->error = null; # so there is no confusion
            $this->helo_rply = null;
            if(!empty($this->smtp_conn)) { 
                # close the connection and cleanup
                fclose($this->smtp_conn);
                $this->smtp_conn = 0;
            }
        }


        
         
        function Data($msg_data) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Data() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"DATA" . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 354) {
                $this->error =
                    array("error" => "DATA command not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }

           

            # normalize the line breaks so we know the explode works
            $msg_data = str_replace("\r\n","\n",$msg_data);
            $msg_data = str_replace("\r","\n",$msg_data);
            $lines = explode("\n",$msg_data);

            
            $field = substr($lines[0],0,strpos($lines[0],":"));
            $in_headers = false;
            if(!empty($field) && !strstr($field," ")) {
                $in_headers = true;
            }

            $max_line_length = 998; # used below; set here for ease in change

            while(list(,$line) = @each($lines)) {
                $lines_out = null;
                if($line == "" && $in_headers) {
                    $in_headers = false;
                }
                # ok we need to break this line up into several
                # smaller lines
                while(strlen($line) > $max_line_length) {
                    $pos = strrpos(substr($line,0,$max_line_length)," ");
                    $lines_out[] = substr($line,0,$pos);
                    $line = substr($line,$pos + 1);
                    # if we are processing headers we need to
                    # add a LWSP-char to the front of the new line
                    # rfc 822 on long msg headers
                    if($in_headers) {
                        $line = "\t" . $line;
                    }
                }
                $lines_out[] = $line;

                # now send the lines to the server
                while(list(,$line_out) = @each($lines_out)) {
                    if($line_out[0] == ".") {
                        $line_out = "." . $line_out;
                    }
                    fputs($this->smtp_conn,$line_out . $this->CRLF);
                }
            }

            # ok all the message data has been sent so lets get this
            # over with aleady
            fputs($this->smtp_conn, $this->CRLF . "." . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "DATA not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

        
         */
        function Expand($name) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Expand() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"EXPN " . $name . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "EXPN not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }

            # parse the reply and place in our array to return to user
            $entries = explode($this->CRLF,$rply);
            while(list(,$l) = @each($entries)) {
                $list[] = substr($l,4);
            }

            return $rval;
        }

        
        function Hello($host="") {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Hello() without being connected");
                return false;
            }

            # if a hostname for the HELO wasn't specified determine
            # a suitable one to send
            if(empty($host)) {
                # we need to determine some sort of appopiate default
                # to send to the server
                $host = "localhost";
            }

            fputs($this->smtp_conn,"HELO " . $host . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "HELO not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }

            $this->helo_rply = $rply;

            return true;
        }

        
        function Mail($from) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Mail() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"MAIL FROM:" . $from . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "MAIL not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

       
        function Noop() {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Noop() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"NOOP" . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "NOOP not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

        
        function Quit($close_on_error=true) {
            $this->error = null; # so there is no confusion

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Quit() without being connected");
                return false;
            }

            # send the quit command to the server
            fputs($this->smtp_conn,"quit" . $this->CRLF);

            # get any good-bye messages
            $byemsg = $this->get_lines();

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $byemsg;
            }

            $rval = true;
            $e = null;

            $code = substr($byemsg,0,3);
            if($code != 221) {
                # use e as a tmp var cause Close will overwrite $this->error
                $e = array("error" => "SMTP server rejected quit command",
                           "smtp_code" => $code,
                           "smtp_rply" => substr($byemsg,4));
                $rval = false;
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $e["error"] . ": " .
                             $byemsg . $this->CRLF;
                }
            }

            if(empty($e) || $close_on_error) {
                $this->Close();
            }

            return $rval;
        }

        
        function Recipient($to) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Recipient() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"RCPT TO:" . $to . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250 && $code != 251) {
                $this->error =
                    array("error" => "RCPT not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

       
        function Reset() {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Reset() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"RSET" . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "RSET failed",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }

            return true;
        }

        
        function Send($from) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Send() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"SEND FROM:" . $from . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "SEND not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

        function SendAndMail($from) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                    "error" => "Called SendAndMail() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"SAML FROM:" . $from . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "SAML not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

       
        function SendOrMail($from) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                    "error" => "Called SendOrMail() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"SOML FROM:" . $from . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250) {
                $this->error =
                    array("error" => "SOML not accepted from server",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return true;
        }

        /*
         * Turn()
         *
         * This is an optional command for SMTP that this class does not
         * support. This method is here to make the RFC821 Definition
         * complete for this class and __may__ be implimented in the future
         *
         * Implements from rfc 821: TURN <CRLF>
         *
         * SMTP CODE SUCCESS: 250
         * SMTP CODE FAILURE: 502
         * SMTP CODE ERROR  : 500, 503
         */
        function Turn() {
            $this->error = array("error" => "This method, TURN, of the SMTP ".
                                            "is not implemented");
            if($this->do_debug >= 1) {
                echo "SMTP -> NOTICE: " . $this->error["error"] . $this->CRLF;
            }
            return false;
        }

        /*
         * Verify($name)
         *
         * Verifies that the name is recognized by the server.
         * Returns false if the name could not be verified otherwise
         * the response from the server is returned.
         *
         * Implements rfc 821: VRFY <SP> <string> <CRLF>
         *
         * SMTP CODE SUCCESS: 250,251
         * SMTP CODE FAILURE: 550,551,553
         * SMTP CODE ERROR  : 500,501,502,421
         */
        function Verify($name) {
            $this->error = null; # so no confusion is caused

            if(!$this->connected()) {
                $this->error = array(
                        "error" => "Called Verify() without being connected");
                return false;
            }

            fputs($this->smtp_conn,"VRFY " . $name . $this->CRLF);

            $rply = $this->get_lines();
            $code = substr($rply,0,3);

            if($this->do_debug >= 2) {
                echo "SMTP -> FROM SERVER:" . $this->CRLF . $rply;
            }

            if($code != 250 && $code != 251) {
                $this->error =
                    array("error" => "VRFY failed on name '$name'",
                          "smtp_code" => $code,
                          "smtp_msg" => substr($rply,4));
                if($this->do_debug >= 1) {
                    echo "SMTP -> ERROR: " . $this->error["error"] .
                             ": " . $rply . $this->CRLF;
                }
                return false;
            }
            return $rply;
        }

        /******************************************************************
         *                       INTERNAL FUNCTIONS                       *
         ******************************************************************/

        /*
         * get_lines()
         *
         * __internal_use_only__: read in as many lines as possible
         * either before eof or socket timeout occurs on the operation.
         * With SMTP we can tell if we have more lines to read if the
         * 4th character is '-' symbol. If it is a space then we don't
         * need to read anything else.
         */
        function get_lines() {
            $data = "";
            while($str = fgets($this->smtp_conn,515)) {
                if($this->do_debug >= 4) {
                    echo "SMTP -> get_lines(): \$data was \"$data\"" .
                             $this->CRLF;
                    echo "SMTP -> get_lines(): \$str is \"$str\"" .
                             $this->CRLF;
                }
                $data .= $str;
                if($this->do_debug >= 4) {
                    echo "SMTP -> get_lines(): \$data is \"$data\"" . $this->CRLF;
                }
                # if the 4th character is a space then we are done reading
                # so just break the loop
                if(substr($str,3,1) == " ") { break; }
            }
            return $data;
        }

    }


 ?>
