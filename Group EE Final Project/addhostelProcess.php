<?php

session_start();
require "connection.php";

$email = $_SESSION["u"]["email"];

$pr = $_POST["pr"];
$des = $_POST["des"];
$pName = $_POST["pName"];
$lat = $_POST["lati"];
$lon = $_POST["longi"];


$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

if (isset($_FILES["image"])) {
    $image = $_FILES["image"];

    $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
    $file_ex = $image["type"];



    if (!in_array($file_ex, $allowed_image_extentions)) {
        echo ("Please select a valid image.");
    } else {

        $new_file_extention;

        if ($file_ex == "image/jpg") {
            $new_file_extention = ".jpg";
        } else if ($file_ex == "image/jpeg") {
            $new_file_extention = ".jpeg";
        } else if ($file_ex == "image/png") {
            $new_file_extention = ".png";
        } else if ($file_ex == "image/svg+xml") {
            $new_file_extention = ".svg";
        }

        $file_name = "resources/uploadHostelsImg/" . $_SESSION["u"]["firstname"] . "_" . uniqid() . $new_file_extention;

        move_uploaded_file($image["tmp_name"], $file_name);
        Database::iud("INSERT INTO `uploadhostels` 
        (`imgPath`,`description`,`latitude`,`logitude`,`placeName`,`price`,`landloaders_landloaders_id`,`dateTimeAdded`) 
        VALUES 
        ('" . $file_name . "','" . $des . "','" . $lat . "','" . $lon . "','" . $pName . "','" . $pr . "','" . $_SESSION["u"]["landloaders_id"] . "','" . $date . "') ");
        echo ("Hostel image saved successfully");
    }
}
