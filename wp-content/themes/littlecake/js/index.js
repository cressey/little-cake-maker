(function($) {

	// Image slideshow functions
	function makeSlideshow($img, images, i) {
		return function loopThis() {
			$img.fadeOut("slow", function() {
				if (++i >= images.length)
					i = 0;
				$img.attr("src", images[i]);
				$img.fadeIn("slow");
			});
			setTimeout(function() { loopThis() }, 6000);
		}
	}

	function load_banner() {
		if (!$.browser.msie) {
			
			$("#nonJsBanner").hide();
			$(".pix_diapo").show();
			var $img = $("#imgChanger"),
			images = ["images/fudge.jpg", "images/strawberry.jpg", "images/happyBirthday.jpg", "images/sprinkles.jpg"],
			i = 0;
			
			slideshow = makeSlideshow($img, images, i);
			slideshow();
		}
	}

	$(document).ready(function () {
		if (screen.width>854) {
			//load_banner();
		}	
	});	
	
})(jQuery);
