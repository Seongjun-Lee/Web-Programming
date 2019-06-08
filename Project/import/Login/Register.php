<html>
<head>
    <title>Gamer's Hangout</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="../Edit.css" />
</head>
<body id="top">
    <form method="POST" action="Register_Check.php">
        <div id="Register">
            <table class="Register_Table">
                <tr>
                    <td>
                        <label class="Register_Info">이름</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Rname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">닉네임</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Rnickname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">아이디</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Rid" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">비밀번호</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="password" name="Rpw" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">이메일</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Remail" />
                    </td>
                </tr>

            </table>
        </div>
        <div class="Login_Button">
            <input type="submit" value="Register" class="button PC"/>
        </div>
    </form>

</body>
</html>