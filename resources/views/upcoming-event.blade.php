@extends('layout')

@section('title', 'Upcoming Event')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Upcoming-Detail.css") }}" />
@endsection

@section('content')


<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset("images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">TestFest India!</p>
            </div>
            <p class="hero_heading">Welcome to India’s Premier Software Testing and QA Conference</p>
            <p class="hero_summary">Dive into the Future of QA: Ignite Innovation and Transform Testing!</p>
            <button class="hero_register_btn">Secure Your Spot!</button>
        </div>
        <div class="hero_second_div">
            <!-- <div class="upcoming_events">
                <div class="event_headline">
                    <p class="event_headline">Upcoming Event</p>
                    <p class="event_heading" style="margin-bottom: 0!important;">QA Transformation</p>
                </div>
                <div class="horizontal_line_event"></div>
                <div class="upcoming_details">
                    <p class="event_location"><img src="{{ asset("images/Homepage/Location on.png");}}" alt=""><span>Conference room 5</span></p>
                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar today.png");}}" alt=""><span>25 Aug, 2025</span></p>
                </div>
            </div> -->
        </div>
    </div>
</section>



<section class="about_the_cenference" id="about_the_conference">
    <!-- <div class="timer_wrapper">
        <div class="days">
            <p class="timer_count" style="margin-bottom: 5px!important;">18</p>
            <p class="timer_timing"  style="margin-bottom: 5px!important;">Days</p>
        </div>
        <div class="hours">
            <p class="timer_count"  style="margin-bottom: 5px!important;">21</p>
            <p class="timer_timing"  style="margin-bottom: 5px!important;">Hours</p>
        </div>
        <div class="minutes">
            <p class="timer_count"  style="margin-bottom: 5px!important;">6</p>
            <p class="timer_timing"  style="margin-bottom: 5px!important;">Mins</p>
        </div>
        <div class="seconds">
            <p class="timer_count"  style="margin-bottom: 5px!important;">23</p>
            <p class="timer_timing"  style="margin-bottom: 5px!important;">Secs</p>
        </div>
    </div> -->
    <div class="about_conference_wrapper">
        <div class="conference_content">
            <div class="conference_images">
                <!-- <div class="first_set">
                    <img src="{{ asset("images/Homepage/Mask group.png");}}" alt="">
                    <img src="{{ asset("images/Homepage/Mask group (1).png");}}" alt="">
                </div>
                <div class="second_set">
                    <img src="{{ asset("images/Homepage/Mask group (2).png");}}" alt="">
                    <img src="{{ asset("images/Homepage/Mask group (3).png");}}" alt="">
                </div> -->
                <img src="{{ asset("images/Detailspage/rahulimg.png");}}" alt="">
            </div>
            <div class="images_description">
                <p class="about_conference_heading">About the Conference</p>
                <p class="desc_heading">We Discuss New Ideas and Techniques.</p>
                <p class="desc_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                <button class="register_btn">Register</button>
            </div>
        </div>
    </div>
</section>


<section class="why_attend_sectin" id="why_attend_section">
    <div class="why_attend_wrapper">
        <div class="attend_content_part">
            <p class="why_attend_headline">Why Attend?</p>
            <div class="attend_accordion">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Connect with Experts
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Insightful Sessions
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Showcase Your Work
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Explore Latest Trends:
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="attend_image">
            <img src="{{ asset("images/Detailspage/Group 15.png");}}" alt="">
        </div>
    </div>
</section>

<section class="event_highlights_section" id="event_highlights_section">
    <div class="event_high_wrapper">
        <div class="event_top_part">
            <p class="event_highlights_heading">Event Highlights</p>
            <div class="highlights_wrapper">
                <button class="highlights highlight_active" onclick="showContent('keynote')" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">Keynote Speakers</button>
                <button class="highlights" onclick="showContent('panel')">Panel Discussions</button>
                <button class="highlights" onclick="showContent('networking')">Networking Opportunities</button>
                <button class="highlights" onclick="showContent('insights')">Industry Insights</button>
                <button class="highlights" onclick="showContent('showcase')">Showcase of Innovations</button>
                <button class="highlights" onclick="showContent('qa')" style="border: none; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">Interactive Q&A Sessions</button>
            </div>
        </div>
        <div class="event_bottom_part">
            <div id="keynote" class="event_high_content">
                <p class="event_note">Keynote Speakers</p>
                <p class="event_note_summary">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.</p>
            </div>
            <div id="panel" class="event_high_content" style="display: none;">
                <p class="event_note">Panel Discussions</p>
                <p class="event_note_summary">Engage with expert panelists discussing emerging trends and challenges in the industry.</p>
            </div>
            <div id="networking" class="event_high_content" style="display: none;">
                <p class="event_note">Networking Opportunities</p>
                <p class="event_note_summary">Expand your professional network and connect with peers and industry leaders.</p>
            </div>
            <div id="insights" class="event_high_content" style="display: none;">
                <p class="event_note">Industry Insights</p>
                <p class="event_note_summary">Gain exclusive insights into industry innovations and future trends.</p>
            </div>
            <div id="showcase" class="event_high_content" style="display: none;">
                <p class="event_note">Showcase of Innovations</p>
                <p class="event_note_summary">Discover the latest innovations and technologies transforming the industry.</p>
            </div>
            <div id="qa" class="event_high_content" style="display: none;">
                <p class="event_note">Interactive Q&A Sessions</p>
                <p class="event_note_summary">Participate in interactive Q&A sessions with industry experts and keynote speakers.</p>
            </div>
            <div class="event_high_pic">
                <img id="eventImage" src="{{ asset('images/Detailspage/Group 30.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<script>
    // Function to handle button click and show corresponding content
    function showContent(id) {
        // Remove active class from all buttons
        document.querySelectorAll(".highlights").forEach(button => {
            button.classList.remove("highlight_active");
        });

        // Add active class to the clicked button
        document.querySelector(`[onclick="showContent('${id}')"]`).classList.add("highlight_active");

        // Hide all content sections
        document.querySelectorAll(".event_high_content").forEach(content => {
            content.style.display = "none";
        });

        // Show the selected content
        document.getElementById(id).style.display = "block";

        // Optionally, update image based on content if needed
        const eventImage = document.getElementById("eventImage");
        switch(id) {
            case 'keynote':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
            case 'panel':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
            case 'networking':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
            case 'insights':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
            case 'showcase':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
            case 'qa':
                eventImage.src = "{{ asset('images/Detailspage/Group 30.png') }}";
                break;
        }
    }
</script>


<section class="schedule_section" id="schedule_section">
    <div class="schedule_wrapper">
        <div class="schedule_heading_div">
            <p class="schedule_heading">Schedule and Event Details</p>
            <p class="schedule_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="timeline_div">
            <div class="schedule_days">
                <div class="day_1">
                    <!-- <p class="schedule_day">Day 01</p> -->
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div>
                <!-- <div class="day_2">
                    <p class="schedule_day">Day 01</p>
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div>
                <div class="day_3">
                    <p class="schedule_day">Day 01</p>
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div> -->
            </div>
            <!-- <div class="schedule_horiz_line">
                <div class="small_horiz_line">

                </div>
            </div> -->
            <div class="timeline_wrapper">
                <div class="timeline_1">
                    <div class="event_time">
                        <p class="eve_time">10:00AM - 10:15 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Opening</p>
                        <p class="sch_summary">Opening ceremony talk by Rahul Shetty</p>
                    </div>
                </div>
                <div class="timeline_2">
                    <div class="event_time">
                        <p class="eve_time">10:15 AM - 10:45 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">1st Subject</p>
                        <p class="sch_summary">Exploring 2025 QA trends</p>
                    </div>
                </div>
                <div class="timeline_3">
                    <div class="event_time">
                        <p class="eve_time">10:45 AM - 11:15 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">2nd subject</p>
                        <p class="sch_summary">Impact of AI in testing </p>
                    </div>
                </div>
                <div class="timeline_4">
                    <div class="event_time">
                        <p class="eve_time">11:15  AM - 11:35AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Break</p>
                        <p class="sch_summary">Hot tea & Snacks</p>
                    </div>
                </div>
                <div class="timeline_5">
                    <div class="event_time">
                        <p class="eve_time">11:35 AM - 12:05 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">3rd Subject</p>
                        <p class="sch_summary">AI-powered automation tools overview-</p>
                    </div>
                </div>
                <div class="timeline_6">
                    <div class="event_time">
                        <p class="eve_time">12:05 PM - 12:35 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">4th Subject</p>
                        <p class="sch_summary">Career guidance & Upskilling to SDET </p>
                    </div>
                </div>
                <div class="timeline_7">
                    <div class="event_time">
                        <p class="eve_time">12:35 PM - 1:35 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Q&A</p>
                        <p class="sch_summary">Ask your queries, 1-1 interaction with Rahul(Q&A)</p>
                    </div>
                </div>
                <div class="timeline_8">
                    <div class="event_time">
                        <p class="eve_time">1:35 PM - 2:05 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Quiz</p>
                        <p class="sch_summary">QA quizzes - win upto 50k INR</p>
                    </div>
                </div>
                <div class="timeline_9">
                    <div class="event_time">
                        <p class="eve_time">2:05 PM - 2:10 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Closing</p>
                        <p class="sch_summary">Vote of thanks/Closing ceremony</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event_booking" id="event_booking">
    <div class="event_booking_wrapper">
        <div class="headline_content">
            <p class="early_bird">Early Bird Registration</p>
            <p class="early_bird_summary">Secure your spot today and take advantage of our early bird pricing until December 15, 2024.</p>
        </div>
        <div class="days_remaining">
            <p class="remaining_days">15 Days Remaining!</p>
        </div>
        <div class="booking_slots">
            <div class="group_booking">
                <p class="group_title_tag">Group Ticket (3+)</p>
                <p class="group_price">₹1200</p>
                <button class="buy_ticket_btn">Buy Ticket</button>
            </div>
            <div class="individual">
                <p class="title_tag">Individual</p>
                <p class="price">₹600</p>
                <button class="buy_ticket">Buy Ticket</button>
            </div>
            <div class="corp_booking">
                <p class="corp_title_tag">Corporate</p>
                <p class="corp_price">₹1000</p>
                <button class="buy_ticket_btn">Contact us</button>
            </div>
        </div>
    </div>
</section>



<section class="testimonial_section" id="testimonials_section">
    <div class="clients_wrapper">
        <div class="client_details">
            <p class="event_reviews">Testimonials from our Hyderabad Event</p>
            <div class="review_content">
                <div class="top_part_rev">
                    <img src="{{ asset("images/Homepage/Format quote.png");}}" alt="" style="margin-left : -10px;">
                    <p class="review_headline">Incredible experience!</p>
                </div>
                <div class="middle_part">
                    <p class="review_summary">"The QA Summit was an incredible experience! I gained valuable insights and made connections that will last a lifetime."</p>
                </div>
                <div class="bottom_part">
                    <img src="{{ asset("images/Homepage/Ellipse 19.png");}}" alt="">
                    <div class="combine_client">
                        <p class="client_name">Neha Sharma</p>
                        <p class="client_designation">QA Engineer</p>
                    </div>
                </div>
            </div>
            <div class="controls_reviews">
                <img src="{{ asset("images/Homepage/Arrow backward.png");}}" alt="">
                <img src="{{ asset("images/Homepage/Arrow forward.png");}}" alt="">
            </div>
        </div>
        <div class="client_eclipse">
            <img src="{{ asset("images/Homepage/eclipse group.png");}}" alt="">
        </div>
    </div>
</section>






@endsection
