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
                <p class="hero_headline" style="margin-bottom: 0!important;">TestFest India!</p>
            </div>
            <p class="hero_heading">Welcome to India’s Premier Software Testing and QA Conference.</p>
            <p class="hero_summary">Dive into the Future of QA: Ignite Innovation and Transform Testing!</p>
            <div class="hero_btn_wrapper">
                <a href="{{route('upcoming-event')}}" class="hero_register_btn">Register</a>
                <a href="{{route('upcoming-event')}}" class="hero_learn_more_btn">Learn More</a>
            </div>
        </div>
        <div class="hero_second_div">
            <div class="upcoming_events">
                <div class="event_headline">
                    <p class="event_headline">Upcoming Event</p>
                    <p class="event_heading" style="margin-bottom: 0!important;">QA Transformation</p>
                </div>
                <div class="horizontal_line_event"></div>
                <div class="upcoming_details">
                    <p class="event_location"><img src="{{ asset("images/Homepage/Location on.png") }}" alt=""><span>Conference room 5</span></p>
                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar today.png") }}" alt=""><span>25 Aug, 2025</span></p>
                </div>
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
        const endTimestamp = 1731318998;

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
        <div class="about_conference_heading">
            <p>About the Conference</p>
        </div>
        <div class="conference_content">
            <div class="conference_images">
                <div class="first_set">
                    <img src="{{ asset("images/Homepage/Mask group.png") }}" alt="">
                    <img src="{{ asset("images/Homepage/Mask group (1).png") }}" alt="">
                </div>
                <div class="second_set">
                    <img src="{{ asset("images/Homepage/Mask group (2).png") }}" alt="">
                    <img src="{{ asset("images/Homepage/Mask group (3).png") }}" alt="">
                </div>
            </div>
            <div class="images_description">
                <p class="desc_heading">We Discuss New Ideas and Techniques.</p>
                <p class="desc_summary">After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA Summit to Bangalore! This event offers software testers, test automation engineers, and quality assurance professionals a valuable opportunity for learning, networking, and collaboration.</p>
                <div class="btn_wrapper">
                    <a href="{{ route("upcoming-event")}}" class="register_btn">Register</a>
                    <a href="{{ route("upcoming-event")}}" class="learn_more_btn2"><span class="button__label">Learn More</span></a>
                </div>
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
</section>

<section class="call_for_speakers">
    <div class="speakers_section_wrapper">
        <div class="speakers_content">
            <p class="get_involved">Get Involved!</p>
            <p class="call_spaekers">Call for Speakers!</p>
            <p class="speaker_summary">We are currently accepting proposals for speakers. If you're experienced in software testing or quality assurance and want to share your knowledge, please submit your proposal by December 15, 2024. Selected speakers will have the opportunity to engage with an audience of industry professionals and contribute to meaningful discussions. Details regarding submission guidelines and event logistics will be provided upon acceptance.</p>
            <button class="proposal_btn">Submit Your Proposal</button>
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
            <p class="events_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="carousel_div">


            <div id="carouselExampleInterval2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide_1">
                            <div class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
                            </div>
                            <div class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="slide_1">
                            <div class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2026
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
                            </div>
                            <div class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="slide_1">
                            <div class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2027
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
                            </div>
                            <div class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        WORLD’S BIGGEST QUALITY ASSURANCE SUMMIT
                                    </p>
                                    <p class="upcom_event_data">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                </div>

                                <button class="upcom_learn_more_btn">Learn More</button>
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
                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- <img src="{{ asset("images/Homepage/Group 15.png"); }}" alt=""> -->
                            <div class="event_details_img">
                                <div class="div_prev">
                                    <p class="prev_event_date">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                    <p class="attendees">Attendees: 20,000+</p>
                                </div>

                                <button class="learn_more_btn">Learn More</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="{{ asset("images/Homepage/Group 15.png"); }}" alt=""> -->
                            <div class="event_details_img">
                                <div class="div_prev">
                                    <p class="prev_event_date">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                    <p class="attendees">Attendees: 21,000+</p>
                                </div>

                                <button class="learn_more_btn">Learn More</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="{{ asset("images/Homepage/Group 15.png"); }}" alt=""> -->
                            <div class="event_details_img">
                                <div class="div_prev">
                                    <p class="prev_event_date">January 16-19, 2025
                                        <br>New Delhi | India
                                        <br>Habitat World Convention Centre
                                    </p>
                                    <p class="attendees">Attendees: 22,000+</p>
                                </div>

                                <button class="learn_more_btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>


            </div>
        </div>
    </div>
</section>


<section class="testimonial_section" id="testimonials_section">
    <div class="clients_wrapper">
        <div class="client_details">
            <p class="event_reviews">Event Reviews</p>
            <div class="review_content">
                <div class="top_part_rev">
                    <img src="{{ asset("images/Homepage/Format quote.png") }}" alt="" style="margin-left : -10px;">
                    <p class="review_headline">Great Speakers. Excellent experience!</p>
                </div>
                <div class="middle_part">
                    <p class="review_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                </div>
                <div class="bottom_part">
                    <img src="{{ asset("images/Homepage/Ellipse 19.png") }}" alt="">
                    <div class="combine_client">
                        <p class="client_name">Stephanie Johnson</p>
                        <p class="client_designation">CEO of Global Company</p>
                    </div>
                </div>
                <div class="controls_reviews">
                    <img src="{{ asset("images/Homepage/Arrow backward.png") }}" alt="">
                    <img src="{{ asset("images/Homepage/Arrow forward.png") }}" alt="">
                </div>
            </div>

        </div>
        <div class="client_eclipse">
            <img src="{{ asset("images/Homepage/eclipse group.png") }}" alt="">
        </div>
    </div>
</section>

@endsection
