<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css"></link>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
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

  <div class="main__registr" id="block">
    <div class="lapa"></div>
    <h1 class="input__text">Личный кабинет</h1>
    <div class="block">
      <div class="change">
        <div class="change__input" onclick="clickForm(1)">Вход</div>
        <div class="change__registration" onclick="clickForm(2)">Регистрация</div>
      </div>
      <form class="form" id="formIn" method="post">
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="password" name="password" placeholder="Пароль*">
        <button class="button_reg"><h5>Войти</h5></button>
      </form>
      <form class="form" id="formReg" method="post" style="display: none">
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="password" name="password" placeholder="Дата рождения">
        <input class="input__zone" type="password" name="password" placeholder="Пароль*">
        <input class="input__zone" type="password" name="password" placeholder="Подтверждение пароля*">
        <button class="button_reg"><h5>Зарегистрироваться</h5></button>
      </form>
    </div>
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