$(document).ready(function () {
	$(".toggle-btn").click(function () {
		$("body").toggleClass("toggle-btn-body");
		$(".page-navigation").toggleClass("animate-nav");
	});
});