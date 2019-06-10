<?php
echo "
<form method=\"POST\" action=\"http://localhost/Project/import/Login/Login_Check.php\">
"
?>
    <div id="Login" style="height: 70%">
        <table class="Login_Table">
            <tr>
                <td>
                    <label class="Login_Info">ID</label>
                </td>
                <td>
                    <input class="Login_Input" style="color: #ffffff; border-color: #ccc"type="text" name="id" maxlength="10" minlength="5" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">Password</label>
                </td>
                <td>
                    <input class="Login_Input" style="color: #ffffff; border-color: #ccc"type="password" name="pw" maxlength="20" minlength="5" required>
                </td>
            </tr>
        </table>
    </div>
    <div class="Login_Button" style="height: 30%">
        <input type="submit" class="button PC" style="font-size:14pt" value="Login"/>
        <a href="http://localhost/Project/import/Login/Register.php" class="button PC" style="font-size:14pt">Register</a>
    </div>
</form>