<?php
session_cache_expire(360);
session_start();
$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("lsj_db", $connect);
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Gamer's Hangout</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-color: #000000">
<?php
//echo ($_GET['Board_Num']);
$result = mysql_query("update gesipan set Board_views = Board_views + 1 where Board_Num = '$_GET[Board_Num]'", $connect);

$tql = mysql_query("select * from gesipan where Board_Num = '$_GET[Board_Num]'", $connect);
$gesipan = mysql_fetch_array($tql);

$sql2 = "select * from GameDB where title='$_SESSION[Sgame]' and device='$_SESSION[Sdevice]'";
$result2 = mysql_query($sql2, $connect);

$array = mysql_fetch_array($result2);
$border = '#8C8C8C';

if($array[point] >= 0 and $array[point] < 15)
    $border = '#8C8C8C';
else if($array[point] >= 15 and $array[point] < 30)
    $border = '#F15F5F';
else if($array[point] >= 30 and $array[point] < 45)
    $border = '#F29661';
else if($array[point] >= 45 and $array[point] < 60)
    $border = '#F2CB61';
else if($array[point] >= 60 and $array[point] < 75)
    $border = '#86E57F';
else if($array[point] >= 75 and $array[point] < 90)
    $border = '#5CD1E5';
else if($array[point] >= 90 and $array[point] <= 100)
    $border = '#6B66FF';


?>

<!-- 글 불러오기 -->
<form method="post" action="modify.php">
    <div style="background-color: #000000" id="board_read">
        <h2 style="margin-top: 80px; color: #ffffff"><?php echo $gesipan[Board_title]; ?></h2>
        <div style="color: #ffffff" id="user_info">
            작성자 : <?php echo $gesipan[Board_writer]; ?> / 작성일 : <?php echo $gesipan[Board_wdate]; ?> <!--/ 점수 : <?php echo $gesipan[Board_score];?>--> / 조회수 : <?php echo $gesipan[Board_views]; ?>
            <font size="7"><span style="float: right; background-color: <?echo$border?>" class="label label-default"><?php echo $gesipan[Board_score];?></span></font>
            <div id="bo_line"></div> <!--줄-->
        </div>
        <div style="color: #ffffff" >
            <textarea class="styling" readonly><?php echo $gesipan[Board_contents]; ?></textarea>
        </div>
        <!--    <div>-->
        <!--        파일 : <a href="upload/--><?php //echo $gesipan[Board_image];?><!--" download>--><?php //echo $gesipan[Board_image]; ?><!--</a>-->
        <!--    </div>-->
        <!--파일업로드미완성부분-->
        <!-- 목록, 수정, 삭제 -->
        <div id="bo_ser">
            <ul style="padding-top: 5px">
                <li class="btn btn-default buttonstyling" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px"><a href="gesipan.php" style="color: #ffffff">목록으로</a></li>
                <?php
                if($_SESSION[Login] == true && $_SESSION[Suser_name] == $gesipan[Board_writer])
                {
                ?>
                    <li class="btn btn-default buttonstyling" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px"><a href="modify.php?Board_Num=<?php echo $_GET[Board_Num]; ?>" style="color: #ffffff">수정</a></li>
                    <li class="btn btn-default buttonstyling" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px"><a href="delete.php?Board_Num=<?php echo $_GET[Board_Num]; ?>" style="color: #ffffff">삭제</a></li>
                <?php
                }
                ?>
                <!--            <a href="write.php"><button type="button" class="btn btn-default">글쓰기</button></a>-->
            </ul>
        </div>
    </div>
</form>
</body>
</html>