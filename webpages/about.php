<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<HTML>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body link="black"> 
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

  
<b><big><center> <p style="font-family:trebuchet ms"> 
 <u><br><br>
   Privacy Policy</u></b><br>
  This privacy policy was last modified on 1 August 2021<br><br>
  The site https://www.EDUpoint.in informs you of our policies regarding the collection , use and disclosure of personal information.<br> we receive from the users of the site.<br>
  We use your personal information only for providing and improving the site. <br>
  By using the site you agree to the collection and use of information in accordance with the policy.<br><br>
  <b><u>Information Collection and use.</u></b><br><br>
  While using our site , we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you.<br>
  perosnally identifiable information may include but is not limited to your name.<br><br>
  <b><u>Log data</u></b><br><br>
  Like many site operators we collect information that your browser sends whenever you visit our site. <br>
  This log data may include information such as your IP (Internet Protocol)address ,browser type , browser version, the pages of our site that you visit,the time and date of your visit, the time spent on those pages and other statistics.

  </p>
  </center>
<hr style="width:60%" ,size="5", color="black">
<center>
<marquee width="55%"><p style="font-family:comic sans ms;color:indigo">
   EDUpoint.com helps students knowing more about government schemes and scholarship which will benefit them. That's our motive.
</p></marquee>
<footer>
<br><br><br>

</center>



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
</body>
</html>