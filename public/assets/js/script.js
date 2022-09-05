$('.bi-caret-down-fill').click(function (){
    $(this).toggleClass('rotate-i');
    $($(this).siblings()[1]).toggleClass('show-hide-sub-menu')
});

var currentYear = new Date().getFullYear();
$('.currentYear').html(currentYear);


$( document ).ready(function() {
    
	$( "#datepicker1").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1950:2022"
    });
    
    // Parents details box on Register page
    $( "#agecheck" ).click(function() {

        $( "#agecheck" ).is( ":checked")? $('#parent-details-bl').addClass('show-hide-pt-details'): $('#parent-details-bl').removeClass('show-hide-pt-details');

    })
    

    // Header scroll effect
    if (window.matchMedia('(max-width: 767.98px)').matches) {
        $(window).on('scroll', function(){
            if($(window).scrollTop()) {
                $('header').addClass('fixed-hdr-small');
            }
            else{
                $('header').removeClass('fixed-hdr-small');
            }
        })
    } 
    else {
        if (window.matchMedia('(min-width: 768px)').matches) {
            // Header Scroll
            $(window).on('scroll', function(){
            
            if($(window).scrollTop()) {
                $('header').addClass('hide-top-row');
                $('.uppr-row-con').fadeOut(0);
            }
            else{
                $('.uppr-row-con').fadeIn();
                $('header').removeClass('hide-top-row');
            }
        })
    } 
    }
  
    // Seach bar dropdown
    $('.srch-i').on('click', function(){
        $('.search-box').toggleClass('show-hide-srch');
    });
    
    // Hamburger Menu
    $('#ham-button').on('click', function(){
        $('nav').toggleClass('show-hide-menu');
    });

    // $(document).click(function(event) {
    //     console.log($(event.target).is('.show-hide-menu'));
    //     if (!($(event.target).is('#ham-button')) && !($(event.target).is('.show-hide-menu'))) {
    //         $('.hamRotate').removeClass('active');
    //         $('nav').removeClass('show-hide-menu');
    //     }
    // });

    $(document).click(function(event) {
        if (!($(event.target).is('.srch-i')) && !($(event.target).is('.input-srch'))) {
            $('.search-box').removeClass('show-hide-srch');
        }
        
    });

    // Swiper slider on Community page for Team captains
    var swiper = new Swiper(".team-captains", {
        // slideToClickedSlide: true,
        slidePerView: "auto",
        spaceBetween: 0,
        mousewheel: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: "auto",
            // spaceBetween: 0,
          },
          768: {
            slidesPerView: "auto",
            // spaceBetween: 10,
          },
          1024: {
            slidesPerView: "auto",
            // spaceBetween: 0,
          },
        },
      });

});