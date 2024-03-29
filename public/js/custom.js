$(function() {
    'use strict'; // Start of use strict

    /*------------------------------------------------------------------
    Navigation Hover effect
    ------------------------------------------------------------------*/
    $(".dropdown").hover(function() {
        $(this).addClass('open');
    }, function() {
        $(this).removeClass('open');
    });
    /*--------------------------
    Search
    ---------------------------- */
    var openSearch = $('.open-search'),
        SearchForm = $('.full-search'),
        closeSearch = $('.close-search');
    openSearch.on('click', function(event) {
        event.preventDefault();
        if (!SearchForm.hasClass('active')) {
            SearchForm.fadeIn(300, function() {
                SearchForm.addClass('active');
            });
        }
    });
    closeSearch.on('click', function(event) {
        event.preventDefault();
        SearchForm.fadeOut(300, function() {
            SearchForm.removeClass('active');
            $(this).find('input').val('');
        });
    });

    /*--------------------------
    scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
	/*------------------------------------------------------------------
        Year
    ------------------------------------------------------------------*/
	$(function(){
    var theYear = new Date().getFullYear();
    $('#year').html(theYear);
	});
	
	 /*------------------------------------------------------------------
        Coming Soon Cout Down
    ------------------------------------------------------------------*/
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cntdown"><span class="days"><strong>%-D</strong><p>Days</p></span></div><div class="cntdown"><span class="hour"><strong> %-H</strong><p>Hours</p></span></div> <div class="cntdown"><span class="minutes"><strong>%M</strong> <p>MINUTES</p></span></div><div class="cntdown"><span class="second"><strong> %S</strong><p>SECONDS</p></span></div>'
            ));
        });
    });
    /*------------------------------------------------------------------
    Owl Carousel for Testimonials
	------------------------------------------------------------------*/
    var owl = $("#testimonials");
    owl.owlCarousel({
        nav: true,
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            600: {
                items: 2
            },
            700: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            }
        }
    });
    /*------------------------------------------------------------------
    FAQ
    ------------------------------------------------------------------*/
    $('.panel-heading a').on('click', function() {
        $('.panel-heading').removeClass('active');
        $(this).parents('.panel-heading').addClass('active');
    });
    /*------------------------------------------------------------------
    Owl Carousel for Testimonials
	------------------------------------------------------------------*/
    var owl = $("#home-staff");
    owl.owlCarousel({
        nav: true,
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            600: {
                items: 2
            },
            700: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            },
            1400: {
                items: 4
            },
            1600: {
                items: 5
            }
        }
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    /*------------------------------------------------------------------
    Owl Carousel for images
	------------------------------------------------------------------*/
    var owl = $("#home-gallery");
    owl.owlCarousel({
        nav: true,
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 1
            },
            600: {
                items: 2
            },
            700: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            },
            1400: {
                items: 4
            },
            1600: {
                items: 5
            }
        }
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    /*------------------------------------------------------------------
    FAQ
    ------------------------------------------------------------------*/
    if ($('.fp-accordion').length) {

        $('.fp-accordion').on('click', 'h2, .icons', function() {
            var $faq = $(this).closest('.fp-accordion');

            $faq.find('.toggle-content').slideToggle(500, function() {
                $faq.toggleClass('active');
            });
        });
    }
    /*---------------------------------------------------------------------
    		Magnific Popup 
        ------------------------------------------------------------------------*/
    if ($('.front-gallery, .gallery-section').length) {

        $('.front-gallery, .gallery-section').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by sbtechnosoft</small>';
                }
            }
        });
    }
    if ($('.image-popup-no-margins').length) {

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    }
    /*---------------------------------------------------------------------
    Gallery Post Hove Effect for Caption Script
    ------------------------------------------------------------------------*/
    function gallery_hover() {

        if ($(".gallery-caption img").length) {
            $(".gallery-caption img").on('mouseover', function() {
                var img_width = $(".gallery-caption img").width();
                var img_height = $(".gallery-caption img").height();
                $(".gallery-caption .blur").css({
                    "height": img_height,
                    "width": img_width
                });
            });
        }
    }
    gallery_hover();
    /*---------------------------------------------------------------------
    Image Filter Script 
    ------------------------------------------------------------------------*/
    var $container = $('.portfolioContainer');

    if ($('.portfolioFilter').length) {
        $('.portfolioFilter a').on('click', function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }
    $('.wpb-mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"></i>',
        openedSymbol: '<i class="fa fa-angle-down"></i>',
    });
});

/*------------------------------------------------------------------
WOW
------------------------------------------------------------------*/
wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();
/*------------------------------------------------------------------
 Loader 
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function() {
    'use strict'; // Start of use strict
    // Loader 
    $("#dvLoading").fadeOut("fast");
    // map zooming 	 
    $('.google-map').on('click', function() {
        $('.google-map').find('iframe').css("pointer-events", "auto");
    });

    //Animation Numbers	 
    jQuery('.animateNumber').each(function() {
        var num = jQuery(this).attr('data-num');
        var top = jQuery(document).scrollTop() + (jQuery(window).height());
        var pos_top = jQuery(this).offset().top;
        if (top > pos_top && !jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active').animateNumber({
                number: num
            }, 2000);
        }
    });
});
/* parallax Active*/
$.stellar({
    horizontalScrolling: false
});
/*----------------------------------
    COUNTUP JS ACTIVE 
    ------------------------------------*/
$('.counter').counterUp({
    delay: 10,
    time: 1500
});
