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
  

<body><div style="background-color:  #E1D6D4;">
  <hr>
  <i><h1 align = "center">Banking exams</h1></i>
  <hr>
<p>Bank Exams are one of the popular entrance examinations taken by the youth of India. A large number of students prepare for the Bank Exams right after graduating.</p><HR>
  </div>
    <br>
 <div class="container" style="background-color:  #E1D6D4;">
   <div class="image">
        <center><img src= "https://images.financialexpress.com/2021/05/RBI-1-2.jpg"></center>
      </div>
      <div class="text"> 
        <p>The RBI Grade B exam is conducted every year to recruit officers into the Reserve Bank.</p>
      </div>
    </div>
  <br><div style="background-color:  #E1D6D4;">
  <hr>
  <i><h1 align = "center">TOP 5 Exams for entry in banking sector</h1></i>
  <hr>
<h3>1.IBPS Common Written Exam for Probationary Officer<br>
A Common Written Examination CWE is conducted by the Institute of Banking Personnel Selection (IBPS) as a pre-requisite for selection of personnel for Probationary Officer/ Management Trainee posts in the Public Sector Banks.
<br>
  <br>2. State Bank of India Probationary Officer
<br>State Bank of India conducts examination for vacancies for the post of Probationary Officers in the bank. The structure of the written examination of the PO exams by State Bank of India includes a written examination which is a part of Phase-I of the selection process for the recruitments of Probationary Officers. Further the exam is divided into two parts; Part A and Part B. Part A of the exam will consist of Objective Tests whereas; Part B will consist of a Descriptive Paper.<br>
  3.IBPS Common Written Exam for Clerical Recruitment for PSUs <br>
Common Written Examination (CWE Clerk-IIV) is a pre-requisite for selection of personnel for Clerical cadre posts in the Public Sector Banks which is conducted online by the Institute of Banking Personnel Selection (IBPS) tentatively in November/ December.
<br>
  4.Common Written Exam for Regional Rural Banks <br>A Common Written Examination (CWE) is conducted for recruitment of Officers (Scale-I, II & III) and Office Assistants (Multipurpose) in Regional Rural Banks (RRBs). 
<br>
  5. RBI Grade B Examination<br>
The Reserve Bank of India conducts this exam for hiring candidates for various positions in the management cadre. These are entry-level officers. The average salary is around 68,000 approximately and the basic pay is around 35,000.<br>
  </h3>
  <hr>
  </div><br>
  <div style="background-color:  #E1D6D4;">
  <hr>
  <i><h1 align = "center"> TIPS & TRICKS TO CRACK ANY BANKING EXAM EXAM</h1></i>
  <hr>
<H3>1. Know the Bank Exams Syllabus and Exam Pattern:
Aspirants should consider having the knowledge of the whole bank exam syllabus and also be aware of the order in which the questions are expected. It is imperative for candidates to have a fair knowledge of the bank exam pattern including both Mains and Prelims exams.
<BR><br>
2. Create a Study Plan:
Once the online application procedure is done, the candidates should start off with their bank exam preparation. A timetable in which time slots for every subject that is in the bank exams syllabus should be created. This should be done regardless of the fact if the candidate is a student or a working professional, a timetable must be followed with the dedication and adherence to crack the bank exams in the first attempt.
<BR><br>
  3.  Use Best Resources for Bank Exam Preparation:Choosing the right bank exam books can either make or break a candidate’s bank exam preparation. This is because there is no time that can be wasted on looking for another source of preparation once the candidate has already initiated his/her bank exam preparation. So, it is recommended that the candidate should carefully select the most relevant resources, books or study materials for preparation.

<BR><br>
4. Learn smart ways:
Competitive exams demand candidates to answer a lot of questions in a relatively short time. Therefore, it is important that you study a few tricks and short-cuts to solve problems in s shorter time span. In the IAS exam, this is particularly important for the CSAT paper.
  <BR><br>
    5.  Stay Calm And Focused:
The candidates during the time of exam should stay relaxed and focused, as this has proved to improve the concentration level of the candidate.
</H3>
  <hr>
  </div>
  <DIV style="background-color:  #E1D6D4;">
    <HR><H1 h1 align = "center">RESOURCES TO STUDY</H1><HR>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLT2PUxNJBoePTSpp6dH-bURlKq4nwtpCn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4t_secZTPn6-JnvRk50yQBjgMKtPHFoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4t_secZTPn5A8zNwJU2Z1_soko892Hg2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><HR>
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