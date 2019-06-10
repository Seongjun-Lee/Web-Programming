<?php
session_cache_expire(360);
session_start();

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Gamer's Hangout</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="B_select/dist/css/bootstrap-select.css" rel="stylesheet"/>

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--<script src="js/jquery.min.js"></script> 위 js를 다운받아 폴더에 참조하였습니다. 이렇게 하는게 더 좋겠죠? -->
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body style="background-color: #000000">
<?php
$sql = "select * from GameDB where title='$_SESSION[Sgame]' and device='$_SESSION[Sdevice]'";
$result = mysql_query($sql, $connect);

$array = mysql_fetch_array($result);
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

if($_SESSION[Login] == true) {
    $sql = "select * from gesipan where Board_game = '$_SESSION[Sgame]'";
    $result = mysql_query($sql, $connect);
    while($array = mysql_fetch_array($result)) {
        if ($array[Board_writer] == $_SESSION[Suser_name])
            echo "
            <script>
            alert('이미 후기를 작성하셨습니다.')
            location.replace('gesipan.php');
            </script>
            ";
    }
    ?>
    <div style="background-color: #000000" class="container" id="board_write">
        <h1 style="color: #ffffff; padding-top:40px">후기 게시판</h1>
        <div id="write_area">
            <form action="write_upload.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class ="col-md-6">
                        <div class="form-group">
                            <input class="styling_input" name="title" id="utitle"  placeholder="제목" maxlength="30" required/>
                        </div>
                    </div>
                </div>
                <select name="score">
                    <option value="">점수 선택</option>
                    <?php
                    $sc = 0;
                    for($sc=0;$sc<=99;$sc++) {
                        echo "<option value=$sc>$sc</option>";
                    }
                    echo "<option>$sc</option>";
                    ?>
                </select>
                <div>
                    <textarea class="styling" name="content" id="ucontent" placeholder="내용" required></textarea>
                </div>
                <div class="bt_se">
                    <input type="submit" class="btn btn-primary" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px" value="글 작성">
                    <a href="gesipan.php" class="btn btn-primary" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px; color: #ffffff">목록으로</a>
                </div>
            </form>
        </div>
    </div>
    <?php
}
else
    echo"
    <script>
    alert('로그인이 필요합니다.');
    location.replace('gesipan.php');
    </script>
    ";
?>
</body>
</html>