<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_game.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'Header.php';
?>

    <div class="intro"></div>
    <h1 class="name">Название</h1>

    <div class="main__game">
        <div class="whiteBlock">
            <div class="in_white">
                <div class="left_game">
                    <h2 class="opis__text">Описание</h2>
                    <div class="game__text" id="test">
                        <span>
                            Описание
                        </span>
                    </div>
                    <div class="link__zone">
                        <div class="itch" href="#"></div>
                    </div>
                </div>
                <div class="right_game">
                    <div class="imageGame"></div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'Footer.php';
    ?>
</body>
</html>
