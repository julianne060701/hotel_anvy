@extends('Customer.layout.app')

@section('Navbar')
    @include('Customer.components.Navbar')
@endsection

@section('Footer')
    @include('Customer.components.Footer')
@endsection
<link rel="icon" href="resources/dist/img/adminLogo.jpg">
<body>
    <!--================Header Area =================-->
    @yield('Navbar')
    
    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/banner.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
        <div class="section__container header__container">
            <h1>About Us</h1>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================ About Us Content Area =================-->
    <section class="about" id="about">
      <div class="section__container about__container">
        <div class="about__grid">
          <div class="about__image">
            <img src="public/room/about-1.jpg" alt="about" />
          </div>
          <div class="about__card">
            <span><i class="ri-user-line"></i></span>
            <h4>Strong Team</h4>
            <p>
              Unlocking Hospitality Excellence And Ensures Your Perfect Stay
            </p>
          </div>
          <div class="about__image">
            <img src="public/room/about-2.jpg" alt="about" />
          </div>
          <div class="about__card">
            <span><i class="ri-calendar-check-line"></i></span>
            <h4>Luxury Room</h4>
            <p>Experience Unrivaled Luxury at Our Exquisite Luxury Rooms</p>
          </div>
        </div>
        <div class="about__content">
          <p class="section__subheader">ABOUT US</p>
          <h2 class="section__header">Welcome to Anvy Resort Hotel</h2>
          <p class="section__description">
            Welcome to a hidden realm of extraordinary accommodations where
            luxury, comfort, and adventure converge. Our underground hotels
            offer an unparalleled escape from the ordinary, inviting you to
            explore a subterranean world of wonders.
          </p>
          <button class="btn">Book Now</button>
        </div>
      </div>
    </section>
    <!--================ End About Us Content Area =================-->

    <!--================ Start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->

</body>
