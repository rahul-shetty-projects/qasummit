@extends('layout')

@section('title', 'RSTEK Events')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Home.css") }}" />
@endsection

@section('content')

<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <div class="hero_speaker_image">
            <img src="{{ asset(path: "images/Homepage/hero image.png") }}" alt="" style="width:100%;">
        </div>
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">QASummit <span class="hero_headline_span">Bengaluru</span></p>
            </div>
            <p class="hero_heading">Uncover AI Testing!</p>
            <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bengaluru, Karnataka</span></p>
            <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>25th January, 2025</span></p>
            <p class="hero_summary">AI is revolutionizing the testing landscape, presenting both exciting opportunities and significant challenges. As Test automation becomes essential in this evolution, who's ensuring the quality of AI-driven solutions? Join us on January 25th, 2025, as we gather the brightest minds in quality assurance for <span class="hero_summary_span">QASummit <i>Bengaluru.</i></span></p>
            <div class="hero_btn_wrapper">
                <a href="{{route('upcoming-event')}}" class="hero_register_btn">Register</a>
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




<section class="about_the_cenference" id="about_the_conference">
    <div class="timer_wrapper">
        <div class="days">
            <p class="timer_count" id="days" style="margin-bottom: -5px!important;">0</p>
            <p class="timer_timing" style="margin-bottom: 5px!important;">Days</p>
        </div>
        <div class="hours">
            <p class="timer_count" id="hours" style="margin-bottom: -5px!important;">0</p>
            <p class="timer_timing" style="margin-bottom: 5px!important;">Hours</p>
        </div>
        <div class="minutes">
            <p class="timer_count" id="minutes" style="margin-bottom: -5px!important;">0</p>
            <p class="timer_timing" style="margin-bottom: 5px!important;">Mins</p>
        </div>
        <div class="seconds">
            <p class="timer_count" id="seconds" style="margin-bottom: -5px!important;">0</p>
            <p class="timer_timing" style="margin-bottom: 5px!important;">Secs</p>
        </div>
    </div>
    <script>
        // End timestamp (in seconds) - replace with your actual end timestamp
        const endTimestamp = 1737819000;

        // Function to calculate and display remaining time
        function updateTimer() {
            const currentTimestamp = Math.floor(Date.now() / 1000); // Current timestamp in seconds
            let remainingTime = endTimestamp - currentTimestamp;

            if (remainingTime <= 0) {
                // Stop the timer if time is up
                clearInterval(timerInterval);
                remainingTime = 0;
            }

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(remainingTime / (24 * 60 * 60));
            const hours = Math.floor((remainingTime % (24 * 60 * 60)) / (60 * 60));
            const minutes = Math.floor((remainingTime % (60 * 60)) / 60);
            const seconds = remainingTime % 60;

            // Update the DOM elements
            document.getElementById("days").textContent = days;
            document.getElementById("hours").textContent = hours;
            document.getElementById("minutes").textContent = minutes;
            document.getElementById("seconds").textContent = seconds;
        }

        // Update the timer every second
        const timerInterval = setInterval(updateTimer, 1000);

        // Initial call to display the timer immediately
        updateTimer();
    </script>
    <div class="about_conference_wrapper">
        <div class="about_con_headline">
            <p class="about_conference_heading">About the Conference</p>
        </div>
        <div class="conference_content">
            <div class="conference_images">
                <div class="first_set">
                    <div class="img1_div">
                        <img src="{{ asset("images/Homepage/con1.png") }}" alt="">
                        <p class="overflow_txt">AI in testing</p>
                    </div>
                    <div class="img2_div">
                        <img src="{{ asset("images/Homepage/con3.png") }}" alt="">
                        <p class="overflow_txt">Career guidance</p>
                    </div>
                </div>
                <div class="second_set">
                    <div class="img3_div">
                        <img src="{{ asset("images/Homepage/con2.png") }}" alt="">
                        <p class="overflow_txt">Local Networking</p>
                    </div>
                    <div class="img4_div">
                        <img src="{{ asset("images/Homepage/con4.png") }}" alt="">
                        <p class="overflow_txt">Stay updated with QA trends</p>
                    </div>
                </div>
            </div>
            <div class="images_description">
                <p class="desc_heading">We Discuss New Ideas and Techniques.</p>
                <div class="">
                    <p class="desc_summary"><b>QASummit Bengaluru</b> is the premier QA event taking place on January 25th, 2025, in the heart of India’s Silicon Valley. Led by renowned QA instructor and entrepreneur <b>Rahul Shetty</b>, this summit focuses on the transformative power of AI in testing. Whether you’re a seasoned professional or just starting your career, this event is designed to provide you with insights, skills, and connections that will propel your QA journey into 2025 and beyond.</p>
                    <p class="desc_summary">Experience an immersive half-day summit filled with cutting-edge insights, career guidance, and invaluable networking opportunities. Dive into the future of QA and discover how AI is reshaping the way we test software!</p>
                </div>
                <div class="btn_wrapper">
                    <a href="{{ route("upcoming-event")}}" class="register_btn">Secure your Spot</a>
                    <!-- <a href="{{ route("upcoming-event")}}" class="learn_more_btn2"><span class="button__label">Learn More</span></a> -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sponsors" id="sponsors">
    <div class="sponsors_wrapper">
        <div class="sponsors_headlines">
            <p class="sponsors_heading">Sponsors And Partners</p>
            <p class="sponsor_summary">We are grateful for our sponsors and partners who make this summit possible. Together, we drive innovation in quality assurance.</p>
        </div>
        <div class="sponsors_logo">
            <img src="{{ asset("images/Homepage/test logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/udemy logo.png") }}" alt="">
            <img src="{{ asset("images/Homepage/rslogo.png") }}" alt="">
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

<section class="call_for_speakers">
    <div class="speakers_section_wrapper">
        <div class="speakers_content">
            <p class="get_involved">Get Involved!</p>
            <p class="call_spaekers">Call for Speakers!</p>
            <p class="speaker_summary">We are currently accepting proposals for speakers. If you're experienced in software testing or quality assurance and want to share your knowledge, please submit your proposal by December 15, 2024. Selected speakers will have the opportunity to engage with an audience of industry professionals and contribute to meaningful discussions. Details regarding submission guidelines and event logistics will be provided upon acceptance.</p>
            <a href="{{ route("become-a-speaker")}}" class="proposal_btn">Submit Your Proposal</a>
        </div>
        <div class="speaker_img">
            <img src="{{ asset("images/Homepage/callspeaker image.png") }}" alt="">
        </div>
    </div>
</section>


<section class="upcoming_carousel">
    <div class="upcoming_carousel_wrapper">
        <div class="Upcoming_headlines">
            <p class="events_headlines">Upcoming Events</p>
            <p class="events_summary">Mark your calendars for our upcoming events, designed to inspire and inform the QA community about the latest trends and technologies.</p>
        </div>
        <div class="carousel_div">


            <div id="carouselExampleInterval2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide_1">
                            <div style="background-image:url('../images/Homepage/Rectangle 4.png')" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Bengaluru</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 25, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bengaluru | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </div>
                            <div style="background-image:url('../images/Homepage/Group 6.png')" class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">London</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>May 24, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide_1">
                            <div style="background-image:url('../images/Homepage/Rectangle 4.png')" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Pune</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>TBA</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Pune | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </div>
                            <div class="slide_1_2">

                            </div>
                        </div>
                    </div>

                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
            </div>

        </div>


        <div class="mobile_carousel_div">

            <div id="carouselExampleInterval22" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide_1" style="background-image:url('../images/Homepage/Rectangle 4.png'); background-size:cover; background-repeat:no-repeat;">
                            <div class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                            </div>
                            <!-- <div class="slide_1_2">
                                    <div class="div_upcom_eve">
                                        <p class="upcom_headline">
                                            WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                        </p>
                                        <p class="upcom_event_data">
                                            <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                            <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bangalore | India</span></p>
                                        </p>
                                    </div>

                                    <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                                </div> -->
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="slide_1" style="background-image:url('../images/Homepage/Group 6.png'); background-size:cover; background-repeat:no-repeat;">
                            <div class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                            </div>
                            <!-- <div class="slide_1_1">
                                    <div class="div_upcom_eve">
                                        <p class="upcom_headline">
                                            WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                        </p>
                                        <p class="upcom_event_data">
                                        <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                        <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                        </p>
                                    </div>

                                    <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                                </div> -->
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="slide_1" style="background-image:url('../images/Homepage/Rectangle 4.png'); background-size:cover; background-repeat:no-repeat;">
                            <div class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                            </div>
                            <!-- <div class="slide_1_1">
                                    <div class="div_upcom_eve">
                                        <p class="upcom_headline">
                                            WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                        </p>
                                        <p class="upcom_event_data">
                                        <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 16-19, 2025</span></p>
                                        <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                        </p>
                                    </div>

                                    <a href="{{route("upcoming-event")}}" class="upcom_learn_more_btn">Learn More</a>
                                </div> -->
                        </div>
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
            </div>

        </div>


        <div class="mob_controls">
            <div type="button" data-bs-target="#carouselExampleInterval22" data-bs-slide="prev" class="prev_div">
                <img src="{{ asset("images/Homepage/prev.png") }}" alt="">
            </div>
            <div type="button" data-bs-target="#carouselExampleInterval22" data-bs-slide="next" class="next_div">
                <img src="{{ asset("images/Homepage/next.png") }}" alt="">
            </div>
        </div>

        <div class="controls">
            <div type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="prev" class="prev_div">
                <img src="{{ asset("images/Homepage/prev.png") }}" alt="">
            </div>
            <div type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="next" class="next_div">
                <img src="{{ asset("images/Homepage/next.png") }}" alt="">
            </div>
        </div>
    </div>
</section>


<section class="previious_events">
    <div class="previous_event_wrapper">
        <div class="background_div">
            <img src="{{ asset("images/Homepage/Group 4.png") }}" alt="" style="width:250px;margin-bottom : -2rem;">
        </div>
        <div class="previous_details">
            <p class="prev_event_heading">Previous Events</p>
            <div class="images_carousel">

                <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- <img src="{{ asset("images/Homepage/Group 15.png"); }}" alt=""> -->
                            <div class="event_details_img">
                                <div class="div_prev">
                                    <div class="prev_event_date">
                                        <p class="upcom_headline">
                                            QASummit <span class="upcom_headline_span">Hyderabad</span>
                                        </p>
                                        <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Aug 24, 2024 </span></p>
                                        <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Hyderabad | India</span></p>

                                    </div>
                                    <div class="div_botto_stick">Attendees: 500+</div>

                                    <!-- <p class="attendees">Attendees: 20,000+</p> -->
                                </div>

                                <!-- <a href="{{route("previous-event")}}" class="learn_more_btn">Learn More</a> -->
                            </div>

                        </div>

                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button> -->
                </div>


            </div>
        </div>
    </div>
</section>


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
                                    <p class="review_headline">Great Speakers. Excellent experience!</p>
                                </div>
                                <div class="middle_part">
                                    <p class="review_summary">Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="bottom_part">
                                    <img src="{{ asset("images/Homepage/clientimg1.png") }}" alt="">
                                    <div class="combine_client">
                                        <p class="client_name">Johnson Doe</p>
                                        <p class="client_designation">CEO of Global Company</p>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="carousel-item">


                            <div class="review_content">
                                <div class="top_part_rev">
                                    <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                                    <p class="review_headline">Incredible experience!</p>
                                </div>
                                <div class="middle_part">
                                    <p class="review_summary">"The QA Summit was an incredible experience! I gained valuable insights and made connections that will last a lifetime."</p>
                                </div>
                                <div class="bottom_part">
                                    <img src="{{ asset("images/Homepage/clientimg2.png") }}" alt="">
                                    <div class="combine_client">
                                        <p class="client_name">Neha Sharma</p>
                                        <p class="client_designation">QA Engineer</p>
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="carousel-item">


                            <div class="review_content">
                                <div class="top_part_rev">
                                    <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                                    <p class="review_headline">Excellent experience!</p>
                                </div>
                                <div class="middle_part">
                                    <p class="review_summary">Lorem ipsum, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="bottom_part">
                                    <img src="{{ asset("images/Homepage/clientimg3.png") }}" alt="">
                                    <div class="combine_client">
                                        <p class="client_name">Stephanie Johnson</p>
                                        <p class="client_designation">CEO of Global Company</p>
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
