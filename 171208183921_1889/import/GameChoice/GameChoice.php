<?php header("Content-Type:text/html;charset=utf-8");

if($_POST[Android] == true)
{
    echo "
    <script>
    alert('성공')
    </script>
    ";
}
else
{
    echo "
    <script>
    alert($_POST[Android])
    </script>
    ";
}
?>