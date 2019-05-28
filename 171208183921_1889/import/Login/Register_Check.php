<?php header("Content-Type:text/html;charset=utf-8");

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

if(empty($_POST[name]) || empty($_POST[id]) || empty($_POST[pw]) || empty($_POST[email]) || empty($_POST[nickname]))
    echo "
    <script>
    alert('빈 칸이 있으면 안됩니다')
    </script>
    ";
else {
    $sql = "insert into Register_Check (name, user_id, user_pw, email, user_name) values('$_POST[name]', '$_POST[id]', '$_POST[pw]', '$_POST[email]', '$_POST[nickname]')";

    $result = mysql_query($sql);

    if (!result)
        echo "
        <script>
        alert('에러')
        </script>
        ";
}
?>