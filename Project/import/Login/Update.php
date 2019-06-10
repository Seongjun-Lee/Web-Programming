<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

$sql = "update RegisterDB set user_pw = '$_POST[pw]', user_name = '$_POST[nickname]', email = '$_POST[email]' where user_id = '$_POST[id]'";
$result = mysql_query($sql, $connect);

if(!$result)
    echo "
    <script>
    alert('개인정보 수정 오류')
    location.replace('$_SESSION[SPage]');
    </script>
    ";
else {
    $_SESSION[Spw] = $_POST[pw];
    $_SESSION[Suser_name] = $_POST[nickname];
    echo "
    <script>
    alert('개인정보 수정 완료')
    location.replace('$_SESSION[SPage]');
    </script>
    ";
}
?>