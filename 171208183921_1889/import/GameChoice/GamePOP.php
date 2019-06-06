<div id="POPGAME" class="thumbnailsPOP">
    <form method="POST" action="import/GameChoice/GameChoice.php">
        <div name = "Android" class="box">
            <div class="image fit"><img src="images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>Android</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MB_btn_close\" class=\"button MB fit\" name='Device' value='Android'/>";
                    ?>
                </div>
            </div>
        </div>
        <div name = "Ios" class="box">
            <div class="image fit"><img src="images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>Ios</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MB_btn_close\" class=\"button MB fit\" name='Device' value='Ios'/>";
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>