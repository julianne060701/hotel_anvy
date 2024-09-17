<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{route('index')}}">Home</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{route('Room')}}">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('AboutUs')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('ContactUs')}}">Contact</a></li>
                </ul>
                <!-- Notification and Profile Icons -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-bell"></i> <!-- Notification Icon -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i> <!-- Profile Icon -->
                        </a>
                    </li>
                </ul>
            </div> 
        </nav>
    </div>
</header>
