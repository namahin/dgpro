// section active class when window scrool js
$(document).ready(function () {
    $(document).on("scroll", onScroll);
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menu-center a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

// owl carousel hero slider js
$('.hero-slider').owlCarousel({
    loop: true,
    margin: false,
    nav: false,
    dots: false,
    items: 1,
    autoplay: true,
    animateIn: 'animate__fadeIn',
    animateOut: 'animate__fadeOut',
    mouseDrag: false,
    autoplayHoverPause: false
})

// owl carousel testimonial slider js
$('.testimonial-slider').owlCarousel({
    loop: true,
    margin: false,
    nav: true,
    items: 1,
    autoplay: true,
    dots: false,
    mouseDrag: false,
    navContainer: ".testimonial-content",
    navText: [
        '<i class="fal fa-angle-left"></i>',
        '<i class="fal fa-angle-right"></i>',
    ],
    animateIn: 'animate__fadeIn',
    animateOut: 'animate__fadeOut'
})


// owl carousel client slider js
$('.clients-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    responsive: {
        0: {
            items: 2
        },
        767: {
            items: 4
        },
        1000: {
            items: 6
        }
    },
    autoplay: true,
    dots: false
})