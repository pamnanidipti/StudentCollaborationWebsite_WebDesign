<?php
session_start();
$db = new mysqli("localhost","root","root","grad") or die("Error! with connection");
$sql = "SELECT forum_id, forum_name from forum";
if($query = $db -> prepare($sql))
{
	$query->bind_result($f_id, $f_name);
	$query->execute();
	$query->store_result();
}
else
{
	echo $db->error;
}
?>

<!doctype html>
<html>
<head>
<title>Forum</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="GradRoom, a website that caters to students aspiring to study in universities in USA" >
<link rel="shortcut icon" href="img/favicon.ico" />

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="gradRoomStyle.css">
 <link rel="stylesheet" href="dipti.css">

<style>
.forum {
   
     margin-right: -15px;

}
.start {

     margin-right: -15px;

}
* {font-family: Helvetica Neue, Arial, sans-serif;}

body { background-image: linear-gradient(#aaa 25%, #000);}

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.7rem; font-weight: 100%;}

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(0, 100%, 21%, 0.8); }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

tr:hover:not(#firstrow), tr:hover td:empty {background: #38ffaf; pointer-events: visible;}
tr:hover:not(#firstrow) { transform: scale(1.1); font-weight: 1000; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}


</style>
</head>
<body>

<!-- start of navbar section -->
 <div class="modal fade" id="openModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <center>    <h4 class="modal-title">Search GradRoom</h4>
        </div>
 
   <h2>Search</h2>
   <br/>
   <p><form> 
What are you looking for?: <input type="text" onkeyup="showHint(this.value)">
</form></p>
   <p>Suggestions: <span id="txtHint"></span></p>
</div>
</div>
</div>





<!-- end of this modal -->
<script>
function showHint(str) {
   if (str.length == 0) { 
       document.getElementById("txtHint").innerHTML = "";
       return;
   } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
           }
       };
       xmlhttp.open("GET", "gethint.php?q=" + str, true);
       xmlhttp.send();
   }
}
</script>



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
          <a class="navbar-brand" href="profile.php"><img src="img/gradLogo.png" width="160" height="35"></a>
          

      </div>



      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav navbar-right" >
		
        <li class="dropdown" style="z-index:90001;">
          <button class="dropbtn" > <a class="page-scroll" href="profile.php#msinus" >MS in US</a> &#9662</button>
          <div class="dropdown-content">
            <a href="listofuniversities.html">List Of Universities</a>
            <a href="trend.html">Admit Trends</a>
            <a href="index_forum.php">Discussion forum</a>
           <a href="newsFeed.html">What's New?</a>
          </div>
        </li>
           <li class="dropdown" style="z-index:90001;">
          <button class="dropbtn" > <a class="page-scroll" href="profile.php#uniGuide" >UniGuide</a> &#9662</button>
          <div class="dropdown-content">
            <a href="uniSearch.html">UniSearch</a>
            <a href="searchUni.html">UniPredictor</a>
            <a href="univRating.html">UniReview</a>
          </div>
        </li>
        <li class="dropdown" style="z-index:90000;">
          <button class="dropbtn"><a class="page-scroll" href="profile.php#resources" >Resources</a> &#9662</button>
          <div class="dropdown-content">
            <a href="sop1.html">SOP/LOR</a>
            <a href="gretoefl.html">GRE/TOEFL</a>
            <a href="appAssist.html">Application Assist</a>
              <a href="visainterview.html">Visa Interview</a>
                <a href="faq-1.html">FAQs</a>
          </div>
        </li>
        <li>
           <a class="page-scroll" href="profile.php#aboutus" style="font-size:16px">About us</a>
       </li>
        <li>
           <a class="page-scroll" href="profile.php#contact" style="font-size:16px">Contact</a>
       </li>
<li>
       <a href="#openModal1" data-toggle="modal" title="Search" data-placement="bottom" style="font-size:16px"><span class="glyphicon glyphicon-search"></span></a>
      
      </li>
	  <li>

       <a href="logout.php" data-toggle="tooltip" title="Logout" data-placement="bottom" style="font-size:16px"><span class="glyphicon glyphicon-log-out"></span></a>
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
<!-- end of navbar section -->



<br/><br/><br/>
<div class="start" id="start">
<center><p><strong><font color="white">DISCUSSION FORUM</p>
                        <font size="3px">Students can share each other’s profile and experiences and can get connected to Official group of GradRoom and other USA Universities Groups & help the fellow aspirants.</font></strong>
            </center>
            <br/>
</div>

<div class="forum">


<div class="container">
<br/><br/><br/>
	<table id="racetimes">
	<tr id="firstrow" style="font:strong;align:center;"><th >Discussion Topics</th></tr>
	<?php if($query->num_rows !== 0) :
	while($row = $query->fetch()) :
	?>
	<tr>
	<td><a href="forum.php?id=<?php echo $f_id?>"> <?= $f_name;?></a> </td>
	</tr>
	<?php endwhile; endif; ?>
	
	</table>
	<br/><br/>
</div>


</div>

</body>
</html>