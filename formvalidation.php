<?php
session_start();
$ageErr = $genderErr = $stateErr = $schooltypeErr = $gpaErr = $satscoreErr = $scoreErr = $actscoreErr = $gradeErr = $citizenstatusErr = $majorErr = $raceErr = "";
$age = $gender = $state = $schooltype = $gpa = $testtaken = $satscore = $actscore = $grade = $citizenstatus = $major = "";
$racelist = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["racelist"])) {
    $raceErr = 'Please select a race, or choose "I wish not to specify"';
  } else {
    foreach ($_POST["racelist"] as $val)
      array_push($racelist, $val);
  }

  if (empty($_POST["age"])) {
    $ageErr = "Please enter your age";
  } else {
    $age = test_input($_POST["age"]);
    if ($_POST["age"] < 1 && $_POST["age"] > 99) {
      $ageErr = "Please enter your actual age";
    }
      
  }
  
  if ($_POST["gender"] == "") {
    $genderErr = "Please select a gender";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if ($_POST["state"] == "") {
    $stateErr = "Please select a state";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["schooltype"])) {
    $schooltypeErr = "Please select a schooling";
  } else {
    $schooltype = test_input($_POST["schooltype"]);
  }

  if (empty($_POST["gpa"])) {
    $gpaErr = "Please enter your GPA";
  } else {
    $gpa = test_input($_POST["gpa"]);
    if ($_POST["gpa"] < 0 && $_POST["gpa"] > 4) {
      $gpaErr = "Please enter a valid GPA";
    }
      
  }

  $testtaken = $_POST["TestTaken"];

  if ($_POST["TestTaken"] == "Yes") {

    if (empty($_POST['satscore']) && empty($_POST["actscore"])) {
      $scoreErr = "Please enter an SAT or ACT score";
    } 
    else {
      
      if (empty($_POST['satscore'])) {
        
        $actscore = test_input($_POST["actscore"]);
        if (!act_isValid($_POST['actscore'])) {
          $actscoreErr = "Please enter a valid ACT score";
        }

      } 
      elseif (empty($_POST['actscore'])) {
        
        $satscore = test_input($_POST["satscore"]);
        if (!sat_isValid($_POST['satscore'])) {
          $satscoreErr = "Please enter a valid SAT score";
        }

      }
      else { // SAT and ACT both have values
        $actscore = test_input($_POST["actscore"]);
        if (!act_isValid($_POST['actscore'])) {
          $actscoreErr = "Please enter a valid ACT score";
        }
        $satscore = test_input($_POST["satscore"]);
        if (!sat_isValid($_POST['satscore'])) {
          $satscoreErr = "Please enter a valid SAT score";
        }
      }
    }
  }
  
  if ($_POST["grade"] == "") {
    $gradeErr = "Please select your current grade in high school";
  } else {
    $grade = test_input($_POST["grade"]);
  }

  if (empty($_POST["citizenstatus"])) {
    $citizenstatusErr = "Please select your citizen status";
  } else {
    $citizenstatus = test_input($_POST["citizenstatus"]);
  }

  if ($_POST["major"] == "") {
    $majorErr = "Please select an intended major";
  } else {
    $major = test_input($_POST["major"]);
  }

  if($ageErr == "" && $genderErr == "" && $stateErr == "" && $schooltypeErr == "" && $gpaErr == "" && $satscoreErr == "" && $scoreErr == "" && $actscoreErr == "" && $gradeErr == "" && $citizenstatusErr == "" && $majorErr == "" && $raceErr == "") {
    $_SESSION['form_data'] = $_POST;
    header('Location: results.php');
    exit();
  }

}

function sat_isValid($data) {
  return $data % 10 == 0 && $data >= 400 && data <= 1600;
}

function act_isValid($data) {
  return $data >= 1 && $data <= 36;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>