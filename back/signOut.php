<?php 
require_once "../setting/setting.php";

session_start();
session_destroy();
header('Location: ../front/index.php');
$connect->close();
?>