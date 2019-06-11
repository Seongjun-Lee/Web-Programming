<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();

$connect = mysql_connect('localhost', 'root', 'apmsetup');
mysql_select_db('lsj_db', $connect);

if($_SESSION[Login] != true)
    echo "
    <script>
    alert('로그인이 필요합니다.');
    location.replace('$_SESSION[SPage]')
    </script>
    ";
else{
    $sql = "delete from GameDB where title='$_SESSION[Sgame]' and device='$_SESSION[Sdevice]'";
    $result = mysql_query($sql, $connect);

    if(!$result)
        echo "
        <script>
        alert('게시판 삭제 오류');
        location.replace('$_SESSION[SPage]');
        </script>
        ";
    else
        echo "
        <script>
        alert('게시판 삭제 완료');
        location.replace('http://localhost/Project/import/MainPage/GameChoice.php');
        </script>
        ";
}
?>