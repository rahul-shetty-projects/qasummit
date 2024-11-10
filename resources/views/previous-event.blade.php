@extends('layout')

@section('title', 'Previous Event')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Previous-Detail.css") }}" />
@endsection

@section('content')


<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset("images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">Upcoming Event 2024</p>
            </div>
            <p class="hero_heading">WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT</p>
            <p class="hero_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- <button class="hero_register_btn">Register</button> -->
        </div>
        <div class="hero_second_div">
            <div class="upcoming_events">
                <div class="event_headline">
                    <p class="event_headline">Upcoming Event</p>
                    <p class="event_heading" style="margin-bottom: 0!important;">QA Transformation</p>
                </div>
                <div class="horizontal_line_event"></div>
                <div class="upcoming_details">
                    <p class="event_location"><img src="{{ asset("images/Homepage/Location on.png");}}" alt=""><span>Conference room 5</span></p>
                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar today.png");}}" alt=""><span>25 Aug, 2025</span></p>
                </div>
            </div>
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
                <img src="{{ asset("images/Previouspage/abtbg.png");}}" alt="">
            </div>
            <div class="images_description">
                <!-- <p class="about_conference_heading">About the Conference</p> -->
                <p class="desc_heading">We Discuss New Ideas and Techniques.</p>
                <p class="desc_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                <!-- <button class="register_btn">Register</button> -->
            </div>
        </div>
    </div>
</section>

<section class="sponsors" id="sponsors">
    <div class="sponsors_wrapper">
        <div class="sponsors_headlines">
            <p class="sponsors_heading">Sponsors And Partners</p>
            <p class="sponsor_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="sponsors_logo">
            <img src="{{ asset("images/Homepage/IBM logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/google logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Vector (1).png") }}" alt="">
        </div>
    </div>
</section>


<!-- <section class="why_attend_sectin" id="why_attend_section">
    <div class="why_attend_wrapper">
        <div class="attend_content_part">
            <p class="why_attend_headline">Why Attend?</p>
            <div class="attend_accordion">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Connect with Experts
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
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
</section> -->

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
                <img id="eventImage" src="{{ asset('images/Previouspage/prevspeaker.png') }}" alt="">
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


<section class="our_impact_section" id="our_impact_section">
    <div class="extra_div">
        <div class="our_impact_wrapper">
            <div class="hdln_div">
                <p class="hdln_impact">Our Impact</p>
            </div>
            <div class="count_div_wrapper">
                <div class="attendees_count">
                    <p class="impact_hdln">Attendees</p>
                    <p class="impact_smmry">32,000</p>
                </div>
                <div class="bssnss_connection">
                    <p class="impact_hdln"> Business Connections</p>
                    <p class="impact_smmry">200 <img src="{{ asset("images/Previouspage/plus.png");}}" alt=""></p>
                </div>
                <div class="social_media_imp">
                    <p class="impact_hdln">Social Media Impressions</p>
                    <p class="impact_smmry">10M <img src="{{ asset("images/Previouspage/plus.png");}}" alt=""></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="schedule_section" id="schedule_section">
    <div class="schedule_wrapper">
        <div class="schedule_heading_div">
            <p class="schedule_heading">Schedule and Event Details</p>
            <p class="schedule_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="timeline_div">
            <div class="schedule_days">
                <div class="day_1">
                    <p class="schedule_day">Day 01</p>
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div>
                <div class="day_2">
                    <p class="schedule_day">Day 01</p>
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div>
                <div class="day_3">
                    <p class="schedule_day">Day 01</p>
                    <p class="schedule_date">10 <span class="span_date">February, 2024</span></p>
                </div>
            </div>
            <div class="schedule_horiz_line">
                <div class="small_horiz_line">

                </div>
            </div>
            <div class="timeline_wrapper">
                <div class="timeline_1">
                    <div class="event_time">
                        <p class="eve_time">9:00 AM - 10:00 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Registration & introduction</p>
                        <p class="sch_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="timeline_2">
                    <div class="event_time">
                        <p class="eve_time">9:00 AM - 10:00 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Registration & introduction</p>
                        <p class="sch_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="timeline_3">
                    <div class="event_time">
                        <p class="eve_time">9:00 AM - 10:00 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Registration & introduction</p>
                        <p class="sch_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
                <div class="timeline_4">
                    <div class="event_time">
                        <p class="eve_time">9:00 AM - 10:00 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Registration & introduction</p>
                        <p class="sch_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sponsors" id="sponsors">
    <div class="sponsors_wrapper">
        <div class="sponsors_headlines">
            <p class="sponsors_heading">Attendees</p>
            <p class="sponsor_summary">Attended by employees from many different companies.</p>
        </div>
        <div class="sponsors_logo">
            <img src="{{ asset("images/Homepage/IBM logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/google logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/Vector (1).png") }}" alt="">
        </div>
    </div>
</section>

<!-- <section class="event_booking" id="event_booking">
    <div class="event_booking_wrapper">
        <div class="headline_content">
            <p class="early_bird">Early Bird Registration</p>
            <p class="early_bird_summary">Secure your spot today and take advantage of our early bird pricing until December 15, 2024.</p>
        </div>
        <div class="days_remaining">
            <p class="remaining_days">15 Days Remaining!</p>
        </div>
        <div class="booking_slots">
            <div class="individual">
                <p class="title_tag">Individual</p>
                <p class="price">₹600</p>
                <button class="buy_ticket">Buy Ticket</button>
            </div>
            <div class="group_booking">
                <p class="group_title_tag">Group Ticket (5+)</p>
                <p class="group_price">₹1000</p>
                <button class="buy_ticket_btn">Buy Ticket</button>
            </div>
        </div>
    </div>
</section> -->


<section class="image_gallery_section" id="image_gallery_section">
    <div class="image_gallery_wrapper">
        <div class="wrapper_heading">
            <p class="media_heading">Media Gallery</p>
        </div>
        <div class="carousel_wrapper">
            <div class="carousel_images">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slide_img1">
                                    <img src="{{ asset("images/Homepage/Rectangle 4.png") }}" alt="">
                                    <img src="{{ asset("images/Homepage/Group 6.png") }}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide_img2">
                                    <img src="{{ asset("images/Homepage/Group 6.png") }}" alt="">
                                    <img src="{{ asset("images/Homepage/Rectangle 4.png") }}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                               <div class="slide_img3">
                                    <img src="{{ asset("images/Homepage/Rectangle 4.png") }}" alt="">
                                    <img src="{{ asset("images/Homepage/Group 6.png") }}" alt="">
                               </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="controls">
                <div type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" class="prev_div">
                    <img src="{{ asset("images/Homepage/prev.png") }}" alt="">
                </div>
                <div type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" class="next_div">
                    <img src="{{ asset("images/Homepage/next.png") }}" alt="">
                </div>
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
