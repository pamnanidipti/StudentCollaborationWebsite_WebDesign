 var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days



function set_cookie ( cookie_name, cookie_value)
{
 

  document.cookie = cookie_name + "=" + encodeURIComponent( cookie_value ) +
    "; path=/; expires=" + expiry.toGMTString();
}
function getValueFromRadioButton(name) {
   //Get all elements with the name
   var buttons = document.getElementsByName(name);
   for(var i = 0; i < buttons.length; i++) {
      //Check if button is checked
      var button = buttons[i];
      if(button.checked) {
         //Return value
         return button.value;
      }
   }
  
   return null;
}
  function storeValues(form)  
  {

    var cname =  document.forms["myForm"]["cname"].value;
    var selectUni = document.getElementById("tooltip-1").value;
       var fromDate = document.getElementById("datepicker-10").value;
          var endDate = document.getElementById("datepicker-11").value;
var rating = getValueFromRadioButton("rating");
var aid = getValueFromRadioButton("aid");
var facility = getValueFromRadioButton("facility");
var oncampus = getValueFromRadioButton("oncampus");
var jobs = getValueFromRadioButton("jobs");
var Research = getValueFromRadioButton("Research");
var flexibility = getValueFromRadioButton("flexibility");
var Course = getValueFromRadioButton("Course");
var Internships = getValueFromRadioButton("Internships");
var comments = document.getElementById("comments").value;
    set_cookie(cname,cname +","+ selectUni +","+ fromDate +","+ endDate +","+  rating +","+ aid +","+ facility +","+ oncampus+","+ jobs +","+ Research+","+ flexibility+","+ Course+","+ Internships +","+ comments);
  //+","+ selectUni 
// alert(document.cookie);
 alert("User data saved!");
    return true;

  }


function getCookieValue(cookieName)
{
var cookieValue = document.cookie;

var cookieStartsAt = cookieValue.indexOf(" " + cookieName + "=");

if (cookieStartsAt == -1)
{
cookieStartsAt = cookieValue.indexOf(cookieName + "=");
}
if (cookieStartsAt == -1)
{
cookieValue = null;
}
else
{
cookieStartsAt = cookieValue.indexOf("=", cookieStartsAt) + 1;
var cookieEndsAt = cookieValue.indexOf(",", cookieStartsAt);
if (cookieEndsAt == -1)
{
cookieEndsAt = cookieValue.length;
}
cookieValue = unescape(cookieValue.substring(cookieStartsAt,
cookieEndsAt));
}
return cookieValue;
}


function myFunction(val)
{

    var cname =  document.forms["myForm"]["cname"].value;

 var x = getCookieValue(cname);
 var username = x.split(",")[0];
  var selectUni = x.split(",")[1];
    var fromDate = x.split(",")[2];
      var endDate = x.split(",")[3];
   var rating = x.split(",")[4];
    
   var aid = x.split(",")[5];
  var facility = x.split(",")[6];
  var oncampus = x.split(",")[7];
   var jobs = x.split(",")[8];
    var Research = x.split(",")[9];
   var flexibility = x.split(",")[10];
  var Course = x.split(",")[11];
  var Internships = x.split(",")[12];
 var comments = x.split(",")[13];



if(val == username){
document.getElementById("id3").innerHTML = "Welcome " + username + "! Your order preferences are set.You can change them below or Just click submit!";
 document.forms["myForm"]["rating"].value = rating;
  document.forms["myForm"]["tooltip-1"].value = selectUni;
    document.forms["myForm"]["datepicker-10"].value = fromDate;
      document.forms["myForm"]["datepicker-11"].value = endDate;
 document.forms["myForm"]["aid"].value = aid;
 document.forms["myForm"]["facility"].value = facility;
document.forms["myForm"]["oncampus"].value = oncampus;
document.forms["myForm"]["jobs"].value = jobs;
  document.forms["myForm"]["Research"].value = Research;
 document.forms["myForm"]["flexibility"].value = flexibility;
 document.forms["myForm"]["Course"].value = Course;
document.forms["myForm"]["Internships"].value = Internships;
document.forms["myForm"]["comments"].value = comments;

}
}
function myFunction1(val)
{

    var cname =  document.forms["myForm1"]["cname"].value;

 var x = getCookieValue(cname);
 var username = x.split(",")[0];
  var selectUni = x.split(",")[1];
    var fromDate = x.split(",")[2];
      var endDate = x.split(",")[3];
   var rating = x.split(",")[4];
    
   var aid = x.split(",")[5];
  var facility = x.split(",")[6];
  var oncampus = x.split(",")[7];
   var jobs = x.split(",")[8];
    var Research = x.split(",")[9];
   var flexibility = x.split(",")[10];
  var Course = x.split(",")[11];
  var Internships = x.split(",")[12];

  var comments = x.split(",")[13];



if(val == username){
document.getElementById("id3").innerHTML = "Welcome " + username + "! Your order preferences are set.You can change them below or Just click submit!";
 document.forms["myForm1"]["rating"].value = rating;
  document.forms["myForm1"]["tooltip-1"].value = selectUni;
    document.forms["myForm1"]["datepicker-10"].value = fromDate;
      document.forms["myForm1"]["datepicker-11"].value = endDate;
 document.forms["myForm1"]["aid"].value = aid;
 document.forms["myForm1"]["facility"].value = facility;
document.forms["myForm1"]["oncampus"].value = oncampus;
document.forms["myForm1"]["jobs"].value = jobs;
  document.forms["myForm1"]["Research"].value = Research;
 document.forms["myForm1"]["flexibility"].value = flexibility;
 document.forms["myForm1"]["Course"].value = Course;
document.forms["myForm1"]["Internships"].value = Internships;

document.forms["myForm1"]["comments"].value = comments;
}
}