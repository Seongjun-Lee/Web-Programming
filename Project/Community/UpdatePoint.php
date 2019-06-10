<?php
session_cache_expire(360);
session_start();
$connect2 = mysql_connect('localhost', 'lsj', '2015136093');
mysql_select_db('lsj_db', $connect2);

$sql1 = "select * from GameDB";
$result = mysql_query($sql1, $connect2);

while($array = mysql_fetch_array($result))
{
    $sql2 = "select * from gesipan where Board_game ='$array[title]' and Board_console = '$array[device]'";
    $result2 = mysql_query($sql2, $connect2);

    $num = 0;
    $pointSum = 0;

    while ($array2 = mysql_fetch_array($result2)) {
        $num++;
        $pointSum += $array2[Board_score];
    }

    if($num == 0) {
        $insert = "update GameDB set point = 0 where title='$array[title]' and device='$array[device]'";
        $result3 = mysql_query($insert, $connect2);
    }
    else {
        $pointAvg = $pointSum / $num;

        $insert = "update GameDB set point = '$pointAvg' where title='$array[title]' and device='$array[device]'";
        $result3 = mysql_query($insert, $connect2);
    }
}
?>
