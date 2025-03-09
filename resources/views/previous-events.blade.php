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
            <p class="hero_summary">Explore past events where Rahul Shetty shared insights and innovations in quality assurance.</p>
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
                <div data-after-content="August 2024." class="timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                August 24, 2024
                                <br>Hyderabad | India
                                <br>T-Hub
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">August 2024.</p>
                    <p class="tmln_heading">QASummit Hyderabad</p>
                    <p class="tmln_summary">The QA Summit held in Hyderabad on August 24, 2024, brought together over 300 attendees passionate about quality assurance and emerging technologies. The event featured insightful sessions, including a career guidance workshop led by Rahul Shetty, discussions on trending QA technologies set to shape the industry by 2025, and explorations of how artificial intelligence is transforming the QA interview process. Attendees also engaged in critical conversations about the impact of AI on QA jobs and the future of AI in QA automation. The event fostered valuable networking opportunities and knowledge sharing among industry professionals, making it a significant milestone in the QA community.</p>
                    <a href="{{ route("hyderabad-event") }}" class="prev_learn_more_btn">Learn More</a>
                </div>
            </div>

            <div class="second_timeline">
                <div class="sec_timeline_content">
                    <p class="mobile_date">January 2025.</p>
                    <p class="tmln_heading">QASummit Bangalore</p>
                    <p class="sec_tmln_summary">The QASummit event in Bangalore on January 25, 2025, marked another significant milestone following our inaugural event in Hyderabad in 2024. With over 330 attendees, the atmosphere was charged with enthusiasm and passion for advancing the software testing industry.
                        <br><br>This year's summit, led by the esteemed Rahul Shetty, focused on practical, industry-relevant topics aimed at upskilling professionals and addressing the evolving landscape of AI in software testing. Rahul's leadership ensured a seamless experience, guiding discussions on automation trends, AI-powered testing tools, and successful case studies.
                        <br><br>Attendees also benefited from valuable networking opportunities, connecting with industry peers and experts to share insights and foster collaborations. The event featured dedicated career guidance sessions, equipping participants with strategies to navigate their professional growth in a rapidly changing environment. Additionally, interactive Q&A sessions allowed attendees to engage directly with Rahul, further enhancing their learning experience.
                        <br><br>The energy and engagement shared during the event reflect our commitment to shaping the future of software testing and empowering professionals to keep pace with technological advancements. We look forward to continuing this journey together!
                    </p>
                    <a href="{{ route("bengaluru-event") }}" class="prev_learn_more_btn">Learn More</a>
                </div>
                <div data-after-content="January 2025." class="sec_timeline_img">
                    <div class="img_wrapper">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 25, 2025
                                <br>Bengaluru | India
                                <br>Novotel Bengaluru Outer Ring Road
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/tmlnimg.png") }}" alt="" style="margin-top:-20px;margin-right:-20px;">
                    </div>
                </div>
            </div>

            <!-- <div class="first_timeline">
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
            </div> -->

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
            <img src="{{ asset("images/Homepage/Sponsors/testrigor.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Sponsors/rstek.png") }}" alt="">
        </div>
    </div>
</section>

@endsection
