<header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo"></div>

                <div class="nav">
                    <a class="nav__link" href="#">Гараж</a>
                    <div class="stick"></div>
                    <a class="nav__link" href="#">Проекты</a>
                    <div class="stick"></div>
                    <a class="nav__link" href="#">Магазин</a>
                </div>

                <div class="users__icons">
                    <?php session_start();
                    if ( $_SESSION["email"] == "" )  { ?>
                        <a class = "user__status__link__off" id="userStatus" href="../front/Registr.php"></a>
                    <?php } 
                    if ( $_SESSION["email"] != "" ) { ?>
                        <a class = "user__status__link__on" id="userStatus" href="../front/Profile.php"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
</header>
