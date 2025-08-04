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
                <div data-after-content="July 2025." class="timeline_img">
                    <div class="img_wrapper left">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                June 21, 2025
                                <br>Pune | India
                                <br>Vivanta PUNE - Hinjawadi
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/pune.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;height: 402px;width:475px;object-fit: none;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">July 2025.</p>
                    <p class="tmln_heading">QASummit Pune</p>
                    <p class="tmln_summary">The Pune QASummit made history, gathering over 407 QA Engineers under one roof, making it one of the largest testing events ever hosted in the Asia-Pacific region. The energy was unmatched, as attendees dove deep into the evolving world of AI in testing. The sessions kicked off with AI Agents, prompt engineering, and browser-based automation using “browser-use.” We explored the difference between Gen AI, Agentic AI, and AI Agents—when to use what, and why it matters. One highlight was the power of MCP servers in Playwright, enabling AI-powered, context-aware test execution. Attendees were introduced to smarter validation workflows using LLMs, LangChain, and the RAGAS framework. The discussion also covered the importance of data QA through ETL vs ELT for LLM training. We looked into building custom LLMs, working with OpenAI Agents, and orchestrating multi-agent systems. A light-hearted yet deep moment reminded us that POM is truly “Peace Of Mind,” not just Page Object Model. And to wrap it all—yes, vibe coding is real when learning strikes the right chord 🎧</p>
                    <a href="{{ route("pune-event") }}" class="prev_learn_more_btn">Learn More</a>
                </div>
            </div>


            <div class="second_timeline">
                <div class="sec_timeline_content">
                    <p class="mobile_date">January 2025.</p>
                    <p class="tmln_heading">QASummit Bangalore</p>
                    <p class="sec_tmln_summary">
                        The QASummit in Bangalore on January 25, 2025, was a powerful follow-up to our debut event in Hyderabad. With over 330 attendees, the energy was electric and filled with passion for the future of software testing. Led by Rahul Shetty, the summit focused on real-world skills, automation trends, AI-powered tools, and hands-on case studies. Rahul’s guidance ensured smooth sessions packed with valuable takeaways. A dedicated career track offered strategies to help professionals grow in today’s fast-changing tech space. Attendees also enjoyed rich networking opportunities with peers and industry experts. Interactive Q&A sessions with Rahul brought additional clarity and engagement. The event fostered both learning and collaboration in a supportive environment. The response affirmed our mission to drive innovation in QA. We’re excited to keep growing with this amazing community!
                    </p>
                    <a href="{{ route("bengaluru-event") }}" class="prev_learn_more_btn">Learn More</a>
                </div>
                <div data-after-content="January 2025." class="sec_timeline_img">
                    <div class="img_wrapper right">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                January 25, 2025
                                <br>Bengaluru | India
                                <br>Novotel Bengaluru Outer Ring Road
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/bangalore-event.png") }}" alt="" style="margin-top:-20px;margin-right:-20px;height: 402px;width:475px;object-fit: none;">
                    </div>
                </div>
            </div>

            <div class="first_timeline">
                <div data-after-content="August 2024." class="timeline_img">
                    <div class="img_wrapper left">
                        <div class="image_content_tmln">
                            <p class="image_summary_tmln">
                                August 24, 2024
                                <br>Hyderabad | India
                                <br>T-Hub
                            </p>
                        </div>
                        <img src="{{ asset("images/Previouspage/hyd.png") }}" alt="" style="margin-top:-20px;margin-left:-20px;height: 402px;width:475px;object-fit: none;">
                    </div>
                </div>
                <div class="timeline_content">
                    <p class="mobile_date">August 2024.</p>
                    <p class="tmln_heading">QASummit Hyderabad</p>
                    <p class="tmln_summary">The QA Summit held in Hyderabad on August 24, 2024, brought together over 300 attendees passionate about quality assurance and emerging technologies. The event featured insightful sessions, including a career guidance workshop led by Rahul Shetty, discussions on trending QA technologies set to shape the industry by 2025, and explorations of how artificial intelligence is transforming the QA interview process. Attendees also engaged in critical conversations about the impact of AI on QA jobs and the future of AI in QA automation. The event fostered valuable networking opportunities and knowledge sharing among industry professionals, making it a significant milestone in the QA community.</p>
                    <a href="{{ route("hyderabad-event") }}" class="prev_learn_more_btn">Learn More</a>
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