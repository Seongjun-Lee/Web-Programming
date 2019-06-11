$(function(){
    $("#PC_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPPC').bPopup(); //
    });

    $("#PC_btn_close").click(function(){ //닫기
        $('#POPPC').bPopup().close();
    });

    $("#PS_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPPS').bPopup(); //
    });

    $("#PS_btn_close").click(function(){ //닫기
        $('#POPPS').bPopup().close();
    });

    $("#MB_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPMB').bPopup(); //
    });

    $("#MB_btn_close").click(function(){ //닫기
        $('#POPMB').bPopup().close();
    });

    $("#NIN_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPNIN').bPopup(); //
    });

    $("#NIN_btn_close").click(function(){ //닫기
        $('#POPNIN').bPopup().close();
    });

    $("#MS_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPMS').bPopup(); //
    });

    $("#MS_btn_close").click(function(){ //닫기
        $('#POPMS').bPopup().close();
    });

    $("#GAME_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPGAME').bPopup(); //
    });

    $("#GAME_btn_close").click(function(){ //닫기
        $('#POPGAME').bPopup().close();
    });

    $("#USER_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPUSER').bPopup(); //
    });

    $("#USER_btn_close").click(function(){ //닫기
        $('#POPUSER').bPopup().close();
    });

    $("#LoginButton_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPUSER').bPopup(); //
    });

    $("#LoginButton_close").click(function(){ //닫기
        $('#POPUSER').bPopup().close();
    });

    $("#LoginButton_openCom").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPCOM').bPopup(); //
    });

    $("#LoginButton_closeCom").click(function(){ //닫기
        $('#POPCOM').bPopup().close();
    });

    $("#MainPage_btn").click(function(){ //닫기
        location.replace('http://localhost/Project/index.php');
    });

    $("#Device_btn").click(function(){ //닫기
        location.replace('http://localhost/Project/import/MainPage/GameChoice.php');
    });

    $("#Back_btn").click(function(){ //닫기
        $('#POPUSER').bPopup(); //
    });

    $("#ADD_btn_open").click(function(){ //레이어 팝업 열기 버튼 클릭 시
        $('#POPADD').bPopup(); //
    });

    $("#ADD_btn_close").click(function(){ //닫기
        $('#POPADD').bPopup().close();
    });

    $("#GameOption").click(function(){ //닫기
        $('#POPOption').bPopup();
    });

    $("#DeleteGesipan_btn").click(function(){ //닫기
        location.replace('http://localhost/Project/Community/DeleteGame.php');
    });


    $("#MenuButton").click(function(){
        if($('input[type="button"].GameMenu').css("display") == "none") {
            $('input[type="button"].GameMenu').css({
                display: "inherit"
            });
            $('input[type="button"].GameMenu:hover').css({
                display: "inherit"
            });
            $('input[type="button"].GameMenu:active').css({
                display: "inherit"
            });
        }
        else
        {
            $('input[type="button"].GameMenu').css({
                display: "none"
            });
            $('input[type="button"].GameMenu:hover').css({
                display: "none"
            });
            $('input[type="button"].GameMenu:active').css({
                display: "none"
            });
        }
    });
});