(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Skills
    $('.skill').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Project carousel
    $(".project-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        nav: false,
        dots: true,
        dotsData: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


})(jQuery);

let currentPart = 1;
const formParts = document.getElementsByClassName('form-part');

function nextPart(current, next) {
  document.getElementById(current).style.display = 'none';
  document.getElementById(next).style.display = 'block';
  currentPart++;
}

function prevPart(current, prev) {
    document.getElementById(current).style.display = 'none';
    document.getElementById(prev).style.display = 'block';
    currentPart--;
  }

function submitForm() {
  // Logique pour valider l'ensemble du formulaire
  // Peut inclure la récupération des valeurs des champs et leur traitement ultérieur

  // Redirection ou autre action à effectuer après validation
  // window.location.href = 'page-success.html';
  console.log('Formulaire validé !');
}


    function showForm(checked) {
        var actionnaireForm = document.getElementById('actionnaireForm');
        if (checked) {
          actionnaireForm.style.display = 'block';
        } else {
          actionnaireForm.style.display = 'none';
        }
      }


function ajouterActionnaire() {
  var container = document.getElementById('actionnairesContainer');

  var div = document.createElement('div');
  div.classList.add('form-group');

  var nomLabel = document.createElement('label');
  nomLabel.textContent = 'Actionnaire:';

  var nomInput = document.createElement('input');
  nomInput.classList.add('form-control');
  nomInput.setAttribute('type', 'text');
  nomInput.setAttribute('name', 'nomActionnaire[]');

  var nationaliteLabel = document.createElement('label');
  nationaliteLabel.textContent = 'Nationalité:';

  var nationaliteInput = document.createElement('input');
  nationaliteInput.classList.add('form-control');
  nationaliteInput.setAttribute('type', 'text');
  nationaliteInput.setAttribute('name', 'nationaliteActionnaire[]');

  var partLabel = document.createElement('label');
  partLabel.textContent = 'Pourcentage de parts (%):';

  var partInput = document.createElement('input');
  partInput.classList.add('form-control');
  partInput.setAttribute('type', 'number');
  partInput.setAttribute('name', 'pourcentagePartsActionnaire[]');

  div.appendChild(nomLabel);
  div.appendChild(nomInput);
  div.appendChild(nationaliteLabel);
  div.appendChild(nationaliteInput);
  div.appendChild(partLabel);
  div.appendChild(partInput);

  container.appendChild(div);
}

$('.scrolling-text').animate({ scrollTop: $('.scrolling-text').prop("scrollHeight") }, 3500);





function nextSection() {
  var currentSection = document.querySelector(".form-section:visible");
  var nextSection = currentSection.nextElementSibling;
  currentSection.style.display = "none";
  nextSection.style.display = "block";
}

$('#renseigner-demande-btn').click(function() {
    $('#connexion-popup').show();
  });

  // Fermer la popup de connexion lors du clic sur le bouton "Se connecter"
  $('#connexion-btn').click(function() {
    // Ici, vous pouvez ajouter la logique de vérification des informations de connexion
    // Si les informations de connexion sont valides, vous pouvez effectuer des actions supplémentaires
    // Sinon, vous pouvez afficher un message d'erreur ou effectuer toute autre action nécessaire

    // Fermer la popup de connexion
    $('#connexion-popup').hide();

  })



