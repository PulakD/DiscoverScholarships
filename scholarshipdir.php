<?php

include 'formvalidation.php';
 
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

  <!-- ======= Top Bar ======= -->
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
          <li>Scholarship Match</li>
        </ol>
        <h2>Scholarship Match</h2>

      </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="zoom-in">

        <div class="card border-primary">
          <div class="card-header text-white" style="background-color:rgba(6, 98, 178, 0.9);">
            <h4 class="card-title">Fill out your information:</h4>
          </div>
          <div class="card-body" style="background-color:#f7fbff;">
            <div class="mx-auto" style="width:90%;">    
                <form class="needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
                  
                  <div class="personalinfo">

                    <h4 class="mb-4">Personal Information</h4>
                    <div class='form-group row mb-4'>
                      <label class="col-sm-1 col-form-label" for="gpa">Age <span class="error">*</span></label>
                      <div class="col-sm-11">
                        <input type="number" class="form-control <?php if (isset($ageErr) && strlen($ageErr) > 0) echo "is-invalid";?>" name="age" value="<?php if (isset($age)) echo $age;?>" min="1" max="99">
                        <div class="invalid-feedback">
                          <?php if (isset($ageErr)) echo $ageErr;?>
                        </div>
                      </div>
                    </div>
                    <hr class="mb-3">
                    <div class='form-group clearfix mb-4'>
                      <label class="control-label">Race</label>
                      <span class="error">* <?php if (isset($raceErr)) echo $raceErr;?></span> <br>
                      <div class="float-left pr-5">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check1" class="custom-control-input" value="Blank" <?php if (isset($racelist) && in_array("Blank", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check1">I wish not to specify</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check2" class="custom-control-input" value="African-American" <?php if (isset($racelist) && in_array("African-American", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check2">African-American</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check3" class="custom-control-input" value="American Indian or Native Alaskan" <?php if (isset($racelist) && in_array("American Indian or Native Alaskan", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check3">American Indian or Native Alaskan</label> <br>
                        </div>
                      </div>
                      <div class="float-left">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check4" class="custom-control-input" value="Asian or Pacific Islander" <?php if (isset($racelist) && in_array("Asian or Pacific Islander", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check4">Asian or Pacific Islander</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check5" class="custom-control-input" value="Hispanic" <?php if (isset($racelist) && in_array("Hispanic", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check5">Hispanic</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="racelist[]" id="check6" class="custom-control-input" value="Caucasian" <?php if (isset($racelist) && in_array("Caucasian", $racelist)) echo "checked";?>>
                          <label class="custom-control-label" for="check6">Caucasian</label>
                        </div>
                      </div>
                    </div>
                    <hr class="mb-3">

                    <div class='form-group mb-4'>
                      <label for="gender" class="control-label">Gender</label>
                      <span class="error">*</span>
                      <select name="gender" class="form-control custom-select <?php if (isset($genderErr) && strlen($genderErr) > 0) echo "is-invalid";?>">
                        <option value="">Gender</option>
                        <option value='Male' <?php if (isset($gender) && $gender=="Male") echo "selected";?>>Male</option>
                        <option value="Female" <?php if (isset($gender) && $gender=="Female") echo "selected";?>>Female</option>
                        <option value='Transgender' <?php if (isset($gender) && $gender=="Transgender") echo "selected";?>>Transgender</option>
                        <option value="Other" <?php if (isset($gender) && $gender=="Other") echo "selected";?>>Other</option>
                      </select>
                      <div class="invalid-feedback">
                          <?php if (isset($genderErr)) echo $genderErr;?>
                      </div>
                    </div>
                    <hr>

                    <div class='form-group mb-4'>
                      <div>
                        <label class="control-label">Residency Status</label>
                        <span class="error">* <?php if (isset($citizenstatusErr)) echo $citizenstatusErr;?></span>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" id="uscitizen" name="citizenstatus" value="U.S. Citizen" <?php if (isset($citizenstatus) && $citizenstatus=="U.S. Citizen") echo "checked";?>>
                        <label class="custom-control-label" for="uscitizen">U.S. Citizen</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" id="uspermres" name="citizenstatus" value="U.S. Permanent Resident" <?php if (isset($citizenstatus) && $citizenstatus=="U.S. Permanent Resident") echo "checked";?>>
                        <label class="custom-control-label" for="uspermres">U.S. Permanent Resident</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" id="residencyother" name="citizenstatus" value="Other" <?php if (isset($citizenstatus) && $citizenstatus=="Other") echo "checked";?>>
                        <label class="custom-control-label" for="residencyother">Other</label>
                      </div>
                    </div>
                    <hr>

                    <div class='form-group mb-4'>
                      <label class="control-label" for="state">State of Residence</label>
                      <span class="error">*</span>
                      <select class="form-control custom-select <?php if (isset($stateErr) && strlen($stateErr) > 0) echo "is-invalid";?>" name="state">
                        <option value="">State</option>
                        <option value="Alabama" <?php if (isset($state) && $state=="Alabama") echo "selected";?>>Alabama</option>
                        <option value="Alaska" <?php if (isset($state) && $state=="Alaska") echo "selected";?>>Alaska</option>
                        <option value="Arizona" <?php if (isset($state) && $state=="Arizona") echo "selected";?>>Arizona</option>
                        <option value="Arkansas" <?php if (isset($state) && $state=="Arkansas") echo "selected";?>>Arkansas</option>
                        <option value="California" <?php if (isset($state) && $state=="California") echo "selected";?>>California</option>
                        <option value="Colorado" <?php if (isset($state) && $state=="Colorado") echo "selected";?>>Colorado</option>
                        <option value="Connecticut" <?php if (isset($state) && $state=="Connecticut") echo "selected";?>>Connecticut</option>
                        <option value="Delaware" <?php if (isset($state) && $state=="Delaware") echo "selected";?>>Delaware</option>
                        <option value="Florida <?php if (isset($state) && $state=="Florida") echo "selected";?>">Florida</option>
                        <option value="Georgia" <?php if (isset($state) && $state=="Georgia") echo "selected";?>>Georgia</option>
                        <option value="Hawaii" <?php if (isset($state) && $state=="Hawaii") echo "selected";?>>Hawaii</option>
                        <option value="Idaho" <?php if (isset($state) && $state=="Idaho") echo "selected";?>>Idaho</option>
                        <option value="Illinois" <?php if (isset($state) && $state=="Illinois") echo "selected";?>>Illinois</option>
                        <option value="Indiana" <?php if (isset($state) && $state=="Indiana") echo "selected";?>>Indiana</option>
                        <option value="Iowa" <?php if (isset($state) && $state=="Iowa") echo "selected";?>>Iowa</option>
                        <option value="Kansas" <?php if (isset($state) && $state=="Kansas") echo "selected";?>>Kansas</option>
                        <option value="Kentucky" <?php if (isset($state) && $state=="Kentucky") echo "selected";?>>Kentucky</option>
                        <option value="Louisiana" <?php if (isset($state) && $state=="Louisiana") echo "selected";?>>Louisiana</option>
                        <option value="Maine" <?php if (isset($state) && $state=="Maine") echo "selected";?>>Maine</option>
                        <option value="Maryland" <?php if (isset($state) && $state=="Maryland") echo "selected";?>>Maryland</option>
                        <option value="Massachusetts" <?php if (isset($state) && $state=="Massachusetts") echo "selected";?>>Massachusetts</option>
                        <option value="Michigan" <?php if (isset($state) && $state=="Michigan") echo "selected";?>>Michigan</option>
                        <option value="Minnesota" <?php if (isset($state) && $state=="Minnesota") echo "selected";?>>Minnesota</option>
                        <option value="Mississippi" <?php if (isset($state) && $state=="Mississippi") echo "selected";?>>Mississippi</option>
                        <option value="Missouri" <?php if (isset($state) && $state=="Missouri") echo "selected";?>>Missouri</option>
                        <option value="Montana" <?php if (isset($state) && $state=="Montana") echo "selected";?>>Montana</option>
                        <option value="Nebraska" <?php if (isset($state) && $state=="Nebraska") echo "selected";?>>Nebraska</option>
                        <option value="Nevada" <?php if (isset($state) && $state=="Nevada") echo "selected";?>>Nevada</option>
                        <option value="Hampshire" <?php if (isset($state) && $state=="New Hampshire") echo "selected";?>>New Hampshire</option>
                        <option value="New Jersey" <?php if (isset($state) && $state=="New Jersey") echo "selected";?>>New Jersey</option>
                        <option value="New Mexico" <?php if (isset($state) && $state=="New Mexico") echo "selected";?>>New Mexico</option>
                        <option value="New York" <?php if (isset($state) && $state=="New York") echo "selected";?>>New York</option>
                        <option value="North Carolina" <?php if (isset($state) && $state=="North Carolina") echo "selected";?>>North Carolina</option>
                        <option value="North Dakota" <?php if (isset($state) && $state=="North Dakota") echo "selected";?>>North Dakota</option>
                        <option value="Ohio" <?php if (isset($state) && $state=="Ohio") echo "selected";?>>Ohio</option>
                        <option value="Oklahoma" <?php if (isset($state) && $state=="Oklahoma") echo "selected";?>>Oklahoma</option>
                        <option value="Oregon" <?php if (isset($state) && $state=="Oregon") echo "selected";?>>Oregon</option>
                        <option value="Pennsylvania" <?php if (isset($state) && $state=="Pennsylvania") echo "selected";?>>Pennsylvania</option>
                        <option value="Rhode Island" <?php if (isset($state) && $state=="Rhode Island") echo "selected";?>>Rhode Island</option>
                        <option value="South Carolina" <?php if (isset($state) && $state=="South Carolina") echo "selected";?>>South Carolina</option>
                        <option value="South Dakota" <?php if (isset($state) && $state=="South Dakota") echo "selected";?>>South Dakota</option>
                        <option value="Tennessee" <?php if (isset($state) && $state=="Tennessee") echo "selected";?>>Tennessee</option>
                        <option value="Texas" <?php if (isset($state) && $state=="Texas") echo "selected";?>>Texas</option>
                        <option value="Utah" <?php if (isset($state) && $state=="Utah") echo "selected";?>>Utah</option>
                        <option value="Vermont" <?php if (isset($state) && $state=="Vermont") echo "selected";?>>Vermont</option>
                        <option value="Virginia" <?php if (isset($state) && $state=="Virginia") echo "selected";?>>Virginia</option>
                        <option value="Washington" <?php if (isset($state) && $state=="Washington") echo "selected";?>>Washington</option>
                        <option value="West Virginia" <?php if (isset($state) && $state=="West Virginia") echo "selected";?>>West Virginia</option>
                        <option value="Wisconsin" <?php if (isset($state) && $state=="Wisconsin") echo "selected";?>>Wisconsin</option>
                        <option value="Wyoming" <?php if (isset($state) && $state=="Wyoming") echo "selected";?>>Wyoming</option>
                      </select>
                      <div class="invalid-feedback">
                          <?php if (isset($stateErr)) echo $stateErr;?>
                      </div>
                    </div>
                    <hr>

                    <div class='form-group mb-4'>
                      <div>  
                        <label class="control-label">Type of schooling</label>
                        <span class="error">* <?php if (isset($schooltypeErr)) echo $schooltypeErr;?></span>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class='custom-control-input' type="radio" id="publicschool" name="schooltype" value="Public" <?php if (isset($schooltype) && $schooltype=="Public") echo "checked";?>>
                        <label class="custom-control-label" for="publicschool">Public</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class='custom-control-input' type="radio" id="privateschool" name="schooltype" value="Private" <?php if (isset($schooltype) && $schooltype=="Private") echo "checked";?>>
                        <label class="custom-control-label" for="privateschool">Private</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input class='custom-control-input' type="radio" id="homeschool" name="schooltype" value="Homeschool" <?php if (isset($schooltype) && $schooltype=="Homeschool") echo "checked";?>>
                        <label class="custom-control-label" for="homeschool">Homeschool</label>
                      </div>
                    </div>
                    <hr>

                    <div class='form-group mb-4'>
                      <label class="control-label">High School Grade</label>
                      <span class="error">*</span>
                      <select class="form-control custom-select <?php if (isset($gradeErr) && strlen($gradeErr) > 0) echo "is-invalid";?>" name="grade">
                        <option value="">Grade</option>
                        <option value="9" <?php if (isset($grade) && $grade=="9") echo "selected";?>>9</option>
                        <option value="10" <?php if (isset($grade) && $grade=="10") echo "selected";?>>10</option>
                        <option value="11" <?php if (isset($grade) && $grade=="11") echo "selected";?>>11</option>
                        <option value="12" <?php if (isset($grade) && $grade=="12") echo "selected";?>>12</option>
                      </select>
                      <div class="invalid-feedback">
                          <?php if (isset($gradeErr)) echo $gradeErr;?>
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary" id="next-btn">Next</button>

                  </div>
                  
                  <!-- Academic Information -->
                  <div class="academicinfo">

                    <h4 class="mb-4">Academic Information</h4>
                    <div class='form-group row mb-4'>
                      <label class="col-sm-4 col-form-label" for="gpa">GPA (Unweighted out of 4.0) <span class="error">*</span></label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control <?php if (isset($gpaErr) && strlen($gpaErr) > 0) echo "is-invalid";?>" name="gpa" value="<?php echo $gpa;?>" min="0" max="4.0" step="0.01">
                        <div class="invalid-feedback">
                          <?php if (isset($gpaErr)) echo $gpaErr;?>
                        </div>
                      </div>
                    </div>
                    <hr>
                    
                    <div class='form-group row mb-4'>
                      <label class="col-sm-4 col-form-label" for="TestTaken">Have you taken the SAT or ACT?</label>
                      <div class="col-sm-8">
                        <select class="form-control custom-control" id="testtakenselect" name="TestTaken">
                          <option value="Yes" <?php if (isset($testtaken) && $testtaken=="Yes") echo "selected";?>>Yes</option>
                          <option value="No" <?php if (isset($testtaken) && $testtaken=="No") echo "selected";?>>No</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    
                    <span class="error"><?php echo $scoreErr;?></span>

                    <div class="form-row mb-4">
                      <div class='form-group col-md-6'>
                        <label class="control-label" for="satscore">SAT (400-1600)</label>
                        <span class="error">*</span>
                        <input type="number" class="form-control <?php if (isset($satErr) && strlen($satErr) > 0) echo "is-invalid";?>" name="satscore" id="satinput" value="<?php echo $satscore;?>" min="400" max="1600" step="10">
                        <div class="invalid-feedback">
                          <?php if (isset($satErr)) echo $satErr;?>
                        </div>
                      </div>

                      <div class='form-group col-md-6 mb-4'>
                        <label class="control-labe" for="actscore">ACT (1-36)</label>
                        <span class="error">*</span>
                        <input type="number" class="form-control <?php if (isset($actErr) && strlen($actErr) > 0) echo "is-invalid";?>" name="actscore" id="actinput" value="<?php echo $actscore;?>" min="1" max="36">
                        <div class="invalid-feedback">
                          <?php if (isset($actErr)) echo $actErr;?>
                        </div>
                      </div>
                    </div>
                    <hr>

                    <div class='form-group mb-4'>
                      <label class="control-label" for="major">Intended Major</label>
                      <span class="error">*</span>
                      <select class="form-control custom-control <?php if (isset($majorErr) && strlen($majorErr) > 0) echo "is-invalid";?>" name="major">
                        <option value="">Major</option>
                        <option value="Agriculture" <?php if (isset($major) && $major=="Agriculture") echo "selected";?>>Agriculture</option>
                        <option value="Architecture" <?php if (isset($major) && $major=="Architecture") echo "selected";?>>Architecture</option>
                        <option value="Biological and Biomedical Sciences" <?php if (isset($major) && $major=="Biological and Biomedical Sciences") echo "selected";?>>Biological and Biomedical Sciences</option>
                        <option value="Business and Marketing" <?php if (isset($major) && $major=="Business and Marketing") echo "selected";?>>Business and Marketing</option>
                        <option value="Communication and Journalism" <?php if (isset($major) && $major=="Communication and Journalism") echo "selected";?>>Communication and Journalism</option>
                        <option value="Computer and Information Sciences" <?php if (isset($major) && $major=="Computer and Information Sciences") echo "selected";?>>Computer and Information Sciences</option>
                        <option value="Cultural and Gender Studies" <?php if (isset($major) && $major=="Cultural and Gender Studies") echo "selected";?>>Cultural and Gender Studies</option>
                        <option value="Education" <?php if (isset($major) && $major=="Education") echo "selected";?>>Education</option>
                        <option value="Engineering" <?php if (isset($major) && $major=="Engineering") echo "selected";?>>Engineering</option>
                        <option value="English Language" <?php if (isset($major) && $major=="English Language") echo "selected";?>>English Language</option>
                        <option value="Family and Consumer Sciences" <?php if (isset($major) && $major=="Family and Consumer Sciences") echo "selected";?>>Family and Consumer Sciences</option>
                        <option value="Foreign Languages" <?php if (isset($major) && $major=="Foreign Languages") echo "selected";?>>Foreign Languages</option>
                        <option value="Health Professions" <?php if (isset($major) && $major=="Health Professions") echo "selected";?>>Health Professions</option>
                        <option value="History" <?php if (isset($major) && $major=="History") echo "selected";?>>History</option>
                        <option value="Law Enforcement and Firefighting" <?php if (isset($major) && $major=="Law Enforcement and Firefighting") echo "selected";?>>Law Enforcement and Firefighting</option>
                        <option value="Legal Professions" <?php if (isset($major) && $major=="Legal Professions") echo "selected";?>>Legal Professions</option>
                        <option value="Mathematics and Statistics" <?php if (isset($major) && $major=="Mathematics and Statistics") echo "selected";?>>Mathematics and Statistics</option>
                        <option value="Culinary Services" <?php if (isset($major) && $major=="Culinary Services") echo "selected";?>>Culinary Services</option>
                        <option value="Physical Sciences" <?php if (isset($major) && $major=="Physical Sciences") echo "selected";?>>Physical Sciences</option>
                        <option value="Social Sciences" <?php if (isset($major) && $major=="Social Sciences") echo "selected";?>>Social Sciences</option>
                        <option value="Visual and Performing Arts" <?php if (isset($major) && $major=="Visual and Performing Arts") echo "selected";?>>Visual and Performing Arts</option>
                      </select>
                      <div class="invalid-feedback">
                          <?php if (isset($majorErr)) echo $majorErr;?>
                      </div>
                    </div>
                    
                    <button type="button" class="btn btn-secondary" id="back-btn">Back</button>
                    <span class="float-right">
                      <input type="submit" class="btn btn-primary btn-lg" value="SEARCH">
                    </span>
                  </div>
                
                </form>

                <script>
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      var forms = document.getElementsByClassName('needs-validation');
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
                </script>
            </div>
          </div>
        </div>

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