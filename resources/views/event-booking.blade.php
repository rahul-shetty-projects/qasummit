@extends('layout')

@section('title', 'Event Booking')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/About-us.css") }}" />
<style>
    #navbar_section {
        background-color: #2D1C5B;
    }
</style>
@endsection

@section('content')
<div style="margin-top:100px;margin-bottom:60px;display:flex;flex-direction:row;justify-content:center;">
    <iframe id="iframeticket" allowtransparency="true" allowfullscreen="true" allow="geolocation; microphone; camera" src="https://www.tickets99.com/buy/qa-summit/ticket" frameborder="0" width="100%" height="700px" scrolling="auto"> </iframe>
</div>
<script>
    function resizeIframe(iframe) {
        iframe.height = iframe.contentWindow.document.documentElement.scrollHeight + 'px';
        iframe.width = iframe.contentWindow.document.documentElement.scrollWidth + 'px';
        iframe.width = iframe.contentWindow.document.documentElement.scrollWidth + 'px';
        console.log(iframe.contentWindow.document.documentElement.scrollHeight, iframe.contentWindow.document.documentElement.scrollWidth);
    }

    // Example of automatically resizing the iframe after loading
    window.addEventListener('load', function() {
        const iframe = document.getElementById('iframeticket');
        iframe.onload = function() {
            resizeIframe(iframe);
        };
    });
</script>
@endsection
