@extends('Landing.layout.app')
@section('Navbar')
@include('Landing.components.Navbar')
@endsection
@section('Footer')
@include('Landing.components.Footer')
@endsection


<body>
    <!--================Header Area =================-->
    @yield('Navbar')
    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/banner.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
    <div class="section__container header__container">
        <h1>Anvy Resort Hotel</h1>
    </div>
</header>

    <!--================Header Area =================-->

    <!--================Banner Area =================-->
   
<section class="booking">
  <div class="section__container booking__container">
    <form action="/">
      <div class="input__group">
        <label for="arrival">Arrival Date</label>
        <input type="date" id="arrival" name="arrival" />
      </div>
      <div class="input__group">
        <label for="departure">Departure Date</label>
        <input type="date" id="departure" name="departure" />
      </div>
      <div class="input__group">
        <label for="guests">Guests</label>
        <input type="text" placeholder="No Of Guests" />
      </div>
      <button class="book_now_btn button_hover btn" type="button"
                        onclick="location.href='{{ route('LandingAvailability') }}'">
                        Check Availability
    </button>
    </form>
  </div>
</section>

   
    <!--================Banner Area =================-->

    <!--================ Welcome Area  =================-->
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
    <!--================ Welcome Area  =================-->
    <!-- video -->
<section class="intro">
      <div class="section__container intro__container">
        <div class="intro__cotent">
          <p class="section__subheader">INTRO VIDEO</p>
          <h2 class="section__header">Meet With Our Luxury Place</h2>
          <p class="section__description">
            Whether you're seeking a cozy and exclusive hideaway or an immersive
            journey beneath the surface, Hotel Miranda promises to be an
            unforgettable stay, where the depths of comfort and excitement await
            your arrival.
          </p>
          <button class="btn">Book Now</button>
        </div>
        <div class="intro__video">
          <video src="public/room/luxury.mp4" autoplay muted loop></video>
        </div>
      </div>
    </section>
    <!--================ Accommodation Area  =================-->
    <section class="room__container" id="room">
      <p class="section__subheader">ROOMS</p>
      <h2 class="section__header">Hand Picked Rooms</h2>
      <div class="room__grid">
        <div class="room__card">
          <img src="public/room/room-1.jpg" alt="room" />
          <div class="room__card__details">
            <div>
              <h4>Deluxe Suite</h4>
              <p>Well-appointed rooms designed for guests who desire a more.</p>
            </div>
            <h3>$399<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <img src="public/room/room-2.jpg" alt="room" />
          <div class="room__card__details">
            <div>
              <h4>Family Suite</h4>
              <p>Consist of multiple rooms and a common living area.</p>
            </div>
            <h3>$599<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <img src="public/room/room-3.jpg" alt="room" />
          <div class="room__card__details">
            <div>
              <h4>Luxury Penthouse</h4>
              <p>
                Top-tier accommodations usually on the highest floors of a
                hotel.
              </p>
            </div>
            <h3>$799<span>/night</span></h3>
          </div>
        </div>
      </div>
    </section>

    <!--================ Accommodation Area  =================-->


    <!--================ Menu Area  =================-->
    <section class="menu" id="menu">
      <div class="section__container menu__container">
        <div class="menu__header">
          <div>
            <p class="section__subheader">MENU</p>
            <h2 class="section__header">Our Food Menu</h2>
          </div>
          <div class="section__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <ul class="menu__items">
          <li>
            <img src="public/room/menu-1.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Fggs & Bacon</h4>
              <p>
                It is a culinary innovation that puts a unique spin on the
                beloved breakfast combination.
              </p>
            </div>
          </li>
          <li>
            <img src="public/room/menu-2.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Tea or Coffee</h4>
              <p>
                A classic choice for your daily dose of comfort and calmness.
              </p>
            </div>
          </li>
          <li>
            <img src="public/room/menu-3.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Chia Oatmeal</h4>
              <p>
                Our Chia Oatmeal is a wholesome nutrient-packed breakfast
                delight.
              </p>
            </div>
          </li>
          <li>
            <img src="public/room/menu-4.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Fruit Parfait</h4>
              <p>
                Our Fruit Parfait is a delightful culinary masterpiece of
                freshness and flavor.
              </p>
            </div>
          </li>
          <li>
            <img src="public/room/menu-5.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Marmalade Selection</h4>
              <p>
                Our Marmalade Selection is a delectable medley of vibrant,
                handcrafted citrus preserves.
              </p>
            </div>
          </li>
          <li>
            <img src="public/room/menu-6.jpg" alt="menu" />
            <div class="menu__details">
              <h4>Cheese Plate</h4>
              <p>
                Our cheese plate is a masterpiece that celebrates rich and
                diverse world of cheeses.
              </p>
            </div>
          </li>
        </ul>
        <div class="menu__images">
          <img src="public/room/menu-7.jpg" alt="menu" />
          <img src="public/room/menu-8.jpg" alt="menu" />
          <img src="public/room/menu-9.jpg" alt="menu" />
        </div>

      </div>
    </section>
    <!--================ Menu Area  =================-->

    <!--================ facilities Area  =================-->
    <section class="section__container feature__container" id="feature">
      <p class="section__subheader">FACILITIES</p>
      <h2 class="section__header">Core Features</h2>
      <div class="feature__grid">
        <div class="feature__card">
          <span><i class="ri-thumb-up-line"></i></span>
          <h4>Have High Rating</h4>
          <p>
            We take pride in curating a selection of hotels that consistently
            receive high ratings and positive reviews.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-time-line"></i></span>
          <h4>Quite Hours</h4>
          <p>
            We understand that peace and uninterrupted rest are essential for a
            rejuvenating experience.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-map-pin-line"></i></span>
          <h4>Best Location</h4>
          <p>
            At our hotel booking website, we take pride in offering
            accommodations in the most prime and sought-after locations.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-close-circle-line"></i></span>
          <h4>Free Cancellation</h4>
          <p>
            We understand that travel plans can change unexpectedly, which is
            why we offer the flexibility of free cancellation.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-wallet-line"></i></span>
          <h4>Payment Options</h4>
          <p>
            Our hotel booking website offers a range of convenient payment
            options to suit your preferences.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-coupon-line"></i></span>
          <h4>Special Offers</h4>
          <p>
            Whether you're planning a romantic getaway, or a business trip, our
            carefully curated special offers cater to all your needs.
          </p>
        </div>
      </div>
    </section>
   
    <!--================ Event Area  =================-->
    <section class="section__container news__container" id="news">
      <div class="news__header">
        <div>
          <p class="section__subheader">Event</p>
          <h2 class="section__header">Our Events</h2>
        </div>
        <div class="section__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="news__grid">
        <div class="news__card">
          <img src="public/event/event.jpg" alt="news" />
          <div class="news__card__title">
            <!--<p>25th March 2022</p>-->
            
          </div>
          <h4>Wedding</h4>
          <p>
            Join Emily as she takes you on a gastronomic adventure through the
            neighborhood surrounding our hotel.
          </p>
        </div>
        <div class="news__card">
          <img src="public/event/event1.jpg" alt="news" />
          <div class="news__card__title">
            <!--<p>15th June 2022</p>-->
            <!--<p>By David</p>-->
          </div>
          <h4>Birthday</h4>
          <p>
            Discover holistic spa treatments, fitness facilities, and
            mindfulness practices that will leave you feeling refreshed.
          </p>
        </div>
        <div class="news__card">
          <img src="public/event/event02.jpg" alt="news" />
          <div class="news__card__title">
            <!--<p>08th August 2022</p>-->
            <!--<p>By Sarah</p>-->
          </div>
          <h4>Light</h4>
          <p>
            From hiking and biking trails to water sports and wildlife
            encounters, she highlights ways to experience nature's wonders.
          </p>
        </div>
      </div>
    </section>

    <!--================ Event Area  =================-->


    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->


</body>

</html>
