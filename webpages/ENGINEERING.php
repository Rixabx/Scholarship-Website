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
  <i><h1 align = "center">Engineering Exams</h1></i>
  <hr>
<p> Engineering has long been the most sought-after programme to study in India. To get admission in engineering colleges, candidates have to appear in engineering entrance exams after 12th. </p><HR>
  </div>
    <br>
 <div class="container" style="background-color: #E1D6D4;">
   <div class="image">
       <center> <img src= "https://spiderimg.amarujala.com/assets/images/results.amarujala.com/2019/09/30/jee-mains_1569817197.png">
    </center>  </div>
      <div class="text"> 
        <p>Joint Entrance Examination – Main is an all India test for admission for undergraduate programs in engineering across India.</p>
      </div>
    </div>
  <br><div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center">TOP 5 Exams for admission</h1></i>
  <hr>
<h3>1.JEE Main<br>
The Joint Entrance Examination (JEE Main) comprises of two papers. The Paper1 is conducted for admission to Undergraduate Engineering Programs (B.E/B. Tech) at NITs, IIITs.
<br><br>
  <br>2. BITSAT (Birla Institute of Technology and Science Admission Test)
<br>Birla Institute of Technology and Science Admission Test (BITSAT) 2021 is an entrance exam conducted by the Birla Institute of Technology and Science (BITS), Pilani, for admissions to undergraduate engineering courses (BE) at its three campuses located at Pilani, Goa and Hyderabad. <br><br>
  3.MET <br>
The Manipal Entrance Test (MET), previously known as MU OET, is a University level examination which bring in over 50,000 applicants per year. Admissions are provided in 16 engineering courses through MU OET and is open to all eligible applicants. The entrance exam is held in online mode and is 150 minutes long. 
<br><br>
  4.VITEEE<br>Around 5000 undergraduate engineering seats are available for eligible applicants under VITEEE (VIT Engineering Entrance Exam). The VIT University conducts the University level examination and around 2 lakh students appear for it every year.
<br><br>
  5. SRMJEEE <br>
The SRM Joint Engineering Entrance Examination (SRMJEEE) is conducted by SRM Institute of Science and Technology for all eligible aspirants. The online or computer-based test is held for admissions into the 7,000 undergraduate engineering seats available.<br>
  </h3>
  <hr>
  </div><br>
  <div style="background-color: #E1D6D4;">
  <hr>
  <i><h1 align = "center"> TIPS & TRICKS TO CRACK ANY ENGINEERING ENTRANCE EXAM</h1></i>
  <hr>
<H3>1. Stay Ahead of Your Competition:
The foremost and very underrated tip to begin with, while you're buckling up to prepare for an engineering entrance exam, is starting early. For an exam as complicated and technical as JEE, along with other state and university level exams, there is no 'enough' time parameter that can determine your chances of making it to top tier institutions like IITs and NITs. This means the more time you spend practicing and working on your knowledge, the more secure your future looks. For this, having a strong foundation and knowing the concepts well can make you stay one step ahead of your counterparts at all levels. Since the syllabus usually contains +1 and +2 level PCM, having a preparation mindset while you're studying can help fundamentally.
<BR><br>
2. Dig Into The Previous Year Papers:
Previous year's papers provide you with an insight into the types of questions asked, most common areas, and speed-time estimation. Not only that, but this can also give you a reality check on your preparation so far, and ensure whether you're able to manage all questions in the set time frame. That being said, the more questions you solve, the better you get at them. 
<BR><br>
  3. Doing More In Less: This might be an ancient overused tip but this holds immense significance nonetheless. Sometimes people spend way too much time being stuck at one question without realizing the opportunity cost of the moment. When it comes to clearing one of the toughest and most competitive exams of India, time management becomes the most crucial underlying element of the studying process. To give you a clearer picture, let’s say you’ve studied everything and know the answers to all the questions, but can you guarantee that you’ll be able to reach the last question before the time’s up? Let that answer reflect on you.

<BR><br>
4. Revise. Revise. Revise.:
Just when you think you've completely mastered a topic and there is no scope of doubt left, stop. Introspect, and remind yourself that it doesn't work that way. Engineering entrances consist of practical subjects that require constant practice and revision. It is not fundamentally possible to not touch a topic when it's done because most of the concepts are correlated. Timely thorough revision can assist in enhancing your core understanding of a subject and allow you to grasp more and more of a topic leading to a better grip on your attempts.
</H3>
  <hr>
  </div>
  <DIV style="background-color: #E1D6D4;">
    <HR><H1 h1 align = "center">RESOURCES TO STUDY</H1><HR>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbu_fGT0MPsuUzCT6BZvto0hkcA3dEigi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbu_fGT0MPsuT9pmkl2RuowDlIQ0OXI0l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLbu_fGT0MPssea8Yb0bov4v0o_0xfT9Qr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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