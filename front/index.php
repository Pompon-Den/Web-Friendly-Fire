<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_rigistr.css">
    <link rel="stylesheet" href="assets/css/style_merch.css">
    <link rel="stylesheet" href="assets/css/style_profile.css">
    <link rel="stylesheet" href="assets/css/style_game.css">
    <link rel="stylesheet" href="assets/css/style_games.css">

    <link href="assets/fonts/Roboto-Medium.ttf" rel="stylesheet">

    <script src="assets/js/script.js"></script>
    <script src="assets/js/script_main.js"></script>
    <script src="assets/js/script_registr.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Friendly Fire</title>
</head>
<body>
<div class="button_open_close_zone">
    <div class="button_open_close" onclick="headerOnOff()"></div>
</div>
<header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo" ></div>

                <div class="nav">
                    <a class="nav__link" href="index.php?page=Main">Гараж</a>
                    <div class="stick"></div>
                    <a class="nav__link" href="index.php?page=Games">Проекты</a>
                    <div class="stick"></div>
                    <a class="nav__link" href="index.php?page=Merch">Магазин</a>
                </div>

                <div class="users__icons">
                    <?php session_start();
                    if ( $_SESSION["email"] == "" )  { ?>
                        <a class = "user__status__link__off" id="userStatus" href="index.php?page=Registr"></a>
                    <?php } 
                    if ( $_SESSION["email"] != "" ) { ?>
                        <a class = "user__status__link__on" id="userStatus" href="index.php?page=Profile"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
</header>

<?php
$href = $_GET["page"];
if (isset($href) ) {
    require($href.".php");
}
else {
    require("index.php");
}
?>

<footer class="footer">
    <div class="footer__inner">
        <h1 class="footer__text"><span style="color: #E17521">Не</span> следите за нами</h1>
        <div class="footer__links">
            <a class="VK" href="https://vk.com/dryzheski_ogon" target="_blank"></a>
            <a class="TG" href="https://t.me/friendly_fire_team" target="_blank"></a>
        </div>
        <div class="cat__light">
            <div class="light"></div>
            <div class="cat"></div>
        </div>
    </div>
</footer>
</body>
</html>