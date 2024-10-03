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
                <h2 class="title_color">Room and Suites</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accommodation_item text-center">
                        <div class="hotel_img">
                            <img src="public/images/rooms/room1.jpg" alt="Double Deluxe Room">
                            <a href="#" class="btn theme_btn button_hover">See Details</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>₱250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accommodation_item text-center">
                        <div class="hotel_img">
                            <img src="public/images/rooms/room2.jpg" alt="Single Deluxe Room">
                            <a href="#" class="btn theme_btn button_hover">See Details </a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>₱200<small>/night</small></h5>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>