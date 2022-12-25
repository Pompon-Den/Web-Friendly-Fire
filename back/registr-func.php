<?php
require_once "../setting/setting.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//print_r($_POST);
$emailErr =  $passwordErr = "";
$email = $password = "";
if (empty($_POST["email"])) {
    $emailErr = "Введите почту";
  } 
  else {
        $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Придумайте пароль";
  } 
  else {
    if (empty($_POST["password2"])) {
        $passwordErr = "Пароли не совпадают";
      }
      else {
        if ($_POST["password"] != $_POST["password2"]) {
            $passwordErr = "Пароли не совпадают";
        }
        else {
            $password = hash('whirlpool', htmlspecialchars($_POST["password"]));
        }
      }
  }

   if ($email != "" && $password != "") {
    $result1 = mysqli_query($connect, " SELECT * FROM  `guest` WHERE `login` = '$email';");
    $user1 = $result1->fetch_assoc();
    if (!empty($user1)) {
       $emailErr = "Данный e-mail уже используется!";
    }
    else {
    mysqli_query($connect, " INSERT INTO `guest` (`id`, `login`, `password`, `type`) VALUES (NULL,  '$email', '$password', 'auth');");
    header('Location: ../front/Registr.php');
    }   
}
   else {
    echo $emailErr;
    echo $passwordErr;
    exit();
   }

   $connect->close();
?>