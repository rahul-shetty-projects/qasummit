@extends('layout')

@section('title', 'Previous Events')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Previous-Events.css") }}" />
@endsection

@section('content')
<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset(path: "images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">Previous Events</p>
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


<section class="previous_events_section" id="previous_events_section">
    <div class="previous_events_wrapper">
        <div class="prev_eve_header">
            <div class="heading_div">
                <p class="prev_eve_heading" style="margin-bottom:0!important">Previous Events</p>
                <!-- <button class="prev_eve_date">Date <img src="{{ asset("images/Previouspage/down arrow.png") }}" alt="" style="margin-left: 6px;"> </button> -->
            </div>
            <div class="horizontal_line_prev_eve"></div>
        </div>
        <div class="prev_eve_timeline_wrapper">

            <div class="first_timeline">
                <div data-after-content="December 2024." class="timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 16-19, 2025
                                <br>New Delhi | India
                                <br>Habitat World Convention Centre
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">December 2024.</p>
                    <p class="tmln_heading">India QA Fest</p>
                    <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                    <button class="prev_learn_more_btn">Learn More</button>
                </div>
            </div>

            <div class="second_timeline">
                <div class="sec_timeline_content">
                    <p class="mobile_date">December 2024.</p>
                    <p class="tmln_heading">India QA Fest</p>
                    <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                    <button class="prev_learn_more_btn">Learn More</button>
                </div>
                <div data-after-content="December 2024." class="sec_timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 16-19, 2025
                                <br>New Delhi | India
                                <br>Habitat World Convention Centre
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-right:-20px;">
                    </div>
                </div>
            </div>

            <div class="first_timeline">
                <div data-after-content="December 2024." class="timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 16-19, 2025
                                <br>New Delhi | India
                                <br>Habitat World Convention Centre
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">December 2024.</p>
                    <p class="tmln_heading">India QA Fest</p>
                    <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                    <button class="prev_learn_more_btn">Learn More</button>
                </div>
            </div>

            <div class="second_timeline">
                <div class="sec_timeline_content">
                    <p class="mobile_date">December 2024.</p>
                    <p class="tmln_heading">India QA Fest</p>
                    <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                    <button class="prev_learn_more_btn">Learn More</button>
                </div>
                <div data-after-content="December 2024." class="sec_timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 16-19, 2025
                                <br>New Delhi | India
                                <br>Habitat World Convention Centre
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-right:-20px;">
                    </div>
                </div>
            </div>

            <div class="first_timeline">
                <div data-after-content="December 2024." class="timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 16-19, 2025
                                <br>New Delhi | India
                                <br>Habitat World Convention Centre
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">December 2024.</p>
                    <p class="tmln_heading">India QA Fest</p>
                    <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                    <button class="prev_learn_more_btn">Learn More</button>
                </div>
            </div>

        </div>
        <!-- <div class="controls">
                <div type="button" class="prev_div">
                    <img src="{{ asset("images/Homepage/prev.png") }}" alt="">
                </div>
                <div type="button" class="next_div">
                    <img src="{{ asset("images/Homepage/next.png") }}" alt="">
                </div>
            </div> -->
    </div>
</section>

<section class="sponsors" id="sponsors">
    <div class="sponsors_wrapper">
        <div class="sponsors_headlines">
            <p class="sponsors_heading">Sponsors And Partners</p>
            <p class="sponsor_summary">We are grateful for our sponsors and partners who make this summit possible. Together, we drive innovation in quality assurance.</p>
        </div>
        <div class="sponsors_logo">
            <img src="{{ asset("images/Homepage/Sponsors/lambdatest.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Sponsors/udemy.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Sponsors/testRigor.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Sponsors/rstek.png") }}" alt="">
        </div>
    </div>
</section>

@endsection
