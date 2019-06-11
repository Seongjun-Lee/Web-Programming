<?php
include "db_connect.php";
session_cache_expire(360);
session_start();

$_SESSION[SPage] = "http://localhost/Project/Community/gesipan.php";

$connect = mysql_connect('localhost', 'root', 'apmsetup');
mysql_select_db('lsj_db', $connect);

if($_SESSION[Sgame] == NULL || (($_SESSION[Sgame] != $_POST[title]) && ($_POST[title] != NULL))) {
    $_SESSION[Sgame] = $_POST[title];
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gamer's Hangout</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src="../assets/js/jquery.bpopup.min.js"></script>
    <script src="../import/JS/POPUP_Function.js"></script>

    <link rel = "stylesheet" href="css/style.css?after"/>
    <link rel = "stylesheet" href="../import/Edit.css?after"/>

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
<body style="background-color: #000000">

<div class="Menu_fixed">
    <input type="button" id="MenuButton" class="MenuButton" style="font-size:11pt" value="Menu" /><br>
    <table>
        <tr><input type="button" id="Device_btn" class="GameMenu" style="background-color: #FCFCFC; color: #000000; font-size:11pt" value="Game Select"></tr>
        <tr><input type="button" id="LoginButton_openCom" class="GameMenu" style="background-color: #7E7E7E; font-size:11pt" value="User Info"></tr>
        <tr><input type="button" id="DeleteGesipan_btn" class="GameMenu" style="background-color: #161616; font-size:11pt" value="Delete Game"></tr>
        <tr><input type="button" id="MainPage_btn" class="GameMenu" style="background-color: #323232; font-size:11pt" value="Main Page"></tr>
    </table>
</div>

<?
include "UpdatePoint.php";
$sql = "select * from GameDB where title='$_SESSION[Sgame]' and device='$_SESSION[Sdevice]'";
$result = mysql_query($sql, $connect);
if($result) {
    $array = mysql_fetch_array($result);
    $border = '#8C8C8C';
}

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

    <div style="background-color: #000000" id="board_area">
        <h1 style="color: #ffffff; border: 5px solid <?echo$border?>; border-radius: 4px; text-align: center; padding-top: 10px; padding-bottom: 10px; background-color: #323232"><?php echo$_SESSION[Sgame]?> / <?php echo$_SESSION[Sdevice]?></h1>
        <h3 style="text-align: right; margin: 0 0 0 0; padding-top: 10px; color: #ffffff">제작사 : <?php echo$array[company]?></h3>
        <label style="float: left; background-color: <?echo$border?>; font-size: 25px; width: 100px" class="label label-default"><?php echo $array[point];?></label>
        <?php
        if($array[location] != NULL)
            echo"
            <a href='$array[location]' style=\"width: 100px; color: #ffffff; border: 5px solid $border; border-radius: 4px; text-align: center; padding-top: 10px; padding-bottom: 10px; background-color: #323232; float: right; margin-top: 10px; margin-bottom: 5px\">구매</a>
            ";
        ?>
        <table style="border-width: 10px; border-color: #323232; border-radius: 15px " class = "table table-striped table-bordered table-hover">
            <thead>
            <tr style="background-color: #1c1f2b" class = "text-success">
                <th style="color: #cce5ff" width="70">번호</th>
                <th style="color: #cce5ff" width="500">제목</th>
                <th style="color: #cce5ff" width="120">글쓴이</th>
                <th style="color: #cce5ff" width="100">점수</th>
                <th style="color: #cce5ff" width="100">조회수</th>
            </tr>
            </thead>
            <?php
            $connect = mysqli_connect("localhost","root","apmsetup","lsj_db");
//            $sql = mq("select * from gesipan order by Board_Num desc limit 0,10"); // board테이블에있는 idx를 기준으로 내림차순해서 5개까지 표시
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $sql = mq("select * from gesipan where Board_game='$_SESSION[Sgame]' and Board_console='$_SESSION[Sdevice]'");
            $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
            $list = 10; //한 페이지에 보여줄 개수
            $block_ct = 10; //블록당 보여줄 페이지 개수

            $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
            $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
            $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

            $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
            if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
            $total_block = ceil($total_page/$block_ct); //블럭 총 개수
            $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

            $sql2 = mq("select * from gesipan order by Board_Num desc limit $start_num, $list");
//            echo $row_num;
            $num = 0; // 페이지네이션을 위한 변수
            while($gesipan = $sql2->fetch_array())
            {
                if($gesipan[Board_game] != $_SESSION[Sgame] || $gesipan[Board_console] != $_SESSION[Sdevice])
                    continue;
                $Board_title=$gesipan["Board_title"];
                if(strlen($Board_title)>30)
                {
                    $Board_title=str_replace($gesipan["Board_title"],mb_substr($gesipan["Board_title"],0,30,"utf-8")."...",$gesipan["title"]); //title이 30을 넘어서면 ...표시
                }
                ?>
                <tbody>
                <!--<tr onclick="location.href = (<?/* echo "read.php/num=$gesipan[Board_Num]"*/?>//)">-->
                    <? echo("<tr onclick=\"location.href = ('read.php?Board_Num=$gesipan[Board_Num]')\"> ");?>
<!--                    --><?// echo $gesipan[Board_Num];?>
                    <td width="70"><?php
                        if ($_GET['page'] < 1)
                            echo $row_num-$num;
                        else
                            echo $row_num-$num-$list*($_GET['page']-1); ?></td>
<!--                    <td width="500" name = "B_Num" value = "--><?// echo $gesipan[Board_Num];?><!--"><a href="read.php">--><?php //echo $Board_title;?><!--</a></td>-->
                    <td width="500"><? echo $gesipan[Board_title]; ?>
<!--                        <input type="text" name ="Test2" value =--><?// echo $gesipan[Board_writer];?><!-- />-->



                    <td width="120"><?php echo $gesipan['Board_writer'];?></td>
                    <td width="100"><?php echo $gesipan['Board_score'];?></td>
                    <td width="100"><?php echo $gesipan['Board_views'];?></td>
                    <?$num++;?>
                </tr>
                </tbody>
            <?php } ?>
<!--</form>-->
        </table>
        <div id="write_btn">
            <a href="write.php"><button type="button" class="btn btn-default" style="background-color: #323232; border: 5px solid <?echo$border?>; border-radius: 4px">글쓰기</button></a>
        </div>
        <div id="page_num">
            <ul style="color: #cce5ff">
                <?php
                if($page <= 1)
                { //만약 page가 1보다 크거나 같다면
                    echo "<li style='float: left; margin-left: 10px; text-align: center'>처음</li>"; //처음이라는 글자에 빨간색 표시
                }else{
                    echo "<li style='float: left; margin-left: 10px; text-align: center'><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
                }
                if($page <= 1)
                { //만약 page가 1보다 크거나 같다면 빈값

                }else{
                    $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
                    echo "<li style='float: left; margin-left: 10px; text-align: center'><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
                }
                for($i=$block_start; $i<=$block_end; $i++){
                    //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
                    if($page == $i){ //만약 page가 $i와 같다면
                        echo "<li style='float: left; margin-left: 10px; text-align: center'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
                    }else{
                        echo "<li style='float: left; margin-left: 10px; text-align: center'><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
                    }
                }
                if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
                }else{
                    $next = $page + 1; //next변수에 page + 1을 해준다.
                    echo "<li style='float: left; margin-left: 10px; text-align: center'><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
                }
                if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
                    echo "<li style='float: left; margin-left: 10px; text-align: center' >마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
                }else{
                    echo "<li style='float: left; margin-left: 10px; text-align: center'><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
                }
                ?>
            </ul>
        </div>
        <div class="text-center">
        <ul class="pagination pagination-lg"> <!--부트스트랩에서 제공하는 페이징 마법사(?)-->
        </ul>
    </div>
</div>

<?php
include "../import/MainPage/Device/Mobile.php";
include "../import/MainPage/Device/MS.php";
include "../import/MainPage/Device/Nintendo.php";
include "../import/MainPage/Device/Sony.php";
include "../import/MainPage/Device/PC.php";
include "CommunityLogin.php";
?>

</body>
</html>

