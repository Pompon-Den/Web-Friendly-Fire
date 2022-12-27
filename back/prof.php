<?php 
require_once "../setting/setting.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$email = $_SESSION["email"];
$emailErr =  $passwordErr = "";
$oldpassword = hash('whirlpool', htmlspecialchars($_POST["oldpassword"]));
$pass = "";
$data = $_POST["data"];

$result = mysqli_query($connect, " SELECT * FROM `guest` ;");
            $users = $result->fetch_all(); 
            foreach ($users as $info) {
            if ($info[2] == $email) {    
                if ($oldpassword != $info[3])  {
                    $passwordErr = "Введен неверный старый пароль ";
                }       
                else {
                    if (empty($_POST["newpassword"])) {
                        $passwordErr = "Новый пароль не модет быть пустым ";
                      } 
                      else {
                        if (empty($_POST["newpassword2"])) {
                            $passwordErr = "Подтвержденный пароль не может быть пустым ";
                          }
                          else {
                            if ($_POST["password"] != $_POST["password2"]) {
                                $passwordErr = "Пароли не совпадают ";
                            }
                            else {
                                $pass = hash('whirlpool', htmlspecialchars($_POST["newpassword"]));
                            }
                          }
                      }
                }
                if ($pass != "") {
                    mysqli_query($connect, " UPDATE `Guest` SET   `password`='$pass', `data`='$data' WHERE `Guest`.`login`='$email';");
                    header('Location: ../front/index.php?page=Profile');
                }
                else {
                    echo $emailErr;
                    echo $passwordErr;
                    break;
                }
            }
        }


$connect->close();
?>