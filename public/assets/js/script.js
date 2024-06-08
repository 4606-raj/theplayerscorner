var currentYear = new Date().getFullYear();
$(".currentYear").html(currentYear);

function showOtherTextarea(e) {
    var val = e.options[e.selectedIndex].value;
    if (val == "other") {
        $(".otherTextarea").show();
        // `${document.querySelector('.otherTextarea')}`
    } else {
        $(".otherTextarea").hide();
    }
    //     if (e == "other") {
    //         document.querySelector(".otherTextarea").classList.add("showOtherText");
    //     } else {
    //         document
    //             .querySelector(".otherTextarea")
    //             .classList.remove("showOtherText");
    //     }
}

$(document).ready(function () {
    $(".bi-caret-down-fill").click(function () {
        $(this).toggleClass("rotate-i");
        $($(this).siblings()[1]).toggleClass("show-hide-sub-menu");
    });
    // $(".datepicker").datepicker({
    //     changeMonth: true,
    //     changeYear: true,
    //     yearRange: "1950:2022",
    // });

    // Parents details box on Register page
    $("#agecheck").click(function () {
        $("#agecheck").is(":checked")
            ? $("#parent-details-bl").addClass("show-hide-pt-details")
            : $("#parent-details-bl").removeClass("show-hide-pt-details");
    });

    // Header scroll effect
    if (window.matchMedia("(max-width: 767.98px)").matches) {
        
        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $("header").addClass("fixed-hdr-small");
            } else {
                $("header").removeClass("fixed-hdr-small");
            }
        });
    } else {
        if (window.matchMedia("(min-width: 768px)").matches) {
            // Header Scroll
            $(window).on("scroll", function () {
                if ($(window).scrollTop()) {
                    $("header").addClass("fix-header-top");
                    $(".logo-1 img").attr("src","./assets/images/logo-img.png");
                    
                    // $(".uppr-row-con").fadeOut(0);
                } else {
                    // $(".uppr-row-con").fadeIn();
                    $("header").removeClass("fix-header-top");
                    $(".logo-1 img").attr("src","./assets/images/logo-1.png");
                }
            });
        }
    }

    // Seach bar dropdown
    $(".srch-i").on("click", function () {
        $(".search-box").toggleClass("show-hide-srch");
    });

    // Hamburger Menu
    $("#ham-button").on("click", function () {
        $("nav").toggleClass("show-hide-menu");
    });

    // $(document).click(function(event) {
    //     console.log($(event.target).is('.show-hide-menu'));
    //     if (!($(event.target).is('#ham-button')) && !($(event.target).is('.show-hide-menu'))) {
    //         $('.hamRotate').removeClass('active');
    //         $('nav').removeClass('show-hide-menu');
    //     }
    // });

    $(document).click(function (event) {
        if (
            !$(event.target).is(".srch-i") &&
            !$(event.target).is(".input-srch")
        ) {
            $(".search-box").removeClass("show-hide-srch");
        }
    });

    // Swiper slider on Community page for Team captains
    // var swiper = new Swiper(".team-captains", {
    //     // slideToClickedSlide: true,
    //     slidePerView: "auto",
    //     spaceBetween: 0,
    //     mousewheel: true,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     breakpoints: {
    //         640: {
    //             slidesPerView: "auto",
    //             // spaceBetween: 0,
    //         },
    //         768: {
    //             slidesPerView: "auto",
    //             // spaceBetween: 10,
    //         },
    //         1024: {
    //             slidesPerView: "auto",
    //             // spaceBetween: 0,
    //         },
    //     },
    // });

    // Slider for Manager Card
    // const swiper2 = new Swiper(".manager-row-swiper", {
    //     // Optional parameters
    //     // direction: "vertical",
    //     spaceBetween: 20,
    //     slidesPerView: 1,
    //     mousewheel: true,
    //     // slidePerView: "auto",
    //     loop: true,

    //     // If we need pagination
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },

    //     breakpoints: {
    //         640: {
    //             slidesPerView: 2,
    //             // spaceBetween: 0,
    //         },
    //         768: {
    //             slidesPerView: 2,
    //             // spaceBetween: 10,
    //         },
    //         1024: {
    //             slidesPerView: 2,
    //             // spaceBetween: 0,
    //         },
    //     },
    // });

    // let $lgSwiper = document.getElementById("lg-swipper");
    // const swiper = new swiper(".lightbox-swiper", {
    //     // other parameters
    //     centeredSlides: true,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },

    //     // Init lightGallery ince swiper is initilized
    //     on: {
    //         init: function () {
    //             const lg = lightGallery($lgSwiper);

    //             // Before closing lightGallery, make sure swiper slide
    //             // is aligned with the lightGallery active slide
    //             $lgSwiper.addEventListener("lgBeforeClose", () => {
    //                 swiper.slideTo(lg.index, 0);
    //             });
    //         },
    //     },
    // });

    // Profile pic on Testimonials
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imagePreview").css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this);
    });
});

$(function () {
    var btn = $(".feedback-sb-btn"),
        bg_1 = $(".bg-1"),
        bg_2 = $(".bg-2"),
        ang_a = $(".ang-a"),
        ang_b = $(".ang-b"),
        ang_c = $(".ang-c"),
        text = $(".text"),
        glow = $(".glow"),
        dots = $(".dots"),
        shine = $(".shine");
    var start = function () {
        ang_a
            .removeClass("d-none")
            .removeClass(ang_a.data("in"))
            .addClass(ang_a.data("in"));
        ang_b
            .removeClass("d-none")
            .removeClass(ang_b.data("in"))
            .addClass(ang_b.data("in"));
        ang_c
            .removeClass("d-none")
            .removeClass(ang_c.data("in"))
            .addClass(ang_c.data("in"));
        bg_2.removeClass("d-none")
            .removeClass(bg_2.data("out"))
            .addClass(bg_2.data("in"));
        setTimeout(function () {
            bg_1.removeClass("d-none")
                .removeClass(bg_1.data("out"))
                .addClass(bg_1.data("in"));
        }, 500);
        btn.fadeOut(200);
    };
    btn.on("click", start);
    bg_2.off().on(
        "animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd",
        function () {
            setTimeout(function () {
                bg_2.fadeOut("fast")
                    .addClass("d-none")
                    .removeClass(bg_2.data("in"));
                text.removeClass("d-none").addClass(text.data("in"));
            }, 600);
        }
    );
    text.off().on(
        "animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd",
        function () {
            setTimeout(function () {
                text.addClass("txt-ind");
                glow.removeClass("d-none").addClass(glow.data("in"));
                dots.removeClass("d-none");
                shine.removeClass("d-none").addClass(shine.data("in"));
            }, 50);
        }
    );
    glow.off().on(
        "animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd",
        function () {
            bg_2.removeAttr("style")
                .removeClass("d-none")
                .addClass(bg_2.data("out"));
        }
    );
    shine
        .off()
        .on(
            "animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd",
            function () {
                setTimeout(function () {
                    dots.fadeOut(300);
                    glow.fadeOut(500);
                }, 1000);
                setTimeout(function () {
                    shine.fadeOut(400);
                    bg_1.removeClass(bg_1.data("in")).addClass(
                        bg_1.data("out")
                    );
                }, 2000);
                setTimeout(function () {
                    text.removeClass(text.data("in")).addClass(
                        text.data("out")
                    );
                    setTimeout(function () {
                        $(document).trigger("animate:reset");
                    }, 500);
                }, 2500);
            }
        );

    $(document).on("animate:reset", function () {
        $(".el").each(function () {
            $(this)
                .addClass("d-none")
                .removeClass($(this).data("in"))
                .removeClass($(this).data("out"))
                .removeAttr("style");
        });
        text.removeClass("txt-ind");
        btn.fadeIn(200);
    });
});

const swiper = new Swiper("#gallery-swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    grabCursor: true,
    hashNavigation: true,
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});
