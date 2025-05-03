@extends('layout')

@section('title', 'Software Testing Meetup 2025 - Pune')

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
                <p class="hero_headline" style="margin-bottom: 0!important;">QASummit <span class="hero_headline_span">Pune</span></p>
            </div>
            <p class="hero_heading">Welcome to the Career-Focused Software Testing Meetup</p>
            <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Vivanta PUNE - Hinjawadi</span></p>
            <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>10th May, 2025</span></p>
            <p class="hero_summary">Join us in Maharashtra, India to explore 2025 QA trends, test automation,
                AI-driven testing, and career insights in the n the ever-evolving field
                of software testing.
                <br><span class="hero_summary_span_before">—all brought to you by the renowned instructor,</span>
                <span class="hero_summary_span"><i><a style="color:#fff;" target="_blank" href="https://www.linkedin.com/in/rahul-shetty-venkatesh/">Rahul Shetty</a>.</i></span>
            </p>
            <div class="hero_btn_wrapper">
                <a href="{{route('pune-event')}}" class="hero_register_btn">Be the First One to Know When Tickets Open</a>
                <!-- <a href="{{route('pune-event')}}" class="hero_learn_more_btn">Learn More</a> -->
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
        const endTimestamp = 1746815400;

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
            <p class="about_conference_heading">About QA Summit Meetups</p>
        </div>
        <div class="conference_content">
            <div class="conference_images">
                <div class="first_set">
                    <div class="img1_div">
                        <img alt="">
                        <p class="overflow_txt">AI in testing</p>
                    </div>
                    <div class="img2_div">
                        <img alt="">
                        <p class="overflow_txt">Career guidance</p>
                    </div>
                </div>
                <div class="second_set">
                    <div class="img3_div">
                        <img alt="">
                        <p class="overflow_txt">Local Networking</p>
                    </div>
                    <div class="img4_div">
                        <img alt="">
                        <p class="overflow_txt">Stay updated with QA trends</p>
                    </div>
                </div>
            </div>
            <div class="images_description">
                <!-- <p class="desc_heading">We Discuss New Ideas and Techniques.</p> -->
                <div class="">
                    <p class="desc_summary"><b>QA Summit</b> is a globally recognized series of career-focused Software Testing and QA Meetups designed to empower professionals in the ever-evolving testing landscape. These exclusive events are spearheaded by <b><a style="color:#000;" target="_blank" href="https://www.linkedin.com/in/rahul-shetty-venkatesh/">Rahul Shetty</a></b>, one of the world’s leading QA educators, with a community of over 1 million students worldwide.
                    </p>
                    <p class="desc_summary"> These Meetups are meticulously crafted to address the latest shifts and trends in QA for each quarter. Covering topics like trending QA technologies, AI-driven testing, automation strategies, and actionable career guidance, QA Summit ensures attendees stay ahead in their field.
                    </p>
                    <p class="desc_summary">With events hosted in different cities across the globe each quarter, QA Summit takes a tailored approach by integrating job market research specific to the host city into the agenda. This unique insight helps participants gain a competitive edge by understanding local and global opportunities in QA.</p>
                    <p class="desc_summary">Whether you're a professional seeking the latest advancements or career strategies, QA Summit is the perfect platform to learn, network, and grow in the QA space.
                    </p>
                </div>
                <div class="btn_wrapper">
                    <a href="{{ route("pune-event")}}" class="register_btn">Secure your Spot</a>
                    <!-- <a href="{{ route("pune-event")}}" class="learn_more_btn2"><span class="button__label">Learn More</span></a> -->
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
            <img height="115px" src="{{ asset("images/Homepage/optimworks.jpg") }}" alt="">

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


<section class="upcoming_carousel">
    <div class="upcoming_carousel_wrapper">
        <div class="Upcoming_headlines">
            <p class="events_headlines">Upcoming Events</p>
            <p style="margin-bottom:4px;" class="events_summary">Mark your calendars for our upcoming events, designed to inspire and inform the QA community about the latest trends and technologies. Don’t see your city listed? No problem! <a href="#footer_section">Fill out the form</a> and let us know your city of interest.</p>
            <p style="margin-top: 4px;" class="events_summary">Based on popular demand, we may consider changing the venue or organizing mini events in your city!</p>


        </div>
        <div class="carousel_div">


            <div id="carouselExampleInterval2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide_1">
                            <a href="{{route("bengaluru-event")}}" style="background-image:url('../images/Homepage/uebg1.png')" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Bengaluru</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 25, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bengaluru | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("bengaluru-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>
                            <a href="{{route("pune-event")}}" style="background-image:url('../images/Homepage/uebg3.png')" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Pune</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q2-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Pune | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("pune-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>
                            <a href="{{route("london-event")}}" style="background-image:url('../images/Homepage/uebg2.png')" class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">London</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q3-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("london-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>
                            <a href="{{route("toronto-event")}}" style="background-image:url('../images/Homepage/uebg4.png')" class="slide_1_2">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Toronto</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q4-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Toronto | Canada</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("toronto-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <div class="slide_1">

                        </div>
                    </div> -->

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

            <div id="carouselExampleInterval22" style="width: 100%;" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide_1" style="background-image:url('../images/Homepage/uebg1.png'); background-size:cover; background-repeat:no-repeat;">
                            <a href="{{route("bengaluru-event")}}" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Bengaluru</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>January 25, 2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Bengaluru | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("bengaluru-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="slide_1" style="background-image:url('../images/Homepage/uebg3.png'); background-size:cover; background-repeat:no-repeat;">
                            <a href="{{route("pune-event")}}" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Pune</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q2-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Pune | India</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("pune-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="slide_1" style="background-image:url('../images/Homepage/uebg2.png'); background-size:cover; background-repeat:no-repeat;">
                            <a href="{{route("london-event")}}" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">London</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q3-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>London | UK</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("london-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="slide_1" style="background-image:url('../images/Homepage/uebg4.png'); background-size:cover; background-repeat:no-repeat;">
                            <a href="{{route("toronto-event")}}" class="slide_1_1">
                                <div class="div_upcom_eve">
                                    <p class="upcom_headline">
                                        QASummit <span class="upcom_headline_span">Toronto</span>
                                    </p>
                                    <p class="upcom_event_data">
                                    <p class="event_date"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Q4-2025</span></p>
                                    <p class="event_location"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Toronto | Canada</span></p>
                                    </p>
                                </div>

                                <!-- <a href="{{route("toronto-event")}}" class="upcom_learn_more_btn">Learn More</a> -->
                            </a>

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
                            <div href="{{route("hyderabad-event")}}" style="background-image: url('../images/Homepage/hyd-event-2.png')" class="event_details_img">
                                <div class="div_prev">
                                    <div class="prev_event_date">
                                        <p class="upcom_headline">
                                            QASummit <span class="upcom_headline_span">Hyderabad</span>
                                        </p>
                                        <p class="event_date blackdrop"><img src="{{ asset("images/Homepage/Calendar.png") }}" alt=""><span>Aug 24, 2024 </span></p>
                                        <p class="event_location blackdrop"><img src="{{ asset("images/Homepage/Location.png") }}" alt=""><span>Hyderabad | India</span></p>
                                        <a href="https://www-indiatoday-in.cdn.ampproject.org/c/s/www.indiatoday.in/amp/impact-feature/story/venkateshs-aka-rahul-shetty-ai-in-testing-conference-poised-to-revolutionize-qa-industry-in-hyderabad-2596312-2024-09-09" target="_blank" class="press_coverage blackdrop"><i class="fa-regular fa-newspaper"></i><span class="slow-blink">Press Coverage</span></a>

                                    </div>
                                    <div class="div_botto_stick">Attendees: 300+</div>

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

<section class="call_for_speakers">
    <div class="speakers_section_wrapper">
        <div class="speakers_content">
            <p class="get_involved">Get Involved!</p>
            <p class="call_spaekers">Call for Speakers!</p>
            <p class="speaker_summary">We are currently accepting proposals for speakers. If you're experienced in software testing or quality assurance and want to share your knowledge, please submit your proposal by December 15, 2024. Selected speakers will have the opportunity to engage with an audience of industry professionals and contribute to meaningful discussions. Details regarding submission guidelines and event logistics will be provided upon acceptance.</p>
            <a href="{{ route("become-a-speaker")}}" class="proposal_btn">Submit Your Proposal</a>
        </div>
        <div class="speaker_img">
            <img alt="">
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
