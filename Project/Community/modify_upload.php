<?php
include "db_connect.php";
session_cache_expire(360);
session_start();
$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("lsj_db",$connect);

$bno = $_POST['B_Num'];
$bwriter = $_POST[B_writer];
$bpassword = $_POST[B_pw];
$btitle = $_POST[B_title];
$bcontent = $_POST[B_content];
//$bgenre = $_POST[B_genre]; 장르 안씀
$bscore = $_POST[B_score];
$bwdate = date("Y-m-d H:i:s");
$sql = "update gesipan set Board_writer='$bwriter' ,Board_title='$btitle',Board_contents = '$bcontent', Board_score = '$bscore', Board_wdate = '$bwdate' where Board_Num=($bno)";
//$sql = "update gesipan set Board_writer='modified',Board_password = 9999,Board_title='modified',Board_contents = 'modified' where Board_Num=($bno)";
$result = mysql_query($sql,$connect);

$sql1 = "select * from GameDB";
$result1 = mysql_query($sql1, $connect);

while($array = mysql_fetch_array($result1))
{
    $sql2 = "select * from gesipan where Board_game = '$array[title]' and Board_console='$array[device]'";
    $result2 = mysql_query($sql2, $connect);

    $num = 0;
    $pointSum = 0;

    if($result2) {
        while ($array2 = mysql_fetch_array($result2)) {
            $num++;
            $pointSum += $array2[Board_score];
        }
    }

    if($num == 0) {
        $insert = "update GameDB set point = 0 where title='$array[title]' and device='$array[device]'";
        $result3 = mysql_query($insert, $connect);
    }
    else {
        $pointAvg = $pointSum / $num;

        $insert = "update GameDB set point = '$pointAvg' where title='$array[title]' and device='$array[device]'";
        $result3 = mysql_query($insert, $connect);
    }
}
?>


<!--    //",Board_image = ".$_POST['file'].-->
<script type="text/javascript">alert("수정되었습니다.");
location.replace('../read.php?Board_Num=<?php echo $bno; ?>');
</script>


