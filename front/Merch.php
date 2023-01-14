<<<<<<< HEAD
<?php require_once "../setting/setting.php";?>
<? session_start()?>
<div class="ots"></div>
<? $stat = "";?>
=======
<?php /*require_once "../setting/setting.php";*/?>

<div class="ots"></div>

>>>>>>> c720b3c88dd26e4042a69a61a30a1b91b50f0766
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
    <!--Нижнее только для админов-->
    <?php $res = mysqli_query($connect, " SELECT * FROM `guest` ");
            $prod = $res->fetch_all(); 
            foreach ($prod as $status)  { 
                if ($status[5] == "admin" && $_SESSION["email"] != "" ) { 
                        $stat = "admin";
                } 
            }
                if ($stat == "admin") {
                ?>
    <div class="admin_merch" style="display: none">
        <div class="admin_merch_inner">
            <div class="admin_merch_inner_inner">
                <input class="textBox" name="name" placeholder="Название">
                <input class="textBox" name="link" placeholder="Ссылка">
                <input class="textBox" name="sell" placeholder="Цена">
                <input class="textBox" type="file" style="height: 100%"></input>
                <button class="textBox" onclick="addMerch()">Ок</button>
            </div>
        </div>
    </div> 
    <? }  ?>
    
    <ul class="table">
<<<<<<< HEAD
        <?php $result = mysqli_query($connect, " SELECT * FROM `product` ");
            $product = $result->fetch_all(); ?>
    <?php foreach ($product as $prod) { 
        $img = "assets/images/".$prod[4];?>
        <li class="table_el">
        <?php if ($stat == "admin") { ?> <a class="delete"></a> <? } ?>
            <? if ( $_SESSION["email"] == "" )  {?>
            <a href="index.php?page=Registr"><img class="foto" src=<?=$img?>></img></a> 
            <?}?>
            <? if ( $_SESSION["email"] != "" )  {?>
            <a href=<?=$prod[5]?>><img class="foto" src=<?=$img?>></img></a> 
            <?}?>
            <h3><?=$prod[1]?></h3>
            <div class="buy">
                <span style="color: #E17521"><?=$prod[3]?> руб.</span>
                <span class="buy__text" style="color: #E17521;">Купить</span>
            </div>
        </li>
        <? }?>
        <!--Нижнее только для админов-->
        <?php if ($stat == "admin" && $_SESSION["email"] != "" ) {?>
        <li class="table_el" onclick="addMerch()">
            <a><img class="foto" src="assets/images/Plus.png"></img></a>
        </li> <? } ?>
=======
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
>>>>>>> c720b3c88dd26e4042a69a61a30a1b91b50f0766
    </ul>
</div>

<div class="pred_footer"></div>