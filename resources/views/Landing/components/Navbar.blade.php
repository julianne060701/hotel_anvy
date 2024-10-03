<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="#"><img src='public/images/Logo.jpg' alt="" class="navbar-logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{route('LandingPage')}}">Home</a></li> 
                    <li class="nav-item"><a class="nav-link" id="landingroom" href="{{route('LandingRoom')}}">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('LandingAboutUs')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('LandingContactUs')}}">Contact</a></li>
                </ul>
                <a href="{{ route(name: 'SLogin') }}" class="button_hover theme_btn_two">Login</a>
            </div> 
        </nav>
    </div>
    <style>
        .navbar-logo {
    max-height: 80px; 
    max-width: auto; 
    object-fit: contain; 
}

    </style>
</header>
