<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
 <link rel="stylesheet" type="text/css" href="dhilah.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
 <div class="header">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="buku.php">Book</a>
      <a href="#">Writer</a>
      <a href="pesan.php">Order</a>
      <a href="about.php">About</a>
    </div>
  <img src="img/nr.png" align="center">
  <center>
  <h1>NR Book</h1>
  <h2>Read Is So Fun</h2>
  </center>
  </div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="img/b1.jpg" alt="Sandwich" style="width:100%">
      <h3>Ryo san no Jidai "Kochikame" (Kochi Kame Teihon!)</h3>
      <p>Rp 372.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b2.jpg" alt="Steak" style="width:100%">
      <h3>One Piece 1-10</h3>
      <p>Rp 240.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b3.jpg" alt="Cherries" style="width:100%">
      <h3>Naruto The Movie : Guardians Of The Crescent Moon Kingdom</h3>
      <p>Rp 60.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b4.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Golgo 13 Premium Golgo VS Shin Heiki</h3>
      <p>Rp 650.000</p>
    </div>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="img/b5.jpg" alt="Popsicle" style="width:100%">
      <h3>Dragon Ball: that time I got reincarnated as Yamcha</h3>
      <p>Rp 20.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b6.jpg" alt="Salmon" style="width:100%">
      <h3>Detektif Conan 1-10</h3>
      <p>Rp 240.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b7.jpg" alt="Sandwich" style="width:100%">
      <h3>Black Jack 1-13</h3>
      <p>Rp 10.000</p>
    </div>
    <div class="w3-quarter">
      <img src="img/b8.jpg" alt="Croissant" style="width:100%">
      <h3>Dilan : Dia Adalah Dilanku Tahun 1990</h3>
      <p>Rp 69.000</p>
    </div>
  </div>

  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>ABOUT</h3>
      <p><a href="about.php" style="text-decoration: none; ">Tentang NR Book</a></p>
      <p><a href="" style="text-decoration: none;">Toko Kami</a></p>
    </div>
  
    <div class="w3-third">
      <h3>MEDIA POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="img/fb.png" class="w3-left w3-margin-right" style="width:50px">
          <img src="img/ig.png" class="w3-left w3-margin-right" style="width:50px">
          <img src="img/tw.png" class="w3-left w3-margin-right" style="width:50px">
          <img src="img/wa.png" class="w3-left w3-margin-right" style="width:50px">
        </li>
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Books</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Komik</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Naruto</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Black Jack</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dilan</span>  <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Novel</span><span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cerpen</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Education</span>
      </p>
    </div>
  </footer>

</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>