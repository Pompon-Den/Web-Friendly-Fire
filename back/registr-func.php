<?php
require_once "../setting/setting.php";
//print_r($_POST);

$email = $_POST["email"];
$password = hash('whirlpool',$_POST["password"]);

print_r($password);
mysqli_query($connect, " INSERT INTO `guest` (`id`, `login`, `password`, `type`) VALUES (NULL,  '$email', '$password', 'auth');");

header('Location: ../front/Registr.php');
?>