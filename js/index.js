
// Image slideshow functions

function makeSlideshow($img, images, i) {
	return function loopThis() {
		$img.fadeOut("slow", function() {
			$img.attr("src", images[++i % images.length]);
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
