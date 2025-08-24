<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="top_navbar"></div>
<section id="navbar_section">
    <div id="navbar_wrapper" class="navbar_wrapper">
        <div class="logo_wrapper">
            <a href="{{route("home")}}" class="logo"><img src="{{ asset("images/Header/logo.png")}}" /></a>
        </div>
        <div class="menu_wrapper">
            <div>
                <ul class="nav_menu">
                    <li><a href="{{route("home")}}" class="menu_item">Home</a></li>
                    <li> <a href="{{route("home",["#upcoming_carousel"])}}" class="menu_item event_item">Upcoming Events</a></li>
                    <!-- <li class="drop_events">
                        <a href="#" class="menu_item event_item">Upcoming Events</a>
                        <div class="dropdown_menu">
                            <a href="{{route("london-event")}}">QA Summit London</a>
                            <a href="{{ route("home") }}">QA Summit Online</a>
                        </div>
                    </li> -->
                    <li><a href="{{ route("previous-events")}}" class="menu_item">Previous Events</a></li>
                    <li> <a target="_blank" href="https://www.udemy.com/user/rahul445/" class="menu_item event_item">Courses</a></li>
                    <li><a href="{{ route("become-a-sponsor")}}" class="menu_item">Sponsors</a></li>
                    <li><a target="_blank" href="{{route("about-speaker")}}" class="menu_item">About Speaker</a></li>
                    <li><a href="{{route("contact-us")}}" class="menu_item">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <img src="{{ asset("images/Header/Menu.png")}}" class="off_canvas_wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" />
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcavas_menu_wrapper">
                <ul class="offcanvas_menu">
                    <li><a href="{{route("home")}}" class="menu_item">Home</a></li>
                    <!-- <li><a href="{{route(name: "bengaluru-event")}}" class="menu_item">Events</a></li> -->
                    <li class="drop_events">
                        <a href="#" class="menu_item event_item">Upcoming Events</a>
                        <div class="dropdown_menu_offcanvas">
                            <a href="{{route("london-event")}}">QA Summit London</a>
                            <a href="">QA Summit Online</a>
                        </div>
                    </li>
                    <li><a href="{{route(name: "previous-events")}}" class="menu_item">Previous Events</a></li>
                    <li> <a target="_blank" href="https://www.udemy.com/user/rahul445/" class="menu_item event_item">Courses</a></li>
                    <li><a href="{{ route("become-a-sponsor")}}" class="menu_item">Sponsors</a></li>
                    <li><a target="_blank" href="{{route("about-speaker")}}" class="menu_item">About Speaker</a></li>
                    <li><a href="{{route("contact-us")}}" class="menu_item">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@if (!request()->routeIs('event-booking'))
<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar_section');
        if (window.scrollY > 200) {
            navbar.style.backgroundColor = '#2D1C5B'; // Change to desired color
        } else {
            navbar.style.backgroundColor = 'transparent';
        }
    });
</script>
@endif