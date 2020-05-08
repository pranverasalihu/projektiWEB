(function($, window, document) {
    "use strict";
    $(function() {
        //##Variables
        var $body = $('body'),
        	$header = $('.main_header'),
            $window = $(window),
            $doc = $(document),
            defaultEasing = [0.4, 0.0, 0.2, 1];
        //End Variables

        //Header scroll animation
        $doc.scroll(function() {
            if ($doc.scrollTop() >= $header.outerHeight()) {
                $header.addClass('is--fixed');
            } else {
                $header.removeClass('is--fixed');
            }
        });

    });
}(window.jQuery, window, document));