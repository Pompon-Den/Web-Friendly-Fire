<?php
    // Подключение к базе данных
    $host = "10.0.173.89";
    $user = "root";
    $password = "";
    $db = "FriendlyFire";
    $connect = mysqli_connect($host, $user, $password, $db);
    //die("aaa");
    if (!$connect) 
        die("Connection Error");

    $connect->set_charset("utf8");
?>