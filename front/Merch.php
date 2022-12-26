<?php require_once "../setting/setting.php";?>

<div class="ots"></div>

<div class="main__merch">
    <h1 class="merch__text">Маркет</h1>
    <ul class="table">
        <?php $result = mysqli_query($connect, " SELECT * FROM `product` ");
            $product = $result->fetch_all(); ?>
    <?php foreach ($product as $prod) { 
        $img = "assets/images/".$prod[4];?>
        <li class="table_el">
            <div class="foto"></div>
            <h3>Название</h3>
            <div class="podr">
                <span style="color: #E17521">130р.</span>
            <img class="foto" src=<?=$img?>></img> 
            <h3><?=$prod[1]?></h3>
            <div class="buy">
                <span style="color: #E17521"><?=$prod[3]?> руб.</span>
                <span class="buy__text" style="color: #E17521;">Купить</span>
            </div>
        </li>
        <? } ?>
    </ul>
</div>