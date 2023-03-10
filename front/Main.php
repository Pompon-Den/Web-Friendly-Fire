<script>document.querySelector('.header').style.position = 'absolute';</script>

<div class="intro"></div>
<div class="main">
    <h1 class="privet">ДОБРО ПОЖАЛОВАТЬ К FRIENDLY FIRE</h1>

    <div class="blocks">
        <div class="whiteBlock">
            <div class="info">
                <div class="leftWe">
                    <div class="we__question">
                        КТО МЫ?
                    </div>
                    <div class="we__text">
                        FRIENDLY FIRE – это начинающая команда разработчиков игр, объединённых одной идеей -
                        сделать что-то прикольное и желательно кринжовое. Формирование команды произошло в
                        начале осени, когда мы поучаствовали в американском Epic Mega Game Jam 2022 и за неделю,
                        практически не зная движок, на котором создавали игру – смогли сделать продукт, с которым
                        заняли третье место среди пятисот проектов
                    </div>
                </div>
                <div class="rightWe">
                    <div class="rightImage"></div>
                </div>
            </div>
        </div>
        <div class="blackBlock">
            <h2 class="we__question__black">Мы
                <span style="color: #E17521">маленькие</span>, но нам это
                <span style="color: #E17521">не</span> мешает
            </h2>
            <div class="info2">
                <div class="we__left__black">
                    <div class="alina"></div>
                </div>
                <div class="we__right__black">
                    <div class="we__block__black">
                        <div class="we__text__black">
                            Сейчас мы активно учавствуем различных хакатонах, проектных школах и акселераторах.
                            Так мы делаем неплохую рекламу, учимся новому и показываем миру, что мы существуем
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="whiteBlock">
            <div class="game_list__inner">
                <h2 class="game_list_name">Что мы можем вам предожить?</h2>
                <?php require_once "../setting/setting.php";?>
               <? $result = mysqli_query($connect, " SELECT * FROM `games`;");
                  $info = $result->fetch_all(); 
                  $count = mysqli_query($connect, "SELECT COUNT(*) FROM `games`;");
                  ?>
                <div class="game_list" style="@media screen and (min-width: 680px){grid-template-columns: repeat(<?$count?>, 35%);} @media screen and (max-width: 680px){grid-template-columns: repeat(<?$count?>, 100%);}">
                <? foreach ($info as $game) {
                    $img = "assets/images/".$game[3];?> 
                    <img class="img" src=<?=$img?>></img> 
                    <?}?> 
                </div>
                <div class="down_game_list">
                    <div class="down_game_list_left">
                            <span>
                                На данный момент у нас есть 4 игры. Одна из них уже закончена, остальные находятся на этапе разработки. Однако поиграть в их демо-версии вы можете уже сейчас
                            </span>
                    </div>
                    <div class="down_game_list_right">
                        <a class="button" href="index.php?page=Games">Играть</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blackBlock">
            <div class="name_team">
                <h2>Наша команда</h2>
            </div>
            <div class="team_container">
                <div class="team_el">
                    <div class="img_team1"></div>
                    <br>
                    <div class="team_text">
                        <span class="name_t">Даня</span>
                        <br>
                        <span class="class_t">крашик, программист</span>
                        <br>
                        способен уничтожить комп Ромы
                    </div>
                </div>
                <div class="team_el">
                    <div class="img_team2"></div>
                    <br>
                    <div class="team_text">
                        <span class="name_t">Ульяна</span>
                        <br>
                        <span class="class_t">гадалка, художник</span>
                        <br>
                        за сутки нарисовала 160 спрайтов тараканов
                    </div>
                </div>
                <div class="team_el">
                    <div class="img_team3"></div>
                    <br>
                    <div class="team_text">
                        <span class="name_t">Влад</span>
                        <br>
                        <span class="class_t">креативщик, программист</span>
                        <br>
                        нарисовал скамейку
                    </div>
                </div>
                <div class="team_el">
                    <div class="img_team4"></div>
                    <br>
                    <div class="team_text">
                        <span class="name_t">Рома</span>
                        <br>
                        <span class="class_t">БИГ-босс, программист</span>
                        <br>
                        способен сделать бриллиант даже из Фефу-Калипса
                    </div>
                </div>
                <div class="team_el">
                    <div class="img_team5"></div>
                    <br>
                    <div class="team_text">
                        <span class="name_t">Света</span>
                        <br>
                        <span class="class_t">завхоз, художник</span>
                        сгорела на работе
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="whiteBlock">
            <div class="merch_inner">
                <div class="left_merch">
                    <h2 class="merch_name">Вы можете нас поддержать</h2>
                    <div class="merch_text">
                            <span>
                                У нас есть даже собственный мерч. Пока что это только стикерпак, но в будущем мы планируем создавать больше интересных вещей по нашим проектам
                            </span>
                    </div>
                    <div class="merch_button">
                        <a class="button" href="index.php?page=Merch">Купить</a>
                    </div>
                </div>
                <div class="right_merch">
                    <div class="merch_img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
