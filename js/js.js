$(document).ready(function () {
	
	$(".menuBurger").click(function () {
		$("li.parent ul").hide();
		$("header nav > ul.flex-container").slideToggle();
	});
	
	$("li").has("ul").addClass("parent");
	
	var vw = verge.viewportW();
	$(window).resize(function () {
		vw = verge.viewportW();
		if (vw >= 769){
			$("header nav > ul.flex-container").css("display", "flex");
		}
		else{
			$("header nav > ul.flex-container").hide();
			$("li.parent ul").show();
		}
	});

	$("li.parent > a").click(function (e) {
		if (vw <= 769) {
			e.preventDefault();
			$(this).next("ul").slideToggle();
		}
	});
});