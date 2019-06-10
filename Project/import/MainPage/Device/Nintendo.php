<div id="POPNIN" class="thumbnailsPOP">
    <form method="POST" action="http://localhost/Project/import/MainPage/GameChoice.php">
        <div name = "Switch" class="box">
            <div class="image fit"><img src="http://localhost/Project/images/Nintendox400.jpg" alt="" />
                <div class="inner">
                    <h3>Switch</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"NIN_btn_close\" class=\"button NIN fit\" name='Device' value='SWITCH'/>";
                    ?>
                </div>
            </div>
        </div>
        <div name = "3DS" class="box">
            <div class="image fit"><img src="http://localhost/Project/images/3DSx400.jpg" alt="" />
                <div class="inner">
                    <h3>3DS</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"NIN_btn_close\" class=\"button NIN fit\" name='Device' value='3DS'/>";
                    ?>
                </div>
            </div>
        </div>
        <div name = "2DS" class="box">
            <div class="image fit"><img src="http://localhost/Project/images/2DSx400.png" alt="" />
                <div class="inner">
                    <h3>2DS</h3>
                    <?php
                    echo "<input type=\"submit\" id=\"NIN_btn_close\" class=\"button NIN fit\" name='Device' value='2DS'/>";
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>
