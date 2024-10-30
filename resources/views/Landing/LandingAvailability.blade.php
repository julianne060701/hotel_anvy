@extends('Landing.layout.app')
@section('Navbar')
@include('Landing.components.Navbar')
@endsection
@section('Footer')
@include('Landing.components.Footer')
@endsection
<link rel="stylesheet" href="{{ url('resources/css/availability.css') }}">
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
                        onclick="location.href='{{ route('Availability') }}'">
                        Check Availability
    </button>
    </form>
  </div>
</section>

   
    <!--================Banner Area =================-->
    <!--================Room Listing Area =================-->
<section class="available-rooms">
    <div class="section__container room__container">
        <h2>Our Available Rooms</h2>

        <!-- Room Card 1 -->
        <div class="room-card">
            <div class="room-image">
                <img src="public/images/rooms/room1.jpg" alt="Deluxe Room 1" />
                <div class="availability-tag available">Available</div>
            </div>
            <div class="room-details">
                <h3>Deluxe Single/Double Room with Pool and Seaview</h3>
                <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                <ul class="amenities">
                    <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                    <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                    <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                    <i class="fas fa-coffee"></i> Complimentary Breakfast
                </ul>
                <span class="room-price">1,500 Per Night</span>
                <button class="book-now-btn" type="button" onclick="location.href='{{ route(name: 'SLogin') }}'">Book Now</button>
            </div>
        </div>

        <!-- Room Card 2 -->
        <div class="room-card">
            <div class="room-image">
                <img src="public/room/room-2.jpg" alt="Deluxe Room 2" />
                <div class="availability-tag available">Available</div>
            </div>
            <div class="room-details">
                <h3>Deluxe Single/Double Room with Pool and Seaview</h3>
                <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                <ul class="amenities">
                    <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                    <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                    <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                    <i class="fas fa-coffee"></i> Complimentary Breakfast
                </ul>
                <span class="room-price">1,500 Per Night</span>
                <button class="book-now-btn" type="button" onclick="location.href='{{ route('SLogin') }}'">Book Now</button>
            </div>
        </div>

        <!-- Room Card 3 (Unavailable) -->
        <div class="room-card">
            <div class="room-image">
                <img src="public/room/room-1.jpg" alt="Deluxe Room 3" />
                <div class="availability-tag unavailable">Not Available</div>
            </div>
            <div class="room-details">
                <h3>Deluxe Single/Double Room with Pool and Seaview</h3>
                <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                <ul class="amenities">
                    <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                    <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                    <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                    <i class="fas fa-coffee"></i> Complimentary Breakfast
                </ul>
                <span class="room-price">1,500 Per Night</span>
                <button class="book-now-btn" type="button" onclick="location.href='{{ route('SLogin') }}'">Book Now</button>
            </div>
        </div>
    </div>
</section>

    <!--================Room Listing Area =================-->

    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->

</body>
</html>
