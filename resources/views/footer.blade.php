<section class="footer_section" id="footer_section">
    <div class="first_div">
        <p class="newsletter">Subscibe to Our Newsletter</p>
        <p class="news_sub_heading">Stay in the loop with monthly updates on upcoming QA Summits — both offline and online (QA Webinars) — happening in cities near you! Get the latest announcements on new QA content
            releases, event schedules, and exclusive insights tailored to empower your career in QA.
        </p>
        <p class="news_sub_heading">Don’t miss out — Subscribe now! </p>
    </div>
    <div class="second_div">
        <form class="footer_form" id="newsletterForm">
            <div class="name_div">
                <label for="name" class="name_label">Name</label>
                <input type="text" name="name" id="name" class="name_input" placeholder="John Doe" required>
            </div>
            <div class="mail_div">
                <label for="email" class="email_label">Email Address</label>
                <input type="email" name="email" id="email" class="email_input" placeholder="john@gmail.com" required>
            </div>
            <div class="mail_div">
                <label for="city" class="email_label">City</label>
                <input type="text" name="city" id="city" class="email_input" placeholder="Hyderabad" required>
            </div>
            <button id="subscribeSubmitBtn" type="submit" class="subscibe_button">SUBSCRIBE</button>
        </form>
    </div>
    <div class="third_div">
        <div class="footer_menu">
            <ul class="footer_menu_list">
                <li><a href="{{route("home")}}" class="footer_list_item">Home</a></li>
                <li><a href="{{route("bengaluru-event")}}" class="footer_list_item">Events</a></li>
                <li><a target="_blank" href="https://www.udemy.com/user/rahul445/" class="footer_list_item">Courses</a></li>
                <li><a href="{{ route("become-a-sponsor")}}" class="footer_list_item">Sponsors</a></li>
                <li><a href="{{route("become-a-speaker")}}" class="footer_list_item">Become a Speaker</a></li>
                <li><a href="{{route("contact-us")}}" class="footer_list_item">Contact Us</a></li>
            </ul>
        </div>
        <div class="horrizontal_line">

        </div>
        <div class="footer_bottom">
            <div class="combine_div">
                <p class="copyright" style="margin-bottom: 0!important;">2024 Copyright Rahul Shetty. All Rights Reserved</p>
                <div class="footer_social_icons">
                    <!-- <img src="{{ asset("images/Footer/Facebook Icon.png") }}" alt=""> -->
                    <a href="https://www.linkedin.com/company/qa-summit-rahul-shetty-academy" target="_blank"><img src="{{ asset("images/Footer/Linkedin Icon.png") }}" alt=""></a>
                    <!-- <img src="{{ asset("images/Footer/Group 25.png") }}" alt=""> -->
                    <a href="https://www.youtube.com/@RahulShettyAcademy" target="_blank"><img src="{{ asset("images/Footer/Group 23.png") }}" alt=""></a>
                    <a href="https://www.instagram.com/rahulshettyofficial_venkat/" target="_blank"><img src="{{ asset("images/Footer/Group 27.png") }}" alt=""></a>
                </div>
            </div>
            <div class="footer_logo">
                <img src="{{ asset("images/Footer/smalllogo.png") }}" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div style="gap:12px;display: flex;flex-direction: column;align-items: center;" class="modal-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 160 160"
                    fill="none">
                    <circle cx="80" cy="80" r="77.5" fill="white" stroke="#609966"
                        stroke-width="5" />
                    <path
                        d="M133.955 49.1423C137.031 51.9988 137.031 56.6376 133.955 59.4941L70.9552 117.994C67.879 120.851 62.8833 120.851 59.8071 117.994L28.3071 88.7441C25.231 85.8876 25.231 81.2488 28.3071 78.3923C31.3833 75.5359 36.379 75.5359 39.4552 78.3923L65.3935 102.455L122.832 49.1423C125.908 46.2859 130.904 46.2859 133.98 49.1423H133.955Z"
                        fill="#609966" />
                </svg>
                <h4>Contact added successfully!</h4>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<!-- Failure Modal -->
<div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div style="padding: 24px!important;gap:12px;display: flex;flex-direction: column;align-items: center;" class="modal-body text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.88px" height="122.879px" viewBox="0 0 122.88 122.879" enable-background="new 0 0 122.88 122.879" xml:space="preserve">
                    <g>
                        <path fill="#FF4141" d="M61.44,0c16.96,0,32.328,6.882,43.453,17.986c11.104,11.125,17.986,26.494,17.986,43.453 c0,16.961-6.883,32.328-17.986,43.453C93.769,115.998,78.4,122.879,61.44,122.879c-16.96,0-32.329-6.881-43.454-17.986 C6.882,93.768,0,78.4,0,61.439C0,44.48,6.882,29.111,17.986,17.986C29.112,6.882,44.48,0,61.44,0L61.44,0z M73.452,39.152 c2.75-2.792,7.221-2.805,9.986-0.026c2.764,2.776,2.775,7.292,0.027,10.083L71.4,61.445l12.077,12.25 c2.728,2.77,2.689,7.256-0.081,10.021c-2.772,2.766-7.229,2.758-9.954-0.012L61.445,71.541L49.428,83.729 c-2.75,2.793-7.22,2.805-9.985,0.025c-2.763-2.775-2.776-7.291-0.026-10.082L51.48,61.435l-12.078-12.25 c-2.726-2.769-2.689-7.256,0.082-10.022c2.772-2.765,7.229-2.758,9.954,0.013L61.435,51.34L73.452,39.152L73.452,39.152z M96.899,25.98C87.826,16.907,75.29,11.296,61.44,11.296c-13.851,0-26.387,5.611-35.46,14.685 c-9.073,9.073-14.684,21.609-14.684,35.459s5.611,26.387,14.684,35.459c9.073,9.074,21.609,14.686,35.46,14.686 c13.85,0,26.386-5.611,35.459-14.686c9.073-9.072,14.684-21.609,14.684-35.459S105.973,35.054,96.899,25.98L96.899,25.98z" />
                    </g>
                </svg>
                <h4>Failed to add contact. Please try again.</h4>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
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

<script>
    $(document).ready(function() {
        $('#newsletterForm').on('submit', function(event) {
            event.preventDefault();

            const formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                city: $('#city').val()
            };


            $("#subscribeSubmitBtn").prop('disabled', true);
            $("#subscribeSubmitBtn").html("Please Wait&nbsp;&nbsp;<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            $("#subscribeSubmitBtn").css({
                "display": "flex",
                "flex-direction": "row",
                "align-items": "center",
                "justify-content": "center",
                "gap": "8px"
            });

            $.ajax({
                url: "{{ route('newsletter.store') }}",
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#exampleModal').modal('show');
                    $('#newsletterForm').trigger('reset');
                },
                error: function(response) {
                    $('#failureModal').modal('show');
                    $('#newsletterForm').trigger('reset');
                },
                complete: function() {
                    $("#subscribeSubmitBtn").prop('disabled', false);
                    $("#subscribeSubmitBtn").html("SUBSCRIBE");
                    //remove inline styles
                    $("#subscribeSubmitBtn").removeAttr("style");
                }

            });

        });
    });
</script>
