document.getElementById("video-inner").addEventListener("click", video);


function close() {
    var iframe = document.getElementsByTagName("iframe")[0];
    var url = iframe.getAttribute("src");
    iframe.setAttribute("src", "");
    iframe.setAttribute("src", url);
    this.children[1].style.display = "none";

}

function video() {
    this.children[1].style.display = "block";
    document.getElementById("scroll-wrapper").style.zIndex = "-1"
    document.getElementById("video-inner").addEventListener("click", close);

}

$(".carousel-1").owlCarousel({
    loop: true,
    margin: 10,

    autoplay: true,
    dots: false,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,

    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

var owl = $(".owl-carousel");
owl.owlCarousel();
// Go to the next item
$(".next-btn").click(function() {
    owl.trigger("next.owl.carousel");
});
// Go to the previous item
$(".prev-btn").click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger("prev.owl.carousel", [300]);
});
$(".team").owlCarousel({
    loop: true,
    margin: 10,

    autoplay: true,
    dots: false,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
var owl = $(".owl-carousel");
owl.owlCarousel();
// Go to the next item
$(".team-prev").click(function() {
    owl.trigger("next.owl.carousel");
});
// Go to the previous item
$(".team-next").click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger("prev.owl.carousel", [300]);
});