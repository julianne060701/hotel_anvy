@extends('Landing.layout.app')
@section('Navbar')
@include('Landing.components.Navbar')
@endsection
@section('Footer')
@include('Landing.components.Footer')
@endsection

<body>
    <!--================Navigations Area =================-->
    @yield('Navbar')
    <style>
        .room__card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    transition: all 0.3s ease;
}
    </style>
    <!--================Navigations Area =================-->
<br><br><br>
    <!--================ Accommodation Area  =================-->
    <section class="section__container room__container" id="room">
        <div class="room__header">
            <h2 class="section__header">Room and Suites</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
        </div>
        <div class="room__grid">
            <!-- Room Card 1 -->
            <div class="room__card">
                <img src="public/images/rooms/room1.jpg" alt="Junior Suite">
                <div class="room__details">
                    <h5 class="card-title">Junior Suite</h5>
                    <p><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2 Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                    <h5>₱250<small>/night</small></h5>
                    <div class="room__actions">
                        <a href="#" class="btn btn-primary">View Detail</a>
                        <a href="#" class="btn btn-secondary">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Room Card 2 -->
            <div class="room__card">
                <img src="public/images/rooms/room2.jpg" alt="Executive Suite">
                <div class="room__details">
                    <h5 class="card-title">Junior Suite</h5>
                    <p class="card-text"><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2 Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                    <h5>₱250<small>/night</small></h5>
                    <div class="room__actions">
                        <a href="#" class="btn btn-primary">View Detail</a>
                        <a href="#" class="btn btn-secondary">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Room Card 3 -->
            <div class="room__card">
                <img src="public/images/rooms/room1.jpg" alt="Super Deluxe">
                <div class="room__details">
                    <h5 class="card-title">Junior Suite</h5>
                    <p><i class="fa fa-bed"></i> 3 Bed &nbsp; <i class="fa fa-bath"></i> 2 Bath &nbsp; <i class="fa fa-wifi"></i> Wifi</p>
                    <h5>₱250<small>/night</small></h5>
                    <div class="room__actions">
                        <a href="#" class="btn btn-primary">View Detail</a>
                        <a href="#" class="btn btn-secondary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accommodation Area  =================-->

    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->

</body>
</html>
