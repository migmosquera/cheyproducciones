//jQuery(function ($) {
    //'use strict';

    //$('#tohash').on('click', function () {
       // $('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
       // return false;
   // });

    // accordian
    //$('.accordion-toggle').on('click', function () {
       // $(this).closest('.panel-group').children().each(function () {
         //   $(this).find('>.panel-heading').removeClass('active');
       // });

       // $(this).closest('.panel-heading').toggleClass('active');
    //});

    //menu
   

    //Slider
   // $(document).ready(function () {
      //  var time = 7; // time in seconds

       // var $progressBar,
           //     $bar,
           //     $elem,
           //     isPause,
           //     tick,
            //    percentTime;

        //Init progressBar where elem is $("#owl-demo")
        //function progressBar(elem) {
          //  $elem = elem;
            //build progress bar elements
          //  buildProgressBar();
            //start counting
         //   start();
        //}

        //create div#progressBar and div#bar then append to $(".owl-carousel")
       // function buildProgressBar() {
        //    $progressBar = $("<div>", {
         //       id: "progressBar"
         //   });
         //   $bar = $("<div>", {
         //       id: "bar"
        //    });
        //    $progressBar.append($bar).appendTo($elem);
       // }

       // function start() {
            //reset timer
         //   percentTime = 0;
         //   isPause = false;
            //run interval every 0.01 second
         //   tick = setInterval(interval, 10);
        //}
        //;

       // function interval() {
           // if (isPause === false) {
             //   percentTime += 1 / time;
              //  $bar.css({
              //      width: percentTime + "%"
             //   });
                //if percentTime is equal or greater than 100
             //   if (percentTime >= 100) {
                    //slide to next item 
                //    $elem.trigger('owl.next');
               // }
           // }
        //}

        //pause while dragging 
       // function pauseOnDragging() {
         //   isPause = true;
       // }

        //moved callback
        //function moved() {
            //clear interval
        //    clearTimeout(tick);
            //start again
        //    start();
       // }
   // });

    //Initiat WOW JS
   // new WOW().init();
    //smoothScroll
   // smoothScroll.init();

    // portfolio filter
   // $(window).load(function () {
       // 'use strict';
       // var $portfolio_selectors = $('.portfolio-filter >li>a');
       // var $portfolio = $('.portfolio-items');
       // $portfolio.isotope({
        //    itemSelector: '.portfolio-item',
        //    layoutMode: 'fitRows'
       // });

       // $portfolio_selectors.on('click', function () {
       //     $portfolio_selectors.removeClass('active');
       //     $(this).addClass('active');
       //     var selector = $(this).attr('data-filter');
       //     $portfolio.isotope({filter: selector});
       //     return false;
       // });
    //});

   // $(document).ready(function () {
        //Animated Progress
    //    $('.progress-bar').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
     //       if (visible) {
     //           $(this).css('width', $(this).data('width') + '%');
     //           $(this).unbind('inview');
     //       }
     //   });

        //Animated Number
     //   $.fn.animateNumbers = function (stop, commas, duration, ease) {
     //       return this.each(function () {
     //           var $this = $(this);
     //           var start = parseInt($this.text().replace(/,/g, ""));
     //           commas = (commas === undefined) ? true : commas;
     //           $({value: start}).animate({value: stop}, {
     //               duration: duration == undefined ? 1000 : duration,
     //               easing: ease == undefined ? "swing" : ease,
     //               step: function () {
     //                   $this.text(Math.floor(this.value));
     //                   if (commas) {
     //                       $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
     //                   }
    //               },
     //               complete: function () {
     //                   if (parseInt($this.text()) !== stop) {
     //                       $this.text(stop);
     //                       if (commas) {
     //                           $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    //                        }
     //                   }
     //               }
     //           });
     //       });
     //   };

     //   $('.animated-number').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
     //       var $this = $(this);
     //       if (visible) {
     //           $this.animateNumbers($this.data('digit'), false, $this.data('duration'));
     //           $this.unbind('inview');
     //       }
     //   });
   // });

    // Contact form
   // var form = $('#main-contact-form');
   // form.submit(function (event) {
    //    event.preventDefault();
     //   var form_status = $('<div class="form_status"></div>');
     //   $.ajax({
     //       url: $(this).attr('action'),
     //       beforeSend: function () {
     //           form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
     //       }
     //   }).done(function (data) {
     //       form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
     //   });
    //});

    //Pretty Photo
   // $("a[rel^='prettyPhoto']").prettyPhoto({
   //     social_tools: false
    //});

    //Google Map
   // var latitude = $('#google-map').data('latitude');
   // var longitude = $('#google-map').data('longitude');
   // function initialize_map() {
   //     var myLatlng = new google.maps.LatLng(latitude, longitude);
   //     var mapOptions = {
    //        zoom: 14,
    //        scrollwheel: false,
    //        center: myLatlng
    //    };
    //    var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
    //    var marker = new google.maps.Marker({
    //        position: myLatlng,
    //        map: map
    //    });
   // }
   // google.maps.event.addDomListener(window, 'load', initialize_map);

//});

(function ($) {

    skel
            .breakpoints({
                xlarge: '(max-width: 1680px)',
                large: '(max-width: 1280px)',
                medium: '(max-width: 980px)',
                small: '(max-width: 736px)',
                xsmall: '(max-width: 480px)'
            });

    $(function () {

        var $window = $(window),
                $body = $('body'),
                //$wrapper = $('#page-wrapper'),
                $banner = $('#banner'),
                $header = $('#header');
                
                
        // Disable animations/transitions until the page has loaded.
      
        $body.addClass('is-loading');

        $window.on('load', function () {
            window.setTimeout(function () {
                $body.removeClass('is-loading');
            }, 100);
        });

        // Mobile?
        if (skel.vars.mobile)
            $body.addClass('is-mobile');
        else
            skel
                    .on('-medium !medium', function () {
                        $body.removeClass('is-mobile');
                    })
                    .on('+medium', function () {
                        $body.addClass('is-mobile');
                    });

        // Fix: Placeholder polyfill.
        $('form').placeholder();

        // Prioritize "important" elements on medium.
        skel.on('+medium -medium', function () {
            $.prioritize(
                    '.important\\28 medium\\29',
                    skel.breakpoint('medium').active
                    );
        });

        // Scrolly.
        $('.scrolly')
                .scrolly({
                    speed: 1500,
                    offset: $header.outerHeight()
                });

        // Menu.
        $('#menu')
                .append('<a href="#menu" class="close"></a>')
                .appendTo($body)
                .panel({
                    delay: 500,
                    hideOnClick: true,
                    hideOnSwipe: true,
                    resetScroll: true,
                    resetForms: true,
                    side: 'right',
                    target: $body,
                    visibleClass: 'is-menu-visible'
                });

        // Header.
        if (skel.vars.IEVersion < 9)
            $header.removeClass('alt');
        if ($banner.length > 0
                && $header.hasClass('alt')) {

            $window.on('resize', function () {
                $window.trigger('scroll');
            });

            $banner.scrollex({
                bottom: $header.outerHeight() + 1,
                terminate: function () {
                    $header.removeClass('alt');
                    $("#logo").show();
                },
                enter: function () {
                    $header.addClass('alt');
                    $("#logo").show();
                },
                leave: function () {
                    $header.removeClass('alt');
                    $("#logo").hide();
                }
            });

        }

    });

})(jQuery);
