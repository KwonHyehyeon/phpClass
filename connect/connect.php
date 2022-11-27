<?php
    $host = "localhost";
    $user = "noeyheyh9357";
    $pass = "Kgpgus9357!";
    $db = "noeyheyh9357";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        //echo "Database Connect True";
    }
?>