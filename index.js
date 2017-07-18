function validateForm()
{

var emailPattern = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
var stringPattern = /^[a-zA-Z]*$/;
var passwordPattern = /^[a-zA-Z]\w{3,14}$/;

var firstname = document.signup.firstname.value;
var lastname = document.signup.lastname.value;
var email = document.signup.email.value;
var password = document.signup.password.value;

if(!stringPattern.test(firstname)){
  document.signup.firstname.focus();
  document.getElementById("errorBox").innerHTML = "Firstname should contain only characters";
  return false;
  }
  
  if(!stringPattern.test(lastname)){
  document.signup.lastname.focus();
  document.getElementById("errorBox").innerHTML = "Lastname should contain only characters";
  return false;
  }
  
  if(!emailPattern.test(email)){
  document.signup.email.focus();
  document.getElementById("errorBox").innerHTML = "Enter a valid email";
  return false;
  }
  
  if(!passwordPattern.test(password)){
  document.signup.password.focus();
  document.getElementById("errorBox").innerHTML = "Password must be 4-15 char,start with letter,and contain letters,nubers and underscore";
  return false;
  }

  if(firstname != '' && lastname != '' && email != '' && password != '')
  {
	 // document.signup.reset();
	 var success = document.getElementById("errorBox");
	 success.style.color="green";
  success.innerHTML = "Processing.....!";
  alert("Your Details are being processed! If successfull you will be redirected to the Home Page!");
  return true;
  }
}

$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});