$(document).ready(function () {
	$(".toggle-btn").click(function () {
		$("body").toggleClass("toggle-btn-body");
		$(".banner-wrapper").toggleClass("animate-nav");
	});
});