<?php
echo "
<form method=\"POST\" action=\"import/Login/Login_Check.php\">
"
?>
    <div id="Login">
        <table class="Login_Table">
            <tr>
                <td>
                    <label class="Login_Info">ID</label>
                </td>
                <td>
                    <input class="Login_Input" type="text" name="id" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">Password</label>
                </td>
                <td>
                    <input class="Login_Input" type="password" name="pw" />
                </td>
            </tr>
        </table>
    </div>
    <div class="Login_Button">
        <button>Login</button>
    </div>
</form>
<form class="Login_Button" action="import/Login/Register.php">
    <button>Register</button>
</form>