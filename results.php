<?php

session_start();

if (!isset($_SESSION['form_data'])) {
  header('Location: scholarshipdir.php');
}

$formdata = $_SESSION['form_data'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Discover Scholarships - Find scholarships for college</title>
  <meta content="Find scholarships to help pay for college using our free matching algorithm" name="description">
  <meta content="discoverscholarships, discoverscholarships.com, scholarships, scholarships for high school students, scholarship, college scholarships, scholarship search, scholarships for college, scholarships com, scholarships.com, discover scholarships, discoverscholarships.org, free scholarships, scholarship finder, scholarships and grants, grants and scholarships, college financial aid, scholarship websites, financial aid for college, scholarship opportunities, student scholarships, free financial aid, internship finder, scholarship search engine, private scholarships, college scholarship, scholarships search, fin aid, online scholarships, best scholarship websites, fast financial aid, college grants and scholarships, financial aid student loans, national scholarships, scholarship for college, free college scholarships, scholarship money, scholarship for college students, scholarships for students, apply for scholarships online, grants and scholarships for college, college scholarship search" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-inner-pages">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">support@discoverscholarships.com</a></li>
          <li><i class="icofont-phone"></i> +1 703 303 7937</li>
        </ul>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html#header" class="scrollto">Discover Scholarships</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html#header">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li class="active"><a href="index.html#services">Services</a></li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="index.html#contact">Contact</a></li>

        </ul>
      </nav>

    </div>
  </header>

  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Scholarship Results</li>
        </ol>
        <h2>Scholarship Results</h2>

      </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        
        <h2 class=" text-center animate__animated animate__fadeInDown">Scholarship Matches</h2>

        <table class="table" data-aos="fade-up">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Scholarship</th>
              <th scope="col">Award</th>
              <th scope="col">Deadline</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              require 'db_search.php';
              require 'create_file.php';
              write_file($scholarindexes);
            ?>
          </tbody>
        </table>


      </div>

    </section>

  </main>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              12683 Autumn Crest Dr. <br>
              Herndon, VA 20171<br>
              United States <br><br>
              <strong>Phone:</strong> +1 703 303 7937<br>
              <strong>Email:</strong> support@discoverscholarships.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Anyar</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Discover Scholarships</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>