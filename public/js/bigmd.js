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
    /*
    if (result.durationinSeconds < 20000) {
        timer = 1000;
    } else {
        timer = parseInt(result.durationinSeconds) + "000";
    }
    */


    timer = 5000;
    if (now_playing != result) {
        var artist_info = result.split(" - ");
        $("#nowplaying").html(result);
        $("#bigmd_title").html(result);
        $('meta[name="description"]').attr("content", artist_info[1]);
        $('meta[name="author"]').attr("content", artist_info[0]);
        now_playing = result;
    }
    setTimeout("getNowPlaying()", timer);
    //console.log($('meta[name="author"]').prop("content"));
}

