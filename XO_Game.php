<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="front/assets/css/style_xzero.css">

    <link href="front/assets/fonts/Roboto-Medium.ttf" rel="stylesheet">

    <title>XZeroGame</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header_inner">
                <a class="header_logo"></a>
                <a class="game_name">
                    <h3>X-O-Game</h3>
                </a>
                <div class="user's_zone">
                    <form class="form_user">
                        <button class="header_button">Вход</button>
                        <button class="header_button">Регистрация</button>
                    </form>
                </div>
            </div>
        </header>

        <div class="main_zone">
            <div class="main_zone_up">
                <div class="player_list">
                    <div class="player_list_inner">
                        <div class="player_list_name">
                            <h4>Игроки</h4>
                        </div>
                        <ul class="player_container">
                            <li class="player">
                                <div class="player_text">Имя</div>
                                <!--Если игрок свободен - слово "пригласить", отправляется приглашение-->
                                <!--Если игрок играет - слово "занят", ничего не происходит-->
                                <!--Если игрок ожидает в комнате 1 - слово "присоединится", присоединение к комнате-->
                                <button class="player_button">Пригласить</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="game_zone">
                    <div class="game_zone_inner">
                        <div class="content">

                        </div>
                    </div>
                </div>

                <div class="chat">
                    <div class="chat_inner">
                        <div class="chat_name">
                            <h4>Чат</h4>
                        </div>
                        <ul class="message_container">
                            <li class="chat_user">
                                <span style="color: #E17521">Имя > </span>Сообщени очень высокое
                            </li>
                        </ul>
                        <div class="input_message">
                            <input class="input_message_zone">
                            <button class="input_message_button"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table">
                <div class="table_inner">
                    <div class="table_table">
                        <div class="table_name"><h4>Рейтинг</h4></div>
                        <div class="row_name">
                            <div class="text_in_table"><h5>Место</h5></div>
                            <div class="text_in_table"><h5>Имя</h5></div>
                            <div class="text_in_table"><h5>Количество сыгранных игр</h5></div>
                            <div class="text_in_table"><h5>Количество побед</h5></div>
                            <div class="text_in_table"><h5>Количество поражений</h5></div>
                        </div>
                        <ul class="rate_container">
                            <li class="row">
                                <div class="text_in_table">1</div>
                                <div class="text_in_table">Имя</div>
                                <div class="text_in_table">3213</div>
                                <div class="text_in_table">842</div>
                                <div class="text_in_table">314</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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