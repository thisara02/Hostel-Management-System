<?php
session_start();
require "connection.php";

$email = $_POST["e"];
$newPassword = $_POST["p"];
$reTypePassword = $_POST["r"];
$vCode = $_POST["v"];

if (empty($email)) {
    echo ("Missing Email address");
} else if (empty($newPassword)) {
    echo ("Please insert a New Password");
} else if (strlen($newPassword) < 5 || strlen($newPassword) > 20) {
    echo ("New Password must have between 5-20 characters.");
} else if (empty($reTypePassword)) {
    echo ("Please Re-Type your New Password");
} else if ($newPassword != $reTypePassword) {
    echo ("Your Password does not matched.");
} else if (empty($vCode)) {
    echo ("Please enter your Verification Code");
} else {

    $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "' AND `verification_code`='" . $vCode . "' ");
    $n = $rs->num_rows;

    if ($n == 1) {

        Database::iud("UPDATE `student` SET `password`='" . $newPassword . "' WHERE `email`='" . $email . "' ");
        if (isset($_SESSION["stu"])) {

            $_SESSION["stu"] = null;
            session_destroy();
        }

        echo ("Success");
    } else {
        echo ("Invalid Email or Verification Code");
    }
}
