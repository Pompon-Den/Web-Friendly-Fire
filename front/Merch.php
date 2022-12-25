<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css"></link>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <meta name="description" content="Регистрация нового пользователя"/>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <img class="header__logo" src="assets/images/LogoMini.png"></img>

            <div class="nav">
                <a class="nav__link" href="#">Гараж</a>
                <div class="stick"></div>
                <a class="nav__link" href="#">Проекты</a>
                <div class="stick"></div>
                <a class="nav__link" href="#">Магазин</a>
            </div>

            <div class="users__icons">
                <a class = "user__box__link" href="#">
                    <div class="icon">
                        <div class="circle">
                            <div class="circle__text">0</div>
                        </div>
                    </div>
                </a>
                <a class = "user__status__link__off" id="userStatus" href="#"></a>
            </div>
        </div>
    </div>
</header>

<div class="main__merch">
    <h1 class="merch__text">Мерч</h1>
    <ul class="table">
        <li class="table_el">
            <div class="foto"></div>
            <h3>Название</h3>
            <div class="buy">
                <span style="color: #E17521">130р.</span>
                <span class="buy__text" style="color: #E17521;">Купить</span>
            </div>
        </li>
    </ul>
</div>

<footer class="footer">
    <div class="footer__inner">
        <h1 class="footer__text"><span style="color: #E17521">Не</span> следите за нами</h1>
        <div class="footer__links">
            <a class="VK" href="#"></a>
            <a class="TG" href="#"></a>
        </div>
        <div class="cat__light">
            <div class="light"></div>
            <div class="cat"></div>
        </div>
    </div>
</footer>
</body>
</html>