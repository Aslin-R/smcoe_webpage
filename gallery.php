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
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.html">Management</a></li>
              <li><a href="principaldesk.html">Principal's Desk</a></li>
              <li><a href="oc.html">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.html">Strategic Plan</a></li>
              <li><a href="codeofconduct.html">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.html">mandatory Disclosure</a></li>
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
              <li><a href="placement_home.html">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.html">Team & Code of Ethics</a></li>
                <li><a href="research_publications.html">Publications</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.html">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.html">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.html">Sports</a></li>
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
                <li><a href="research_codeofethics.html">Research and Development Cell</a></li>
                <li><a href="placement_home.html">Career Guidance and Placement Training Cell</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="mediacell.html">Media Cell</a></li>
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
          <li><a class="nav-link scrollto" href="placement_home.html">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.html">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.html">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    

    <section class="inner-page">
    

      
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="row gy-4 justify-content-center">

      <div class="col-xl-3 col-lg-4 col-md-6">
       
        <div class="gallery-item h-100">
          
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" title="Computer Science and Engineering" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i> </a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/aids/AIDS.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="https://webdocs.pages.dev/assets/img/CSE/cse.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-10.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-11.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-12.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-13.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-13.jpg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-14.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-15.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="assets/img/gallery/gallery-16.jpg" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="assets/img/gallery/gallery-16.jpg" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Gallery Item -->

    </div>

  </div>
</section><!-- End Gallery Section -->


    </section>

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