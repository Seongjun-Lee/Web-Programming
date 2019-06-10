<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

$check = "select * from RegisterDB where user_id ='$_POST[Rid]'";

$result = mysql_query($check, $connect);
$array = mysql_fetch_array($result);

while($array = mysql_fetch_array($result))
{
    if($array[id] == $_POST[Rid])
        echo "
        <script>
        alert('이미 존재하는 아이디입니다.');
        location.replace('Register.php');
        </script>
        ";
}

$sql = "insert into RegisterDB (name, user_id, user_pw, email, user_name) values('$_POST[Rname]', '$_POST[Rid]', '$_POST[Rpw]', '$_POST[Remail]', '$_POST[Rnickname]')";

$result2 = mysql_query($sql, $connect);

echo "
<script>
alert('회원가입 완료');
location.replace('$_SESSION[SPage]');
</script>
";
?>