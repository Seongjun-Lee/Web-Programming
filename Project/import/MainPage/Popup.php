<div id="POPUSER" class="thumbnailsPOPLogin">
    <?php
    if($_SESSION[Login] == NULL) {
        include "../Login/Login.php";
    }
    else {
        include "../Login/UserInfo.php";
    }
    ?>
</div>