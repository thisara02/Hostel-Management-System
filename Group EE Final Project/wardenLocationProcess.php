<?php
session_start();
require "connection.php";

if(isset($_GET["id"])){
    $wardentId = $_SESSION["w"]["warden_id"];
    $hid = $_GET["id"];

    $h_rs = Database::search("SELECT * FROM `uploadhostels` WHERE `uploadHostels_id`='".$hid."'");
    $h_num = $h_rs->num_rows;

    if($h_num == 1){
        $data = $h_rs->fetch_assoc();
        $lat1 = $data["latitude"];
        $lng1 = $data["logitude"];
        echo json_encode(array("lat1" => $lat1, "lng1" => $lng1));
    }

}

?>