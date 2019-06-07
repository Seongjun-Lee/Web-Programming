<?php header("Content-Type:text/html;charset=utf-8");

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

if(empty($_POST[id]) || empty($_POST[pw]))
    echo "
    <script>
    alert('아이디와 비밀번호를 모두 입력하시오')
    </script>
    ";
else
{
    $sql = "select * from register where user_id='$_POST[id]'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    if ($row[user_id] != $_POST[id])
        echo("
        <script>
        alert('아이디가 존재하지 않습니다') 
        </script>
        ");
    else
    {
        if($_POST[pw] != $row[user_pw])
            echo ("
            <script>
            alert('잘못된 비밀번호입니다')
            </script>
            ");
        else
            echo ("
            <script>
            alert('로그인 완료')
            </script>
            ");
    }
}
?>

<script>
//location.replace('../../index.php');
    location.replace('../../index.php');
</script>