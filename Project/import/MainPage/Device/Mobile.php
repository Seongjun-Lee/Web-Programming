<!--input class="modal-state" id="Mobile-pop" type="checkbox" />
<div class="modal">
    <label class="modal_bg" for="Mobile-pop"></label>
    <div class="modal_inner">
        <label class="modal_close" for="Mobile-pop"></label>
    </div>
</div-->

<div id="POPMB" class="thumbnailsPOP">
    <form method="POST" action="http://localhost/Project/import/MainPage/GameChoice.php">
        <div name = "Android" class="box">
            <div class="image fit"><img src="http://localhost/Project/images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>Android</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MB_btn_close\" class=\"button MB fit\" name='Device' value='ANDROID'/>";
                    ?>
                </div>
            </div>
        </div>
        <div name = "Ios" class="box">
            <div class="image fit"><img src="http://localhost/Project/images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>Ios</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MB_btn_close\" class=\"button MB fit\" name='Device' value='IOS'/>";
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>