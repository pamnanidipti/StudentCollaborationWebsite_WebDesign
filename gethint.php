<?php
// Array with names
$a[] = "Home Page ---> <a href=profile.php>Home</a>";
$a[] = "Login ---> <a href=login2.php>Login</a>";
$a[] = "Sign Up ---> <a href=login_signup.html>Sign Up</a>";
$a[] = "Universities ---> <a href=listofuniversities.html>List of Universities</a>";
$a[] = "Admit Trends ---> <a href=trend.html>Admit Trends</a>";
$a[] = "Discussion ---> <a href=forums.html>Discussion/Forum</a>";
$a[] = "Forum ---> <a href=forums.html>Discussion/Forum</a>";
$a[] = "SOP ---> <a href=sop1.html>SOP/LOR</a>";
$a[] = "LOR ---> <a href=sop1.html>SOP/LOR</a>";
$a[] = "GRE ---> <a href=gretoefl.html>GRE/TOEFL</a>";
$a[] = "TOEFL ---> <a href=gretoefl.html>GRE/TOEFL</a>";
$a[] = "Applications ---> <a href=appAssist.html>Application Assist</a>";
$a[] = "Visa ---> <a href=visainterview.html>Visa Interview</a>";
$a[] = "FAQs ---> <a href=faq-1.html>FAQs</a>";
$a[] = "About ---> <a href=profile.php#aboutus>About Us</a>";
$a[] = "Contact ---> <a href=profile.php#contact>Contact Us</a>";
$a[] = "Resources ---> <a href=profile.php#resources>Resources</a>";
$a[] = "News ---> <a href=newsFeed.html>News Feeds</a>";
$a[] = "What's New ---> <a href=newsFeed.html>News Feeds</a>";
$a[] = "University Search ---> <a href=uniSearch.html>University Search</a>";
$a[] = "University Predictor ---> <a href=searchUni.html>University Predictor</a>";
$a[] = "University Review ---> <a href=univRating.html>University Review</a>";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				$name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>