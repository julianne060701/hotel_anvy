@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection

<body>
    <!--================Navigations Area =================-->
    @yield('Navbar')
    <!--================Navigations Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Accommodation</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Accommodation</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accommodation Area  =================-->
    <section class="accommodation_area section_gap">
        <div class="container">
        <div class="section_title text-center">
    <h2 class="title_bold">Room and Suites</h2>
    <p class="subtext">We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
</div>


            <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card accommodation_item" data-wow-delay="0.1s">
                        <img src="public/images/rooms/room1.jpg" class="card-img-top" alt="Double Deluxe Room">
                        <div class="card-body text-center">
                            <h5 class="card-title">Junior Suite</h5>
                            <p class="card-text"><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2
                                Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                            <h5>₱250<small>/night</small></h5>
                            <a href="#" class="btn btn-primary">View Detail</a>
                            <a href="#" class="btn btn-secondary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card accommodation_item" data-wow-delay="0.1s">
                        <img src="public/images/rooms/room2.jpg" class="card-img-top" alt="Single Deluxe Room">
                        <div class="card-body text-center">
                            <h5 class="card-title">Executive Suite</h5>
                            <p class="card-text"><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2
                                Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                            <h5>₱200<small>/night</small></h5>
                            <a href="#" class="btn btn-primary">View Detail</a>
                            <a href="#" class="btn btn-secondary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 " data-wow-delay="0.1s">
                    <div class="card accommodation_item">
                        <img src="public/images/rooms/event3.jpg" class="card-img-top" alt="Super Deluxe Room">
                        <div class="card-body text-center">
                            <h5 class="card-title">Super Deluxe</h5>
                            <p class="card-text"><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2
                                Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                            <h5>₱300<small>/night</small></h5>
                            <a href="#" class="btn btn-primary">View Detail</a>
                            <a href="#" class="btn btn-secondary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accommodation Area  =================-->

    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>