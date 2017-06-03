$(document).ready(function() {

	$("body, .left_side").niceScroll({
		horizrailenabled : false
	});
	$(".btn_mnu").click(function() {
		$(this).toggleClass("active");
		$(".left_side").toggleClass("active");
	});



// LAZYLOAD

$(".gallery img").lazyload({
	effect : "fadeIn",
	threshold : 1500
}).hover(function() {
	$(this).css("filter","blur(5px)");
	$(this).css("opacity", "0.5");
}, function() {
	$(this).css("filter","blur(0px)");
	$(".gallery img").css("opacity", "1");
});

// FREEWALL
var wall = new freewall(".gallery");
wall.reset({
	selector: "a",
	animate: true,
	cellW: 150,
	cellH: "auto",
	gutterX : 5,
	gutterY : 5,
	onResize: function() {
		wall.fitWidth();
	}
});

var images = wall.container.find("a");
images.find("img").load(function() {
	wall.fitWidth();
});

$(".filter_label").click(function() {
	$(".filter_label").removeClass("active");
	var filter = $(this).addClass("active").data("filter");
	wall.filter(filter);
	setTimeout(function() {
		$(window).resize();
		wall.fitWidth();
	}, 400);
});


	//Цели для Яндекс.Метрики и Google Analytics
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/


	
});
$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});


