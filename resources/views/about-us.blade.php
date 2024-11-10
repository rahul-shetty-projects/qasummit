@extends('layout')

@section('title', 'About Us')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/about-us.css") }}" />
@endsection

@section('content')

<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset("images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">About Us</p>
            </div>
            <p class="hero_heading">Elevating Standards, Building Communities</p>
            <p class="hero_summary">Explore what makes us different from other QA Summits.</p>
            <!-- <button class="hero_register_btn">Become a Sponsor</button> -->
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


<section class="why_attend_sectin" id="why_attend_section">
    <div class="why_attend_wrapper">
        <div class="attend_content_part">
            <p class="why_attend_headline">QA Summit Culture</p>
            <div class="attend_accordion">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Mission
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Vision
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <!-- <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Lead Generation
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Enhanced Brand Image
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div> -->
                </div>


            </div>
        </div>
        <div class="attend_image">
            <img src="{{ asset("images/Aboutuspage/aboutimg.png");}}" alt="" style="height : 600px">
        </div>
    </div>
</section>


<section class="our_values_section" id="our_values_secction">
    <div class="our_values_wrapper">
        <div class="our_values_header">
            <p class="our_values_heading">
            Our Values
            </p>
        </div>
        <div class="our_values_content">
            <div class="our_val1_div">
                <img src="{{ asset("images/Aboutuspage/rsteklogo.png");}}" alt="">
                <p class="content_title">
                    Lorem Ipsum
                </p>
                <p class="content_summary">
                    After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA 
                </p>
            </div>
            <div class="our_val2_div">
                <img src="{{ asset("images/Aboutuspage/rsteklogo.png");}}" alt="">
                <p class="content_title">
                    Lorem Ipsum
                </p>
                <p class="content_summary">
                    After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA 
                </p>
            </div>
            <div class="our_val3_div">
                <img src="{{ asset("images/Aboutuspage/rsteklogo.png");}}" alt="">
                <p class="content_title">
                    Lorem Ipsum
                </p>
                <p class="content_summary">
                    After the success of our inaugural summit in Hyderabad, we are excited to bring the next QA 
                </p>
            </div>
        </div>
    </div>
</section>


<section class="meet_team_section" id="meet_team_section">
    <div class="team_wrapper">
        <div class="team_header">
            <p class="team_heading">
                Meet The Team!
            </p>
        </div>
        <div class="team_img_wrapper">
            <div class="person1_div">
                <div class="image_style">
                </div>
                <img src="{{ asset("images/Aboutuspage/person1.png");}}" alt="">
                <p class="person_name">John Doe</p>
                <p class="person_title">Senior VP of Marketing</p>
            </div>
            <div class="person2_div">
                <div class="image_style">
                </div>
                <img src="{{ asset("images/Aboutuspage/person2.png");}}" alt="">                
                <p class="person_name">John Doe</p>
                <p class="person_title">Senior VP of Marketing</p>
            </div>
            <div class="person3_div">
                <div class="image_style">
                </div>
                <img src="{{ asset("images/Aboutuspage/person3.png");}}" alt="">
                <p class="person_name">John Doe</p>
                <p class="person_title">Senior VP of Marketing</p>
            </div>
            <div class="person4_div">
                <div class="image_style">
                </div>
                <img src="{{ asset("images/Aboutuspage/person4.png");}}" alt="">
                <p class="person_name">John Doe</p>
                <p class="person_title">Senior VP of Marketing</p>
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