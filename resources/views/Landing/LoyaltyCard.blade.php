@extends('Landing.layout.app')
@section('Navbar')
@include('Landing.components.Navbar')
@endsection
@section('Footer')
@include('Landing.components.Footer')
@endsection

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .card-container {
            background-color: #ffffff;
            width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            color: #333;
            position: relative;
            overflow: hidden;
        }
        .card-header {
            background-color: #0a285f;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .card-header h2 {
            font-size: 1.5em;
            margin: 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-body h1 {
            font-size: 2em;
            color: #0a285f;
            margin-bottom: 10px;
        }
        .card-body h3 {
            font-size: 1em;
            color: #777;
            margin-bottom: 20px;
        }
        .contact-info {
            margin: 20px 0;
        }
        .contact-info div {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .contact-info div img {
            width: 20px;
            margin-right: 10px;
        }
        .contact-info a {
            color: #0a285f;
            text-decoration: none;
        }
        .background-shape {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(10, 40, 95, 0.2);
            height: 100%;
            width: 100%;
            z-index: -1;
            clip-path: polygon(0 0, 50% 0, 100% 100%, 0% 100%);
        }
    </style>

<body>
    <!--================Navigation Area =================-->
    @yield('Navbar')

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Profile</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Card</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
    <div class="card-container">
        <div class="background-shape"></div>
        <div class="card-header">
            <h2>Ginyard International Co.</h2>
        </div>
        <div class="card-body">
            <h1>Avery Davis</h1>
            <h3>General Manager</h3>
            <div class="contact-info">
                <div><img src="phone-icon.png" alt="phone"> +123-456-7890</div>
                <div><img src="website-icon.png" alt="website"> <a href="https://www.reallygreatsite.com">www.reallygreatsite.com</a></div>
                <div><img src="email-icon.png" alt="email"> <a href="mailto:hello@reallygreatsite.com">hello@reallygreatsite.com</a></div>
                <div><img src="location-icon.png" alt="location"> 123 Anywhere St., Any City</div>
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
