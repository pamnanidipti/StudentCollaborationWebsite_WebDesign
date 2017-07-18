<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="gradRoomStyle.css">
<link rel="stylesheet" href="dipti.css">
  <link rel="stylesheet" href="style.css">
  <style>
  #errorBox{
 color:#FF4500;
 font-weight: bold;
 }
 </style>
</head>
<script>
function displayError()
{
	alert("Email already exists!! Try again !");
}
</script>
<body onload="displayError()">

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


<div class="signup" style="background-image: url(img/signup.jpg);height:650px;";>
<br/><br/><br/>
<div class="form">
      
      
      
         
          <h1 class="heading">Sign Up</h1>
          
          <form name="signup" action="signup.php" method="post">
           <div id="errorBox"></div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required name="email" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <input type="submit" class="button button-block" onClick="return validateForm()" value="Submit">
          
          </form>
     
</div> <!-- /form -->

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="index.js"></script>

</body>
</html>