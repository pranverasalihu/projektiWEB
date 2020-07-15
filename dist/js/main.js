(function($, window, document) {
    "use strict";
    $(function() {
        //##Variables
        var $body = $('body'),
        	$header = $('.main_header'),
        	$headerContent = $('.banner_content').length > 0 ? $('.banner_content').outerHeight() : $('.mainWrap section:first').outerHeight() , 
            $window = $(window),
            $doc = $(document),
            defaultEasing = [0.4, 0.0, 0.2, 1];

       
        //End Variables
        //Header scroll animation
        $doc.scroll(function() {
            if ($doc.scrollTop() >= $headerContent - $header.outerHeight()) {
                $header.addClass('is--fixed');
            } else {
                $header.removeClass('is--fixed');
            }
        });
        
        $('.hamburger').on('click',function(e){
            $('.nav_wrapper').toggleClass('is--toggled')
        })

        $('.contact_button').on('click', function(e){
            e.preventDefault();
            if(!validateFields()){
                return;
            }
            $('#contact_form').submit();
        });

        function validateFields() {
            var nameContainer = $('.nameContainer'),
                emailContainer = $('.emailContainer'),
                subjectContainer = $('.subjectContainer'),
                messageContainer = $('.messageContainer'),
                passwordContainer = $('.passwordContainer'),
                usernameContainer = $('.usernameContainer'),
                isValid = true,
                textPattern = /^[a-zA-Z\s]*$/,
                emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            nameContainer.find('p').remove();
            emailContainer.find('p').remove();
            subjectContainer.find('p').remove();
            messageContainer.find('p').remove();
            passwordContainer.find('p').remove();
            usernameContainer.find('p').remove();

            if($('#name').val() === '' || !textPattern.test($('#name').val())){
                nameContainer.append('<p class="input_error">Name is required</p>');
                isValid = false;
            }
            if($('#email').val() === '' || !emailPattern.test($('#email').val())){
                emailContainer.append('<p class="input_error">Email is required</p>')
                isValid = false;
            }
            if($('#subject').val() === '' || !textPattern.test($('#subject').val())){
                subjectContainer.append('<p class="input_error">Subject is required</p>')
                isValid = false;
            }
            if($('#message').val() === ''){
                messageContainer.append('<p class="input_error">Message is required</p>')
                isValid = false;
            }
            return isValid;
        }
    });
    $('.register_button').on('click', function(e){
        if(!validateRegister()){
            e.preventDefault();
            return;
        }
    });
    function validateRegister() {
        var emailContainer = $('.emailContainer'),
            passwordContainer = $('.passwordContainer'),
            confirmPasswordContainer = $('.confirmPasswordContainer'),
            usernameContainer = $('.usernameContainer'),
            validRegister = true,
            textPattern = /^[a-zA-Z\s]*$/,
            emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        emailContainer.find('p').remove();
        passwordContainer.find('p').remove();
        usernameContainer.find('p').remove();
      confirmPasswordContainer.find('p').remove();

        if($('#email').val() === '' || !emailPattern.test($('#email').val())){
            emailContainer.append('<p class="input_error">Email is required</p>')
            validRegister = false;
        }
        if($('#username').val().length < 4){
            usernameContainer.append('<p class="input_error">Username is required</p>')
            validRegister = false;
        }
        if($('#password').val().length < 6){
            passwordContainer.append('<p class="input_error">Password is required</p>')
            validRegister = false;
        }
        if($('#confirmPassword').val().length < 6 || $('#confirmPassword').val() !== $('#password').val()){
            confirmPasswordContainer.append('<p class="input_error">Password is required</p>')
            validRegister = false;
        }
        return validRegister;
    }
    $('.login_button').on('click', function(e){
        if(!validateLogin()){
            e.preventDefault();
            return;
        }
    });
    function validateLogin() {
        var usernameContainer = $('.usernameContainer'),
            passwordContainer = $('.passwordContainer'),
            validLogin = true,
            textPattern = /^[a-zA-Z\s]*$/;
        
        usernameContainer.find('p').remove();
        passwordContainer.find('p').remove();

        if($('#username').val().length < 4){
            usernameContainer.append('<p class="input_error">Username is required</p>')
            validLogin = false;
        }
        if($('#password').val().length < 6){
            passwordContainer.append('<p class="input_error">Password is required</p>')
            validLogin = false;
        }
        return validLogin;
    }

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 

  //slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

}(window.jQuery, window, document));


