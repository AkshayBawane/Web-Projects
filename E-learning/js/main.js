/*--------------------------------------------------
# main.js file for Launcher template.
# Author: Galacticlab
--------------------------------------------------*/

$(function($) {

    // For Scroll to top
    $(window).on("scroll resize", function() {
        if ($(window).scrollTop() >= 400) {
            $(".scroll-top").css("bottom", "15px");
        }
        if ($(window).scrollTop() < 400) {
            $(".scroll-top").css("bottom", "-52px");
        }
    });
    $(".scroll-top").on("click", function() {
        return $("html, body").animate({
            scrollTop: 0
        });
    });
    // END For Scroll to top

    // Disable Mouse Scroll Wheel Zoom
    $(document).keydown(function(event) {
	if (event.ctrlKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
	        event.preventDefault();
	     }
	});

	$(window).bind('mousewheel DOMMouseScroll', function (event) {
	       if (event.ctrlKey == true) {
	       event.preventDefault();
	       }
	});
    // END Disable Mouse Scroll Wheel Zoom

});
