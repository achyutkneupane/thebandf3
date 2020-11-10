$(".navbar-toggler").on("click", function() {
    if (!$("#mainNav").is(".navbar-reduce.navbar-trans")) {
        $("#mainNav").removeClass("navbar-trans");
    }
    if (!$("#mainNav").hasClass("navbar-non-coll")) {
        $("#mainNav").addClass("navbar-non-coll");
        $("#mainNav").removeClass("navbar-trans");
    } else {
        $("#mainNav").removeClass("navbar-non-coll");
        $("#mainNav").addClass("navbar-trans");
    }
});
$(window).trigger("scroll");
$(window).on("scroll", function() {
    var pixels = 375;
    var top = 1200;
    if ($(window).scrollTop() > pixels) {
        if (!$("#mainNav").hasClass("navbar-non-coll")) {
            $(".navbar-expand-md").addClass("navbar-reduce");
            $(".navbar-expand-md").removeClass("navbar-trans");
        }
    } else {
        if (!$("#mainNav").hasClass("navbar-non-coll")) {
            $(".navbar-expand-md").addClass("navbar-trans");
            $(".navbar-expand-md").removeClass("navbar-reduce");
        }
    }
    if ($(window).scrollTop() > top) {
        $(".scrolltop-mf").fadeIn(1000, "easeInOutExpo");
    } else {
        $(".scrolltop-mf").fadeOut(1000, "easeInOutExpo");
    }
});
$(document).ready(function() {
    $("a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                1000,
                function() {
                    window.location.hash = hash;
                }
            );
        }
    });
});
