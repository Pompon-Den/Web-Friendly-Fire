<? session_start();
if ($_SESSION["email"] != "" ) {
?>
<div class="ots"></div>
<?php require_once "../setting/setting.php";?>
<?php $result = mysqli_query($connect, " SELECT * FROM `guest` ;");
            $people = $result->fetch_all(); ?>
<div class="ots"></div>

<div class="main_profile">
        <div class="profile_inner">
            <? foreach ($people as $data) {
            if ($data[2] == $_SESSION["email"]) {
            ?>
            <h2 class="profile_name">Профиль</h2>            
            <div class="block_first">            
                <h3 class="profile_name_sub">Основное</h3>
                <div class="block_under_name_sub">
                    <div class="input_block">
                        <div class="profile_name_sub_sub">E-mail</div>
                        <div class="input"  type="email"><?=$data[2]?></div>
                    </div>
            <form  style="width: 100%; height: 100%" action="../back/prof.php"  method="post" >
                        <div class="input_block">
                            <div class="profile_name_sub_sub">Дата рождения</div>
                            <input class="input" type="data" name="data"<? if(empty($data[4])) {?>placeholder="год.месяц.день"<?} else { ?> placeholder=<?=$data[4]?>><span></span><?}?></input>
                        </div>
                    </div>
                </div>
                <div class="block_second">
                    <h3 class="profile_name_sub">Пароль</h3>
                    <div class="block_under_name_sub_second">
                        <div class="input_block" style="width: 50%">
                            <div class="profile_name_sub_sub">Старый пароль</div>
                            <input class="input" type="password" name="oldpassword"></input>
                        </div>
                        <div class="block_under_name_sub_second_sub">
                            <div class="input_block">
                                <div class="profile_name_sub_sub">Новый пароль</div>
                                <input class="input" type="password" name="newpassword"><span></span></input>
                            </div>
                            <div class="input_block">
                                <div class="profile_name_sub_sub">Подтвердите пароль</div>
                                <input class="input" type="password" name="newpassword2"><span></span></input>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button_save"><span>Сохранить</span></button>
            </form>
            </div>
            <a class="button_save"><span>Сохранить</span></a>
            <a class="button_save"  href = "../back/signOut.php" ><span>Выход</span></a>
        </div>
</div>
<? } }?>
<?} else {
     header('Location: ../front/index.php?page=Registr');
    }
?>
