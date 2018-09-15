@extends('bigmd-layout')

@section('content')
<div id="logo">
    <img src="/images/standard-logo01.png">
</div>


<div id="player">
    <audio controls="true" autoplay="true" name="media" title="">
        <source src="http://cyrus.isa-geek.com:8090/?type=http" type="audio/mpeg" preload="auto">
    </audio>
</div>
<div id="nowplaying">Five Finger Death Punch - Trip Switch</div>
@endsection