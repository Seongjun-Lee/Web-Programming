<?php

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connnect);

$sql = "select * from Registration where id='$_POST[id]'";
$result = mysql_query($sql, $connect);

if(!$result)
    echo ("
    <script>
    alert('아이디가 존재하지 않습니다') 
    </script>
    ");
else
    $row = mysql_fetch_array($result);

    if($_POST[pw] != $row[pw])
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

