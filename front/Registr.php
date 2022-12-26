<div style="height: 20vh"></div>
<h1 class="input__text">Личный кабинет</h1>
<div class="main__registr" id="block">
    <div class="lapa"></div>
    <div class="block">
      <div class="change">
        <div class="change__input" onclick="clickForm(1)">Вход</div>
        <div class="change__registration" onclick="clickForm(2)">Регистрация</div>
      </div>
      <form class="form" action="../back/auth.php"  id="formIn" method="post" >
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="password" name="password" placeholder="Пароль*">
        <button class="button_reg"><h5>Войти</h5></button>
      </form>
      <form class="form"  action="../back/registr-func.php" id="formReg" method="post" >
        <input class="input__zone" type="email" name="email" placeholder="Email*">
        <input class="input__zone" type="text" name="date" placeholder="Дата рождения">
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