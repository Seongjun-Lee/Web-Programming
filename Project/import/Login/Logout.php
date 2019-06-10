<?php header("Content-Type:text/html;charset=utf-8");
session_cache_expire(360);
session_start();


echo "
<script>
alert('로그아웃되었습니다.');
location.replace('$_SESSION[SPage]');
</script>
";

unset($_SESSION[Login]);
unset($_SESSION[Sname]);
unset($_SESSION[Suser_id]);
unset($_SESSION[Suser_name]);
unset($_SESSION[SDevice]);
unset($_SESSION[SGame]);
unset($_SESSION[SPage]);

?>