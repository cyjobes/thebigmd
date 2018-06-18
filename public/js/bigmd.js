$(function() {
    $("#social").on("click", function() {
        window.open('https://www.facebook.com/thebigmd/');
    });
});




getNowPlaying();

var now_playing;
function getNowPlaying() {

    $.ajax({

        url : "/NowPlaying.txt",
        dataType: 'text',
        scriptCharset: 'UTF-8',
        crossDomain: true,
        method : "GET",

        success:displayNowShowing,
    });
}


function displayNowShowing(result) {
    //console.log(parseInt(result.durationinSeconds) + "000");
    //console.log(result);
    /*
    if (result.durationinSeconds < 20000) {
        timer = 1000;
    } else {
        timer = parseInt(result.durationinSeconds) + "000";
    }
    */
    timer = 5000;
    if (now_playing != result) {
        $("#nowplaying").html(result);
        now_playing = result;
    }
    setTimeout("getNowPlaying()", timer);
}

