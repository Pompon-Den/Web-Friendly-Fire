<?php require_once "../setting/setting.php";?>
<?php
    $gamename = $_GET["game"];
    $result = mysqli_query($connect, " SELECT * FROM `games`;");
    $info = $result->fetch_all(); 
    foreach ($info as $infogame) {
        if ($infogame[1] == $gamename) {
            $img = "assets/images/".$infogame[3];
?>

<script>document.querySelector('.header').style.position = 'absolute';</script>

<div class="intro">
</div>
    <h1 class="name"><?=$infogame[1]?></h1>
    <br>
    <div class="main__game">
        <div class="whiteBlock">
            <div class="in_white">
                <div class="left_game">
                    <h2 class="opis__text">Описание</h2>

                    <div class="game__text" id="test">
                        <span>
                            <?=$infogame[2]?>
                        </span>
                    </div>
                    <!--Нижний только для админов-->
                    <div class="game__text" id="admins" style="display: none">
                        <div class="admin">
                            <div class="admin_block">
                                <textarea class="textBox" placeholder="Описание"></textarea>
                            </div>
                            <div class="admin_block">
                                <input class="textBox" placeholder="Ссылка на itch.io"></input>
                                <input class="textBox" placeholder="Название игры"></input>
                            </div>
                            <div class="admin_block_button">
                                <button class="textBox" style="text-indent: 0">Ок</button>
                            </div>
                        </div>
                    </div>

                    <div class="link__zone">
                        <a href=<?=$infogame[4]?> ><div class="itch"></div></a>
                    </div>
                </div>
                <div class="right_game">
                    <img class="imageGame" src=<?=$img?>></img>
                    <!--Нижний только для админов-->
                    <a class="upload" id="admin" style="display: none;"></a>
                </div>
            </div>
        </div>
    </div>
<? } } ?>