$( document ).ready(function() {
//Slimmenu
    $('header .menu').slimmenu({
        resizeWidth: '1100', /* Navigation menu will be collapsed when document width is below this size or equal to it. */
        initiallyVisible: false, /* Make main navigation menu initially visible on mobile devices without the need to click on expand/collapse icon. */
        collapserTitle: '', /* Collapsed menu title. */
        animSpeed: 'medium', /* Speed of the sub menu expand and collapse animation. */
        easingEffect: null, /* Easing effect that will be used when expanding and collapsing menu and sub menus. */
        indentChildren: false, /* Indentation option for the responsive collapsed sub menus. If set to true, all sub menus will be indented with the value of the option below. */
        childrenIndenter: '&nbsp;', /* Responsive sub menus will be indented with this character according to their level. */
        expandIcon: '<i>&#9660;</i>', /* An icon to be displayed next to parent menu of collapsed sub menus. */
        collapseIcon: '<i>&#9650;</i>' /* An icon to be displayed next to parent menu of expanded sub menus. */
    });

    //Carousel
    $('.carousel-1').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            }
        }
    });
    $('.carousel-2').owlCarousel({
        loop:true,
        autoplay:false,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        margin:30,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },

            1200:{
                items:3,
                nav: true
            }
        }
    });
    $('.carousel-3').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    $('.carousel-4').owlCarousel({
        loop:true,
        autoplay:false,
        autoplayHoverPause:false,
        margin:30,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                nav: true
            }
        }
    });
    $('.carousel-5').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:9000,
        autoplayHoverPause:false,
        margin: 0,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:4
            },
            900:{
                items:6
            },
            1000:{
                items:8
            },
            1200:{
                items:11
            },
            1300:{
                items:10
            },
            1500:{
                items:12,
            }
        }
    });
    $('.carousel-6').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:9000,
        autoplayHoverPause:false,
        margin: 0,
        nav: false,
        responsive:{
            0:{
                items:2
            },
            700:{
                items:4
            },
            900:{
                items:5
            },
            1000:{
                items:6
            },
            1200:{
                items:7
            }
        }
    });

    //Form styler
    setTimeout(function() {
        $('input, select').styler();
        $('input').styler({
            filePlaceholder: 'Прикрепить файл'
        });
    }, 100);

    //Toggle class FAQ item
    $('.faq .item, .rating-inp').click(function(){
        $(this).toggleClass('open');
    });

    //Back to top
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 2000);
        });
    }

    //Form ui slider
    $("#slider").slider({
        range: "min",
        value: 10,
        min: 1,
        max: 10,
        step: 0.1,
        slide: function(event, ui) {
            $("#amount").val(ui.value);
        }
    });

    $("#slider-accuracy").slider({
        range: "min",
        value: 10,
        min: 1,
        max: 10,
        step: 0.1,
        slide: function(event, ui) {
            $("#amount-accuracy").val(ui.value);
        }
    });

    $("#slider-price").slider({
        range: "min",
        value: 10,
        min: 1,
        max: 10,
        step: 0.1,
        slide: function(event, ui) {
            $("#amount-price").val(ui.value);
        }
    });

    $("#amount").val($("#slider").slider("value"));
    $("#amount-accuracy").val($("#slider-accuracy").slider("value"));
    $("#amount-price").val($("#slider-price").slider("value"));
});
