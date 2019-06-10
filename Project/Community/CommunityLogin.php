<?php
    session_cache_expire(360);
    session_start();

    $connect = mysql_connect("localhost", "lsj", "2015136093");
    mysql_select_db("lsj_db", $connect);

    $sql = "select * from RegisterDB where name = '$_SESSION[Sname]'";
    $result = mysql_query($sql, $connect);
    $array = mysql_fetch_array($result);
?>
<div id="POPCOM" class="thumbnailsPOPLogin">
    <?php
    if($_SESSION[Login] == NULL) {
//        include "../import/Login/Login.php";
        echo "
        <form method=\"POST\" action=\"http://localhost/Project/import/Login/Login_Check.php\">
        "
        ?>
            <div id="Login" style="height: 70%">
                <table class="Login_Table" style="width: 90%">
                    <tr>
                        <td>
                            <label class="Login_Info" style="display: block">ID</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" style="color: #ffffff"type="text" name="id" maxlength="10" minlength="5" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="Login_Info" style="display: block">Password</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" style="color: #ffffff; border-color: #ccc"type="password" name="pw" maxlength="20" minlength="5" required>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="Login_Button" style="height: 30%">
                <input type="submit" class="button PC" style="font-size:14pt" value="Login"/>
                <a href="http://localhost/Project/import/Login/Register.php" class="button PC" style="font-size:14pt">Register</a>
            </div>
            </form>
    <?php
    }
    else {
//        include "../import/Login/UserInfo.php";
        ?>
        <form method="POST" action="http://localhost/Project/import/Login/Update.php">
            <div style="padding-top: 5%">
                <table class="UserInfo_Table">
                    <tr>
                        <td>
                            <label class="Login_Info">이름</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" type="text" name="name" value='<?echo$array[name];?>' readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="Login_Info">닉네임</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" type="text" name="nickname" value='<?echo$array[user_name];?>' readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="Login_Info">아이디</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" type="text" name="id" value='<?echo$array[user_id];?>' readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="Login_Info">비밀번호</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" type="password" name="pw" value='<?echo$array[user_pw];?>' maxlength="20" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="Login_Info">이메일</label>
                        </td>
                        <td>
                            <input class="CommunityLogin" type="text" name="email" value='<?echo"$array[email]";?>' maxlength="30" required/>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="Login_Button">
                <input type="submit" value="Update" class="button PC" style="font-size:14pt"/>
                <a href="http://localhost/Project/import/Login/Logout.php" class="button PC" style="font-size:14pt">Logout</a>
            </div>
        </form>
    <?
    }
    ?>
</div>