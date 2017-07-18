<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Login</title>
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="gradRoomStyle.css">
<link rel="stylesheet" href="dipti.css">
    </head>
	
	<style>
	body {
    background: url('img/login.jpg') no-repeat fixed center center;
    background-size: cover;
    
}


.login-block {
    width: 500px;
	
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
	
	</style>
   <body>
     
<!-- start navbar section -->
  <!-- Signup modal-->
  <div class="modal fade" id="signUp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <center>    <h4 class="modal-title">Login / Signup to continue</h4>
        </div>
        <div class="modal-body">
 <center> <h4> Existing User?<br> <br>  <button type="button" class="btn log btn-primary btn-lg" onclick="location.href='login2.php'">Login</button><br><br<br><br<br>
 <br><br<br><br<br><center> New User?<br> <br> <button type="button" class="btn log btn-primary btn-lg" onclick="location.href='login_signup.html'">Signup</button>
</h4>
        </div>
        <div class="modal-footer">
        <center>     <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button></center>
        </div>
      </div>
      
    </div>
  </div>


<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </button>
          <a class="navbar-brand" href="gradRoomFinal-guest.html"><img src="img/gradLogo.png" width="160" height="35"></a>
           <!-- <button type="button" class="btn btn-primary btn-lg" id="myBtn">Login</button> -->

      </div>
      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav navbar-right" >

          <li>

       <a href="login2.php" data-toggle="tooltip" title="Login/Signup" data-placement="bottom" style="font-size:16px"><span class="glyphicon glyphicon-log-in"></span></a>
      </li>
      
     

        <li class="dropdown" style="z-index:90001;">
          <button class="dropbtn" > <a class="page-scroll" >MS in US</a> &#9662</button>
          <div class="dropdown-content">
           <a href="#signUp" data-toggle="modal">List Of Universities</a>
           <a href="#signUp" data-toggle="modal">Admit Trends</a>
             <a href="#signUp" data-toggle="modal">Discussion forum</a>
          <a href="#signUp" data-toggle="modal">What's New?</a>
          </div>
        </li>
           <li class="dropdown" style="z-index:90001;">
          <button class="dropbtn" > <a class="page-scroll" >UniGuide</a> &#9662</button>
          <div class="dropdown-content">
            <a href="#signUp" data-toggle="modal">UniSearch</a>
            <a href="#signUp" data-toggle="modal">UniPredictor</a>
            <a href="#signUp" data-toggle="modal">UniReview</a>
          </div>
        </li>
        <li class="dropdown" style="z-index:90000;">
          <button class="dropbtn"><a class="page-scroll"  >Resources</a> &#9662</button>
          <div class="dropdown-content">
            <a href="#signUp" data-toggle="modal">SOP/LOR</a>
             <a href="#signUp" data-toggle="modal">GRE/TOEFL</a>
            <a href="#signUp" data-toggle="modal">Application Assist</a>
               <a href="#signUp" data-toggle="modal">Visa Interview</a>
                <a href="#signUp" data-toggle="modal">FAQs</a>
          </div>
        </li>
        <li>
           <a class="page-scroll" href="gradRoomFinal-guest.html#aboutus" style="font-size:16px">About us</a>
       </li>
        <li>
           <a href="#signUp" data-toggle="modal" style="font-size:16px">Contact</a>
       </li>


        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation -->

  <script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#msinus');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', 'black');
       } else {
          $('.navbar-default').css('background-color', 'transparent');
       }
   });
    }
});
</script>

        <!-- /.container -->
<!-- end navbar section -->



     
      <div class = "container form-signin">
	  <br/><br/><br/><br/><br/><br/><br/>
        <div style="color:red;"> 
         <?php
            $msg = '';
			
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
				$username = ($_POST['username']);
				$password = ($_POST['password']);
				
				$dbc = mysqli_connect("localhost","root","root","grad");
			$check = "select * from person where password='$password' AND email='$username'";
			
			
			$result = mysqli_query($dbc, $check);
			
			
			$count = mysqli_num_rows($result);
				
              
				  if ($count == 1) {
					  $retName = "select firstname from person where password='$password' AND email='$username'";
					  //$result1 = mysqli_query($dbc, $retName);
						$result1 = $dbc->query($retName);
						$row = $result1->fetch_assoc();
						$firstname = $row["firstname"];
$_SESSION['login_user']=$username; // Initializing Session
$_SESSION['login_firstname']=$firstname;

header("location: profile.php"); // Redirecting To Other Page
//echo 'You have entered valid use name and password';
 $msg = 'You have entered valid use name and password';
}
                  
                  //echo 'You have entered valid use name and password';
              
			   else {
           $msg = 'Wrong username or password';
               }
				  }
         ?>
		 </div>
     
      
      <div class = "login-block">
	  <br/>
      <h1>Login</h1>
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" id="username" placeholder = "Username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" id="password" placeholder = "Password" required>
            <button type = "submit" 
               name = "login">Login</button>
         </form>
			<strong><p align="right">Not a member? <a href="login_signup.html">Sign Up </a></p></strong>
			
      </div> 
      
	   </div> <!-- /container -->
	  
   </body>
</html>