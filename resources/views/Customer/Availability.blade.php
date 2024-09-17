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
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Room Availability</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
    <div class="container mt-5">
        <!-- Room Booking Form -->
        <div class="booking-form text-center">

            <form class="form-inline justify-content-center">
                <input type="date" class="form-control mr-2" placeholder="Arrival Date">
                <input type="date" class="form-control mr-2" placeholder="Departure Date">
                <select class="form-control mr-2">
                    <option selected>Select Adults</option>
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adults</option>
                </select>
                <select class="form-control mr-2">
                    <option selected>Select Children</option>
                    <option value="0">0 Children</option>
                    <option value="1">1 Child</option>
                    <option value="2">2 Children</option>
                </select>
                <select class="form-control mr-2">
                    <option selected>Number of Rooms</option>
                    <option value="1">1 Room</option>
                    <option value="2">2 Rooms</option>
                </select>
                <button type="submit" class="btn check-btn">CHECK AVAILABILITY</button>
            </form>
        </div>

        <!-- Room Cards -->
        <div class="row">
            <!-- Room Card 1 -->
            <div class="col-md-6">
                <div class="room-card d-flex">
                    <div class="room-image col-md-5">
                        <img src="public/images/rooms/room2.jpg" alt="Room Image">
                    </div>
                    <div class="room-info col-md-7">
                        <h5 class="room-title">Deluxe Room</h5>
                        <p>Sleeps 3 | 1 King Bed | 41 to 46 m²</p>
                        <p>Refreshed rooms with picture window views and one or two-bed options.</p>
                        <a href="#" class="text-muted">Room details</a>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="room-price">₱12,400</span>
                            <a href="{{ route('Book') }}" class="btn booking-button">Book Now</a> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Card 2 -->
            <div class="col-md-6">
                <div class="room-card d-flex">
                    <div class="room-image col-md-5">
                        <img src="public/images/rooms/room1.jpg" alt="Room Image">
                    </div>
                    <div class="room-info col-md-7">
                        <h5 class="room-title">Deluxe Room</h5>
                        <p>Sleeps 3 | 1 King Bed | 41 to 46 m²</p>
                        <p>Refreshed rooms with picture window views and one or two-bed options.</p>
                        <a href="#" class="text-muted">Room details</a>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="room-price">₱12,400</span>
                            <a href="{{ route('Book') }}" class="btn booking-button">Book Now</a> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Card 3 -->
            <div class="col-md-6">
                <div class="room-card d-flex">
                    <div class="room-image col-md-5">
                        <img src="public/images/rooms/room2.jpg" alt="Room Image">
                    </div>
                    <div class="room-info col-md-7">
                        <h5 class="room-title">Deluxe Room</h5>
                        <p>Sleeps 3 | 1 King Bed | 41 to 46 m²</p>
                        <p>Refreshed rooms with picture window views and one or two-bed options.</p>
                        <a href="#" class="text-muted">Room details</a>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="room-price">₱12,400</span>
                            <a href="{{ route('Book') }}" class="btn booking-button">Book Now</a> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room Card 4 -->
            <div class="col-md-6">
                <div class="room-card d-flex">
                    <div class="room-image col-md-5">
                        <img src="public/images/rooms/room2.jpg" alt="Room Image">
                    </div>
                    <div class="room-info col-md-7">
                        <h5 class="room-title">Deluxe Room</h5>
                        <p>Sleeps 3 | 1 King Bed | 41 to 46 m²</p>
                        <p>Refreshed rooms with picture window views and one or two-bed options.</p>
                        <a href="#" class="text-muted">Room details</a>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="room-price">₱12,400</span>
                            <a href="{{ route('Book') }}" class="btn booking-button">Book Now</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--================Footer Area =================-->
    @yield('Footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
</body>

</html>