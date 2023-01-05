<?php /*require_once "../setting/setting.php";*/?>

<div class="ots"></div>

<div class="main__merch">
    <!--Нижнее только для админов-->
    <div class="admin_merch" style="display: none">
        <div class="admin_merch_inner">
            <div class="admin_merch_inner_inner">
                <input class="textBox" placeholder="Название">
                <input class="textBox" placeholder="Ссылка">
                <input class="textBox" placeholder="Цена">
                <button class="textBox" style="height: 30%"><img src="assets/images/upload.png" style="height: 80%"></button>
                <button class="textBox" onclick="addMerch()">Ок</button>
            </div>
        </div>
    </div>
    <h1 class="merch__text">Маркет</h1>
    <ul class="table">
        <?php /*$result = mysqli_query($connect, " SELECT * FROM `product` ");
        $product = $result->fetch_all(); */?><!--
        --><?php /*foreach ($product as $prod) {
            $img = "assets/images/".$prod[4];*/?>
            <li class="table_el">
                <a class="delete"></a>
                <a href=<?=$prod[5]?>><img class="foto" src=<?php /*=$img*/?>></img></a>
                <h3><?=$prod[1]?></h3>
                <div class="buy">
                    <span style="color: #E17521"><?php /*=$prod[3]*/?> руб.</span>
                    <span class="buy__text" style="color: #E17521;">Купить</span>
                </div>
            </li>
        <?/* } */?>
        <!--Нижнее только для админов-->
        <li class="table_el" onclick="addMerch()">
            <a><img class="foto" src="assets/images/Plus.png"></img></a>
        </li>
    </ul>
</div>

<div class="pred_footer"></div>