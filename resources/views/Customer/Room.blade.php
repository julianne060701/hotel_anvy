@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection

@section('Content')
<link rel="icon" href="resources/dist/img/adminLogo.jpg">
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
            <h2 class="section__header">Room Accomodations</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
        </div>
        
        <div class="room__grid">
            @foreach ($Room as $r)
                <div class="room__card">
                   
                    @if($r->room_image)
                        <img src="{{ asset('public/upload/' . $r->room_image) }}" alt="Room Image">
                    @else
                        No Image
                    @endif
                    <div class="room__details">
                        <h5 class="card-title">{{ $r->room_type }}</h5>
                        <p><i class="fa fa-bed"></i> {{ $r->getBedType->type }} Bed &nbsp; 
                           <i class="fa fa-user"></i> {{ $r->capacity }} Guest &nbsp;
                           <i class="fa fa-bath"></i> 1 Toilet</p>
                        <h5>₱{{ $r->rate }}<small>/night</small></h5>
                        <div class="room__actions">
                            <a href="#" class="btn btn-primary">View Detail</a>
                            <a href="#" class="btn btn-secondary">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
       
    </section>
    <!--================ Accommodation Area  =================-->

    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->

</body>
</html>
