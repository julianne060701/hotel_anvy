@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection


<body>
    <!--================Header Area =================-->
    @yield('Navbar')
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area"
        style="background-image: url(public/images/banner.jpg); background-repeat: no-repeat; background-size: cover;">
        <!-- <img src="public/images/banner.jpg" alt="image"> -->
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Relax Your Mind</h6>
                    <h2>Anvy Resort Hotel</h2>
                    <p>Discover the Beauty of Anvy Resort Hotel</p>
                    <!-- <a href="#" class="btn theme_btn button_hover">Get Started</a> -->
                </div>
            </div>
        </div>
        <!-- Room Booking Form -->
        <div class="booking-form text-center">
            <h3>BOOK YOUR ROOM</h3>
            <form class="form-inline justify-content-center align-items-center">
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
                <div class="d-flex align-items-center">
                    <select class="form-control mr-2">
                        <option selected>Number of Rooms</option>
                        <option value="1">1 Room</option>
                        <option value="2">2 Rooms</option>
                    </select>
                    <button class="book_now_btn button_hover btn" type="button"
                        onclick="location.href='{{ route('Availability') }}'">
                        Check Availability
                    </button>
                    
                </div>
            </form>


        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Welcome Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Welcome to Any Resort Hotel</h2>
                        <p>Now that your're here, let's get started. Let us help you create unforgettable memories.
                            Whether you seek relaxation by the pool, adventure in our surrounding nature, or culinary
                            delights in our exquisite restaurants, we're here to cater to your every need.
                        </p>
                        <!-- <a href="#" class="button_hover theme_btn_two">Request Custom Price</a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="public/images/welcome.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ Welcome Area  =================-->
<!--================ Accommodation Area  =================-->
<section class="accommodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Room and Suites</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-sm-6">
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
            <div class="col-lg-4 col-sm-6">
                <div class="accommodation_item text-center">
                    <div class="hotel_img">
                        <img src="public/images/rooms/room2.jpg" alt="Single Deluxe Room">
                        <a href="#" class="btn theme_btn button_hover">See Details</a>
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


    <!--================ Menu Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">From our Menus</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="menu-img img-fluid" src="public/images/menus/menu1.jpg" alt="post">
                        </div>
                        <div class="details text-center">
                            <h5>₱250</h5>
                            <a href="#">
                                <h4 class="sec_h4">idk Salad</h4>
                            </a>
                            <a href="#" class="btn theme_btn button_hover">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="menu-img img-fluid" src="public/images/menus/menu2.jpg" alt="post">
                        </div>
                        <div class="details text-center">
                            <h5>₱250</h5>
                            <a href="#">
                                <h4 class="sec_h4">Cheezy Burger</h4>
                            </a>
                            <a href="#" class="btn theme_btn button_hover">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="menu-img img-fluid" src="public/images/menus/menu3.jpg" alt="post">
                        </div>
                        <div class="details text-center">
                            <h5>₱250</h5>
                            <a href="#">
                                <h4 class="sec_h4">Toast</h4>
                            </a>
                            <a href="#" class="btn theme_btn button_hover">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Menu Area  =================-->

    <!--================ Events Area  =================-->

    

    <!--================ Events Area  =================-->

    <!--================ facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Our Amenities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i> Restaurant</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i> Sports Club</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i> Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i> Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i> Gymnasium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i> Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--================ Facilities Area  =================-->
   <!--================ Event Area  =================-->
<div class="event-title-wrapper text-center">
  <h2 class="title_color">From our Events</h2>
</div>

<div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <!-- Carousel Inner -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/rooms/wedding.jpg" class="d-block w-100" alt="Event Image 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Event 1</h5>
        <p>Description of Event 1.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/images/rooms/event2.jpg" class="d-block w-100" alt="Event Image 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Event 2</h5>
        <p>Description of Event 2.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/images/rooms/event3.jpg" class="d-block w-100" alt="Event Image 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Event 3</h5>
        <p>Description of Event 3.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--================ Event Area  =================-->


    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content Section -->
                <div class="col-lg-6 col-md-12">
                    <div class="about_content">
                        <h2 class="title title_color">About Us <br> Our History <br> Mission & Vision</h2>
                        <p>
                            We believe in delivering high-quality furniture with a focus on customization,
                            ensuring every piece perfectly suits your style and space. Our journey started with a vision
                            to
                            revolutionize the way people experience furniture shopping. Over the years, we've evolved,
                            adapting to modern trends while maintaining our core values of integrity, quality, and
                            craftsmanship.
                        </p>
                        <a href="#" class="button_hover theme_btn_two">Read More</a>
                    </div>
                </div>

                <!-- About Image Section -->
                <div class="col-lg-6 col-md-12">
                    <div class="about_image">
                        <img class="img-fluid rounded shadow-lg" src="public/images/about.jpg" alt="About Us Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->


    <!--================ Testimonial Area  =================-->
    <!-- <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="public/images/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                            you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--================ Testimonial Area  =================-->



    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->


    <!-- Required JavaScript -->
 

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker11').datetimepicker({
                format: 'L'
            });
            $('#datetimepicker1').datetimepicker({
                format: 'L'
            });
        });
    </script>
</body>

</html>