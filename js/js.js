$(document).ready(function () {
	
	$(".menuBurger").click(function () {
		$("a.parent + ul").hide();
		$("header nav > ul.flex-container").slideToggle();
	});
	
	if ($("header nav a").siblings("ul").length > 0) {
		$(this).addClass("parent");
	}
	
	var vw = verge.viewportW();
	$(window).resize(function () {
		vw = verge.viewportW();
		if (vw >= 768){
			$("header nav > ul.flex-container").css("display", "flex");
		}
		else{
			$("header nav > ul.flex-container").hide();
			$("a.parent + ul").show();
		}
	});

	$("a.parent").click(function (e) {
		if (vw <= 768) {
			e.preventDefault();
			$(this).next("ul").slideToggle();
		}
	});
});