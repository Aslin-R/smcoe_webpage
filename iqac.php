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
   <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Internal Quality Assurance Cell (IQAC)</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Internal Quality Assurance Cell (IQAC)</li>
          </ol>
        </div>-->

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="IQAC">
      <div class="container text-center">
        <br>
        <h2>Internal Quality Assurance Cell (IQAC)</h2>
      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->

    <div class="container" data-aos="fade-up">

      <div class="row text-justify">
          <h3> Overview</h3>
          <p class="text-justify">The National Assessment and Accreditation Council (NAAC), Bangalore proposes that every accredited institution should establish an Internal Quality Assurance Cell (IQAC) as a post-accreditation quality sustenance measure, in pursuance of its action plan in terms of performance evaluation, assessment and accreditation and quality up-gradation of institutions of higher education. The IQAC is a part of the institution’s system and work towards realisation of the goals of quality enhancement and sustenance, since quality enhancement is a continuous process. The key task of the IQAC is to evolve a system for conscious, consistent and catalytic improvement in the overall performance of institutions. IQAC will channelize all efforts and measures of the institution towards promoting its holistic academic excellence, during the post-accreditation period.
          </p>
          <p class="text-justify">The first step towards internalization and institutionalization of quality enhancement initiatives is the work of the IQAC. In all the constituents of the institution, its success depends upon the sense of belongingness and participation that it can implant. The IQAC will be a facilitative and participative voluntary system of the institution and it also has the potential to become a vehicle for steering in quality enhancement in terms of working out planned interventionist strategies thereby removing deficiencies and enhancing quality.</p>
        </div>
        
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container text-justify" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Vision & MISSION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Functions & Benifits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Meeting Minutes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Accreditation Certificates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-8">NAAC SSR & AQAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Best Practice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Annual Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">institutional Distinctiveness</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <li>To evolve a system to improve the academic and administrative performance of the institution for a conscious, consistent and catalytic action.</li>  
                <li>To endorse measures essential for the quality enhancement of the institutional functioning through internalization of quality culture and institutionalization of best practices</li>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
              <li>Making sure of a well-timed, proficient and progressive performance of academic, administrative and financial tasks.</li>  
              <li>To significance and quality of academic an research programmes.</li>
              <li>Equitable access to and affordability of academic programmes for various sections of society.</li>
              <li>Optimizing and combining modern methods of teaching and learning.</li>
              <li>The credibility of evaluation procedures.</li>
              <li>Making certain the sufficiency, maintenance and proper allotment of support structure and services.</li>
              <li>Knowledge sharing with other institutions in India and abroad, in the field of research and networking.</li>

              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row ">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>People</h2>
            <p></p>
          </div>
  
          <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/faculty/1278.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1278">Dr.R.Suresh Premil Kumar</a></h4>
                  <h4>Chairperson</h4>
                  <span>Principal</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/faculty/1271.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1271">Dr.J.Jenix Rino</a></h4>
                  <h4>Management Representative</h4>
                  <span>Director</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1054">Dr.Ezhil Vignesh</a></h4>
                  <h4>Co-ordinator</h4>
                  <span>Associate Professor / EEE</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1131">Dr.R.K.Madhumathi</a></h4>
                  <h4>Secretary</h4>
                  <span>Joint Director - Research & Assistant Professor /CIVIL</span>
                </div>
              </div>
            </div>

            <div class="section-title" data-aos="fade-up">
              <h2>Administrative Members</h2>
              <p></p>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/faculty/1079.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1079">Dr.Michael Raj</a></h4>
                  <span>Head & Associate Professor / MECH</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="https://webdocs.pages.dev/assets/img/faculty/1002.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="faculty.php?staff_id=1002">Dr.F.R.Shiny Malar</a></h4>
                  <span>Head & Professor / CSE</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/faculty/1035.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="faculty.php?staff_id=1035">Mr.N.Michael Franklin</a></h4>
                    <span>Head & Assistant Professor / ECE</span>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="faculty.php?staff_id=1267">Dr.A.Gayathri</a></h4>
                    <span>Head & Assistant Professor / EEE</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="faculty.php?staff_id=1093">Mrs.A.L.Merlin Sheela</a></h4>
                    <span>Assistant Professor / S&H</span>
                  </div>
                </div>
              </div>


              <div class="section-title" data-aos="fade-up">
                <h2>Local Society Member</h2>
                <p></p>
              </div>

              <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Dr.M.Marsaline Beno</a></h4>
                    <span>Dean Academics, St.Xavier Catholic College of Engineering, Nagercoil.</span>
                  </div>
                </div>
              </div>

              <div class="section-title" data-aos="fade-up">
                <h2>Alumni</h2>
                <p></p>
              </div>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mrs.Aswini Kumari.AS</a></h4>
                    <span>Associate Engineer, Rising Star Mobile India Pvt.Ltd, Chennai.</span>
                  </div>
                </div>
              </div>

      


              <div class="section-title" data-aos="fade-up">
                <h2>Industrialist</h2>
                <p></p>
              </div>


              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img align-items-center">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mr.A.Jebresh Isaac</a></h4>
                    <span>Managing Director, Jebby Engineers, Channel Street, Karavillai.</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mr.Siva Kumar</a></h4>
                    <span>Managing Director, Aruna Industries, Padanthalamoodu.</span>
                  </div>
                </div>
              </div>
           

              <div class="section-title" data-aos="fade-up">
                <h2>Students Members</h2>
                <p></p>
              </div>


              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mr.Roshan Lal</a></h4>
                    <span>CSE-IV</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="https://webdocs.pages.dev/assets/img/CIVIL/teaching/MADHUMATHI.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Ms.XXXXXXX</a></h4>
                    <span>XXXXXX</span>
                  </div>
                </div>
              </div>




          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Contact us</h2>
            
          </div>
  
          <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/CIVIL/SATHEESH.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href="tel:+916382490019"><i  class="ri-phone-line"></i></a>
                    <a href="mailto:iqac@stellamaryscoe.edu.in"><i class="ri-mail-send-line"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="">Dr.Ezhil Vignesh</a></h4>
                  <span>IQAC Coordinator, Associate Professor / EEE</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="col-md-10">
  
                <!--slider start here-->
          
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="https://webdocs.pages.dev/assets/docs/cfi/sih2022/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                  <!--end here-->
          
              </div><!-- End Portfolio Section -->
              
              
             
          
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">



    <div class="row">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Meeting</h3>
        <div class="resume-item">
          <h4></h4>
          <h5>The functions of the IQAC are,</h5>
          
          <ul>
            <li> Developing and applying quality benchmarks/parameters for various academic and administrative activities of the institution.</li>
            <li> Making possible the creation of a learner-centric environment favourable for quality education and also the very much needed faculty maturation to take up the required knowledge and technology for participatory teaching and learning process. </li>
            <li> Making arrangements for feedback response from students and parents on quality-related institutional processes.</li>
            <li> Disseminating the information on various quality parameters of higher education.</li>
            <li> Organizing inter and intra institutional workshops, seminars that are focussed on quality based themes and the promotion of quality circles.</li>
         <li>Documenting the different programmes/activities that lead to quality improvement.</li>
         <li>Acting as a nodal agency of the Institution that coordinates quality-related activities.</li>
         <li>Developing and maintaining the institutional database through MIS for the purpose of keeping up /enhancing the quality of the institution.</li>
         <li>Developing Quality Culture in the institution.</li>
         <li>Preparing the Annual Quality Assurance Report (AQAR) as per NAAC guidelines and submit to NAAC.</li>
          </ul>
        </div>
        <div class="resume-item">
        
          <h5>Benefits</h5>
          
          <ul>
            <li>Ensuring a heightened level of clarity and focus in the institutional functioning towards quality enhancement.</li>
            <li>Ensuring internalization of the quality culture.</li>
            <li>Ensuring improvement and synchronization among various activities of the institution and institutionalize all best practices.</li>
            <li>Providing a strong footing for decision-making to improve institutional functioning.</li>
            <li>Building an systematic procedure of documentation and internal communication.</li>
            </ul>
        </div>
        
      
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->


            </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
              <div class="row">
                

                <section id="features" class="features">
                  <div class="container">
            
                    <div class="section-title" data-aos="fade-up">
                      <h2>Meeting Minutes</h2>
                      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                    </div>
            
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                      <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                          <h3><a href="/Users/partheebanpon/Documents/GitHub/smcoe_webpage/assets/docs/iqac/2016-17-EVEN.pdf">2016-17 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                          <h3><a href="">2016-17 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                          <h3><a href="">2017-18 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                          <h3><a href="">2017-18 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                          <h3><a href="">2018-19 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                          <h3><a href="">2018-19 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                          <h3><a href="">2019-20 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                          <h3><a href="">2019-20 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                          <h3><a href="">2020-21 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                          <h3><a href="">2020-21 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Even</a></h3>
                        </div>
                      </div>

                    </div>
            
                  </div>
                </section>


                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-7">
               


              <div class="row">
                

                <section id="features" class="features">
                  <div class="container">
            
                    <div class="section-title" data-aos="fade-up">
                      <h2>Accreditation Certificates</h2>
                      <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                    </div>
            
                    <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                      <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                          <h3><a href="">NAAC 2020</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                          <h3><a href="">NBA 2022</a></h3>
                        </div>
                      </div>
                      <!--<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                          <h3><a href="">2017-18 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                          <h3><a href="">2017-18 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                          <h3><a href="">2018-19 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                          <h3><a href="">2018-19 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                          <h3><a href="">2019-20 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                          <h3><a href="">2019-20 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                          <h3><a href="">2020-21 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                          <h3><a href="">2020-21 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2021-22 Even</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Odd</a></h3>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                          <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                          <h3><a href="">2022-23 Even</a></h3>
                        </div>
                      </div>-->

                    </div>
            
                  </div>
                </section>


                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>


              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                

                  <section id="features" class="features">
                    <div class="container">
              
                      <div class="section-title" data-aos="fade-up">
                        <h2>SSR & AQAR</h2>
                        <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                      </div>
              
                      <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-md-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">NAAC SSR 2020</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                            <h3><a href="">NAAC AQAR 2022</a></h3>
                          </div>
                        </div>
                        <!--<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                            <h3><a href="">2017-18 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                            <h3><a href="">2017-18 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
                            <h3><a href="">2018-19 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ffa76e;"></i>
                            <h3><a href="">2018-19 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">2019-20 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #4233ff;"></i>
                            <h3><a href="">2019-20 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #b2904f;"></i>
                            <h3><a href="">2020-21 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #b20969;"></i>
                            <h3><a href="">2020-21 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2021-22 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2021-22 Even</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2022-23 Odd</a></h3>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-4">
                          <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #ff5828;"></i>
                            <h3><a href="">2022-23 Even</a></h3>
                          </div>
                        </div>-->
  
                      </div>
              
                    </div>
                  </section>
  
  
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="row">
               
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Best Practice</h2>
      <p></p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">1.TEACHING LEARNING PROCESS</h3>
        <div class="resume-item pb-1">
          <h4>Objective</h4>
          <ul>
            <li>To focus the Students and giving proper guidance to improve the innovative ideas to students through ICT tools</li>
          </ul>
        
        </div>

        <div class="resume-item pb-1">
          <h4>The Context</h4>
          <ul>
            <li>Faculties interact the students with the help of ICT tools and its an effective way to communicate the students</li>
          </ul>
       
        </div>
        <div class="resume-item pb-2">
          <h4>The Practice</h4>
          <ul>
            <li>Teaching through zoom/Google/zoho meet with power point presentations, videos, animations, etc</li>
            <li>Assignments and notes provided through Google classrooms</li>
            <li>Objective type questions and short answers are uploaded through google class room</li>
            <li>Laboratories are conducted through virtually</li>
            <li>Communication to students through Whatsapp groups</li>
            <li>Online feedback</li>
            <li>Assignment and Exam scripts are evaluated and uploaded to individual students through googleclass rooms</li>
          </ul>
       
        </div>
        <div class="resume-item pb-2">
          <h4>Evidence of success</h4>
          <ul>
            <li>Students are highly attentive in classes</li>
            <li>Performance of students are improved</li>
            <li>Easy way to identify the absentees in class and Examinations</li>
          </ul>
          
        </div>
        

        <!--<h3 class="resume-title">Education</h3>-->
        <div class="resume-item">
          <h4>Problems Encountered and Resources required</h4>
          <!--<h5>2015 - 2016</h5>
          <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
          <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
        </div>
        <div class="resume-item">
          <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
          <h5>2010 - 2014</h5>-->
          <ul>
              <li>Availability of connectivity devices for financially affected students</li>
              <li>Poor Internet connectivity for rural area students</li>
              <li>Concentration of the students will get diverted by using Electronic Devices</li>
              <li>High power consumption to connectivity devices</li>
              
              </ul>    
      </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">2.CENTER FOR INNOVATION</h3>
        <div class="resume-item">
          <h4> Objective</h4>
          <!--<h4>Senior graphic design specialist</h4>
          <h5>2019 - Present</h5>
          <p><em>Experion, New York, NY </em></p>-->
          <ul>
            <li>To develop innovative ideas, communication skill, technical skills, leadership quality and entrepreneur skill of the students</li>    
        </div>
        <div class="resume-item">
          <h4>The Context</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>To facilitate those through knowing the interest of the student and followed by mini project ideas and innovative ideas for discussion and implementation.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>The Practice</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Displaying list of mini projects</li>
            <li>Selecting the students based on the interest show towards the projects</li>
            <li>Encourage real time innovative projects</li>
            <li>Organized workshops and seminars for better understanding</li>
            <li>Encourage implant training in every semester end.</li>
            <li>Encourage NPTEL online courses</li>
            <li>Placement training are given through experts</li>
            <li>Certificate courses are conducted through MoU with startups</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Evidence and Success</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Finalist in Smart India Hackathon 2020 – Software Edition</li>
            <li>Finalist in Smart India Hackathon 2022 - Software Edition</li>
            <li>Students presents papers in journals</li>
            <li>Online event conducted to bring out students hidden talents</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Problems Encountered</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Real time projects are expensive</li>
            <li>Slow learners need to provide extra effort</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Resources required</h4>
          <!--<h5>2017 - 2018</h5>
          <p><em>Stepping Stone Advertising, New York, NY</em></p>-->
          <ul>
            <li>Interaction with industries</li>
            <li>Need more training programme to students</li>
          </ul>
        </div>
        

      </div>
   
   
</section><!-- End Resume Section -->


                </div>
              </div>
              <div class="tab-pane" id="tab-10">
                <div class="row">
                    <section id="features" class="features">
                        <div class="container">
                  
                          <div class="section-title" data-aos="fade-up">
                            <h2>Annual Report</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
                  
                          <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-md-4">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                <h3><a href="https://9ed2e945.webdocs.pages.dev/docs/iqac/Annual-Report-2020-2021.pdf">2020-2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                <h3><a href="">2021-2022</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-file-list-3-line" style="color: #e80368;"></i>
                                <h3><a href="">2022-2023</a></h3>
                              </div>
                            </div>
                            <!--<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e361ff;"></i>
                                <h3><a href="">NOVEMBER 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #47aeff;"></i>
                                <h3><a href="">APRIL 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffa76e;"></i>
                                <h3><a href="">NOVEMBER 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #11dbcf;"></i>
                                <h3><a href="">APRIL 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #4233ff;"></i>
                                <h3><a href="">NOVEMBER 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b2904f;"></i>
                                <h3><a href="">APRIL 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b20969;"></i>
                                <h3><a href="">NOVEMBER 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ff5828;"></i>
                                <h3><a href="">APRIL 2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #29cc61;"></i>
                                <h3><a href="">NOVEMBER 2021</a></h3>
                              </div>
                            </div>-->
                          </div>
                  
                        </div>
                      </section><!-- End Features Section -->
                      </div>
                      </div>
                      <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>institutional Distinctiveness</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="row">
      <div class="col-lg-12" data-aos="fade-up">
        <!--<div class="resume-item pb-1">
          <h4>Vision</h4>
          <ul>
            <li>To emerge as a premiere institution, acknowledged as a center for excellence imparting technical education, creating technocrats who can address the needs of the society through exploration and experimentation and uplift mankind.</li>
          </ul>
          <br>
        </div>

        <div class="resume-item pb-1">
          <h4>Mission</h4>
          <ul>
            <li>To provide an education that transforms students, through rigorous course-work and by providing an understanding of the needs of the society and the industry.</li>
          </ul>
          <p><em>Stella Mary’s college of Engineering provides abroad job opportunities to the candidates who deserve the offer. The management is very much keen in imparting an internationally graded technical education to the students. Our institution is located in a rural area. Many of our students are from villages. Many students belong to first graduate category. Taking this into account, our college gives more importance to enhance the skills of the students to face the global challenges. With regard to this, the institution provides</em></p>
                
        </div>-->
        <div class="resume-item pb-2">
          
          <ul>
            <li>Communication training programs to improve the communication skills and the English fluency in students.</li>
            <li>Campus training programs that help to impart a sound knowledge of technical skills in students.</li>
            <li>Training on soft skills, resume preparation, personal interviews, group discussions, through our Corporate Relations department.</li>
            </ul>
            <p><em>The Corporate Relations cell is an integral part of our institution, which ensures that the students are well trained and motivated to face campus interviews efficiently. The placement support teams take effort to organize trainings related to aptitude, soft skills, technical skills and corporate expectations to groom the students well for the interview process.</em></p>
           
        </div>
        <div class="resume-item pb-2">
          <h4>National and International Placement</h4>
          <ul>
            <li>It is our institute’s distinctiveness in bringing in recruiters from reputed companies from India and abroad placement.</li>
            <li>Performance of students are improved</li>
            <li>Easy way to identify the absentees in class and Examinations</li>
          </ul>
         <br> 
        </div>
        <div class="resume-item pb-2 text-justify">
          <h4>Memorandum of understanding</h4>
          <ul>
            <li>We had MoU with S’Hail Metals and Rassas Battery Recycling battery for recruiting our students.</li>
            <p><em>S’Hail Metals and Rassas Battery Recycling Factory are our abroad recruiters who would identify the best candidates who would be presented to them on the day of the interview process. This abroad placement has also been a source of motivation for the students who aim to get placed and the expenditure for their travel and visa is also borne by the institution. Being located in a rural area and grooming the rural students technically and skillfully to take part in international placement drives is a real challenge to the faculty involved in the research, centre for innovation and the corporate relations departments. It’s all possible through the constant motivation and support from the authorities from top order at every level. Abroad placement is a pride for the institution and a spotlight for progress towards the goal to be achieved by every student who does justice in making the best use of the study environment provided by Stella Mary’s College of Engineering.</em></p>
           </ul>
         <br> 
        </div>
        
      </div>
      
   
   
   
</section><!-- End Resume Section -->
                                  
                          
                                </div>
                              </section><!-- End Features Section -->
                              </div>
                              </div>
      </div>
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