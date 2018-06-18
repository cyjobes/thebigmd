@extends('bigmd-layout')

<div id="logo">
    <img src="/images/standard-logo01.png">
</div>

<br>

<div id="coming_soon">
    <h4>Another Live Show is coming soon.</h4>
</div>

<br>

<div id="social">
    <div class="float-container">
        <img src="/images/facebook-blue-icon.png" width="60" height="60" align="left" id="facebook-icon" />
        <h4>Like The Big MD Facebook page and stay up
            to date with Live Shows and entertainment news</h4>
    </div>
</div>

<div id="player">
    <audio controls="true" autoplay="true" name="media" title="">
        <source src="http://cyrus.isa-geek.com:8090/?type=http" type="audio/mpeg" preload="auto">
    </audio>
</div>
<div id="nowplaying">Five Finger Death Punch - Trip Switch</div>