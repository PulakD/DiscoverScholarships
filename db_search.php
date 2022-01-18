<?php

include 'db_connection.php';

$scholarindexes = array();

$str = "";
for ($x = 0; $x < count($formdata['racelist']); $x++) {
  $str .= "race = '" . $formdata['racelist'][$x] . "' OR ";
}

$sql = "SELECT b.`scholar-index`, scholarshipname, award, DATE_FORMAT(`deadline`, '%M %d, %Y') as 'date' FROM (
  
    SELECT `scholar-index` FROM `scholarship-require`
    WHERE (age <= ? OR age IS NULL) AND
    (gender = ? OR gender IS NULL) AND
    ($str race IS NULL) AND
    (`residency-status` = ? OR `residency-status` IS NULL) AND
    (`state-of-residency` = ? OR `state-of-residency` IS NULL) AND
    (schooling = ? OR schooling IS NULL) AND
    (`grade-level` = ? OR `grade-level` IS NULL) AND
    (gpa <= ? OR gpa IS NULL) AND
    (sat <= ? OR sat IS NULL) AND
    (act <= ? OR act IS NULL) AND
    (`intended-major` = ? OR `intended-major` IS NULL)

) a
LEFT JOIN `scholarship-info` AS b ON a.`scholar-index` = b.`scholar-index`
ORDER BY date
";

if (!($stmt = $conn->prepare($sql))) {
  die("Error: " . mysqli_error($conn));
}

$stmt->bind_param('issssidiis', $formdata['age'], $formdata['gender'], $formdata['citizenstatus'], $formdata['state'], $formdata['schooltype'], $formdata['grade'], $formdata['gpa'], $formdata['satscore'], $formdata['actscore'], $formdata['major']);

$stmt->execute();

$result = $stmt->get_result();

$delay = 0;
if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result) . " matches";
  while ($row = $result->fetch_assoc()) {
    array_push($scholarindexes, $row['scholar-index']);
    $delay+=200;
    echo '<tr data-aos="fade-up" data-aos-delay="'.$delay.'">';
      echo "<td><a href='scholarships/" . $row['scholar-index'] * 7 . $row['scholar-index'] . ".php'>" . $row["scholarshipname"] . "</a></td>";
      echo "<td>$" . $row["award"] . "</td>";
      echo "<td>" . $row["date"] . "</td>";
    echo '</tr>';
  }
} else {
  echo '<tr>';
    echo "<td>0 results</td>";
  echo '</tr>';
}

$stmt->close();
$conn->close();

?>