<div style="height: 20vh"></div>
<div class="main__merch">
    <h1 class="merch__text">Мерч</h1>
    <ul class="table">
    <?php foreach ($product as $prod) { 
        $img = "assets/images/".$prod[4];?>
        <li class="table_el">
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