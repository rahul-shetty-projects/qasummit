@extends('layout')

@section('title', 'Event Booking')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/About-us.css") }}" />
@endsection

@section('content')
<div style="margin-top:100px;margin-bottom:60px;display:flex;flex-direction:row;justify-content:center;">
    <iframe id="iframeticket" allowtransparency="true" allowfullscreen="true" allow="geolocation; microphone; camera" src="https://www.tickets99.com/e/qa-summit-bengaluru/buy/qa-summit-bengaluru/ticket" frameborder="0" width="90%" height="100%" scrolling="auto"> </iframe>
</div>
@endsection
