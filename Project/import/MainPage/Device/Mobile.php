<div id="POPMB" class="thumbnailsPOP">
    <form method="POST" action="http://localhost/Project/import/MainPage/GameChoice.php">
        <div class="box">
            <div class="image fit"><img src="http://localhost/Project/images/Androidx400.jpg" alt="" />
                <div class="inner">
                    <h3>Android</h3>
                    <?php
                    echo "<input type='submit' id='MB_btn_close' class='button MB fit' name='Device' value='ANDROID'/>";
                    ?>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image fit"><img src="http://localhost/Project/images/Iosx400.png" alt="" />
                <div class="inner">
                    <h3>Ios</h3>
                    <?php
                    echo "<input type='submit' id='MB_btn_close' class='button MB fit' name='Device' value='IOS'/>";
                    ?>
                </div>
            </div>
        </div>
    </form>
</div>