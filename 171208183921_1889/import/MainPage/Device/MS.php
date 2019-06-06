<div id="POPMS" class="thumbnailsPOP">
    <form method="POST" action="import/GameChoice/GameChoice.php">
        <div name = "xboxone" class="box">
            <div class="image fit"><img src="images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>XBOX ONE</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MS_btn_close\" class=\"button MS fit\" name='Device' value='xboxone'/>";
                    ?>
                </div>
            </div>
        </div>
        <div name = "xbox360" class="box">
            <div class="image fit"><img src="images/Samsungx400.bmp" alt="" />
                <div class="inner">
                    <h3>XBOX 360</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"MS_btn_close\" class=\"button MS fit\" name='Device' value='xbox360'/>";
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>
