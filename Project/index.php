<?php
session_cache_expire(360);
session_start();

$_SESSION[SPage] = "http://localhost/Project/index.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gamer's Hangout</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css?after" />
        <link rel="stylesheet" href="import/Edit.css?after" />

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.bpopup.min.js"></script>
        <script src="import/JS/POPUP_Function.js"></script>

        <script type="text/javascript">
            function Keycode(e){
                var code = (window.event) ? event.keyCode : e.which; //IE : FF - Chrome both
                if (code > 32 && code < 48) nAllow(e);
                if (code > 57 && code < 65) nAllow(e);
                if (code > 90 && code < 97) nAllow(e);
                if (code > 122 && code < 127) nAllow(e);
            }
            function nAllow(e){
                alert('특수문자는 사용할수 없습니다.');
                if(navigator.appName!="Netscape"){ //for not returning keycode value
                    event.returnValue = false;  //IE ,  - Chrome both
                }else{
                    e.preventDefault(); //FF ,  - Chrome both
                }
            }
        </script>

	</head>
	<body id="top">

        <?php
            include "import/Login/Login_Button.php";
        ?>

<!--        <section id="banner" data-video="images/banner">-->
        <section id="banner" data-video="https://youtu.be/ktNvh63KkQQ?t=3">
            <div class="inner">
                <header>
                    <h1 style="font-family: inherit">Gamer's Hangout</h1>
                </header>
                <a href="#main" class="more">Learn More</a>
            </div>
        </section>

        <div id="main">
            <div class="inner">
                <?php
                include "import/MainPage/Company.php";
                ?>
            </div>
        </div>

        <Scripts>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.poptrox.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
	</body>


<?php
//    session_destroy();
?>
</html>