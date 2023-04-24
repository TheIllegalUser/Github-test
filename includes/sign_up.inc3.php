<?php
include_once 'dbh.inc.php';

$airport = $_POST['dropdown'];
$checkbox_checked = isset($_POST['agree']) ? 1 : 0;

if ($checkbox_checked == 1) {
  $sql_waiver = "INSERT INTO waiver(button_pressed) VALUES (?)";
  $stmt_waiver = mysqli_prepare($conn, $sql_waiver);
  mysqli_stmt_bind_param($stmt_waiver, "i", $checkbox_checked);
  mysqli_stmt_execute($stmt_waiver);

  $sql_airport = "INSERT INTO travel_info(departing_airport, departing_date) VALUES (?, DATE_ADD(NOW(), INTERVAL 7 DAY))";
  $stmt_airport = mysqli_prepare($conn, $sql_airport);
  mysqli_stmt_bind_param($stmt_airport, "s", $airport);
  mysqli_stmt_execute($stmt_airport);

  header("location: ../sign_up_complete.php");

} else {
  header("Location: ../sign_up3.php");
  exit();
}


