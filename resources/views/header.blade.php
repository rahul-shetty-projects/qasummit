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
                    <li><a href="{{route("upcoming-events")}}" class="menu_item ">Events</a></li>
                    <li><a href="{{ route("become-a-sponsor")}}" class="menu_item">Sponsors</a></li>
                    <li><a href="{{route("become-a-speaker")}}" class="menu_item">Become Speaker</a></li>
                    <li><a href="{{route("contact-us")}}" class="menu_item">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="off_canvas" id="off_canvas">
        <div class="off_canvas_close"></div>
        <div class="off_canvas_menu">
        <ul class="">
            <li><a href="#" class="menu_item active">Home</a></li>
            <li><a href="#" class="menu_item ">Solutions</a></li>
            <li><a href="#" class="menu_item">Services</a></li>
            <li><a href="#" class="menu_item">Careers</a></li>
            <li><a href="#" class="menu_item">Company</a></li>
        </ul>
        </div>
    </div> -->
</section>

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
