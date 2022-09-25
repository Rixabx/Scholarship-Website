<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us </title>
<style>
section {
padding: 60px 0;
overflow: hidden;
}

.section-bg {
background-color: white;
}

.section-title {
text-align: center;
padding-bottom: 30px;
}

.section-title h2 {
font-size: 13px;
letter-spacing: 1px;
font-weight: 700;
padding: 8px 20px;
line-height: 1;
margin: 0;
background: #fdeff2;
color: #e43c5c;
display: inline-block;
text-transform: uppercase;
border-radius: 50px;
}

.section-title h3 {
margin: 15px 0 0 0;
font-size: 32px;
font-weight: 700;
}

.section-title h3 span {
color: #e43c5c;
}

.container {
margin-right: auto;
margin-left: auto;
width: 100%;
}

.contact button[type="submit"] {
background: #e43c5c;
border: 0;
padding: 10px 28px;
color: #fff;
transition: 0.4s;
margin: 0px 2px 0px;
}

.contact button[type="submit"]:hover {
background: #d01d3f;
}

.contact-btns {
margin-top: 3rem;
}

a {
color: #fff;
text-decoration: none;
}

a:hover {
color: #fff;
opacity: 0.5;
}

@media (min-width: 992px) {
.container {
max-width: 960px;
}
}

@media (min-width: 576px) {
.container {
max-width: 540px;
}
}

@media (min-width: 768px) {
.container {
max-width: 920px;
}
}

@media (min-width: 1024px) {
.section-title p {
width: 50%;
}
}
</style>
</head>

<body>
	 <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
    <div>  <?php $_SESSION['username']?></div>
    <IMG SRC="https://i.pinimg.com/564x/e8/01/ca/e801ca5079e9aed72678375186bc50a3.jpg" width="5%" height="5%">
      <div class="logo"><a href="#">EDUpoint</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">EDUpoint</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="dropdown.php">HOME</a></li>
          <li>
            <a href="#">SCHEMES</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="schemep.php">PRIVATE</a></li>
              <li><a href="schemeg.php">GOVERNMENT</a></li>
            </ul>
          </li>
          <li>
            <a href="#">ENTRANCE EXAMS</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="ENGINEERING.php">ENGINEERING</a></li>
              <li><a href="BANK.php">BANKING</a></li>
              <li><a href="DEFENCE.php">DEFENCE</a></li>
              <li><a href="UPSC.php">PSU</a></li>
            </ul>
          </li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li><a href="login.php">lOG OUT</a></li>
        </ul>
      </div>  
    
  </nav>
  <script src="script.js"></script>
<section id="contact" class="contact">
<div class="container">
<div class="section-title">
<h3>Contact <span>Us</span></h3>
</div>

<div>
<iframe style="border:0; width: 100%; height: 270px;"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1619345654111!5m2!1sen!2sin"
allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="contact-btns">

<div style="display: flex; justify-content: space-between;">
<button type="submit">
<a href="https://wa.me/yournumber" 
target="_blank">Whatsapp</a></button>

<button type="submit">
<a href="https://goo.gl/maps/5TxWEg1nSbUdpvYJ8"
target="_blank">Get Direction</a></button>

<button type="submit">
<a href="tel:yournumber">Call me</a></button>
</div>
</div>
</div>
</section>
<footer>
<div style="background-color: #3E8DA8" ><br>
<p align="center"><b><IMG SRC="https://i.pinimg.com/564x/e8/01/ca/e801ca5079e9aed72678375186bc50a3.jpg "width="4%" height="7%"><br><BIG><BIG>  EDUpoint</BIG></BIG></b>
  <br><Br>
 <center> <p>Contact us on:</p></center>
<center>
  
<A href="https://twitter.com/Rishabh65476677">
  <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" width="4%" height="4%"></A>
 <a href="mailto:rishabhsingh50689@gmail.com">
   <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Gmail.max-1100x1100.png" height="4%" width="4%"> </img></a></h3>
</div>
</footer>
</body>

</html>