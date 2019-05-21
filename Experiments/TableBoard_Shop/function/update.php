<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드를 POST로 받아온 내용으로 수정하기!

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

$date = $_POST[date];
$order = $_POST[order_id];
$name = $_POST[name];
$price = $_POST[price];
$quantity = $_POST[quantity];

$num = $_GET[num];

$sql = "update tableboard_shop set date = '$date', order_id = '$order', name = '$name', price = '$price', quantity = '$quantity' where num='$num'";

$result_update = mysql_query($sql, $connect);

if(!$result_update)
    # 참고 : 에러 메시지 출력 방법
    echo "<script> alert('update - error message') </script>";

mysql_close();
?>

<script>
    location.replace('../index.php');
</script>
