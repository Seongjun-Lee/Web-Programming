<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();

$connect = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("lsj_db", $connect);

$POSTtitle = addslashes('$_POST[title]');
$check = "select * from GameDB";
$sql = mysql_query($check, $connect);

while($array = mysql_fetch_array($sql))
{
    if($array[title] == $POSTtitle && $array[device] == $_SESSION[Sdevice])
        echo "
        <script>
        alert('이미 존재하는 게임입니다.');
        location.replace('$_SESSION[SPage]');
        </script>
        ";
}

$result = mysql_query($check, $connect);
$array = mysql_fetch_array($result);
if(empty($_POST[title]) || empty($_POST[device]) || empty($_POST[company]) || empty($_POST[image]))
    echo "
    <script>
    alert('빈 칸이 있으면 안됩니다');
    location.replace('$_SESSION[SPage]');
    </script>
    ";
else {
    $title = addslashes($_POST[title]);
    $company = addslashes($_POST[company]);
    $sql = "insert into GameDB (title, device, point, company, location, image) values('$title', '$_POST[device]', 0, '$company', '$_POST[location]', '$_POST[image]')";

    $result2 = mysql_query($sql, $connect);

    echo "
    <script>
    alert('게임 추가 완료');
    location.replace('$_SESSION[SPage]');
    </script>
    ";
}
?>