@extends('Customer.layout.app')
@section('Navbar')
    @include('Customer.components.Navbar')
@endsection
@section('Footer')
    @include('Customer.components.Footer')
@endsection

<!-- Include CSS file -->
<link rel="stylesheet" href="{{ url('resources/css/availability.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="icon" href="resources/dist/img/adminLogo.jpg">
<body>
    <!--================Header Area =================-->
    @yield('Navbar')

    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/banner.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
        <div class="section__container header__container">
            <h1>Details Room</h1>
        </div>
    </header>
    <!--================Header Area =================-->

    <div class="container mt-5">
        <div class="row">
            <!-- Carousel for Room Images -->
            <div class="col-md-6">
                <div id="roomCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('public/room/room-1.jpg') }}" class="d-block w-100" alt="Room Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('public/room/room-2.jpg') }}" class="d-block w-100" alt="Room Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('public/room/room-3.jpg') }}" class="d-block w-100" alt="Room Image 3">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Room Details -->
            <div class="col-md-6">
                <h3 class="mb-3">Deluxe Single/Double Room with Pool and Seaview</h3>
                <!--<p class="mb-4">Escape to our luxurious 40m² deluxe room, offering a spacious and inviting patio with breathtaking views of both the sparkling pool and the serene sea. Perfect for couples seeking a romantic getaway or solo travelers desiring a touch of indulgence.</p>-->

                <div class="mt-4">
                    <h4 class="mb-2">Price: <span class="text-primary font-weight-bold">1,500 Per Night</span></h4>
                    <!--<p class="mb-3">Indulge in a memorable stay at an exceptional value.</p>-->
                    <button class="btn btn-primary mt-3" onclick="location.href='{{ route('Cart') }}'">Book Your Escape Now</button>
                </div>
            </div>
        </div>

        <!-- Room Amenities Section with Professional Look -->
        <div class="container mt-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-center">Experience Unmatched Comfort and Convenience</h4>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <p><i class="fas fa-users"></i> Maximum Occupancy: 2 Guests</p>
                        </div>
                       
                        <div class="col-md-3">
                            <p><i class="fas fa-bed"></i> Comfortable King-Size Bed</p>
                        </div>
                     <div class="col-md-3">
                             <p><i class="fas fa-utensils"></i> Complimentary Breakfast Included</p>
                        </div>
                        <div class="col-md-3">
                            <p><i class="fas fa-wind"></i>  Air Conditioning</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<br><br>
    <!--================ Start Footer Area  =================-->
    @yield('Footer')
    <!--================ End Footer Area  =================-->

    <!-- Bootstrap JS (for carousel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>