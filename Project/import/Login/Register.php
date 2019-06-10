<?php
session_cache_expire(360);
session_start();

?>
<html>
<head>
    <title>Gamer's Hangout</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../../assets/css/main.css?after" />
    <link rel="stylesheet" href="../Edit.css?after" />

    <script type="text/javascript">
        function Keycode(e){
            var code = (window.event) ? event.keyCode : e.which; //IE : FF - Chrome both
            if (code > 32 && code < 48) nAllow(e);
            if (code > 57 && code < 65) nAllow(e);
            if (code > 90 && code < 97) nAllow(e);
            if (code > 122 && code < 127) nAllow(e);
        }
        function nAllow(e){
            alert('특수문자는 사용할수 없습니다.');
            if(navigator.appName!="Netscape"){ //for not returning keycode value
                event.returnValue = false;  //IE ,  - Chrome both
            }else{
                e.preventDefault(); //FF ,  - Chrome both
            }
        }
    </script>

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
                        <input class="Register_Input" type="text" name="Rname" maxlength="10" minlength="1" onkeypress="Keycode(event);" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">닉네임</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Rnickname" maxlength="10" minlength="1" onkeypress="Keycode(event);" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">아이디</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Rid" maxlength="10" minlength="5" onkeypress="Keycode(event);" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">비밀번호</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="password" name="Rpw" maxlength="20" minlength="5" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="Register_Info">이메일</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="Remail" maxlength="30" minlength="5" required/>
                    </td>
                </tr>

            </table>
        </div>
        <div class="Login_Button">
            <input type="submit" value="Register" class="button PC"/>
            <a href='<?echo$_SESSION[SPage]?>' class='button PC'>돌아가기</a>
        </div>
    </form>

</body>
</html>