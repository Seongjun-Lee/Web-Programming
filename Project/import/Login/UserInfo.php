<?php
session_cache_expire(360);
session_start();

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

$sql = "select * from RegisterDB where name = '$_SESSION[Sname]'";
$result = mysql_query($sql, $connect);
$array = mysql_fetch_array($result);

?>
<form method="POST" action="http://localhost/Project/import/Login/Update.php">
    <div style="padding-top: 5%">
        <table class="UserInfo_Table">
            <tr>
                <td>
                    <label class="User_Info">이름</label>
                </td>
                <td>
                    <input class="Register_Input" type="text" name="name" value='<?echo$array[name];?>' onkeypress="Keycode(event);" readonly/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="User_Info">닉네임</label>
                </td>
                <td>
                    <input class="Register_Input" type="text" name="nickname" value='<?echo$array[user_name];?>' onkeypress="Keycode(event);" readonly/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="User_Info">아이디</label>
                </td>
                <td>
                    <input class="Register_Input" type="text" name="id" value='<?echo$array[user_id];?>' onkeypress="Keycode(event);" readonly/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="User_Info">비밀번호</label>
                </td>
                <td>
                    <input class="Register_Input" type="password" name="pw" value='<?echo$array[user_pw];?>' maxlength="20" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="User_Info">이메일</label>
                </td>
                <td>
                    <input class="Register_Input" type="text" name="email" value='<?echo"$array[email]";?>' maxlength="30" required/>
                </td>
            </tr>

        </table>
    </div>
    <div class="Login_Button">
        <input type="submit" value="Update" class="button PC" style="font-size:14pt"/>
        <a href="http://localhost/Project/import/Login/Logout.php" class="button PC" style="font-size:14pt">Logout</a>
    </div>
</form>
