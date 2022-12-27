<?php 
require_once "../setting/setting.php";

session_start();
session_destroy();
header('Location: ../front/index.php?page=Main');
$connect->close();
?>