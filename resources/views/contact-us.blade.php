@extends('layout')

@section('title', 'Contact Us')

@section('styles')
<link rel="stylesheet" href="{{ asset("css/About-us.css") }}" />
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
</section> -->


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
        <!-- <div class="form_header">
            <p class="form_heading">Get Started!</p>
        </div> -->
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
                    <label for="speakersubject" class="speaker_label">Subject *</label>
                    <input required type="text" name="" id="speakersubject" class="speakersub_inp" placeholder="Business Inquiry">
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
                    <label for="speakerarea3" class="speaker_label">Message *</label>
                    <textarea required name="" id="speakerarea3" rows="5" class="speakerarea3_inp" placeholder="I would like to contact you regarding..."></textarea>
                </div>
                <div class="submit_btn_div">
                    <button type="submit" id="subscribe_submit_btn" class="submit_btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

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
                        <p class="success_summary">Thank you for reaching out! Your message is on its way to our team. We're excited to connect and will be in touch shortly</p>
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
                <h4>Failed to send mail. Please try again.</h4>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            const formData = {
                name: $('#speakername').val(),
                email: $('#speakermail').val(),
                title: $('#speakertitle').val(),
                phone_number: $('#speakernumber').val(),
                subject: $('#speakersubject').val(),
                message: $('#speakerarea3').val(),
            };


            $("#subscribe_submit_btn").prop('disabled', true);
            $("#subscribe_submit_btn").html("Please Wait&nbsp;&nbsp;<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            $("#subscribe_submit_btn").css({
                "display": "flex",
                "flex-direction": "row",
                "align-items": "center",
                "gap": "8px"
            });

            $.ajax({
                url: "{{ route('contact.mail') }}",
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
                    $("#subscribe_submit_btn").html("Submit");
                    //remove inline styles
                    $("#subscribe_submit_btn").removeAttr("style");
                }

            });

        });
    });
</script>

@endsection
