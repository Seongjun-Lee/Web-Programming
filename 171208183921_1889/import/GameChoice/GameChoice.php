<?php //header("Content-Type:text/html;charset=utf-8");

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../Edit.css" />

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.bpopup.min.js"></script>
    <script src="../JS/POPUP_Function.js"></script>


    <title>GameSelect</title>

</head>
<body>
<form method="POST" action="GameChoice.php">
    <div class="Menu_fixed">
        <input type="button" id="MenuButton" class="MenuButton" value="Menu" /><br>
        <table>
            <tr><input type="submit" class="GameMenu" style="background-color: #7E7E7E" name="Device" value="PC"></tr>
            <tr><input type="submit" class="GameMenu" style="background-color: #6D6CFF" name="Device" value="Sony"></tr>
            <tr><input type="submit" class="GameMenu" style="background-color: #89FF82" name="Device" value="Microsoft"></tr>
            <tr><input type="submit" class="GameMenu" style="background-color: #FF6C6C" name="Device" value="Nintendo"></tr>
            <tr><input type="submit" class="GameMenu" style="background-color: #FFCA6C" name="Device" value="Mobile"></tr>
        </table>
    </div>
<form>

<?php
$sql = "select * from GameDB where device='$_POST[Device]'";
$result = mysql_query($sql);

//echo "<table class = \"GameTable\">";
    echo "<section id='GameSection'>";
    while($array = mysql_fetch_array($result))
    {
        echo "
            <article class='GameArticle'>
                <img src=\"../../images/PS4x400.jpg\" alt='' class='GameImage'>
                <p class='GameP'>
                <input type='button' id='GAME_btn_open' class='GameTitle' style='font-size: xx-large' value='$array[title]' />
                </p>
                <div class='GameCompany'>
                    $array[company]
                </div>
            </article>
            ";
    }
    //echo "</table>";
    echo "</section>";

    include "GamePOP.php";
?>
</body>
</html>