<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();
$connect = mysql_connect('localhost', 'lsj', '2015136093');
mysql_select_db('lsj_db', $connect);

$sql1 = "select * from GameDB";
$result = mysql_query($sql1, $connect);

while($array = mysql_fetch_array($result))
{
    $sql2 = "select * from community where title = '$array[title]'";
    $result2 = mysql_query($sql2, $connect);

    $num = 0;
    $pointSum = 0;

    while($array2 = mysql_fetch_array($result2))
    {
        $num++;
        $pointSum += $array2[point];
    }

    if($num == 0)
        continue;
    else {
        $pointAvg = $pointSum / $num;

        $insert = "update GameDB set point = '$pointAvg' where title='$array[title]'";
        $result3 = mysql_query($insert, $connect);
    }
}
?>

<script>
    alert('이')
// location.replace('GameChoice.php');
</script>

