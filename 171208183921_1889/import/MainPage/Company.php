<div class="thumbnails">
    <div name = "PC" class="box">
        <div class="image fit"><img src="images/Samsungx400.bmp" alt="" />
            <div class="inner">
                <h3>PC</h3>
                <p>PC / VR</p>
                <input type="button" id="DT_btn_open" class="button PC fit" value="Select">
            </div>
        </div>
    </div>

    <div name = "PS" class="box">
        <div class="image fit"><img src="images/PS4x400.jpg" alt="" />
            <div class="inner">
                <h3>Sony</h3>
                <p>Series of PS / PSVITA / PSVR</p>
                <input type="button" id="PS_btn_open" class="button PS fit" value="Select">
            </div>
        </div>
    </div>

    <div name = "MS" class="box">
        <div class="image fit"><img src="images/Xboxx400.jpg" alt="" />
            <div class="inner">
                <h3>Microsoft</h3>
                <p>Series of XBOX</p>
                <input type="button" id="MS_btn_open" class="button MS fit" value="Select">
            </div>
        </div>
    </div>

    <div name = "Nintendo" class="box">
        <div class="image fit"><img src="images/Nintendox400.jpg" alt="" />
            <div class="inner">
                <h3>Nintendo</h3>
                <p>Series of DS / Switch</p>
                <input type="button" id="NIN_btn_open" class="button NIN fit" value="Select">
            </div>
        </div>
    </div>

    <div name = "Mobile" class="box">
        <div class="image fit"><img src="images/Mobilex400.PNG" alt="" />
            <div class="inner">
                <h3>Mobile</h3>
                <p>Android / IOS</p>
                <input type="button" id="MB_btn_open" class="button MB fit" value="Select">
            </div>
        </div>
    </div>

    <?php
        include "Device/Mobile.php";
        include "Device/MS.php";
        include "Device/Nintendo.php";
        include "Device/Sony.php";
    ?>
</div>