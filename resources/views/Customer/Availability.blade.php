@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection


<body>
    <!--================Navigation Area =================-->
    @yield('Navbar')

    <!--================Navigation Area =================-->
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">BOOK YOUR ROOM</h2>
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li class="active">Room Availability</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
 
    <div class="container mt-5">
        <!-- Room Booking Form -->
           <!-- Room Booking Form -->
           <div class="booking-form text-center">
            <h3>BOOK YOUR ROOM</h3>
            <form class="form-inline justify-content-center align-items-center booking-form-custom">
                <input type="date" class="form-control mr-2" placeholder="Arrival Date">
                <input type="date" class="form-control mr-2" placeholder="Departure Date">

                <div class="number-of-guests d-flex align-items-center mr-2">
                    <input type="text" class="form-control guest-input mx-2" id="roomNumber" name="room_number"
                        placeholder="Number of Guests" required>
                </div>

                <div class="d-flex align-items-center">
                    <button class="book_now_btn button_hover btn" type="button"
                        onclick="location.href='{{ route('Availability') }}'">
                        Check Availability
                    </button>
                </div>
            </form>
        </div>
        <!--================Room Cards =================-->
        <h5 class="room-title">OUR AVAILABLE ROOM</h5>
        <div class="container mt-5">
            <div class="row room-list slide-up">
                <!-- Room Card -->
                <div class="col-md-12 mb-4">
                    <div class="room-card d-flex">
                        <div class="room-image position-relative">
                            <img src="public/images/rooms/room1.jpg" alt="Deluxe Room Image" class="img-fluid">
                            <span class="badge badge-info position-absolute">AVAILABLE</span>
                        </div>
                        <div class="room-info pl-4">
                            <h5 class="room-title">Deluxe Single/Double Room with Pool and Seaview</h5>
                            <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                            <p><strong>Amenities:</strong></p>
                            <p class="amenities">
                                <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                                <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                                <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                                <i class="fas fa-coffee"></i> Complimentary Breakfast
                            </p>

                            <div class="info-price-booking d-flex align-items-center justify-content-between mt-2">
                                <span class="room-price">1,500 Per Night</span>
                                <a href="{{ route('Book') }}" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="row room-list slide-up">
                <!-- Room Card -->
                <div class="col-md-12 mb-4">
                    <div class="room-card d-flex">
                        <div class="room-image position-relative">
                            <img src="public/images/rooms/room2.jpg" alt="Deluxe Room Image" class="img-fluid">
                            <span class="badge badge-info position-absolute">AVAILABLE</span>
                        </div>
                        <div class="room-info pl-4">
                            <h5 class="room-title">Deluxe Single/Double Room with Pool and Seaview</h5>
                            <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                            <p><strong>Amenities:</strong></p>
                            <p class="amenities">
                                <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                                <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                                <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                                <i class="fas fa-coffee"></i> Complimentary Breakfast
                            </p>

                            <div class="info-price-booking d-flex align-items-center justify-content-between mt-2">
                                <span class="room-price">1,500 Per Night</span>
                                <a href="{{ route('Book') }}" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Room 3 -->
             <div class="row room-list slide-up">
                <!-- Room Card -->
                <div class="col-md-12 mb-4">
                    <div class="room-card d-flex">
                        <div class="room-image position-relative">
                            <img src="public/images/rooms/event3.jpg" alt="Deluxe Room Image" class="img-fluid">
                            <span class="badge badge-info position-absolute">NOT AVAILABLE</span>
                        </div>
                        <div class="room-info pl-4">
                            <h5 class="room-title">Deluxe Single/Double Room with Pool and Seaview</h5>
                            <p>This 40m² deluxe room offers a spacious and inviting patio...</p>
                            <p><strong>Amenities:</strong></p>
                            <p class="amenities">
                                <i class="fas fa-user"></i> Sleeps 2 &nbsp;
                                <i class="fas fa-swimming-pool"></i> Pool Access &nbsp;
                                <i class="fas fa-wifi"></i> Free Wifi &nbsp;
                                <i class="fas fa-coffee"></i> Complimentary Breakfast
                            </p>

                            <div class="info-price-booking d-flex align-items-center justify-content-between mt-2">
                                <span class="room-price">1,500 Per Night</span>
                                <a href="{{ route('Book') }}" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <!--================Footer Area =================-->
        @yield('Footer')

</body>

</html>