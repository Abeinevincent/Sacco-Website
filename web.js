// Sroll to top button
// First, display the button when the window is scrolled to more than 200px from the top
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop() - 200 > 0){
			$('#to-top').stop().slideDown('fast'); //Show the button
		}
		else{
			$('#to-top').stop().slideUp('fast'); //Hide the button otherwise
		}
	});

});

// Activate the scroll to top functionality
$(document).ready(function(){
	$('#to-top').on('click', function(){
		$('html, body').animate({scrollTop: 0}, 200);
	});
});

// Show hidden div on the about us section by clicking the readmore button
$(document).ready(function(){
  $('.aboutus-section #show-div').on('click', function(){
    $('.aboutus-section #hide-div').show()
  });
});

$('#show-search').on('click', function(){
  $('#show_signin').fadeIn('slow').removeClass('d-none')
  // $('#show_signin').fadeIn('slow').addClass('d-none')
})
























// Signup form validation
//Problem: Hints are shown even when form is valid
//Solution: Hide and show them at appropriate times
// var $password = $("#password");
// var $confirmPassword = $("#confirm_password");

// //Hide hints
// $("form span").hide();

// // function isPasswordValid() {
// //   return $password.val().length > 8;
// // }

// function arePasswordsMatching() {
//   return $password.val() === $confirmPassword.val();
// }

// // function canSubmit() {
// //   return isPasswordValid() && arePasswordsMatching();
// // }

// function passwordEvent(){
//     //Find out if password is valid  
//     if(isPasswordValid()) {
//       //Hide hint if valid
//       $password.next().hide();
//     } else {
//       //else show hint
//       $password.next().show();
//     }
// }

// function confirmPasswordEvent() {
//   //Find out if password and confirmation match
//   if(arePasswordsMatching()) {
//     //Hide hint if match
//     $confirmPassword.next().hide();
//   } else {
//     //else show hint 
//     $confirmPassword.next().show();
//   }
// }

// function enableSubmitEvent() {
//   $("#submit").prop("disabled", !canSubmit());
// }

//When event happens on password input
// $password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

// //When event happens on confirmation input
// $confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

// enableSubmitEvent();