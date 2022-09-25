<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
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
  <i><h1 align = "center">Public sector exams</h1></i>
  <hr>
<p>Government exams are one of the most sought exams in India. To crack them is a dream come true for many. Clearing a government exam would enable you to secure government jobs. With attractive salary packages and additional benefits, it is every Indian’s dream to secure a government job. Every year lakhs of candidates appear for the competitive exams conducted for recruiting government officials. Every year there is a surge in the number of applicants appearing for government exams. </p>
  <hr>
  </div>
    <br>
 <div class="container" style="background-color: #E1D6D4;">
   <div class="image">
        <center><img src="https://static.toiimg.com/thumb/msid-76215139,width-1200,height-900,resizemode-4/.jpg"></center>
      </div>
      <div class="text">  
        <p>The Civil Services Examination is a nationwide competitive examination in India conducted for recruitment to higher Civil Services of the Government of India.</p>
      </div>
    </div>
  <br><div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center">TOP 5 Government services exams in India</h1></i>
  <hr>
<h3>1. UPSC Civil Services Examination
<br>
  This exam is conducted by the Union Public Service Commission to hire civil servants for various departments and is one of the well renowned and high profile job in Top 10 Government Exams In India. These officials can affect the government’s decision-making. The officials work in the secretariats and administrative positions.
  <br><br>2. IBPS PO Exam
<br>The Institute of Banking Personnel Selection conducts this exam for hiring candidates for the Probationary Officers in various private and public sector banks. It is the first step in the Officer scale designations. The duties include administration, clerical activities and improving the bank’s business.<br><br>
  3. SBI PO Exam<br>
The State Bank of India conducts the exam for hiring candidates for the posts of Probationary Officers in their various branches. This also an entry-level position that sets you up for a bright future in banking.
<br><br>
  4. SSC CGL Exam<br>
This exam is conducted by the Staff Selection Commission for hiring employees for higher positions in different departments.<br>
  <br>5. RBI Grade B Examination<br>
The Reserve Bank of India conducts this exam for hiring candidates for various positions in the management cadre. These are entry-level officers. The average salary is around 68,000 approximately and the basic pay is around 35,000.<br>
  </h3>
  <hr>
  </div><br>
  <div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center"> TIPS & TRICKS TO CRACK ANY CIVIL SERVICES EXAM</h1></i>
  <hr>
<H3>1. Say Bye to Procrastination:
It is important that you chart out a study plan and then stick to it. Do not procrastinate. Time is valuable and generally scarce when it comes to preparing for a competitive exam. Also, remember that time once lost cannot be retrieved. So, avoid putting things off.
<BR><br>
2. Set Goals:
Set realistic and achievable goals, and treat yourself when you achieve the goal. This way, the candidates can feel motivated and see improvement in their preparation. The goals needn’t be a long term one, instead, they can also be short, even for a day.
<BR><br>
  3. Stay Updated:
Whether it is UPSC or any other competitive government exam, the relevance of current affairs has increased in recent years. The number of questions asked in both objective and descriptive levels of the exam has increased. Therefore, a lot of importance has to be given to the preparation of current affairs. Hence, the aspirants have to develop a regular habit of reading newspapers.
<BR><br>
4. Learn smart ways:
Competitive exams demand candidates to answer a lot of questions in a relatively short time. Therefore, it is important that you study a few tricks and short-cuts to solve problems in s shorter time span. In the IAS exam, this is particularly important for the CSAT paper.
  <BR><br>
    5. Speed up:
Picking from where we left off in the previous point, it is essential to work on improving your speed of answering. In objective type papers, you must work on your speed of reading questions, knowing short-cuts, eliminating wrong answers and avoiding negative marks (if there is negative marking). In the IAS mains papers or any other written exam, you must enhance your writing speed by practice alone.
</H3>
  <hr>
  </div>
  <DIV style="background-color: #E1D6D4;">
    <HR><H1 h1 align = "center">RESOURCES TO STUDY</H1><HR>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLpuxPG4TUOR7pVz3cYfRArHLNYL3KIK-l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <HR>      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLydk8qNdwOVSm9Mvtx32FJIIYucUyVZhZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <HR> <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLM9OY0jASMM12o3MEJbEinuEJTtgJUerX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <HR> <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLudAcAxgIjpOKulOj4bcTM7VkEklRYHck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <HR>  <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLW9rmNobMa6Zxsvwg92zqbClmoWS-ruCo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <HR> 
      
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