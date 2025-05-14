@extends('layout')

@section('title', 'Pune Event')

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
                <p class="hero_headline" style="margin-bottom: 0!important;">QASummit <span class="hero_headline_span">Pune</span></p>
            </div>
            <p class="hero_heading">Calling All QA Enthusiasts from Silicon Valley of India</p>
            <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bengaluru, Karnataka</span></p>
            <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>25th January, 2025</span></p>
            <p class="hero_summary">
                A Productive 5-Hour QA Insights Talk by Renowned Industry Expert, Rahul Shetty!
            </p>
            <p class="hero_summary shine">Theme of Conference: Uncover AI Testing with Career Guidance.
            </p>
            <a href="#event_booking" class="hero_register_btn">Secure Your Spot!</a>
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



<!-- <section class="about_the_cenference" id="about_the_conference">
    <div class="about_conference_wrapper">
        <div class="conference_content">
            <div class="conference_images">
                <img src="{{ asset("images/Detailspage/rahulimg.png");}}" alt="" class="rahulimg">
                <img src="{{ asset("images/Detailspage/mobrahulimg.png");}}" alt="" class="mobrahulimg">
            </div>
            <div class="images_description">
                <p class="about_conference_heading" style="margin-bottom:0;">About the Conference</p>
                <p class="desc_heading">We Discuss New Ideas and Techniques.</p>
                <p class="desc_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                <a target="_blank" href="https://www.eventbrite.com/" class="register_btn">Register</a>
            </div>
        </div>
    </div>
</section> -->

<section class="schedule_section" id="schedule_section">
    <div class="schedule_wrapper">
        <div class="schedule_heading_div">
            <p class="schedule_heading">Schedule and Event Details</p>
            <p class="schedule_summary"><b><span class="grad_text">When :</span> June 21st 2025, 10:30AM </b></p>
            <p class="schedule_summary"><b><span class="grad_text">Where :</span> Pune, India </b></p>
            <p class="schedule_summary"><b><span class="grad_text">Event Address :</span> Vivanta PUNE - Hinjawadi </b></p>
        </div>
        <div class="timeline_div">
            <div class="schedule_days">
                <div class="day_1">
                    <!-- <p class="schedule_day">Day 01</p> -->
                    <p class="schedule_date">June 21<span class="span_date">ˢᵗ, 2025</span></p>
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
                        <p class="eve_time">10:30AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Event Begins</p>
                        <p class="sch_summary">Meet & Greet/Networking with Local QA Engineers </p>
                    </div>
                </div>
                <div class="timeline_2">
                    <div class="event_time">
                        <p class="eve_time">10:45 AM - 11:15 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">1st Subject</p>
                        <p class="sch_summary">Gen AI vs Agentic AI vs AI Agents - How They Matter in the QA Space
                        </p>
                    </div>
                </div>
                <div class="timeline_3">
                    <div class="event_time">
                        <p class="eve_time">11:15 AM - 11:45 AM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">2nd Subject</p>
                        <p class="sch_summary">MCP Servers - The Next big thing in Test Automation to maximize productivity.
                        </p>
                    </div>
                </div>
                <div class="timeline_4">
                    <div class="event_time">
                        <p class="eve_time">11:45 AM - 12:15 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">3rd Subject</p>
                        <p class="sch_summary">The Growing Importance of ETL/ELT Testing for LLM Training Data
                        </p>
                    </div>
                </div>
                <div class="timeline_5">
                    <div class="event_time">
                        <p class="eve_time">12:15 PM - 12:30 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">4th Subject</p>
                        <p class="sch_summary">Day-to-Day AI Tools to Improve Your QA Workplace Productivity
                        </p>
                    </div>
                </div>
                <div class="timeline_6">
                    <div class="event_time">
                        <p class="eve_time">12:30 PM - 1:00 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Break</p>
                        <p class="sch_summary">Enjoy a hot vegetarian snack with tea/coffee and cookies.
                        </p>
                    </div>
                </div>
                <div class="timeline_7">
                    <div class="event_time">
                        <p class="eve_time">1:00 PM - 1:30 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">5th Subject</p>
                        <p class="sch_summary">Exploring 2025 QA Automation Trends & Technologies - Market Evaluation and Insights
                        </p>
                    </div>
                </div>
                <div class="timeline_8">
                    <div class="event_time">
                        <p class="eve_time">1:30 PM - 1:45 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">6th Subject</p>
                        <p class="sch_summary">How AI Can Change the QA Interview Process
                        </p>
                    </div>
                </div>
                <div class="timeline_8">
                    <div class="event_time">
                        <p class="eve_time">1:45 PM - 2:15 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">7th Subject</p>
                        <p class="sch_summary">QA Career Guidance and Learning Paths - Staying Ahead in the Ever-Evolving Tech Landscape

                        </p>
                    </div>
                </div>
                <div class="timeline_8">
                    <div class="event_time">
                        <p class="eve_time">2:15 PM - 3:00 PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Q&A</p>
                        <p class="sch_summary">Query Sessions and 1:1 Candid Interactions with Rahul Shetty

                        </p>
                    </div>
                </div>
                <!-- <div class="timeline_9">
                    <div class="event_time">
                        <p class="eve_time">2:35 PM - 2:45PM</p>
                    </div>
                    <div class="schedule_titles">
                        <p class="sch_title">Closing</p>
                        <p class="sch_summary">Vote of thanks/Closing ceremony</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="event_booking" id="event_booking">
    <div class="event_booking_wrapper">
        <div class="headline_content">
            <p class="early_bird">Early Bird Registration</p>
            <p class="early_bird_summary">Secure your spot today and take advantage of our early bird pricing until May 30, 2025.</p>
        </div>
        <div class="days_remaining">
            <p class="remaining_days">15 Days Remaining!</p>
        </div>
        <div class="booking_slots">
            <!-- <div class="group_booking">
                <p class="group_title_tag">Group Ticket (3+)</p>
                <p class="group_price">₹1399</p>
                <a target="_blank" href="{{route("event-booking")}}" class="buy_ticket_btn">Buy Ticket</a>
            </div>  -->
            <div class="individual">
                <p class="title_tag">Individual/Group Ticket</p>
                <p class="price">Limited seats available, act now!</p>
                <a target="_blank" href="{{route("event-booking")}}" class="buy_ticket">Buy Ticket</a>
            </div>
            <div class="corp_booking">
                <p class="corp_title_tag">Corporate</p>
                <p class="corp_price">Contact us to get a custom price</p>
                <a href="{{ route("contact-us") }}" class="buy_ticket_btn">Contact us</a>
            </div>
        </div>
    </div>
</section>

<!-- <section class="speaker_form_section" id="speaker_form_section">
    <div class="form_wrapper">
        <div class="headline_content">
            <p class="early_bird">Be the First to Know!</p>
            <p class="early_bird_summary">Subscribe now for updates on upcoming Pune events.</p>
        </div>
        <div class="form_wrap">
            <form id="contactForm">
                <div class="spname_div">
                    <label for="speakername" class="speaker_label">Name *</label>
                    <input required type="text" name="" id="speakername" class="speakername_inp" placeholder="John Doe">
                </div>
                <div class="email_div">
                    <label for="speakermail" class="speaker_label">Email Address *</label>
                    <input required type="email" name="" id="speakermail" class="speakermail_inp" placeholder="john@gmail.com">
                </div>
                <div class="email_div">
                    <label for="speakercity" class="speaker_label">City *</label>
                    <input required type="text" name="" id="speakercity" class="speakermail_inp" placeholder="Bengaluru">
                </div>
                <div class="submit_btn_div">
                    <button type="submit" id="subscribe_submit_btn" class="submit_btn">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</section> -->

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="contactModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
            <div class="modal-body">
                <div class="success_modal_wrapper">
                    <div class="check_div">
                        <img src="{{ asset("images/Footer/checkimg.png");}}" alt="">
                    </div>
                    <div class="success_content">
                        <p class="success_heading">Success!</p>
                        <p class="success_summary">Your request has been submitted successfully.</p>
                    </div>
                    <button class="done_btn" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </div>
    </div>
</div>

<!-- Failure Modal -->
<div class="modal fade" id="cfailureModal" tabindex="-1" aria-labelledby="cfailureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div style="padding: 24px!important;gap:12px;display: flex;flex-direction: column;align-items: center;" class="modal-body text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.88px" height="122.879px" viewBox="0 0 122.88 122.879" enable-background="new 0 0 122.88 122.879" xml:space="preserve">
                    <g>
                        <path fill="#FF4141" d="M61.44,0c16.96,0,32.328,6.882,43.453,17.986c11.104,11.125,17.986,26.494,17.986,43.453 c0,16.961-6.883,32.328-17.986,43.453C93.769,115.998,78.4,122.879,61.44,122.879c-16.96,0-32.329-6.881-43.454-17.986 C6.882,93.768,0,78.4,0,61.439C0,44.48,6.882,29.111,17.986,17.986C29.112,6.882,44.48,0,61.44,0L61.44,0z M73.452,39.152 c2.75-2.792,7.221-2.805,9.986-0.026c2.764,2.776,2.775,7.292,0.027,10.083L71.4,61.445l12.077,12.25 c2.728,2.77,2.689,7.256-0.081,10.021c-2.772,2.766-7.229,2.758-9.954-0.012L61.445,71.541L49.428,83.729 c-2.75,2.793-7.22,2.805-9.985,0.025c-2.763-2.775-2.776-7.291-0.026-10.082L51.48,61.435l-12.078-12.25 c-2.726-2.769-2.689-7.256,0.082-10.022c2.772-2.765,7.229-2.758,9.954,0.013L61.435,51.34L73.452,39.152L73.452,39.152z M96.899,25.98C87.826,16.907,75.29,11.296,61.44,11.296c-13.851,0-26.387,5.611-35.46,14.685 c-9.073,9.073-14.684,21.609-14.684,35.459s5.611,26.387,14.684,35.459c9.073,9.074,21.609,14.686,35.46,14.686 c13.85,0,26.386-5.611,35.459-14.686c9.073-9.072,14.684-21.609,14.684-35.459S105.973,35.054,96.899,25.98L96.899,25.98z" />
                    </g>
                </svg>
                <h4>Failed to subscribe. Please try again.</h4>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            const formData = {
                name: $('#speakername').val(),
                email: $('#speakermail').val(),
                city: $('#speakercity').val(),
                id: 17
            };


            $("#subscribe_submit_btn").prop('disabled', true);
            $("#subscribe_submit_btn").html("Please Wait&nbsp;&nbsp;<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            $("#subscribe_submit_btn").css({
                "display": "flex",
                "flex-direction": "row",
                "align-items": "center",
                "justify-content": "center",
                "gap": "8px"
            });

            $.ajax({
                url: "{{ route('event.notify') }}",
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#contactModal').modal('show');
                    $('#contactForm').trigger('reset');
                },
                error: function(response) {
                    $('#cfailureModal').modal('show');
                    $('#contactForm').trigger('reset');
                },
                complete: function() {
                    $("#subscribe_submit_btn").prop('disabled', false);
                    $("#subscribe_submit_btn").html("Subscribe");
                    //remove inline styles
                    $("#subscribe_submit_btn").removeAttr("style");
                }

            });

        });
    });
</script> -->


<section class="why_attend_sectin" id="why_attend_section">
    <div class="why_attend_wrapper">
        <div class="attend_content_part">
            <p class="why_attend_headline">Why Attend?</p>
            <div class="attend_accordion">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Learn from the Best
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Gain insights from Rahul Shetty, a leading voice in quality assurance, during engaging sessions and interactive Q&A.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Explore 2025 QA Trends
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Discover the latest trends shaping the future of QA and how AI is revolutionizing testing methodologies.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Network Opportunities
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Connect with fellow QA professionals, industry experts, and leaders in Bengaluru’s vibrant tech community.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Hands-On Experience
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Participate in workshops and quizzes to win exciting prizes, including up to 50k INR!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Career Development
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Receive valuable career guidance and learn how to upskill for roles such as Software Development Engineer in Test (SDET).
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="attend_image">
            <img src="{{ asset("images/Detailspage/rahulimg.png");}}" alt="" class="rahulimg">
            <img src="{{ asset("images/Detailspage/mobrahulimg.png");}}" alt="" class="mobrahulimg">
            <!-- <img src="{{ asset("images/Detailspage/Group 15.png");}}" alt=""> -->
        </div>
    </div>
</section>

<!-- <section class="event_highlights_section" id="event_highlights_section">
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
        switch (id) {
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
</script> -->


<section class="testimonial_section" id="testimonials_section">
    <div class="clients_wrapper">
        <div class="client_details">
            <p class="event_reviews">Event Reviews</p>
            <div id="carouselExampleInterval2222" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="review_content">
                            <div class="top_part_rev">
                                <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                                <p class="review_headline">My First QA summit ever!
                                </p>
                            </div>
                            <div class="middle_part">
                                <p class="review_summary">Attending the QA Summit in Hyderabad was an incredible experience. Rahul Shetty's insights on AI in software testing opened my eyes to new possibilities in the field. His session on test automation was both informative and practical, providing actionable strategies that I can implement immediately in my project.
                                </p>
                            </div>
                            <div class="bottom_part">
                                <img src="{{ asset("images/Homepage/testmonial3.png") }}" alt="">
                                <div class="combine_client">
                                    <p class="client_name">Satish Yadlapalli</p>
                                    <p class="client_designation">Test Automation Engineer
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">


                        <div class="review_content">
                            <div class="top_part_rev">
                                <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                                <p class="review_headline">Happy to have met Rahul Shetty in real life
                                </p>
                            </div>
                            <div class="middle_part">
                                <p class="review_summary">"The Hyderabad QA Summit exceeded my expectations! Rahul Shetty is a master at engaging the audience while delivering valuable content. His guidance on career development in QA was particularly helpful, as it provided me with a clear path forward. I also made friends with few QA professionals from my city, thanks to this event :)
                                    "</p>
                            </div>
                            <div class="bottom_part">
                                <img src="{{ asset("images/Homepage/testmonial2.png") }}" alt="">
                                <div class="combine_client">
                                    <p class="client_name">Hari</p>
                                    <p class="client_designation">Test Analyst
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="carousel-item">


                        <div class="review_content">
                            <div class="top_part_rev">
                                <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                                <p class="review_headline">Incredible and useful sessions</p>
                            </div>
                            <div class="middle_part">
                                <p class="review_summary">What a fantastic event! The topics covered by Rahul Shetty were relevant and timely, especially the discussion on AI's role in testing. I found the sessions very interactive, and I learned a lot from the diverse group of attendees. This summit has truly motivated me to advance my skills in test automation and master AI testing.</p>
                            </div>
                            <div class="bottom_part">
                                <img src="{{ asset("images/Homepage/testmonial1.png") }}" alt="">
                                <div class="combine_client">
                                    <p class="client_name">Pratik Raj</p>
                                    <p class="client_designation">Test Engineer</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="controls_reviews">
                <img src="{{ asset("images/Homepage/Arrow backward.png") }}" alt="" data-bs-target="#carouselExampleInterval2222" data-bs-slide="prev">
                <img src="{{ asset("images/Homepage/Arrow forward.png") }}" alt="" data-bs-target="#carouselExampleInterval2222" data-bs-slide="next">
            </div>

        </div>
        <div class="client_eclipse">
            <img src="{{ asset("images/Homepage/eclipse group.png") }}" alt="">
        </div>
    </div>
</section>






@endsection