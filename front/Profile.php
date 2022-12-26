<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>
</head>
<body>
<?php
    include 'Header.php';
?>
    <div class="main_profile">
        <div class="profile_inner">
            <h2 class="profile_name">Профиль</h2>
            <div class="block_first">
                <h3 class="profile_name_sub">Основное</h3>
                <div class="block_under_name_sub">
                    <div class="input_block">
                        <div class="profile_name_sub_sub">Email</div>
                        <div class="input">f</div>
                    </div>
                    <div class="input_block">
                        <div class="profile_name_sub_sub">Дата рождения</div>
                        <div class="input"><span>f</span></div>
                    </div>
                </div>
            </div>
            <div class="block_second">
                <h3 class="profile_name_sub">Пароль</h3>
                <div class="block_under_name_sub_second">
                    <div class="input_block" style="width: 50%">
                        <div class="profile_name_sub_sub">Старый пароль</div>
                        <div class="input">f</div>
                    </div>
                    <div class="block_under_name_sub_second_sub">
                        <div class="input_block">
                            <div class="profile_name_sub_sub">Новый пароль</div>
                            <div class="input"><span>f</span></div>
                        </div>
                        <div class="input_block">
                            <div class="profile_name_sub_sub">Подтвердите пароль</div>
                            <div class="input"><span>f</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
    include 'Footer.php';
?>
</body>
</html>
