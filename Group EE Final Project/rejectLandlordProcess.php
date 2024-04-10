<?php
session_start();
require "connection.php";
if (isset($_GET["id"]) || isset($_GET["poID"])) {
    $sId = $_GET["id"];
    $pId = $_GET["poID"];
    Database::iud("UPDATE `stubooking` SET `landlordApproved`='2' WHERE `student_student_id`='".$sId."' AND `uploadHostels_uploadHostels_id`='".$pId."'");

    echo("Success");

}
