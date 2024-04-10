<?php
session_start();
require "connection.php";
if (isset($_GET["id"])) {
    $hId = $_GET["id"];
    Database::iud("UPDATE `uploadhostels` SET `wardenApprovel_bookingApprovel_id`='1' WHERE `uploadHostels_id`='" . $hId . "'");

    echo("Success");

}
