<?php

function write_file($array) {

    require 'db_connection.php';

    foreach ($array as $id) {
        if (file_exists("scholarships/" . $id * 7 . $id . ".php")) {}
        else {
            $file = fopen("scholarships/" . $id * 7 . $id . ".php", "w") or die("Unable to open file!");
            $txt = "
<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='utf-8'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>

<title>Discover Scholarships - Find scholarships for college</title>
<meta content='Find scholarships to help pay for college using our free matching algorithm' name='description'>
<meta content='discoverscholarships, discoverscholarships.com, scholarships, scholarships for high school students, scholarship, college scholarships, scholarship search, scholarships for college, scholarships com, scholarships.com, discover scholarships, discoverscholarships.org, free scholarships, scholarship finder, scholarships and grants, grants and scholarships, college financial aid, scholarship websites, financial aid for college, scholarship opportunities, student scholarships, free financial aid, internship finder, scholarship search engine, private scholarships, college scholarship, scholarships search, fin aid, online scholarships, best scholarship websites, fast financial aid, college grants and scholarships, financial aid student loans, national scholarships, scholarship for college, free college scholarships, scholarship money, scholarship for college students, scholarships for students, apply for scholarships online, grants and scholarships for college, college scholarship search' name='keywords'>

<!-- Favicons -->
<link href='../assets/img/favicon.png' rel='icon'>
<link href='../assets/img/apple-touch-icon.png' rel='apple-touch-icon'>

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>

<!-- Vendor CSS Files -->
<link href='../assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
<link href='../assets/vendor/icofont/icofont.min.css' rel='stylesheet'>
<link href='../assets/vendor/boxicons/css/boxicons.min.css' rel='stylesheet'>
<link href='../assets/vendor/animate.css/animate.min.css' rel='stylesheet'>
<link href='../assets/vendor/remixicon/remixicon.css' rel='stylesheet'>
<link href='../assets/vendor/owl.carousel/assets/owl.carousel.min.css' rel='stylesheet'>
<link href='../assets/vendor/venobox/venobox.css' rel='stylesheet'>
<link href='../assets/vendor/aos/aos.css' rel='stylesheet'>

<!-- Template Main CSS File -->
<link href='../assets/css/style.css' rel='stylesheet'>

<!-- =======================================================
* Template Name: Anyar - v2.1.0
* Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id='topbar' class='d-none d-lg-flex align-items-center fixed-top topbar-inner-pages'>
    <div class='container d-flex align-items-center'>
    <div class='contact-info mr-auto'>
        <ul>
            <li><i class='icofont-envelope'></i><a href='mailto:contact@example.com'>support@discoverscholarships.com</a></li>
            <li><i class='icofont-phone'></i> +1 703 303 7937</li>
        </ul>
    </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id='header' class='fixed-top header-inner-pages'>
    <div class='container d-flex align-items-center'>

    <h1 class='logo mr-auto'><a href='../index.html#header' class='scrollto'>Discover Scholarships</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href='index.html#header' class='logo mr-auto scrollto'><img src='../assets/img/logo.png' alt='' class='img-fluid'></a>-->

    <nav class='nav-menu d-none d-lg-block'>
        <ul>
            <li><a href='../index.html#header'>Home</a></li>
            <li><a href='../index.html#about'>About</a></li>
            <li class='active'><a href='../index.html#services'>Services</a></li>
            <li><a href='../index.html#team'>Team</a></li>
            <li><a href='../index.html#contact'>Contact</a></li>
        </ul>
    </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<main id='main'>

    <!-- ======= Breadcrumbs ======= -->
    <section id='breadcrumbs' class='breadcrumbs'>
        <div class='container'>
        
            <ol>
            <li><a href='../index.html'>Home</a></li>
            <li>Scholarship Results</li>
            </ol>
            <h2>Scholarship Results</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id='portfolio-details' class='portfolio-details'>
        <div class='container'>
            ";

            fwrite($file, $txt);


            $sql = "SELECT scholarshipname, website, DATE_FORMAT(`deadline`, '%M %d, %Y') as 'date', award, numberofawards, `description` FROM `scholarship-info` WHERE `scholar-index` = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $name = $row['scholarshipname']; $website = $row['website']; $deadline = $row['date']; $award = $row['award']; $numberofawards = $row['numberofawards']; $description = $row['description'];
            
            $txt = "
            <h1 class='animate__animated animate__fadeInDown'>$name</h1>
            <div class='row'>
                <div class='col'>
                    $$award
                </div>
                <div class='col'>
                    $deadline
                </div>
                <div class='col'>
                    Awards available: $numberofawards
                </div>
            </div>
            <div>
                <a href='$website' class='btn-get-started animate__animated animate__fadeInUp scrollto'>APPLY NOW</a>
            </div>
            <hr class='mb-3'>
            <div>
                <h4>Scholarship Match Criteria</h4>
            </div>
            <hr class='mb-3'>
            <div>
                <h4>Description</h4>
                <p>$description</p>
            </div>
            ";
            fwrite($file, $txt);


            $txt = "
        </div> <!-- Container -->

    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id='footer'>

    <div class='container'>
    <div class='copyright'>
        &copy; Copyright <strong><span>Discover Scholarships</span></strong>. All Rights Reserved
    </div>
    </div>
</footer><!-- End Footer -->

<a href='#' class='back-to-top'><i class='ri-arrow-up-line'></i></a>
<div id='preloader'></div>

<!-- Vendor JS Files -->
<script src='../assets/vendor/jquery/jquery.min.js'></script>
<script src='../assets/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
<script src='../assets/vendor/jquery.easing/jquery.easing.min.js'></script>
<script src='../assets/vendor/php-email-form/validate.js'></script>
<script src='../assets/vendor/owl.carousel/owl.carousel.min.js'></script>
<script src='../assets/vendor/venobox/venobox.min.js'></script>
<script src='../assets/vendor/isotope-layout/isotope.pkgd.min.js'></script>
<script src='../assets/vendor/aos/aos.js'></script>

<!-- Template Main JS File -->
<script src='../assets/js/main.js'></script>

</body>

</html>
            ";
            fwrite($file, $txt);
            fclose($file);
        }
    }
    $conn->close();
}


?>