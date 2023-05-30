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

    <iframe style="min-width:500px" width="1500" height="1000" src="https://www.youtube.com/embed/tESE3STIOzM?controls=0?&autoplay=1" title="VITIB" frameborder="0" allow="accelerometer; autoplay;clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>

    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Reservez votre espace </h1>
        <hr class="w3-opacity">
        <p>Faites partie des milliers d'entréprises qui révolutionnent le dévélopement de l'Afrique</p>
        <p><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Reservez Maintenant <i class="fa fa-check"></i> </button></p>
      </div>
    </div>
  </div>


  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" \ href="/accueil">Visiter l'accueil <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" >Visiter l'accueil <i class="fa fa-angle-right"></i></a>
</header>


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
