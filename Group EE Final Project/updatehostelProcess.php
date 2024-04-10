<?php

session_start();
require "connection.php";

$email = $_SESSION["u"]["email"];

$hid = $_POST["id"];
$pr = $_POST["pr"];
$des = $_POST["des"];
$pName = $_POST["pName"];
$lat = $_POST["lati"];
$lon = $_POST["longi"];

if (empty($pr)) {
    echo ("Enter price");
} else if (empty($pName) || empty($lat) || empty($lon)) {
    echo ("Enter Location");
} else if (empty($des)) {
    echo ("Enter Description.");
} else {


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
            Database::iud("UPDATE `uploadhostels` SET `imgPath`='" . $file_name . "',`description`='" . $des . "',`latitude`='" . $lat . "',
        `logitude`='" . $lon . "',`placeName`='" . $pName . "',`price`='" . $pr . "',`dateTimeAdded`='" . $date . "' WHERE `uploadHostels_id`='" . $hid . "'");
            echo ("Hostel image saved successfully");
        }
    } else {
        Database::iud("UPDATE `uploadhostels` SET `description`='" . $des . "',`latitude`='" . $lat . "',
        `logitude`='" . $lon . "',`placeName`='" . $pName . "',`price`='" . $pr . "',`dateTimeAdded`='" . $date . "' WHERE `uploadHostels_id`='" . $hid . "'");
        echo ("Hostel image saved successfully");
    }
}
