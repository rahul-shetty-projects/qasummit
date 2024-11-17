@extends('layout')

@section('title', 'Previous Event')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Puneevent.css") }}" />
@endsection

@section('content')


<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset(path: "images/Homepage/hero image.png") }}" alt="" style="width:100%;">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">QASummit <span class="hero_headline_span">Pune</span></p>
            </div>
            <p class="hero_heading">Uncover AI Testing!</p>
            <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Pune, Maharashtra</span></p>
            <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>2025</span></p>
            <p class="hero_summary">AI is revolutionizing the testing landscape, presenting both exciting opportunities and significant challenges. As Test automation becomes essential in this evolution, who's ensuring the quality of AI-driven solutions?</p>
            <div class="hero_btn_wrapper">
                <!-- <a href="{{route('upcoming-event')}}" class="hero_register_btn">Register</a> -->
                <!-- <a href="{{route('upcoming-event')}}" class="hero_learn_more_btn">Learn More</a> -->
            </div>
        </div>
        <div class="hero_second_div">
            <!-- <div class="upcoming_events">
                <div class="event_headline">
                    <p class="event_headline">Upcoming Event</p>
                    <p class="event_heading" style="margin-bottom: 0!important;">QA Transformation</p>
                </div>
                <div class="horizontal_line_event"></div>
                <div class="upcoming_details">
                    <p class="event_location"><img src="{{ asset("images/Homepage/Location on.png") }}" alt=""><span>Conference room 5</span></p>
                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar today.png") }}" alt=""><span>25 Aug, 2025</span></p>
                </div>
            </div> -->
            <div class="hero_mobile_img">
                <img src="{{ asset(path: "images/Homepage/mobrahulimg.png") }}" alt="" style="width:100%;">
            </div>
        </div>
    </div>
</section>


<section class="speaker_form_section" id="speaker_form_section">
    <div class="form_wrapper">
        <div class="form_header">
            <p class="form_heading">Get Started!</p>
        </div>
        <div class="form_wrap">
            <div class="spname_div">
                <label for="speakername" class="speaker_label">Name</label>
                <input type="text" name="" id="speakername" class="speakername_inp" placeholder="John Doe">
            </div>
            <div class="email_div">
                <label for="speakermail" class="speaker_label">Email Address</label>
                <input type="email" name="" id="speakermail" class="speakermail_inp" placeholder="john@gmail.com">
            </div>
            <div class="combine_divv">
                <div class="title_div">
                    <label for="speakertitle" class="speaker_label">Your City</label>
                    <input type="text" name="" id="speakertitle" class="speakertitle_inp" placeholder="Pune">
                </div>
            </div>
            <!-- <div class="text_area1_div">
                <label for="speakerarea1" class="speaker_label">Tell us about yourself and why you want to become a speaker!</label>
                <textarea name="" id="speakerarea1"  rows="5" class="speakerarea1_inp" placeholder="I want to speak because.."></textarea>
            </div>
            <div class="text_area2_div">
                <label for="speakerarea2" class="speaker_label">List down your websites/social media pages to know about you,</label>
                <textarea name="" id="speakerarea2"  rows="5" class="speakerarea2_inp" placeholder="www.myproduct.com"></textarea>
            </div>
            <div class="text_area3_div">
                <label for="speakerarea3" class="speaker_label">Additional comments</label>
                <textarea name="" id="speakerarea3"  rows="5" class="speakerarea3_inp"></textarea>
            </div> -->
            <div class="submit_btn_div">
                <button class="submit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
            </div>
        </div>
    </div>

</section>

@endsection