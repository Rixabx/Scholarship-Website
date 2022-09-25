<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
    </div>
  </nav>
  <script src="script.js"></script>  

<body><div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center"> Defence Exam</h1></i>
  <hr>
<p> NDA Exam is a national exam which is conducted by the Union Public Service Commission (UPSC) to select candidates for Army, Navy and Air Force wings of National Defence Academy and Indian Naval Academy Course (INAC). National Defence Academy & Naval Academy (NDA & NA) is conducted twice a year: NDA 1 and NDA 2.</p>
  <hr>
  </div>
    <br>
 <div class="container" style="background-color: #E1D6D4;">
   <div class="image">
       <center> <img src="https://imgk.timesnownews.com/story/UPSC_NDA.png?tr=w-400,h-300,fo-auto"></center>
      </div>
      <div class="text">  
        <p>The NDA written exam is divided into two sections, including Mathematics and GAT (General Ability Test).</p>
      </div>
    </div>
  <br>
  <div style="background-color: #E1D6D4;">
  <hr>
<p> Candidates are given a total of 2.5 hours for each section.
In the mathematics section, there are 120 questions of 2.5 marks each. The GAT section has 150 questions, 50 for English and 100 for GK, each for 4 marks. As the marking scheme incorporates negative marking, each incorrect answer in the mathematics and GAT section can result in a penalty of 0.83 mark and 1.33 mark, respectively.</p>
  <hr>
  </div><br>
  <div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center"> TIPS & TRICKS</h1></i>
  <hr>
<H3>1. Thorough revision of NCERT mathematics of Class XI and XII: Every year, 30 percent to 40 percent questions come from NCERT books, therefore it is essential to do a thorough revision of the same. Additionally, revision can help you in identifying your weaknesses better.
<BR><br>
2. Practice mock tests and previous year question papers: Mock tests allow candidates to become familiar with the overall layout of the paper. This ultimately increases the chances of qualifying the examination as UPSC has a fixed pattern for the NDA examination. The best mock series that are available in the market are — 25 NDA Mock Test Series by Arpit Choudhary, Arihant and Disha publications. Moreover, one should practice question papers from the last ten year to boost their confidence and evaluate weaknesses and strengths.
<BR><br>
  3. Pay attention to your health: While practicing for the written exam, it is equally important for the aspirants to pay attention to their health. Staying healthy will help you with better focus. Practicing yoga and other light exercises can help you stay healthy and cope with exam stress. 
<BR><br>
4. Reference books for mathematics and GAT: Here is a list of books that can help you plan ahead and save time in subjects like Mathematics and GAT. To learn short tricks in maths, there are a few recommended books like Arihant 3,000 MCQs for NDA, R.S Aggarwal for NDA, and Arpit Choudhary's Super 30 notes for NDA. Under GAT, one can refer to Lucent GK and Disha publications 14000 MCQs for GK. For English, follow books like Wren & Martin and Pathfinder.
  <BR><br>
    5. Last minute tips: Preparing for the NDA exam takes about 3-5 months on an average. However, it also depends on the candidate's determination and hard work. Students should practice consistently and be aware of the exam's duration so that they can plan their time accordingly. In order to finish the paper on time, you must divide your time into sections.
</H3>
  <hr>
  </div>
  <DIV style="background-color: #E1D6D4;">
    <HR><H1 h1 align = "center">RESOURCES TO STUDY</H1><HR>
      <iframe width="400" height="200" src="https://www.youtube.com/embed/videoseries?list=PL6BssuQF4S7yCkAp124EwI7cs8xT0GSg5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <HR>
      <iframe width="400" height="200" src="https://www.youtube.com/embed/videoseries?list=PL6BssuQF4S7ySuRb-iGjh99KLIFeZi5WP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
        <iframe width="400" height="200" src="https://www.youtube.com/embed/videoseries?list=PLw6TLJw1VCACh6ccGiRow18I79Lxq6lXr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><HR>  
      </DIV>
      
      <BR>
<footer><br>
            <div style="background-color: #3E8DA8"><font face="Times New Roman" size=3 color="white"> <br>         
<p align="center" style="color:black"><IMG SRC="https://i.pinimg.com/564x/e8/01/ca/e801ca5079e9aed72678375186bc50a3.jpg" width="5%" height="5%"><br><b><BIG><BIG>Edupoint</BIG></BIG></b></p>               
 <p align="center">
                    <a href="about.php">About us</a><br>
                    <a href="contact.php">Contact us</a><br>
                </p>
            </font>
<p align="center"><A href="https://twitter.com/Rishabh65476677"><img src="9.png" width="2%" height="4%"></A>
          
          <A href="https://github.com/Rixabx"><img src="3.png" width="2%" height="4%" ></A>

<A href="https://www.linkedin.com/in/rishabh-singh-78b1b61a5/"><img src="link.png" width="2%" height="4%" ></A></p></div>
        </footer>
</body>
    </HTML>