<?php require_once "../setting/setting.php";?>
<?php 
    $gamename = $_GET["game"];
    print_r($gamename);
    $result = mysqli_query($connect, " SELECT * FROM `games`;");
    $info = $result->fetch_all(); 
    foreach ($info as $infogame) {
        if ($infogame[1] == $gamename) {
            $img = "assets/images/".$infogame[3];
?>

<div class="intro"></div>
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
                    <div class="link__zone">
                        <a href=<?=$infogame[4]?> ><div class="itch"></div></a>
                    </div>
                </div>
                <div class="right_game">
                    <img class="imageGame" src=<?=$img?>></img>
                </div>
            </div>
        </div>
    </div>
<? } } ?>