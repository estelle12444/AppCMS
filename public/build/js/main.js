/* ===================================================================
 * Count - Main JS
 *
 * ------------------------------------------------------------------- */

(function ($) {

    "use strict";

    var cfg = {
        scrollDuration: 800, // smoothscroll duration
        mailChimpURL: 'https://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&amp;id=e6957d85dc'   // mailchimp url
    },

        $WIN = $(window);

    // Add the User Agent to the <html>
    // will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

    // svg fallback
    if (!Modernizr.svg) {
        $(".home-logo img").attr("src", "images/logo.png");
    }


    /* Preloader
     * -------------------------------------------------- */
    var ssPreloader = function () {

        $("html").addClass('ss-preload');

        $WIN.on('load', function () {

            // will first fade out the loading animation 
            $("#loader").fadeOut("slow", function () {
                // will fade out the whole DIV that covers the website.
                $("#preloader").delay(300).fadeOut("slow");
            });

            // for hero content animations 
            $("html").removeClass('ss-preload');
            $("html").addClass('ss-loaded');

        });
    };


    /* info toggle
     * ------------------------------------------------------ */
    var ssInfoToggle = function () {

        //open/close lateral navigation
        $('.info-toggle').on('click', function (event) {

            event.preventDefault();
            $('body').toggleClass('info-is-visible');

        });

    };


    /* slick slider
     * ------------------------------------------------------ */
    var ssSlickSlider = function () {

        $('.home-slider').slick({
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            speed: 3000
        });

    };


    /* placeholder plugin settings
     * ------------------------------------------------------ */
    var ssPlaceholder = function () {
        $('input, textarea, select').placeholder();
    };


    /* final countdown
     * ------------------------------------------------------ */
    var ssFinalCountdown = function () {

        var finalDate = new Date("July 12, 2023 00:00:00").getTime();
        //-date: "Mar 25 2021",

        $('.home-content__clock').countdown(finalDate)
            .on('update.countdown finish.countdown', function (event) {

                var str = '<div class=\"top\"><div class=\"time days\">' +
                    '%D <span>day%!D</span>' +
                    '</div></div>' +
                    '<div class=\"time hours\">' +
                    '%H <span>H</span></div>' +
                    '<div class=\"time minutes\">' +
                    '%M <span>M</span></div>' +
                    '<div class=\"time seconds\">' +
                    '%S <span>S</span></div>';

                $(this)
                    .html(event.strftime(str));

            });
    };


    /* AjaxChimp
     * ------------------------------------------------------ */
    var ssAjaxChimp = function () {

        $('#mc-form').ajaxChimp({
            language: 'es',
            url: cfg.mailChimpURL
        });

        // Mailchimp translation
        //
        //  Defaults:
        //	 'submit': 'Submitting...',
        //  0: 'We have sent you a confirmation email',
        //  1: 'Please enter a value',
        //  2: 'An email address must contain a single @',
        //  3: 'The domain portion of the email address is invalid (the portion after the @: )',
        //  4: 'The username portion of the email address is invalid (the portion before the @: )',
        //  5: 'This email address looks fake or invalid. Please enter a real email address'

        $.ajaxChimp.translations.es = {
            'submit': 'Submitting...',
            0: '<i class="fas fa-check"></i> We have sent you a confirmation email',
            1: '<i class="fas fa-exclamation-triangle"></i> You must enter a valid e-mail address.',
            2: '<i class="fas fa-exclamation-triangle"></i> E-mail address is not valid.',
            3: '<i class="fas fa-exclamation-triangle"></i> E-mail address is not valid.',
            4: '<i class="fas fa-exclamation-triangle"></i> E-mail address is not valid.',
            5: '<i class="fas fa-exclamation-triangle"></i> E-mail address is not valid.'
        }
    };


    /* initialize
     * ------------------------------------------------------ */
    (function ssInit() {

        ssPreloader();
        ssInfoToggle();
        ssSlickSlider();
        ssPlaceholder();
        //ssFinalCountdown();
        ssAjaxChimp();

    })();


})(jQuery);


// Définir la date de fin du compte à rebours
var countDownDate = new Date("July 12, 2023 00:00:00").getTime();
var dayHtmlElement = document.getElementById("days")
var hoursHtmlElement = document.getElementById("hours")
var minutesHtmlElement = document.getElementById("minutes")
var secondsHtmlElement = document.getElementById("seconds")

console.info(dayHtmlElement);
console.info(hoursHtmlElement);
console.info(minutesHtmlElement);
console.info(secondsHtmlElement);

// Mettre à jour le compte à rebours toutes les secondes
var countdown = setInterval(function () {
    // Obtenir la date et l'heure actuelles
    var now = new Date().getTime();

    // Calculer la différence entre la date de fin et la date actuelle
    var distance = countDownDate - now;

    // Calculer les jours, heures, minutes et secondes restantes
    var days = ('0' + Math.floor(distance / (1000 * 60 * 60 * 24))).slice(-2);
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // console.info(dayHtmlElement);
    // console.info(hoursHtmlElement);
    // console.info(minutesHtmlElement);
    // console.info(secondsHtmlElement);

    // Afficher le compte à rebours dans les éléments HTML correspondants
    dayHtmlElement.innerHTML = days + '<span>Jours</span>';
    hoursHtmlElement.innerHTML = hours + '<span>H</span>';
    minutesHtmlElement.innerHTML = minutes + '<span>m</span>' ;
    secondsHtmlElement.innerHTML = seconds + '<span>s</span>';

    // Si le compte à rebours est terminé, afficher un message
    if (distance < 0) {
        clearInterval(countdown);
        dayHtmlElement.innerHTML = '0<span>Jours</span>';
        hoursHtmlElement.innerHTML = '0<span>H</span>';
        minutesHtmlElement.innerHTML = '0<span>m</span>';
        secondsHtmlElement.innerHTML = '0<span>s</span>';
    }
}, 1000);


