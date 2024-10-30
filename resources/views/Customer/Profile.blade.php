@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection
<link rel="icon" href="resources/dist/img/adminLogo.jpg">
<link rel="stylesheet" href="{{ url('resources/css/profile.css') }}">
<body>

    <!--================Header Area =================-->
    @yield('Navbar')
    
    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/banner.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
        <div class="section__container header__container">
            <h1>Profile</h1>
        </div>
    </header>
    <!--================Header Area =================-->
    <div class="container1">
        <div class="main-body1">
            <div class="container1-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav2 nav2-borders">
                    <a class="nav2-link active ms-0" href="#">Profile</a>
                    <a class="nav2-link" href="#">Billing</a>
                    <a class="nav2-link" href="{{route('LoyaltyCard')}}">Loyalty Card</a>
                    <a class="nav2-link" href="#">Notifications</a>
                </nav>
                <hr class="mt-0 mb-4">
                
                <!-- Flexbox container for profile picture and account details -->
                <div class="profile-container">
                    <div class="col-left">
                        <!-- Profile picture card-->
                        <div class="card1 mb-4 mb-xl-0">
                            <div class="card1-header1">Profile Picture</div>
                            <div class="card1-body text-center">
                                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <button class="btn btn-primary" type="button">Upload new image</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <!-- Account details card-->
                        <div class="card1 mb-4">
                            <div class="card1-header1">Account Details</div>
                            <div class="card1-body1">
                                <form>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{$user_info['email']}}" readonly>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First name</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{$user_credentials['fname']}}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last name</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="{{$user_credentials['lname']}}" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value={{$user_info['email']}} readonly>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Enter your password" value="*****" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                            <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Confirm your password" value="*****" readonly>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of profile-container -->
            </div>
        </div>
    </div>

    @yield('Footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>
