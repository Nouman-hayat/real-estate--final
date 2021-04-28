<!-- footer -->
<footer class="footer sect-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="company-wrapper">
                    <h5>
                        COMPANY
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At laboriosam ea sapiente provident
                        tenetur
                        animi?
                    </p>
                    <ul>
                        <li><a href=""><span class="icon-placeholder"></span>420 Love Street
                                133/2 Mirpure City, Dhaka</a></li>
                        <li><a href=""><span class="icon-phone-call"></span> +9(066) 19 5017
                                628</a></li>
                        <li><a href=""><span class="icon-mail"></span> info.contact@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-feed-wrapper">
                    <h5>
                        NEWS FEEDS
                    </h5>
                    <ul>
                        <li><a href=""><span class="icon-user"></span> By Admin</a>
                            <a href=""><span class="icon-calendar"></span> March 9,2020</a>
                        </li>
                        <li><a href=""><span class="icon-user"></span> By Admin</a>
                            <a href=""><span class="icon-calendar"></span> March 9,2020</a>
                        </li>
                        <li><a href=""><span class="icon-user"></span> By Admin</a>
                            <a href=""><span class="icon-calendar"></span> March 9,2020</a>
                        </li>
                        <li><a href=""><span class="icon-user"></span> By Admin</a>
                            <a href=""><span class="icon-calendar"></span> March 9,2020</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-later">
                    <h5>
                        NEWSLATER
                    </h5>
                    <p>Lorem ipsum dolor sit.</p>
                    <form action="" class="form-inline">
                        <input type="email" placeholder="Your mail" class="form-control ">
                        <button class="btn  ">Subscribe</button>
                    </form>
                    <h5>
                        HOUSE TAGS
                    </h5>
                    <div class="row">
                        <div class="col-4">

                            CREATIVE

                        </div>
                        <div class="col-4">

                            DEVELOPMENT

                        </div>
                        <div class="col-4">

                            BEACH

                        </div>
                        <div class="col-2">

                            VILLA

                        </div>
                        <div class="col-4">

                            CLEAN

                        </div>
                        <div class="col-2">

                            SEO

                        </div>
                        <div class="col-4">

                            APARTMENT

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="scroll-wrapper">
    <span class="icon-arrow-up"></span>
</div>
<!-- footer -->
<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bundle.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/real11.js">

</script>
<script>
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

const scroll = document.getElementById("scroll-wrapper")
window.addEventListener("scroll", function() {


    if (window.pageYOffset >= 100) {
        scroll.classList.add("active")
        scroll.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        })
    }
    if (window.pageYOffset == 0) {
        scroll.classList.remove("active")
    }

});
document.getElementsByClassName("navbar-toggler-icon")[0].addEventListener("click", function() {
    console.log("he")
    document.getElementById("hidemenu").classList.toggle("hide");


})




var database = [];

function validate() {
    var fname = document.querySelector('#fname');

    var no = document.querySelector('#no');
    var sub = document.querySelector('#sub');
    var msg = document.querySelector('#msg');
    var flag = true;
    if (fname.value == "") {
        fname.style.border = "2px solid #f00"
        flag = false;
    }

    if (no.value == "") {
        no.style.border = "2px solid #f00"
        flag = false;
    }
    if (sub.value == "") {
        sub.style.border = "2px solid #f00"
        flag = false;
    }
    if (msg.value == "") {
        msg.style.border = "2px solid #f00"
        flag = false;
    }


    if (flag == true) {
        var user = {
            "fname": fname.value,
            "no": no.value,
            "sub": sub.value,
            "msg": msg.value,

        }
        user = JSON.stringify(user)
        database.push(user)
        console.log(database)

        localStorage.setItem('data', database)

        fname.value = ""

        no.value = ""
        sub.value = ""
        msg.value = ""
        fname.focus()
    }



}

function removeErr(element) {
    if (element.value != "") {
        element.style.border = "2px solid grey"
    }
}
</script>
</body>

</html>