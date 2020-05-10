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
            console.log($header.outerHeight(), $doc.scrollTop());

            if ($doc.scrollTop() >= $headerContent.outerHeight() - $header.outerHeight()) {
                $header.addClass('is--fixed');
            } else {
                $header.removeClass('is--fixed');
            }
        });

    });
}(window.jQuery, window, document));