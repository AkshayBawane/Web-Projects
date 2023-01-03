/*--------------------------------------------------
# main.js file for Launchpad template.
# Author: Galacticlab
--------------------------------------------------*/

$(function($) {

    // centered-text
	"use strict";
	$(window).resize(adjustLayout);
        $(document).ready(function(){
        adjustLayout();
        })
        function adjustLayout(){
        $('.centered-text').css({
            position:'absolute',
            left: ($(window).width() - $('.centered-text').outerWidth())/2,
            top: ($(window).height() - $('.centered-text').outerHeight())/4
        });
    }
    // END centered-text-js

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

});
