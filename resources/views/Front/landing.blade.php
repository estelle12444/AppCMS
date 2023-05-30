<!DOCTYPE html>
<html>
<head>
<title>VITIB-ZONE FRANCHE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}
</style>
</head>
<body class="w3-content w3-black" style="max-width:1500px;">

<!-- Header with Slideshow -->
<header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button>
  <div class="mySlides w3-animate-opacity">

    <iframe style="min-width:500px" width="1500" height="1000" src="https://www.youtube.com/embed/tESE3STIOzM?autoplay=1&mute=1" title="VITIB" frameborder="0" allow="accelerometer; autoplay;clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>

    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Reservez votre espace </h1>
        <hr class="w3-opacity">
        <p>Faites partie des milliers d'entréprises qui révolutionnent le dévélopement de l'Afrique</p>
        <p><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Reservez Maintenant <i class="fa fa-check"></i> </button></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">


    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge w3-text-red"><b>CLICK!</b> Fast and Easy</h1>
        <hr class="w3-opacity">
        <p>Choose from thousands of features</p>
        <p><button class="w3-button w3-block w3-red w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="/w3images/app4.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Smart Design</h1>
        <hr class="w3-opacity">
        <p>Customize photos as you go</p>
        <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
      </div>
    </div>
  </div>
  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)" href="/home">Parcourir le site <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)" href="/home">Parcourir  le site  <i class="fa fa-angle-right"></i></a>
</header>

<!-- The App Section -->
<div class="w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>VITIB</b></h1>
      <h1 class="w3-xxxlarge w3-text-green"><b>Village de l'Innovation Technologique</b></h1>
      <p style="text-align: justify"> La zone choisie pour la ZBTIC présente une forte valeur écologique et paysagère. Elle est bordée par la Lagune Ebrié, qui s’étend le long de l’Océan Atlantique et constitue le plus grand système lagunaire de Côte d’Ivoire.
        On y retrouve les mangroves et la forte biodiversité, caractéristiques de la commune de Grand-Bassam : des atouts qui présentent un fort potentiel de mise en valeur.
      </p>

    </div>
    <div class="w3-col l4 m6">
      <img src="img/logo.png" class="w3-image w3-right w3-hide-small" width="335" height="471">

    </div>
  </div>
</div>

<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">DOWNLOAD</h2>
      <p>Download the app in AppStore, Google Play or Microsoft Store.</p>
      <i class="fa fa-android w3-large"></i> <i class="fa fa-apple w3-large"></i> <i class="fa fa-windows w3-large"></i>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Fake Download</button>
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-orange" style="background-image: url('img/plan.jpg')">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      {{-- <img class="w3-image w3-round-large w3-hide-small " src="img/plan.jpg" alt="plan"  width="auto" height="600"> --}}

      <iframe  class="w3-image w3-round-large w3-hide-small" height="600px" width="400" src="https://www.youtube.com/embed/tESE3STIOzM?autoplay=1&mute=1" title="VITIB" frameborder="0" allow="accelerometer; autoplay;clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
    </div>
    <div class="w3-col l8 m6" style="text-align: justify">
      <h3 class="w3-jumbo"><b> Bâtissons une autre Afrique  </b></h3>
      <h4 class="w3-xxxlarge w3-text-red"><b>Ensemble</b></h4>
      <p><span class="w3-xlarge">celle de grands défis de la nouvelle économie.</span>
        Les grands projets d’infrastructures prévus par le Schéma Directeur d’Urbanisme du Grand Abidjan rendront le site encore plus attractif en termes d’accès, avec la réalisation d’un transport léger sur rail qui reliera Grand-Bassam à l’aéroport et à Abidjan, la construction de la nouvelle rocade Nord et l’élargissement de la Route de Bonoua.
    </p>
    </div>
  </div>
</div>

<!-- Features Section -->
{{-- <div class="w3-container w3-padding-64 w3-dark-grey w3-center">
  <h1 class="w3-jumbo"><b>Features</b></h1>
  <p>This app is just so lorem ipsum.</p>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-bolt w3-text-orange w3-jumbo"></i>
      <p>Fast</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-heart w3-text-red w3-jumbo"></i>
      <p>Loved</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-camera w3-text-yellow w3-jumbo"></i>
      <p>Clarity</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-battery-full w3-text-green w3-jumbo"></i>
      <p>Power</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-diamond w3-text-white w3-jumbo"></i>
      <p>Sharp</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-cloud w3-text-blue w3-jumbo"></i>
      <p>Cloud</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-globe w3-text-amber w3-jumbo"></i>
      <p>Global</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-hdd-o w3-text-cyan w3-jumbo"></i>
      <p>Storage</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-user w3-text-sand w3-jumbo"></i>
      <p>Safe</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-shield w3-text-orange w3-jumbo"></i>
      <p>Stabile</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-wifi w3-text-grey w3-jumbo"></i>
      <p>Connected</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-image w3-text-pink w3-jumbo"></i>
      <p>HD</p>
    </div>
  </div>
</div> --}}



<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">

  <p class="w3-medium"> <a href="https://sahanalytics.com/" target="_blank" class="w3-hover-text-green">Sah Analytics</a></p>
</footer>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>
