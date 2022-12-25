<?php 
require_once "../setting/setting.php";
print_r("test");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $password = "";

$email = test_input($_POST["email"]);
$password = hash('whirlpool', htmlspecialchars($_POST["password"]));

header('Location: ../front/index.html');

$result = mysqli_query($connect, " SELECT * FROM `guest` 
                WHERE `login` = '$email' AND `password` = '$password';");
$user = $result->fetch_assoc(); 
    if (count($user) == 0  && count($user) == 1 ) {
        echo "Пользователь не найдем. Проверьте правильность написания e-mail или пароля";
        exit();
    }
    else {
        session_start();
        $_SESSION["email"] = $email;
        header('Location: ../front/index.html');
    }


$connect->close();
?>