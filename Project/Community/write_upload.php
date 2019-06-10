<?php

session_cache_expire(360);
session_start();

include "db_connect.php";

/*$tmpfile = $_FILES['b_file']['tmp_name'];
$origin = $_FILES['b_file']['writer'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['writer']);
$folder = "upload/".$filename;
move_uploaded_file($tmpfile,$folder);*/


$sql = mq("insert into gesipan(Board_title,Board_writer,Board_contents,Board_wdate,Board_score,Board_game,Board_console)
 values('" . $_POST['title'] . "','" . $_SESSION[Suser_name] . "','" . $_POST['content'] . "','" . date("Y-m-d H:i:s") . "','" . $_POST['score'] . "', '" . $_SESSION[Sgame] . "', '" . $_SESSION[Sdevice] . "')"); ?>
<script type="text/javascript">alert("글이 등록되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=gesipan.php"/>