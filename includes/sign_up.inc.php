<?php

include_once 'dbh.inc.php';

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "INSERT INTO user_info(user_name, user_email, user_address, user_phone) VALUES (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../sign_up.php?signuppart1=failed");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $address, $phone);
    mysqli_stmt_execute($stmt);
    header("location: ../sign_up2.php?signuppart1=success");
    exit();
}
