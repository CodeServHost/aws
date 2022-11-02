// Instantiate the Bootstrap carousel
$(".multi-item-carousel").carousel({
    interval: 5000,
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$(".multi-item-carousel .item").each(function() {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(":first");
    }
    next.children(":first-child").clone().appendTo($(this));

    if (next.next().length > 0) {
        next.next().children(":first-child").clone().appendTo($(this));
    } else {
        $(this)
            .siblings(":first")
            .children(":first-child")
            .clone()
            .appendTo($(this));
    }
});

$(".slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    pauseOnHover: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 750,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 476,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
});

var typed = new Typed(".type", {
    strings: [
        "Digital Marketing",
        "Graphic Design",
        "Website Design",
        "Video Editing",
    ],
    typespeed: 40,
    backSpeed: 30,
    backDelay: 2000,
    smartBackspace: true,
    loop: true,
});