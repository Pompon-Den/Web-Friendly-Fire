<?php
    // Подключение к базе данных
    $host = "192.168.0.2";
    $user = "root";
    $password = "";
    $db = "FriendlyFire";
    $connect = mysqli_connect($host, $user, $password, $db);

    if (!$connect) 
        die("Connection Error");

    $connect->set_charset("utf8");

    session_start();
    //$_SESSION["email"] = "";
?>