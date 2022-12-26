<?php 
require_once "../setting/setting.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $password = "";

$email = test_input($_POST["email"]);
$password = hash('whirlpool', htmlspecialchars($_POST["password"]));



$result = mysqli_query($connect, " SELECT * FROM `guest` 
                WHERE `login` = '$email' AND `password` = '$password';");
$user = $result->fetch_assoc(); 
    if (empty($user)) {
        echo "Пользователь не найдем. Проверьте правильность написания e-mail или пароля";
        exit();
    }
    else {
        $_SESSION["email"] = $email;
       header('Location: ../front/index.php');
    }

$connect->close();
?>