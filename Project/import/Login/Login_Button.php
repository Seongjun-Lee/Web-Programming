<?php
session_cache_expire(360);
session_start();
?>
<div class="align-set">
    <label id="UserInfoButton" class="button fixed" for="open-pop">USER INFO</label>
    <?php
        include "Login_Popup.php";
    ?>
</div>

