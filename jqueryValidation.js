         $(function() {
            $( "#datepicker-10" ).datepicker({
               changeMonth:true,
               changeYear:true,
               yearRange: "-100:+0"
            });
         });
          $(function() {
            $( "#datepicker-11" ).datepicker({
               changeMonth:true,
               changeYear:true,
               yearRange: "-100:+0"
            });
         });


            $(function() {
            $( "#accordion-1" ).accordion();
         });


 $(function() {
            $( ".button-1").button();});



                  $(function() {
            $("#tooltip-1").tooltip();
            $("#tooltip-2").tooltip();
            $("#tooltip-3").tooltip();
         });



$(document).ready(function(){
       $("#id3").hide();
      $("#id13").hide();
          $("#id5").hide();
    
            
$("#tooltip-3").click(function() {
    var fname = $("#user").val();
      
      var date = $("#datepicker-11").val();
    var date = $("#datepicker-10").val();

function changeBorderColor(id)
{
 document.getElementById(id).style.border = "3px solid #ff0000";
  }

//Validation for first name
if(fname == "")
{

     $("#id3").show();
   changeBorderColor("user");
	  return false;
}
 else  if (!/^[a-zA-Z\s]*$/g.test(fname)) {
    $("#id13").show();
      changeBorderColor("user");
	  return false;
}
  else{
     $("#id3").hide();

    }





//Validation for date

if(date == "")
{

	   $("#id5").show();
         changeBorderColor("datepicker-10");
    return false;
}
if(date1 == "")
{

     $("#id5").show();
         changeBorderColor("datepicker-10");
    return false;
}






    });
    });

    
 
