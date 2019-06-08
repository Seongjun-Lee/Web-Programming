<?php
echo "
<form method=\"POST\" action=\"http://localhost/Project/import/Login/Login_Check.php\">
"
?>
    <div id="Login" style="height: 60%">
        <table class="Login_Table">
            <tr>
                <td>
                    <label class="Login_Info">ID</label>
                </td>
                <td>
                    <input class="Login_Input" style="color: #ffffff"type="text" name="id" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">Password</label>
                </td>
                <td>
                    <input class="Login_Input" style="color: #ffffff"type="password" name="pw" />
                </td>
            </tr>
        </table>
    </div>
    <div class="Login_Button" style="height: 40%">
        <input type="submit" class="button PC" value="Login"/>
        <a href="import/Login/Register.php" class="button PC">Register</a>
    </div>
</form>