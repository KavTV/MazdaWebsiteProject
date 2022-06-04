<!DOCTYPE html>
<html>
<head>
<title>Frontpage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Styles/frontPageStyle.css">
<link rel="stylesheet" href="Styles/allPageStyle.css">
<script src="JS/Header.js"></script>
</head>
<body>

<?php
    include_once('header.php');
    ?>

<!-- First Parallax Image with Logo Text -->
<div style="height: 100%;">
  <video controlslist="nodownload"  preload="metadata" autoplay  loop="true" muted="true" class="videoSize">
    <source src="https://dk.cdn.mazda.media/497545c0d81b482894ed0d55fb2c0bf2/c0e8bb965c1e4c9c9b439188476f9489.mp4?rnd=48fa34#t=0.001" type="video/mp4">
  </video>
  <!-- <div class="bgimg-1 w3-display-container w3-center" id="home">
  </div>   -->
  <div class="bottomleft">
  <span style ="padding:70px 100px;font-size:50px; background-color:var(--MazdaBlue);color:var(--MazdaBlueText);"class="w3-center w3-wide w3-animate-opacity">Zoom <span class="w3-hide-small">Zoom</span> Forever</span>
  </div>
  <div class="imagebar">

  </div>
</div>

  
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
   <a href = "https://www.facebook.com/ActuallyMazda-104047652257957"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href = "https://www.instagram.com/actuallymazdaofficial/"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
   <a href = "https://www.youtube.com/channel/UC90kZtwKMX2l6dqEr_XAFTg"><i class="fa fa-youtube"></i></a>
   <a href = "https://www.tiktok.com/@actuallymazda"><i class="fa fa-tiktok"></i></a>

  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

</body>
</html>
