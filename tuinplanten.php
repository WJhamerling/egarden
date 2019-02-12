<!DOCTYPE html>
<html>
<title>eGARDEN</title>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lemon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styletuin.css">
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
  <div class="accountdiv_flex1"><br>Login Here</div>
  <div class="accountdiv_flex2"><br>Shopping Cart</div>
    <!-- <?php
echo "Welkom " . $_SESSION['guest_name'];
?> -->
</div>
        
        <div class="slideshow">
     <div class="mySlides fade">
     <!-- <div class="paginanummer">1 / 4</div> -->
     <img src="images/index_slide1.jpg" style="width:100%; height:300px">
     <div class="text">Tuinplanten</div>
</div>

<div class="mySlides fade">
     <!-- <div class="paginanummer">2 / 4</div> -->
     <img src="images/index_slide2.jpg" style="width:100%; height:300px">
     <div class="text">Tuinplanten</div>
</div>

<div class="mySlides fade">
     <!-- <div class="paginanummer">3 / 4</div> -->
     <img src="images/index_slide3.jpg" style="width:100%; height:300px">
     <div class="text">Tuinplanten</div>
</div>

<div class="mySlides fade">
     <!-- <div class="paginanummer">4 / 4</div> -->
     <img src="images/index_slide4.jpg" style="width:100%; height:300px">
     <div class="text">Tuinplanten</div>
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

<div class="flexall debug">
            <div class="cards debug">
                <?php include "tuinplantencard.php"; ?> 
    </div>
<br>
<br>
<br>
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

<!--
                <section class="section2">
                <div class="pakketten">
                    <a href="maaltijden.html">
                        <div>
                        <h3>Aziatisch</h3>
                        </div>
                    </a>
                    <a href="maaltijden.html">
                        <div>
                        <h3>Italiaans</h3>
                        </div>
                    </a>
                    <a href="maaltijden.html">
                        <div>
                        <h3>Soepen</h3>
                        </div>
                    </a>
                </div>
                <div class="pakkettenplaatjes">
                    <a href="maaltijden.html">
                        <img src="images/madras.png">
                    </a>
                    <a href="maaltijden.html">
                    <img src="images/lasagne.png">
                    </a>
                    <a href="maaltijden.html">
                    <img src="images/erwtensoep.png">
                    </a>
                </div>
            </section> 
        -->
</body>
</html>