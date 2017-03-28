$(document).ready(function () {
	
	$(".menuBurger").click(function () {
		$("header nav > ul.flex-container").slideToggle();
	});
	
	$("a.parent").click(function (e) {
		e.preventDefault();
		$(this).next("ul").slideToggle();
	});
	  
});