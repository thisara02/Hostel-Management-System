<?php
session_start();
require "connection.php";
if (isset($_GET["id"])) {
    $hId = $_GET["id"];
    $stID = $_SESSION["st"]["student_id"];
    Database::iud("INSERT INTO `stubooking` (`status`,`student_student_id`,`uploadHostels_uploadHostels_id`) 
    VALUES ('1','".$stID."','".$hId."')");

    echo("Success");

}
