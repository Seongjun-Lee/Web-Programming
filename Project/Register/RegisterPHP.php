<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-05-02
 * Time: 오후 2:25
 */

$connect = mysql_connect('localhost', 'lsj', '2015136093');
mysql_select_db('lsj_db', $connect);

$sql = mysql_query(RegisterSQL.sql);

$import = "insert into table User(id = '$_POST[id]', name = '$_POST[name]', password = password('$_POST[password]'), email = '$_POST[email]', phone = '$_POST[phone]')";

$result = mysql_query($import);

if(!$result)
{
    echo "<script> alert('회원가입 오류') </script>";
}
?>