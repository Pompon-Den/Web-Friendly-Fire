<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/style_rigistr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>
      <script src="assets/js/script_registr.js"></script>
      <meta name="description" content="Регистрация нового пользователя"/>
  </head>
  <body>
  <?php
  include 'Header.php';
  ?>

  <div class="main__registr" id="block">
    <div class="lapa"></div>
    <h1 class="input__text">Личный кабинет</h1>
    <div class="block">
      <div class="change">
        <div class="change__input" onclick="clickForm(1)">Вход</div>
        <div class="change__registration" onclick="clickForm(2)">Регистрация</div>
      </div>
      <form class="form"  action="../back/auth.php" id="formIn" method="post" >
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="password" name="password" placeholder="Пароль*">
        <button class="button_reg"><h5>Войти</h5></button>
      </form>
      <form class="form"  action="../back/registr-func.php" id="formReg" method="post" >
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="text" name="data" placeholder="Дата рождения">
        <input class="input__zone" type="password" name="password" placeholder="Пароль*">
        <input class="input__zone" type="password" name="password2" placeholder="Подтверждение пароля*">
        <button class="button_reg"><h5>Зарегистрироваться</h5></button>
      </form>
      <script>
        document.getElementById("formReg").style.display="none"
        document.getElementById("formIn").style.display="flex"
        document.getElementById("block").style.height="70vh"
      </script>
    </div>
  </div>


  <?php
  include 'Footer.php';
  ?>
  </body>
</html>