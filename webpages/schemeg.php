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
              <li><a href="#">GOVERNMENT</a></li>
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
        </div>         
          <center><h1 style="color: black;">Education</h1></center>
          <div>
            <h1 style="color: black;">1. National Scheme of Apprenticeship Training</h1>
            <p style="color: black;"> The National Scheme of Apprenticeship Training is implemented through four Regional Boards of Apprenticeship/Practical (BOATs/BOPT) at Mumbai, Kanpur, Chennai & Kolkata. The Scheme of Apprenticeship Training provides opportunities for practical training to graduate engineers, diploma holders (Technicians) and 10+2 Vocational pass outs in about 10,000 industrial establishments/ organizations as per the policies and guidelines laid down by the Central Apprenticeship Council(CAC), which is an apex Statutory Body constituted under the Apprentices Act, 1961. The four Regional BOATs/BOPT which are fully funded autonomous organizations of MoE have been entrusted with the responsibility to implement the Scheme of Apprenticeship Training under Apprentices Act, 1961 as amended from time to time in their respective regions.

              The basic objective of the Scheme is to fulfill/match, any gap, in so far practical/hands on experience of fresh Graduate Engineers, Diploma holders and 10+2. Vocational pass-outs and also to enhance their technical skills for making their suitability in job absorption as per the needs of the Industry.
              
              The period of Apprenticeship Training under the Act is one year. The apprentices are paid monthly stipend which is shared between the Central Government and the Employer on 50 : 50 basis. The existing rates of stipends as effective from 19th December,2014 for Engineering Graduate, Technicians and 10+2 Vocational pass-outs are Rs. 4984/-, Rs. 3542/-, and Rs. 2758/- per month respectively as approved in March, 2011. The full stipend is paid by the industrial establishments/organizations to the apprentices undergoing Apprenticeship Training at the first instance and later on they claim 50% reimbursement from Central Government through respective BOATs/BOPT.</p>
          </div>
          
          <div>
            <h1>2. Support For Distance Education & Web Based Learning (NPTEL)</h1>
            <p>In order to enhance learning effectiveness in the field of technical education by using technology, the MoE, in 2003, initiated the Project – National Programme for Technology Enhanced Learning (NPTEL) to enhance quality engineering education in the country by developing curriculum based video courses (at least 100) and web based e-courses (at least 115) to be prepared by seven IITs at Delhi, Bombay, Madras, Kanpur, Kharagpur, Guwahati, Roorkee and IISc, Bangalore as participating institutions with a total outlay of Rs. 20.47 crores.

              In the first phase of the NPTEL, the Project had covered core courses of under-graduate curriculum in five major engineering branches, namely, Civil, Computer Science, Electrical, Electronics & Communication and Mechanical Engineering. These were supplemented by the core science and management programme, languages and other basic courses such as electronics, numerical methods etc. which are mandatory for all engineering students. The model AICTE curricula in engineering adapted by major affiliating universities, such as Anna University, Vishveshwarya Technical University and Jawaharlal Nehru Technological University were used to design the course content.
              
              The Programme was formally launched by the erstwhile Education Minister, Late Shri Arjun Singh, on September 3, 2006 in IIT Madras. The contents are currently made available to everyone in India and abroad through the website http://nptel.ac.in maintained by IIT Madras. The video lectures are currently being broadcast through the Eklavya channel and approximately 50 engineering institutions in the country have set up their own receivers with a dish antenna to receive the signal in their own campuses.
              
              More than 500 faculties are expected to participate in the Project and the beneficiaries of the Programme will be all engineering and physical sciences under-graduates/post graduates in the country; all teachers/faculties in science and engineering Universities in India. The goal of the Project is to build on the programme launched on 03.09.2006 in NPTEL Phase-I and create on-line course contents and interactions between faculty members in science and engineering using the best academics in India.</p>  
          </div>
          <div >
            <h1 style="color:black;">3. Indian National Digital Library in Engineering, Science & Technology (INDEST-AICTE) Consortium</h1>
            <p style="color:black;"> The Ministry of Education has set up the “Indian National Digital Library in Engineering Sciences and Technology (INDEST-AICTE) Consortium”. The Ministry provides funds for access to electronic resources and databases to centrally funded institutions. The benefit of consortia-based subscription to electronic resources is also extended to all educational institutions under its open-ended proposition. AICTE approved Govt./Govt. aided engineering colleges are getting access to selected electronic resources with support from the AICTE and number of other engineering colleges and institutions have already joined the consortium on their own. A mechanism is in place wherein this consortium takes advantage of collective bargaining and passes on the benefit of e-journals to subscribing members. (indest.iitd.ac.in)
            </p>
           </div>
           <div >
            <h1 style="color:black;"> 4. Technology Development Mission</h1>
            <p style="color:black;"> In 1993, the Technology Development Missions (TDM) started at all the IITs and IISc with the objective of a concerted national effort towards technology development with direct involvement and participation of industries. Several mission projects, with well-defined goals, milestones and deliverables were identified in areas of national importance. Two or more academic institutions and industries collaborated in most of the mission projects. The funding to these mission areas was as follows:
           
              Ministry of Education (MoE) funded these projects to the tune of Rs. 50.00 crores.
              
              Industry participants contributed about Rs. 9.00 crores in addition to support in terms of equipment, components, manpower and hardware etc. worth Rs. 15.00 crores.
              
              The most important aspect of this mission was a significant effort on the part of the Government in encouraging industry-institute interaction as well as assisting industry in developing the latest technology. This was first time that mission oriented programs were successfully taken jointly with industry.
              
              The TDM-I was successful and highly appreciated in the National Steering Committee meeting of the Planning Commission held on August 06, 1999 at New Delhi. TDM-I resulted in development and transfer of several technologies to Industry viz.
   
             
            </p>
           </div>
           <div >
            <h1 style="color:black;"> 5.Direct Admission of Students Abroad</h1>
            <p style="color:black;">This scheme of the MoE is aimed at helping seekers of global technical education become a part of the high quality technical education provided at Indian institutions. The scheme, mainly aimed at seeking admissions for the Engineering Programs, was started in 2001 and since then, it has offered admission to scores of undergraduate students in NITs, IIITs and other premier technical institutions in the country. The Scheme is applicable to NRIs/PIOs as well as foreign nationals.

              The Government of India has entrusted the coordination of the admission process under DASA scheme to NITK, Surathkal from academic year 2010-11.
   
             
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

<A href="https://www.linkedin.com/in/rishabh-singh-78b1b61a5/"><img src="link.png" width="2%" height="4%" ></A></p></div>
        </footer> 
              
    </body>
</html>