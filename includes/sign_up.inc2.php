<?php
include_once 'dbh.inc.php';

function convert_to_number($value) {
    switch ($value) {
      case "a":
        return 1;
        break;
      case "b":
        return 2;
        break;
      case "c":
        return 3;
        break;
      case "d":
        return 4;
        break;
      default:
        return 1;
    }
  }

// get the values from the form and convert them to numbers
$flight_level = convert_to_number($_POST["flight_level"]);
$accommodation_plan = convert_to_number($_POST["accommodation_plan"]);
$meal_plan = convert_to_number($_POST["meal_plan"]);
$city_travel_method = convert_to_number($_POST["city_travel_method"]);
$ocean_transportation_method = convert_to_number($_POST["ocean_transportation_method"]);
$sea_gear = convert_to_number($_POST["sea_gear"]);
$guide = convert_to_number($_POST["guide"]);

$sql = "INSERT INTO custom_package(flight_plan, housing_plan, food_plan, transportation_plan, ocean_transportation_plan, sea_gear_type, guide_type) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../sign_up2.php?signuppart2=failed");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "iiiiiii", $flight_level, $accommodation_plan, $meal_plan, $city_travel_method, $ocean_transportation_method, $sea_gear, $guide);
    mysqli_stmt_execute($stmt);

    $sql_package = "INSERT INTO package(package_type) VALUES (5)";
    mysqli_query($conn, $sql_package);

    header("location: ../sign_up3.php?signuppart2=success");
    exit();
}
