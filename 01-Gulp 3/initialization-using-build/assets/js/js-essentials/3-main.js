/*--------------------------------------------------
# main.js file.
# Author: Akshay Bawane
--------------------------------------------------*/

$(function($) {

	// For Scroll to top
	$(window).on("scroll resize", function() {
		if ($(window).scrollTop() >= 200) {
			$(".scroll-top").css("bottom", "15px");
		}
		if ($(window).scrollTop() < 200) {
			$(".scroll-top").css("bottom", "-52px");
		}
	});
	$(".scroll-top").on("click", function() {
		return $("html, body").animate({
			scrollTop: 0
		});
	});
	// END For Scroll to top

	$(".left-panel-toggle").click(function () {
		$("body").toggleClass("toggle-body-bb-left-panel");
		$(".bb-left-panel").toggleClass("show-left-panel");
	});

	$(".right-panel-toggle").click(function () {
		$("body").toggleClass("toggle-body-bb-right-panel");
		$(".bb-right-panel").toggleClass("show");
	});

	// Add Unique class to li
	// https://stackoverflow.com/questions/7151110/is-it-possible-to-append-a-unique-css-class-to-multiple-li-elements-or-re-sor
	$('.list-inline-unique li').each(function(i,j) {
		$(this).addClass('list-uc'+(i+1));
		var cls=$(this).children("a").text().toLowerCase().replace(' ','-');
		$(this).addClass(cls);
	});
});
