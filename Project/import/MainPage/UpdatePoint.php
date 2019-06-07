<?php header("Content-Type:text/html;charset=utf-8");

$connect = mysql_connect('localhost', 'lsj', '2015136093');
mysql_select_db('lsj_db', $connect);

$title = "select * from GameDB";
$result = mysql_query($title, $connect);

while($array = mysql_fetch_array($result))
{
    $sql = "select * from community where title = '$array[title]'";
    $result2 = mysql_query($sql, $connect);

    $num = 0;
    $pointSum = 0;

    while($array2 = mysql_fetch_array($result2))
    {
        $num++;
        $pointSum += $array2[point];
    }

    $pointAvg = $pointSum / $num;

    $insert = "update GameDB set point = '$pointAvg' where title='$array[title]'";
    $result3 = mysql_query($insert, $connect);
}
?>

<script>
location.replace('GameChoice.php');
</script>

