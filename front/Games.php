<?php require_once "../setting/setting.php";?>

<div class="ots"></div>

<div class="main__games">
    <h1 class="games__text">Проекты</h1>
    <ul class="table_g">
    <?php $result = mysqli_query($connect, " SELECT * FROM `games` ;");
            $games = $result->fetch_all(); 
            ?>
             <?php foreach ($games as $game) { 
                $img = "assets/images/".$game[3];?>
        <li class="table_el_g">
            <a href="index.php?page=Game&game=<?=$game[1]?>"><img class="foto_g" src=<?=$img?>></img></a> 
            <h3><?=$game[1]?></h3>
            <div class="buy">
                <span class="podr__text" style="color: #E17521;">Подробнее</span>
            </div>
        </li>
         <? }?>
    </ul>
</div>