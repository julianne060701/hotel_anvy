@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Anvy Resort Hotel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

    <!-- main css -->
    <!-- <style> {{ file_get_contents(public_path('css/style.css')) }} </style> -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
</head>

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
                    <a href="#" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Book<br> Your Room</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <!-- Calendar for Arrival and Departure -->
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Arrival Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Departure Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of Adults, Children, and Babies -->
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option value="" disabled selected>Select Adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4+</option>
                                            </select>
                                        </div>
                                        <div class="input-group mt-3">
                                            <select class="form-control">
                                                <option value="" disabled selected>Select Children</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- Number of Rooms -->
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <input type="number" class="form-control" min="1"
                                                placeholder="Number of Rooms" />
                                        </div>
                                        <a class="book_now_btn button_hover mt-3" href="#">Check Availabilty</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="col-lg-3 col-sm-6">
                <div class="accommodation_item text-center">
                    <div class="hotel_img">
                        <img src="public/images/rooms/room1.jpg" alt="Double Deluxe Room">
                        <a href="#" class="btn theme_btn button_hover">See Details</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Double Deluxe Room</h4>
                    </a>
                    <h5>$250<small>/night</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accommodation_item text-center">
                    <div class="hotel_img">
                        <img src="public/images/rooms/room2.jpg" alt="Single Deluxe Room">
                        <a href="#" class="btn theme_btn button_hover">See Details  </a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Single Deluxe Room</h4>
                    </a>
                    <h5>$200<small>/night</small></h5>
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
                            <h5>$250</h5>
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
                            <h5>$250</h5>
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
                            <h5>$250</h5>
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
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Events</h2>
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
    <!--================ Facilities Area  =================-->

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
                        ensuring every piece perfectly suits your style and space. Our journey started with a vision to 
                        revolutionize the way people experience furniture shopping. Over the years, we've evolved, 
                        adapting to modern trends while maintaining our core values of integrity, quality, and craftsmanship.
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
    <section class="testimonial_area section_gap">
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
    </section>
    <!--================ Testimonial Area  =================-->



    <!--================ start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Required JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9/UABIMIIRRLP/XN44jW59Pq+EKxb61rPrBja"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/js/bootstrap-datetimepicker.min.js"></script>

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