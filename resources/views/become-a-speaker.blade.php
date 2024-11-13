@extends('layout')

@section('title', 'Become a Speaker')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/Become-speaker.css") }}" />
@endsection

@section('content')


<section class="hero_section" id="hero_section">
    <div class="hero_section_wrapper">
        <!-- <div class="hero_speaker_image">
            <img src="{{ asset("images/Homepage/hero image.png");}}" alt="">
        </div> -->
        <div class="hero_first_div">
            <div class="border_style">
                <p class="hero_headline" style="margin-bottom: 0!important;">Speaker</p>
            </div>
            <p class="hero_heading">Join Us as a Speaker!</p>
            <p class="hero_summary">Share your expertise, connect with industry leaders, and inspire our QA community.</p>
            <button class="hero_register_btn">Become a Speaker</button>
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
            <p class="why_attend_headline">Why Speak at QA Summit</p>
            <div class="attend_accordion">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Mission
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
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
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Vision
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Vision
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Network with over 500 industry professionals from various sectors and backgrounds. Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.Share insights, tips, and best practices in software testing.</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="attend_image">
            <img src="{{ asset("images/Speakerpage/speakerimg.png");}}" alt="">
        </div>
    </div>
</section>



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
            <div class="text_area1_div">
                <label for="speakerarea1" class="speaker_label">Tell us about yourself and why you want to become a speaker!</label>
                <textarea name="" id="speakerarea1"  rows="5" class="speakerarea1_inp" placeholder="I want to speak because.."></textarea>
            </div>
            <div class="text_area2_div">
                <label for="speakerarea2" class="speaker_label">List down your websites/social media pages to know about you,</label>
                <textarea name="" id="speakerarea2"  rows="5" class="speakerarea2_inp" placeholder="www.myproduct.com"></textarea>
            </div>
            <div class="text_area3_div">
                <label for="speakerarea3" class="speaker_label">Additional comments</label>
                <textarea name="" id="speakerarea3"  rows="5" class="speakerarea3_inp"></textarea>
            </div>
            <div class="submit_btn_div">
                <button class="submit_btn">Submit</button>
            </div>
        </div>
    </div>
</section>



@endsection