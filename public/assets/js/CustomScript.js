$(document).ready(function () {

    $("#hashtagteam").dblclick(function () {
        window.open("https://www.facebook.com/hashtag/teamdigicoders", "_blank");
    })

    $("#meetourteam").click(function () {
        window.location.href = "/Home/OurExperts";
    })

    // Topbar Contact & Location Swiper Continuous Smooth Slider
    var topbarSwiperInstance = null;
    function initTopbarSwiper() {
        if (topbarSwiperInstance) return;
        var container = document.querySelector(".topbar-swiper");
        if (container && typeof Swiper !== "undefined") {
            topbarSwiperInstance = new Swiper(".topbar-swiper", {
                slidesPerView: "auto",
                spaceBetween: 0,
                loop: true,
                loopAdditionalSlides: 6,
                speed: 8000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                allowTouchMove: true,
                observer: true,
                observeParents: true
            });
        }
    }

    initTopbarSwiper();
    $(window).on("load", function () {
        initTopbarSwiper();
    });

})