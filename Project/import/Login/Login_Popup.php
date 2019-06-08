<?php
session_cache_expire(360);
session_start();
?>

<input class="modal-state" id="open-pop" type="checkbox" />
<div class="modal">
    <label class="modal_bg" for="open-pop"></label>
    <?php
        if($_SESSION[Login] == NULL) {
            echo "
            <div class='modal_inner'>
                <label class='modal_close' for='open-pop'></label>
            ";
            include "Login.php";
        }
        else {
            echo "
            <div class='modal_inner' style='height: 60%'>
                <label class='modal_close' for='open-pop'></label>
            ";
            include "UserInfo.php";
        }
        ?>
    </div>
</div>