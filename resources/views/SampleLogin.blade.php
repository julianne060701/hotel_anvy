@section('Navbar')
    @include('Customer.components.Navbar')
@endsection
@section('Footer')
    @include('Customer.components.Footer')
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>Anvy Resort Hotel</title>
    <!-- <style>
        body {
            background-image: url('public/images/login1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style> -->
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">\
        @yield('Navbar')

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-image: url('public/images/welcome.jpg'); background-size:cover;">
                <div class="featured-image mb-3">
                    <!-- <img src="img/background1.jpg" class="img-fluid" style="width: 250px;"> -->
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Anvy Resort Hotel</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Relax Your Mind</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello!</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    
                    <form id="formAuthentication" method="POST" action="{{route('loginPost')}}">
                    @csrf

                        <div class="input-group mb-3">
                            <input input type="email" id="email" name="email" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email">
                        </div>
                        <div class="input-group mb-1">
                            <input input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Login
                            </button>
                        </div>
                        <!-- <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div> -->
                        <div class="row">
                            <small>Don't have an account? <a href="#">Sign Up</a></small>
                        </div>
                    </form>

                    <!--This is where the errors from AuthController will reflect or displayed-->
                    @if ($errors -> any())
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

</body>
</html>
