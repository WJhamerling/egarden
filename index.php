<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>eGARDEN</title>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!--HEADER-->
 <header>
            <div class="header-logo">
                <a href="index.php">
                    <img src="images/egarden.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="tuinplanten.php">Tuinplanten</a></li>
                    <li><a href="tuinmeubels.php">Tuinmeubels</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="php/login/login.php">Login</a></li>
                </ul>
            </nav>
        </header>

<div class="accountdiv_flex">
  <div class="accountdiv_flex1">Inloggen</div>
  <div class="accountdiv_flex2">winkelwagen</div>
    <!-- <?php
echo "Welkom " . $_SESSION['guest_name'];
?> -->
</div>

<div class="slideshow">

    <div class="mySlides fade">
      <!-- <div class="paginanummer">1 / 4</div> -->
      <img src="images/index_slide1.jpg" style="width:100%; height:500px">
      <div class="text">eGARDEN webshop</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="paginanummer">2 / 4</div> -->
      <img src="images/index_slide2.jpg" style="width:100%; height:500px">
	<div class="text">eGARDEN webshop</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="paginanummer">3 / 4</div> -->
      <img src="images/index_slide3.jpg" style="width:100%; height:500px">
      <div class="text">eGARDEN webshop</div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="paginanummer">4 / 4</div> -->
      <img src="images/index_slide4.jpg" style="width:100%; height:500px">
      <div class="text">eGARDEN webshop</div>
    </div>
    <br>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3200);
}
</script>

<footer>
  <div class="gegevens">
      <ul>
          <li><font color="#B36E68"> | </font> eGarden BV <font color="#B36E68"> | </font>
          <li>Adres: Haagweg 1 <font color="#B36E68"> | </font>
          <li>Telefoonnummer: 06-12345678 <font color="#B36E68"> | </font>
          <li>E-mailadres: egarden@gmail.com <font color="#B36E68"> | </font>
      </ul>
       
  </div>
  <a href="https://www.facebook.com">
      <div class="logo1">
      </div>
  </a>
  <a href="https://www.instagram.com">
      <div class="logo2">
      </div>
  </a>
</footer>


</body>
</html>
