<html>
<head>
    <title>Title Unknown</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../Edit.css" />
</head>
<body id="top">
    <?php
    echo "
        <form method=\"POST\" action=\"import/Login/Register_Check.php\">
    ";
    ?>
    <div id="Login">
        <table class="Register_Table">
            <tr>
                <td>
                    <label class="Login_Info">이름</label>
                </td>
                <td>
                    <input class="Register_Input" type="text" name="name" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">닉네임</label>
                </td>
                <td>
                    <input class="Login_Input" type="text" name="nickname" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">아이디</label>
                </td>
                <td>
                    <input class="Login_Input" type="text" name="id" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">비밀번호</label>
                </td>
                <td>
                    <input class="Login_Input" type="password" name="pw" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="Login_Info">이메일</label>
                </td>
                <td>
                    <input class="Login_Input" type="text" name="email" />
                </td>
            </tr>

        </table>
    </div>
    <div class="Login_Button">
        <button>Register</button>
    </div>
    </form>

</body>
</html>