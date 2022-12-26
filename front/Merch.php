<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_merch.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <meta name="description" content="Регистрация нового пользователя"/>
</head>
<body>
<?php
//require 'Header.php';
?>

<?php
require_once "../setting/setting.php";
$result = mysqli_query($connect, " SELECT * FROM `Product`;");
$product = $result->fetch_all();
?>


<div class="main__merch">
    <h1 class="merch__text">Мерч</h1>
    <ul class="table">
    <?php foreach ($product as $prod) { 
        $img = "assets/images/".$prod[4];?>
        <li class="table_el">
            <img class="foto" src=<?=$img?>></img> 

            <h3><?=$prod[1]?></h3>
            <div class="buy">
                <span style="color: #E17521"><?=$prod[3]?> руб.</span>
                <span class="buy__text" style="color: #E17521;">Купить</span>
            </div>
        </li>
        <? } ?>
    </ul>
</div>


<?php
include 'Footer.php';
?>
</body>
</html>