@extends('layout')

@section('title', 'Upcoming Events')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Upcoming-Events.css") }}" />
@endsection

@section('content')
<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset(path: "images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
        <div class="border_style">
            <p class="hero_headline" style="margin-bottom: 0!important;">Upcoming Events</p>
        </div>
        <p class="hero_heading">QA Summit delivers conferences of the highest standard</p>
            <p class="hero_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- <button class="hero_register_btn">Register</button> -->
        </div>
        <!--<div class="hero_second_div">
            <div class="upcoming_events">
                <div class="event_headline">
                    <p class="event_headline">Upcoming Event</p>
                    <p class="event_heading" style="margin-bottom: 0!important;">QA Transformation</p>
                </div>
                <div class="horizontal_line_event"></div>
                <div class="upcoming_details">
                    <p class="event_location"><img src="{{ asset(path: "images/Homepage/Location on.png");}}" alt=""><span>Conference room 5</span></p>
                    <p class="event_date"><img src="{{ asset(path: "images/Homepage/Calendar today.png");}}" alt=""><span>25 Aug, 2025</span></p>
                </div>
            </div>
        </div> -->
    </div>
</section>
@endsection
