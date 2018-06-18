
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The BigMD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css" />

</head>

<body>

<div class="content-wrapper">


    @if (config("app.live") === "on")
        <div id="logo">
            <img src="/images/live-logo01.png">
        </div>

        <div class="party-line">
            <h4>Call The Party Line for your request or party shout-out
            </br>413.848.4336</h4>
        </div>
    @else
        <div id="logo">
            <img src="/images/standard-logo01.png">
        </div>

        <div id="coming_soon">
            <h4>Another Live Show is coming soon.</h4>
        </div>
    @endif

    <div id="social">
        <div class="float-container">
            <img src="/images/facebook-blue-icon.png" width="60" height="60" align="left" id="facebook-icon" />
            <h4>Like The Big MD Facebook page and stay up
                to date with Live Shows and entertainment news</h4>
        </div>
    </div>

        @if (config("app.live") === "on")
        <div id="player">
                <audio controls="true" autoplay="true" name="media" title="">
                    <source src="http://cyrus.isa-geek.com:8090/?type=http" type="audio/mpeg" preload="auto">
                </audio>
        </div>
        <div id="nowplaying">Five Finger Death Punch - Trip Switch</div>
    @endif
</div>

</body>

</html>