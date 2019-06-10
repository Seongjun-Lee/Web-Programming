<?php
header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

$db = new mysqli("localhost","root","apmsetup","lsj_db");
$db->set_charset("utf-8");

function mq($sql)
{
    global $db;
    return $db->query($sql);
}
?>