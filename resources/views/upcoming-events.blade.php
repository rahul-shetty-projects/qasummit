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

<section class="upcoming_events_section" id="upcoming_events_section">
    <div class="upcom_eve_wrapper">
        <div class="upcom_nocon_header">
            <div class="upcom_nocon_events">
                <button class="upcom_eve_btn activee" id="upcoming_btn" onclick="upComingFun()">Upcoming Events</button>
                <button class="nocon_eve_btn" id="notconfirm_btn" onclick="notConfrmFun()">Not Confirmed Events</button>
            </div>
            <div class="horiz_line_upcom_nocon_eve"></div>
        </div>
        <div class="upcom_nocon_div">
            <div class="upcom_eve_tmln_wrapper" id="upcoming_events" style="display : block">

            <div class="first_timeline">
                    <div class="timeline_img">
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
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                </div>

                <div class="second_timeline">
                    <div class="sec_timeline_content">
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                    <div class="sec_timeline_img">
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
                    <div class="timeline_img">
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
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                </div>

                <div class="second_timeline">
                    <div class="sec_timeline_content">
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                    <div class="sec_timeline_img">
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
                    <div class="timeline_img">
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
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                </div>


            </div>
            <div class="nocon_eve_tmln_wrapper" id="not_cnfrmed_events" style="display : none">


            <div class="first_timeline">
                    <div class="timeline_img">
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
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                </div>

                <div class="second_timeline">
                    <div class="sec_timeline_content">
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                    <div class="sec_timeline_img">
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
                    <div class="timeline_img">
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
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                </div>

                <div class="second_timeline">
                    <div class="sec_timeline_content">
                        <p class="tmln_heading">India QA Fest</p>
                        <p class="sec_tmln_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                        <button class="prev_learn_more_btn">Learn More</button>
                    </div>
                    <div class="sec_timeline_img">
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
                    <div class="timeline_img">
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
    </div>
</section>


<script>

    let upComingBtn = document.getElementById('upcoming_btn');
    let notCnfrmBtn = document.getElementById('notconfirm_btn');
    let upCmngTmln = document.getElementById('upcoming_events');
    let notCnfrmTmln = document.getElementById('not_cnfrmed_events');

    const upComingFun = () => {
        upComingBtn.classList.add('activee');
        notCnfrmBtn.classList.remove('activee')
        upCmngTmln.style.display = 'block'
        notCnfrmTmln.style.display = 'none'
    }

    const notConfrmFun = () => {
        notCnfrmBtn.classList.add('activee');
        upComingBtn.classList.remove('activee')
        notCnfrmTmln.style.display = 'block'
        upCmngTmln.style.display = 'none'
    }

</script>

@endsection

