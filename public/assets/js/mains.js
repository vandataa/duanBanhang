

(function ($) {

    "use strict";

    /*
    |--------------------------------------------------------------------------
    | Template Name: Abid
    | Author: Themewatch
    | Version: 1.0.0
    |--------------------------------------------------------------------------
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS:
    |--------------------------------------------------------------------------
    |
    | 1. Scripts initialization
    | 2. Preloader
    | 3. Star Rating
    | 4. Dynamic Background
    | 5. Main Menu
    | 6. Sticky Header
    | 7. One Page Navigation
    | 8. Isotop Initialize
    | 9. Footer Sticky
    | 10. Slick Slider
    | 11. Progress Bar
    | 12. Modal Video
    | 13. Light Gallery
    | 14. Tamjid Counter
    | 15. Hobble Effect
    | 16. Countdown Timer
    | 17. Scroll To Top
    | 18. Accordion
    | 19. Tabs
    | 20. Range Slider
    | 21. Product View
    | 22. Selevt2
    |
    |--------------------------------------------------------------------------
    */

    /*--------------------------------------------------------------
      1. Scripts initialization
      --------------------------------------------------------------*/

    $.exists = function (selector) {
        return $(selector).length > 0;
    };

    $(window).on("load", function () {
        $(window).trigger("scroll");
        $(window).trigger("resize");
        preloaderSetup();
        isotopInit();
    });

    $(document).on("ready", function () {
        $(window).trigger("resize");
        dynamicBackground();
        isotopInit();
        stickyFooter();
        slickInit();
        progressBarInit();
        stickyHeader();
        onePageNavigation();
        mainMenu();
        modalVideo();
        lightGallery();
        counterInit();
        hobbleEffect();
        countdownTimer();
        scrollToTop();
        accordion();
        star();
        tabs();
        rangeSlider();
        productView();
        select2Setup();
        parallaxEffect();
        new WOW().init();
    });

    $(window).on("resize", function () {
        isotopInit();
        stickyFooter();
    });

    $(window).on("scroll", function () {
        stickyHeader();
        parallaxEffect();
    });

    /*--------------------------------------------------------------
      2. Preloader
    --------------------------------------------------------------*/
    function preloaderSetup() {
        $(".st-perloader").fadeOut();
        $("st-perloader-in").delay(150).fadeOut("slow");
    }

    /*--------------------------------------------------------------
      3. Star Rating
    --------------------------------------------------------------*/
    function star() {
        $('.st-star').each(function () {
            var star = $(this).data('star');
            var starVal = (star * 20) + "%";
            $(this).find('.st-star-in').css('width', starVal);
        });
    }

    /*--------------------------------------------------------------
      4. Dynamic Background
    --------------------------------------------------------------*/
    function dynamicBackground() {
        // Background img
        $('[data-src]').each(function () {
            var src = $(this).attr('data-src');
            $(this).css({
                'background-image': 'url(' + src + ')'
            });
        });
    }

    /*--------------------------------------------------------------
      5. Main Menu
    --------------------------------------------------------------*/
    function mainMenu() {
        $('.st-nav').append('<span class="st-munu-toggle"><span></span></span>');
        $('.menu-item-has-children').append('<span class="st-munu-dropdown-toggle"></span>');
        $('.menu-item-has-children>a').append('<i class="fas fa-chevron-down"></i>');
        $('.st-munu-toggle').on('click', function () {
            $(this).toggleClass("st-toggle-active").siblings('.st-nav-list').slideToggle();;
        });
        $('.st-munu-dropdown-toggle').on('click', function () {
            $(this).toggleClass('active').siblings('ul').slideToggle();
        });
        $('.st-offer-close').on('click', function () {
            $(this).parents('.st-offter-bar').slideUp();
        })
        // Search form
        $('.st-head-search-close').on('click', function () {
            $('.st-head-search').slideUp(300);
        })
        $('.st-search-open').on('click', function () {
            $('.st-head-search').slideDown(300);
        })
    }

    /*--------------------------------------------------------------
      6. Sticky Header
    --------------------------------------------------------------*/
    function stickyHeader() {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $('.st-sticky-header').addClass('st-sticky-active');
        } else {
            $('.st-sticky-header').removeClass('st-sticky-active');
        }
    }

    /*--------------------------------------------------------------
      7. One Page Navigation
    --------------------------------------------------------------*/
    function onePageNavigation() {
        // Click To Go Top
        $('.st-smooth-move').on('click', function () {
            var thisAttr = $(this).attr('href');
            if ($(thisAttr).length) {
                var scrollPoint = $(thisAttr).offset().top - 50;
                $('body,html').animate({
                    scrollTop: scrollPoint
                }, 800);
            }
            return false;
        });

        // One Page Active Class
        var topLimit = 300,
            ultimateOffset = 200;

        $('.st-onepage-nav').each(function () {
            var $this = $(this),
                $parent = $this.parent(),
                current = null,
                $findLinks = $this.find("a");

            function getHeader(top) {
                var last = $findLinks.first();
                if (top < topLimit) {
                    return last;
                }
                for (var i = 0; i < $findLinks.length; i++) {
                    var $link = $findLinks.eq(i),
                        href = $link.attr("href");

                    if (href.charAt(0) === "#" && href.length > 1) {
                        var $anchor = $(href).first();
                        if ($anchor.length > 0) {
                            var offset = $anchor.offset();
                            if (top < offset.top - ultimateOffset) {
                                return last;
                            }
                            last = $link;
                        }
                    }
                }
                return last;
            }

            $(window).on("scroll", function () {
                var top = window.scrollY,
                    height = $this.outerHeight(),
                    max_bottom = $parent.offset().top + $parent.outerHeight(),
                    bottom = top + height + ultimateOffset;

                var $current = getHeader(top);

                if (current !== $current) {
                    $this.find(".active").removeClass("active");
                    $current.addClass("active");
                    current = $current;
                }
            });
        });
    }

    /*--------------------------------------------------------------
      8. Isotop Initialize
    --------------------------------------------------------------*/
    function isotopInit() {
        if ($.exists('.st-isotop')) {
            $('.st-isotop').isotope({
                itemSelector: '.st-isotop-item',
                transitionDuration: '0.60s',
                percentPosition: true,
                masonry: {
                    columnWidth: '.st-grid-sizer'
                }
            });
            /* Active Class of Portfolio*/
            $('.st-isotop-filter ul li').on('click', function (event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
            /*=== Portfolio filtering ===*/
            $('.st-isotop-filter ul').on('click', 'a', function () {
                var filterElement = $(this).attr('data-filter');
                $(this).parents('.st-isotop-filter').next().isotope({
                    filter: filterElement
                });
            });
        }
    }

    /*--------------------------------------------------------------
      9. Footer Sticky
    --------------------------------------------------------------*/
    function stickyFooter() {
        var footerHeight = ($('.st-sticky-footer').height());
        var windowHeight = $(window).height();
        var footerHeightPx = footerHeight + 'px';
        $('.st-content').css("margin-bottom", footerHeightPx);
    }

    /*--------------------------------------------------------------
      10. Slick Slider
    --------------------------------------------------------------*/
    function slickInit() {
        if ($.exists('.st-slider')) {
            $('.st-slider').each(function () {
                // Slick Variable
                var $ts = $(this).find('.slick-container');
                var $slickActive = $(this).find('.slick-wrapper');
                var $sliderNumber = $(this).siblings('.slider-number');
                // Auto Play
                var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
                // Auto Play Time Out
                var autoplaySpdVar = 3000;
                if (autoPlayVar > 1) {
                    autoplaySpdVar = autoPlayVar;
                    autoPlayVar = 1;
                }
                // Slide Change Speed
                var speedVar = parseInt($ts.attr('data-speed'), 10);
                // Slider Loop
                var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
                // Slider Center
                var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
                // Pagination
                var paginaiton = $(this).children().hasClass('pagination');
                // Slide Per View
                var slidesPerView = $ts.attr('data-slides-per-view');
                if (slidesPerView == 1) {
                    slidesPerView = 1;
                }
                if (slidesPerView == 'responsive') {
                    var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
                    var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
                    var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
                    var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
                    var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
                }
                // Fade Slider
                var fadeVar = parseInt($($ts).attr('data-fade-slide'));
                (fadeVar === 1) ? (fadeVar = true) : (fadeVar = false);

                // Slick Active Code
                $slickActive.slick({
                    infinite: true,
                    autoplay: autoPlayVar,
                    dots: paginaiton,
                    centerPadding: '0',
                    speed: speedVar,
                    infinite: loopVar,
                    autoplaySpeed: autoplaySpdVar,
                    centerMode: centerVar,
                    fade: fadeVar,
                    prevArrow: $(this).find('.slick-arrow-left'),
                    nextArrow: $(this).find('.slick-arrow-right'),
                    appendDots: $(this).find('.pagination'),
                    slidesToShow: slidesPerView,
                    responsive: [{
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: lgPoint
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: mdPoint
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: smPoint
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: xsPoing
                        }
                    }
                    ]
                });
            })
        }
    }


    /*--------------------------------------------------------------
      11. Progress Bar
    --------------------------------------------------------------*/
    function progressBarInit() {
        $('.st-progressbar').each(function () {
            var progressPercentage = $(this).data('progress') + "%";
            $(this).find('.st-progressbar-in').css('width', progressPercentage);
        });
    }

    /*--------------------------------------------------------------
      12. Modal Video
    --------------------------------------------------------------*/
    function modalVideo() {
        $(document).on('click', '.st-video-open', function (e) {
            e.preventDefault();
            var video = $(this).attr('href');
            $('.st-video-popup-container iframe').attr('src', video);
            $('.st-video-popup').addClass('active');

        });
        $('.st-video-popup-close, .st-video-popup-layer').on('click', function (e) {
            $('.st-video-popup').removeClass('active');
            $('html').removeClass('overflow-hidden');
            $('.st-video-popup-container iframe').attr('src', 'about:blank')
            e.preventDefault();
        });
    }

    /*--------------------------------------------------------------
      13. Light Gallery
    --------------------------------------------------------------*/
    function lightGallery() {
        $('.st-lightgallery').each(function () {
            $(this).lightGallery({
                selector: '.st-lightbox-item',
                subHtmlSelectorRelative: false,
                thumbnail: false,
                mousewheel: true
            });
        });
    }

    /*--------------------------------------------------------------
      14. Tamjid Counter
    --------------------------------------------------------------*/
    function counterInit() {
        $('.st-counter-animation').tamjidCounter({
            duration: 700
        });
    }

    /*--------------------------------------------------------------
      15. Hobble Effect
    --------------------------------------------------------------*/
    function hobbleEffect() {
        $(document).on('mousemove', '.st-hobble', function (event) {
            var halfW = (this.clientWidth / 2);
            var halfH = (this.clientHeight / 2);
            var coorX = (halfW - (event.pageX - $(this).offset().left));
            var coorY = (halfH - (event.pageY - $(this).offset().top));
            var degX = ((coorY / halfH) * 6) + 'deg';
            var degY = ((coorX / halfW) * -6) + 'deg';
            var degX1 = ((coorY / halfH) * -50) + 'px';
            var degY1 = ((coorX / halfW) * 50) + 'px';
            var degX2 = ((coorY / halfH) * -25) + 'px';
            var degY2 = ((coorX / halfW) * 25) + 'px';
            var degX3 = ((coorY / halfH) * 15) + 'deg';
            var degY3 = ((coorX / halfW) * -15) + 'deg';

            $(this).find('.st-hover-layer').css('transform', function () {
                return 'perspective( 800px ) translate3d( 0, -2px, 0 ) rotateX(' + degX + ') rotateY(' + degY + ')';
            });
            $(this).find('.st-hover-layer1').css('transform', function () {
                return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX + ') rotateY(' + degY + ')';
            });
            $(this).find('.st-hover-layer4').css('transform', function () {
                return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX3 + ') rotateY(' + degY3 + ')';
            });
            $(this).find('.st-hover-layer2').css('transform', function () {
                return 'perspective( 800px ) translateX(' + degX1 + ') translateY(' + degY1 + ')';
            });
            $(this).find('.st-hover-layer3').css('transform', function () {
                return 'perspective( 800px ) translateX(' + degX2 + ') translateY(' + degY2 + ')';
            });
        }).on('mouseout', '.st-hobble', function () {
            $(this).find('.st-hover-layer').removeAttr('style');
            $(this).find('.st-hover-layer1').removeAttr('style');
            $(this).find('.st-hover-layer2').removeAttr('style');
            $(this).find('.st-hover-layer3').removeAttr('style');
            $(this).find('.st-hover-layer4').removeAttr('style');
        });
    };

    /*--------------------------------------------------------------
      16. Countdown Timer
    --------------------------------------------------------------*/
    function countdownTimer() {
        if ($.exists('.st-countdown-wrap')) {
            let deadline = new Date("Apr 30, 2021 01:05:25").getTime();
            let x = setInterval(function () {

                let now = new Date().getTime();
                let t = deadline - now;
                let days = Math.floor(t / (1000 * 60 * 60 * 24));
                let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((t % (1000 * 60)) / 1000);
                document.getElementById("day").innerHTML = days;
                document.getElementById("hour").innerHTML = hours;
                document.getElementById("minute").innerHTML = minutes;
                document.getElementById("second").innerHTML = seconds;
                if (t < 0) {
                    clearInterval(x);
                    document.getElementById("day").innerHTML = '0';
                    document.getElementById("hour").innerHTML = '0';
                    document.getElementById("minute").innerHTML = '0';
                    document.getElementById("second").innerHTML = '0';
                }
            }, 1000);
        }
    }

    /*--------------------------------------------------------------
      17. Scroll To Top
    --------------------------------------------------------------*/
    function scrollToTop() {
        $(window).on('scroll', function () {
            // Show hidden button on scroll
            if ($(this).scrollTop() > 1200) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        // smooth scrolling to top
        $('.scrollToTop').click(function () {
            $('html,body').animate({ scrollTop: 0 }, 1000);
        });
    }

    /*--------------------------------------------------------------
      18. Accordion
    --------------------------------------------------------------*/
    function accordion() {
        var $this = $(this);
        $('.st-accordian').children('.st-accordian-body').hide();
        $('.st-accordian.active').children('.st-accordian-body').show();
        $('.st-accordian-title').on('click', function () {
            $(this).parent('.st-accordian').siblings().children('.st-accordian-body').slideUp(250);
            $(this).siblings().slideDown(250);
            /* Accordian Active Class */
            $(this).parents('.st-accordian').addClass('active');
            $(this).parent('.st-accordian').siblings().removeClass('active');
        });
    }

    /*--------------------------------------------------------------
      19. Tabs
    --------------------------------------------------------------*/
    function tabs() {
        $('.st-tabs.st-fade-tabs .st-tab-link').on('click', function (e) {
            $(this).parents('.st-tabs').addClass('st-tab-start');
            var currentAttrValue = $(this).attr('href');
            $('.st-tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
            $(this).parents('li').addClass('active').siblings().removeClass('active');
            e.preventDefault();
            slickInit();
        });
    }

    /*--------------------------------------------------------------
      20. Range Slider
     --------------------------------------------------------------*/
    function rangeSlider() {
        if ($.exists('.st_select1')) {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        }
    }

    /*--------------------------------------------------------------
      21. Product View
    --------------------------------------------------------------*/
    function productView() {
        $('.st-grid-view').on('click', function () {
            $('.st-product-list').removeClass('active');
            $(this).addClass('active').siblings().removeClass('active');
        })
        $('.st-list-view').on('click', function () {
            $('.st-product-list').addClass('active');
            $(this).addClass('active').siblings().removeClass('active');
        })
        // Size active
        $('.st-size-number').on('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
        })
    }

    /*--------------------------------------------------------------
      22. Selevt2
    --------------------------------------------------------------*/
    function select2Setup() {
        if ($.exists('.st_select1')) {
            $(".st_select1").select2({
                placeholder: function () {
                    $(this).data('placeholder');
                },
                minimumResultsForSearch: -1,
            });
        }
    }
    /*--------------------------------------------------------------
      23. Parallax
    --------------------------------------------------------------*/
    function parallaxEffect() {
        $('.st-parallax').each(function () {
            var windowScroll = $(document).scrollTop(),
                windowHeight = $(window).height(),
                barOffset = $(this).offset().top,
                barHeight = $(this).height(),
                barScrollAtZero = windowScroll - barOffset + windowHeight,
                barHeightWindowHeight = windowScroll + windowHeight,
                barScrollUp = barOffset <= (windowScroll + windowHeight),
                barSctollDown = barOffset + barHeight >= windowScroll;

            if (barSctollDown && barScrollUp) {
                var calculadedHeight = barHeightWindowHeight - barOffset;
                var largeEffectPixel = ((calculadedHeight / 5));
                var mediumEffectPixel = ((calculadedHeight / 20));
                var miniEffectPixel = ((calculadedHeight / 12));

                $(this).find('.st-to-left').css('transform', `translateX(-${largeEffectPixel}px)`);
                $(this).find('.st-to-right').css('transform', `translateX(${largeEffectPixel}px)`);
                $(this).find('.st-to-up').css('transform', `translateY(-${largeEffectPixel}px)`);
                $(this).find('.st-to-down').css('transform', `translateY(${miniEffectPixel}px)`);
                $(this).find('.st-to-right-up').css('transform', `translate(${largeEffectPixel}px, -${miniEffectPixel}px)`);
                $(this).find('.st-to-left-up').css('transform', `translate(-${largeEffectPixel}px, -${largeEffectPixel}px)`);
                $(this).find('.st-to-rotate').css('transform', `rotate(-${miniEffectPixel}deg)`);
                $(this).find('.st-to-rotate-up').css({ 'transform': `rotate(-${mediumEffectPixel}deg)`, "margin-top": `-${largeEffectPixel}px` });
            }
        });
    }


})(jQuery); // End of use strict
