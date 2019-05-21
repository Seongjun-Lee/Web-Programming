<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

$date = $_POST[date];
$order = $_POST[order_id];
$name = $_POST[name];
$price = $_POST[price];
$quantity = $_POST[quantity];

$sql = "insert into tableboard_shop (date, order_id, name, price, quantity) values('$date', $order, '$name', $price, $quantity)";

$result_insert = mysql_query($sql, $connect);

if(!$result_insert)
    # 참고 : 에러 메시지 출력 방법
    echo "<script> alert('insert - error message') </script>";

mysql_close();

?>

<script>
    location.replace('../index.php');
</script>
