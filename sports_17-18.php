<?php 
include("conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stella Mary's College of Engineering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="icon">
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Preloader -->

  <div class="preloader">
    <img src="https://webdocs.pages.dev/assets/img/animlogo1.gif" alt="Loading...">
  </div>

  <style>
       /* Preloader Styles */
       .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Make sure it's on top of everything */
    }

  </style>
  
  <script>
    window.onload = function() {
        // Hide the preloader when the page is fully loaded
        document.querySelector('.preloader').style.display = 'none';
    }
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">SMCE</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.php">Management</a></li>
              <li><a href="principaldesk.php">Principal's Desk</a></li>
              <li><a href="oc.php">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.php">Strategic Plan</a></li>
              <li><a href="codeofconduct.php">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.php">mandatory Disclosure</a></li>
              <li><a href="#">Facts & Figures</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.php">Civil Engineering</a></li>
                  <li><a href="cse.php">Computer Science and Engineering</a></li>
                  <li><a href="ece.php">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.php">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.php">Mechanical Engineering</a></li>
                  <li><a href="aids.php">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.php">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.php">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.php">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="mba.php"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="mba.php">Operations Management</a></li>
                        <li><a href="mba.php">Human Resources Management</a></li>
                        <li><a href="mba.php">Finncial Management</a></li>
                        <li><a href="mba.php">Business Analytics Management</a></li>
                        <li><a href="mba.php">Marketing Management</a></li>
                        <li><a href="mba.php">Logistics & Supply Chain Management</a></li>
                      </ul>  
                  </ul>  
              <li><a href="placement_home.php">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.php">Team & Code of Ethics</a></li>
                <li><a href="research_publications.php">Publications</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.html">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.php">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.php">Sports</a></li>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Clubs & Cells</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="culturalclub.php">Cultural Club</a></li>
                <li><a href="#">Literary Club</a></li>
                <li><a href="#">Yoga Club</a></li>
                <li><a href="cfi.php">Centre For Innovation</a></li>
                <li><a href="#">National Cadet Corps</a></li>
                <li><a href="#">Juniour Red Cross</a></li>
                <li><a href="#">Grievance Redressal Cell</a></li>
                <li><a href="#">Anti Ragging</a></li>
                <li><a href="#">Entrepreneurship Development Cell</a></li>
                <li><a href="#">Environmental Club</a></li>
                <li><a href="#">Institution Innovation Council</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="research_codeofethics.php">Research and Development Cell</a></li>
                <li><a href="placement_home.php">Career Guidance and Placement Training Cell</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="mediacell.php">Media Cell</a></li>
              </ul>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="https://www.infomirrorscloud.com/smce.webopac/Imt_frm_User_Login.aspx">Library</a></li>
              <li><a href="https://nptel.ac.in">NPTEL</a></li>
              <li><a href="https://delnet.in">DELNET</a></li>
              <li><a href="alumni.php">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.php">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.php">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <header class="section-header">
                <h2>Report 2017-2018</h2>
                
              </header>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">
  
        
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/chess.jpg" class="img-fluid" alt=""></div>
                <span class="post-date">23 February 2018</span>
                <p class="text-justify">Stella Mary’s College of Engineering organized the Fourth Kanyakumari International FIDE Rate (Below 1500) Chess Tournament</p>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/ing.jpg" class="img-fluid" alt=""></div>
                <span class="post-date">11 December 2017</span>
            <P class="text-justify">Stella Mary’s College of Engineering organized the Refresher Training Programme for PD’S & PET of Government & Aided Schools of Kanyakumari District</P>    
            </div>
            </div>
  
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/schooling.jpg" class="img-fluid" alt=""></div>
                <span class="post-date">30 November 2017</span>
                <p class="text-justify">Stella Mary’s College of Engineering organized the District level Tug of War Tournament</p>    
            </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/chess.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">25 November 2017</span>
                  <p class="text-justify">Stella Mary’s College of Engineering organized the Kanayakumari District level Chess Tournament</p>    
              </div>
              </div>
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/tt.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">11 November 2017</span>
                  <p class="text-justify">Stella Mary’s College of Engineering organized the State level Table Tennis Tournament</p>    
              </div>
              </div>

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/ttpz.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">20,21 September 2017</span>
                  <p class="text-justify">Stella Mary’s Men Table Tennis team won the Gold Medal in the Anna University,19th zone Table Tennis Tournament held at Stella Mary’s College of Engineering</p>    
              </div>
              </div>

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/tting.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">20,21 September 2017</span>
                  <p class="text-justify">Stella Mary’s College of Engineering organized the Anna University,19th zone Men & Women table Tennis Tournament </p>    
              </div>
              </div>
              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="https://webdocs.pages.dev/assets/img/sports/2017-18/med.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">07,08 Auguest 2017</span>
                  <p class="text-justify">Stella Mary’s Men Ball Badminton team won the Silver Medal in the Anna University,19th zone Ball Badminton Tournament held at Annai Vailankanni College of Engineering during</p>    
              </div>
              </div>


              

              

            

            
  
          </div>
  
        </div>
  
      </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Stella Mary's College of Engineering</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://stellamaryscoe.edu.in/">SMCE Media Cell</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>