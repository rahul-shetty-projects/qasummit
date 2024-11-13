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
                <p class="hero_headline" style="margin-bottom: 0!important;">Contact us</p>
            </div>
            <p class="hero_heading">For all enquiries please use the form below</p>
            <p class="hero_summary">Have a question? drop us a message!</p>
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


<!-- <section class="why_attend_sectin" id="why_attend_section">
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
                <!-- </div>


            </div>
        </div>
        <div class="attend_image">
            <img src="{{ asset("images/Aboutuspage/aboutimg.png");}}" alt="" style="height : 600px">
        </div>
    </div>
</section> --> -->


<!-- <section class="our_values_section" id="our_values_secction">
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
</section> -->


<!-- <section class="testimonial_section" id="testimonials_section">
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
</section> -->


<section class="speaker_form_section" id="speaker_form_section">
    <div class="form_wrapper">
        <div class="form_header">
            <p class="form_heading">Get Started!</p>
        </div>
        <div class="form_wrap">
            <div class="spname_div">
                <label for="speakername" class="speaker_label">Name</label>
                <input type="text" name="" id="speakername" class="speakername_inp" placeholder="John Doe">
            </div>
            <div class="email_div">
                <label for="speakermail" class="speaker_label">Email Address</label>
                <input type="email" name="" id="speakermail" class="speakermail_inp" placeholder="john@gmail.com">
            </div>
            <div class="combine_divv">
                <div class="title_div">
                    <label for="speakertitle" class="speaker_label">Your Title</label>
                    <input type="text" name="" id="speakertitle" class="speakertitle_inp" placeholder="General Manager">
                </div>
                <div class="number_div">
                    <label for="speakernumber" class="speaker_label">Your Phone Number</label>
                    <input type="number" name="" id="speakernumber" class="speakernumber_inp" placeholder="(5555) 555-555">
                </div>
            </div>
            <div class="subject_div">
                <label for="speakersubject" class="speaker_label">Subject</label>
                <input type="text" name="" id="speakersubject" class="speakersub_inp" placeholder="Business Inquiry">
            </div>
            <!-- <div class="text_area1_div">
                <label for="speakerarea1" class="speaker_label">Tell us about yourself and why you want to become a speaker!</label>
                <textarea name="" id="speakerarea1"  rows="5" class="speakerarea1_inp" placeholder="I want to speak because.."></textarea>
            </div>
            <div class="text_area2_div">
                <label for="speakerarea2" class="speaker_label">List down your websites/social media pages to know about you,</label>
                <textarea name="" id="speakerarea2"  rows="5" class="speakerarea2_inp" placeholder="www.myproduct.com"></textarea>
            </div> -->
            <div class="text_area3_div">
                <label for="speakerarea3" class="speaker_label">Message</label>
                <textarea name="" id="speakerarea3"  rows="5" class="speakerarea3_inp" placeholder="I would like to contact you regarding..."></textarea>
            </div>
            <div class="submit_btn_div">
                <button class="submit_btn">Submit</button>
            </div>
        </div>
    </div>
</section>

@endsection