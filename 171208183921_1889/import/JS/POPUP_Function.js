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

    $("#MenuButton").click(function(){
        if($('input[type="submit"].GameMenu').css("display") == "none") {
            $('input[type="submit"].GameMenu').css({
                display: "inherit"
            });
            $('input[type="submit"].GameMenu:hover').css({
                display: "inherit"
            });
            $('input[type="submit"].GameMenu:active').css({
                display: "inherit"
            });
        }
        else
        {
            $('input[type="submit"].GameMenu').css({
                display: "none"
            });
            $('input[type="submit"].GameMenu:hover').css({
                display: "none"
            });
            $('input[type="submit"].GameMenu:active').css({
                display: "none"
            });
        }
    });
});