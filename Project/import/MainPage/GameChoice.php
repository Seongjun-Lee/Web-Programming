<?php //header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();
$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../Edit.css" />

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.bpopup.min.js"></script>
    <script src="../JS/POPUP_Function.js"></script>

    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" href="css/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>GameSelect</title>

</head>
<body>

<div class="Menu_fixed">
    <input type="button" id="MenuButton" class="MenuButton" value="Menu" /><br>
    <table>
        <tr><input type="button" id="PC_btn_open" class="GameMenu" style="background-color: #7E7E7E" name="Device" value="PC"></tr>
        <tr><input type="button" id="PS_btn_open" class="GameMenu" style="background-color: #6D6CFF" name="Device" value="Sony"></tr>
        <tr><input type="button" id="MS_btn_open" class="GameMenu" style="background-color: #89FF82" name="Device" value="Microsoft"></tr>
        <tr><input type="button" id="NIN_btn_open" class="GameMenu" style="background-color: #FF6C6C" name="Device" value="Nintendo"></tr>
        <tr><input type="button" id="MB_btn_open" class="GameMenu" style="background-color: #FFCA6C" name="Device" value="Mobile"></tr>
<!--            <tr><input type="button" id="USER_btn_open" class="GameMenu" style="background-color: #7E7E7E" name="User Info" value="Main Page"></tr>-->
        <tr><input type="button" id="MainPage_btn" class="GameMenu" style="background-color: #7E7E7E" value="Main Page"></tr>
    </table>
</div>

<form method="POST" action="../../Community/gesipan.php">
    <?php
    $sql = "select * from GameDB where device='$_POST[Device]'";
    $_SESSION[Sdevice] = $_POST[Device];
    $result = mysql_query($sql);
    $num = 0;
    while($array = mysql_fetch_array($result))
        $num++;
    $branch = intval($num / 4);

    $sql2 = "select * from GameDB where device='$_POST[Device]'";
    $result2 = mysql_query($sql2);

    switch($_POST[Device])
    {
        case 'PS4':
        case 'PS3':
        case 'PSVITA':
        case 'PSVR':
            $back = '#EBF7FF';
            break;
        case 'XBOXONE':
        case 'XBOX360':
            $back = '#E0FFDB';
            break;
        case 'IOS':
        case 'ANDROID':
            $back = '#FFFED7';
            break;
        case 'SWITCH':
        case '2DS':
        case '3DS':
            $back = '#FFEAEA';
            break;
        case 'PC':
        case 'VR':
            $back = '#F3F3F3';
            break;
    }

    //echo "<table class = \"GameTable\">";
    echo "<section id='GameSection'>";
    echo("<div class=\"boardz centered-block\">");
    $pos = 0;
    while($array = mysql_fetch_array($result2))
    {
        if($array[point] >= 0 and $array[point] < 15)
            $border = 'GameArticle0';
        else if($array[point] >= 15 and $array[point] < 30)
            $border = 'GameArticle1';
        else if($array[point] >= 30 and $array[point] < 45)
            $border = 'GameArticle2';
        else if($array[point] >= 45 and $array[point] < 60)
            $border = 'GameArticle3';
        else if($array[point] >= 60 and $array[point] < 75)
            $border = 'GameArticle4';
        else if($array[point] >= 75 and $array[point] < 90)
            $border = 'GameArticle5';
        else if($array[point] >= 90 and $array[point] <= 100)
            $border = 'GameArticle6';

        if($pos == 0)
            echo "<ul>";
        echo "<li class='$border' style='background-color:$back'>";

        echo "
            <img src=\"$array[image]\" alt='' class='GameImage'>
            ";
        echo "
            <p class='GameP'>
            <input type='submit' class='GameTitle' style='font-size:large; background-color:$back' name ='title' value='$array[title]'/>
            </p>
            ";
        echo "
            <div class='GameCompany'>
            $array[company]
            </div>
            ";
        $pos++;

        if($pos == $branch) {
            echo("</ul>");
            $pos = 0;
        }
    }
    echo("</div>");
    echo "</section>";

    include "Device/Mobile.php";
    include "Device/MS.php";
    include "Device/Nintendo.php";
    include "Device/Sony.php";
    include "Device/PC.php";
    include "User.php";
    ?>
</form>
</body>
</html>