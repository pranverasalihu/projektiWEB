(function($, window, document) {
    "use strict";
    $(function() {
        //##Variables
        var $body = $('body'),
        	$header = $('.main_header'),
        	$headerContent = $('.banner_content'), 
            $window = $(window),
            $doc = $(document),
            defaultEasing = [0.4, 0.0, 0.2, 1];
        //End Variables
        $header.addClass('loaded');
        //Header scroll animation
        $doc.scroll(function() {
            if ($doc.scrollTop() >= $headerContent.outerHeight() - $header.outerHeight()) {
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
                isValid = true,
                textPattern = /^[a-zA-Z\s]*$/,
                emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            nameContainer.find('p').remove();
            emailContainer.find('p').remove();
            subjectContainer.find('p').remove();
            messageContainer.find('p').remove();

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
}(window.jQuery, window, document));
