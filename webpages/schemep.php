<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<html>
    <head>
        <title>
            Schemes
        </title>
        <link rel="stylesheet" href="scheme.css">
        <script src="scheme.js"></script>
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
    </nav>
            
         <center><h1>Private Schemes</h1><br><h1 style="color: black;">Shastri Indo-Canadian Fellowships </h1></center>
          <div>
            <a id="test"></a>
            <h1 style="color: black;">1. Shastri Indo-Canadian Fellowships</h1>
            <p style="color: black;"> The Shastri Indo-Canadian Fellowships for Indian Scholars are fellowships awarded to Indian university students to conduct research in Canada. These fellowship winners are expected to submit both an interim and a final report. Scholarship Eligibility, Value, and Duration Shastri Doctoral Research Fellowships in Canadian Studies for Indian Scholars: Full time Indian understudies who are residents of India 
              The Fellowship Award is between 1100 (INR 66120)- 1300 (INR 78140) CAD each month
              Between 3 to 4 honors are granted under this plan yearly
              Competitors are needed to send in the application structure alongside an educational program vitae 
              The Shastri Canadian Studies Faculty Enrichment Fellowships for Indian Scholars are postgraduate fellowships awarded to Indian university academics. This award will assist them in developing and expanding teaching materials in Canada. The recipients of these fellowships must submit a final report and attend a seven-day summer institute.
    

            </p>
           </div>
          
          <div >
            <h1>2. Faculty Enrichment Fellowship for Indian Scholars</h1>
              <p>The Shastri Canadian Studies Faculty Research Fellowships for Indian Scholars are postgraduate Fellowship grants to explore researchers of Indian beginning who complete exploration on Canadian investigations from their organizations of enlistment or enrollment. The awardees of these partnership grants are needed to foster showing material on Canada from a foundation in India by distributing research papers 
              
                Full time Indian teachers who are residents of India 
                The Fellowship Award isn’t for a fixed sum and is for 4-5 weeks 
                Between 7 to 10 honors are granted under this plan yearly 
                Applicants are needed to send in the application structure alongside an educational program vitae 
              </p>  
          </div>
          
          <div>
            <h1>3. Faculty Research Fellowships for Indian Scholars 
            </h1>
              <p>The space of work ought to be on performing expressions, craftsmanship history, expressions or filmmaking 
          
                Full time Indian understudies who are residents of India
                The Fellowship Award is for a measure of 2971 CAD (INR 178590) and is for 4-5 weeks of study 
                The honor can be given to a most extreme 10 individuals.  
                Applicants are needed to send in the application structure alongside an educational plan vitae 
                The Shastri India Studies Faculty Fellowships for Indian Scholars are Fellowship grants given to specialists prepared in Canada and requiring further preparing in India 
                Candidates should be in a situation to validate that they need further preparing in India 
      </p>  
          </div>

          
          <div>
            <h1>4. Shastri India Studies Arts Fellowships</h1>
              <p>The Shastri India Studies Faculty Fellowships are posted alumni partnerships on proposals for researchers of Canadian beginning who are utilized either completely or incompletely in an advanced education organization in Canada. These Canadian researchers are qualified to make applications for examination or preparation in India. 

                Craftsmen should be grown-up Canadian residents or perpetual occupants of Canada 
                Ought to stay in India for a very long time during the time of the grant 
                The Fellowship Award is for 1824 CAD (INR 109645)
                Between 1 to 2 honors are granted under this plan 
                Applicants are needed to send in the application structure alongside an educational program vitae and photo 
                Secondary School understudies are not qualified for grant </p>  
          </div>
          <center><h1 style="color: black;">Scholarship </h1></center>
         
          <div>
            <h1>1. Bharat Petroleum Scholarships</h1>
              <p>Eligibility: Indian citizen, holding a degree from a recognised university and residing in
                India at the time of application, and who have secured at least 65% in Arts and 70% in
                Engineering, Science or Commerce at the Graduate level. The applicant should be below 25
                years as on first of September.
                Students with confirmed admission to any full-time, two years Post Graduate Degree
                Course (in any field of education other than fine arts), at any recognised University /
                Institute of repute in India or abroad.
              </p>  
              </div>
          <div>
            <h1>2. Basic Research, Education And Development (BREAD)</h1>
              <p>Invites applications for financial aid from the students who had excelled in public exams,
                but could not afford to study further.
                During the year 2004-05, BREAD will offer scholarships in science and technology:
                Engineering, Computer Science, Medicine, Veterinary Science, Agriculture, Pharmacy,
                Polytechnics, Mathematics and Sciences.
                BREAD and North South Foundation (NSF) have awarded over 2,000 Scholarships over the
                years.
                The eligibility criteria include: a family income of less than Rs,38,000
                (Rs.26,000 in rural areas) ; top five percent ranks in Common Entrance Tests (CET) of 85
                per cent marks in the intermediate or equivalent examination with the relaxation of five
                per cent to rural and girl students in ranks/percentages. Rank of the first attempt
                preferred; coming from Government or Government aided schools only; first-year students
                in the course of study chosen; students eligible for other scholarships will not normally be
                eligible for BREAD scholarships. Shortlisted candidates will be interviewed before the final
                selection.
                The application form for Andhra Pradesh could be had from Ch. Hanumantha Rao, 204
                Megha Apts, 2-1-253 Nallakunta, Hyderabad - 500 044 by sending a self-addressed,
                stamped envelope with the rank card of CET or mark sheet of intermediate or equivalent
                examination this year. The deadline for filing of applications is July 31.
                Sri M. Siva Ram Prasad, BREAD,401, Diamond House Adjacent to Amrutha Hills Punjagutta, Hyderabad-500082</p>  
            </div>
            <div >
              <h1>3.Kerala Govt.Scholarships
              </h1>
                <p>Merit scholarship ( based on SSLC marks )
                  Kerala Govt. scholarship ( +2, degree, P.G )
                  Cultural Scholarship
                  Muslim-Nadar girls scholarship
                  Apply to: Director of Collegiate education, Trivandrum-695 033
                  Directorate of Collegiate End Floor, Vikas Bhavan, Trivandrum - 695 033, Kerala</p>  
              </div>
              <div>
                <h1>4. TataTrust Scholarships - J N Tata Endowment Loan Scholarships
                </h1>
                  <p>The Jamsetjee Nusserwanjee Tata endowment scholarship supports Indian students who want to pursue higher education overseas by providing loans at low-interest rates. The providers may waive off the interest if the candidates pay back the loan within a stipulated time. Over 5,400 students have benefitted from the J N Tata endowment scholarship for higher education since 1892. This Tata trust scholarship supports students aspiring to pursue postgraduate, PhD and postdoctoral studies (in any streams) at foreign universities. To know more about the eligibility and the Tata trust scholarship last date, the candidates can click on the JN Tata endowment scholarship. </p> 
                  <p>The eligibility criteria to apply for this Tata scholarship 2021 are as follows: 
                  </p> 
                   <ul>
                     <li>The candidates should be Indian citizens.</li>
                    <li>They should be willing to pursue higher education abroad.</li>
                    <li>The candidates should not be over 45 years.</li>
                    <li>They should have an undergraduate degree from a recognised Indian university.</li> 
                  </ul>
                </div>
                <div >
                  <h1>5. R. D. BIRLA SCHOLARSHIP EXAM
                  </h1>
                    <p>EXAM DETAILS FOR 2021
                      The scholarship exam tests the higher order thinking skills from the fields of Science & Mathematics.
                      
                      The scholarship exam will consist of only one exam paper.
                      
                      Top performers selected from the National Level category will be awarded scholarship worth Rs. 1,00,000 (maximum).
                      
                      Download the “Brainiacs App" from Play Store to receive all the updates related to the R.D. BIRLA Scholarship Exam 2021. 
                     
                    </p> 
                     </div>
             <footer><br>
            <div style="background-color: #3E8DA8"><font face="Times New Roman" size=3 color="white"> <br>         
<p align="center" style="color:black"><IMG SRC="https://i.pinimg.com/564x/e8/01/ca/e801ca5079e9aed72678375186bc50a3.jpg" width="5%" height="7%"><br><b><BIG><BIG>Edupoint</BIG></BIG></b></p>               
 <p align="center">
                    <a href="about.php">About us</a><br>
                    <a href="contact.php">Contact us</a><br>
                </p>
            </font>
<p align="center"><A href="https://twitter.com/Rishabh65476677"><img src="9.png" width="2%" height="4%"></A>
          
          <A href="https://github.com/Rixabx"><img src="3.png" width="2%" height="4%" ></A>

<A href="https://www.linkedin.com/in/rishabh-singh-78b1b61a5/"><img src="link.png" width="2%" height="4%" >
<br></A></p></div>
        </footer>     
              
    </body>
</html>