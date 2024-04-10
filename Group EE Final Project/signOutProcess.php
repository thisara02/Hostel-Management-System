<?php

session_start();

if(isset($_SESSION["u"])){

    $_SESSION["u"] = null;
    session_destroy();

    echo("Success");

}else if(isset($_SESSION["as"])){

    $_SESSION["as"] = null;
    session_destroy();

    echo("Success");

}else if(isset($_SESSION["stu"])){

    $_SESSION["stu"] = null;
    session_destroy();

    echo("Success");

}

?>