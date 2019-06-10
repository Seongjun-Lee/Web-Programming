<div id="POPADD" class="thumbnailsPOPLogin">
    <form method="POST" action="http://localhost/Project/import/MainPage/AddGame.php">
        <div style="padding-top: 5%">
            <table class="UserInfo_Table">
                <tr>
                    <td>
                        <label class="User_Info">제목</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="title" minlength="1" onkeypress="Keycode(event);" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="User_Info">기종</label>
                    </td>
                    <td>
                        <select name="device" style="background-color:#323232">
                            <option value="PC" selected="selected">PC</option>
                            <option value="VR">VR</option>
                            <option value="PS4">PS4</option>
                            <option value="PS3">PS3</option>
                            <option value="PSVITA">PSVITA</option>
                            <option value="PSVR">PSVR</option>
                            <option value="XBOX360">XBOX360</option>
                            <option value="XBOXONE">XBOXONE</option>
                            <option value="SWITCH">SWITCH</option>
                            <option value="3DS">3DS</option>
                            <option value="2DS">2DS</option>
                            <option value="ANDROID">ANDROID</option>
                            <option value="IOS">IOS</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="User_Info">제작사</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="company" minlength="1" onkeypress="Keycode(event);" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="User_Info">사진 링크</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="image" minlength="3" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="User_Info">구매 사이트</label>
                    </td>
                    <td>
                        <input class="Register_Input" type="text" name="location"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="Login_Button">
            <input type="submit" value="추가" class="button PC" style="font-size:14pt"/>
            <input type="button" id="ADD_btn_close" class="button PC" style="font-size:14pt" value="취소"/>
        </div>
    </form>
</div>