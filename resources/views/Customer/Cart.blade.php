@extends('Customer.layout.app')

@section('Navbar')
    @include('Customer.components.Navbar')
@endsection

@section('Footer')
    @include('Customer.components.Footer')
@endsection

<link rel="stylesheet" href="{{ url('resources/css/cart.css') }}">
<link rel="icon" href="resources/dist/img/adminLogo.jpg">
<body>
    <!--================Header Area =================-->
    @yield('Navbar')
    
    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/backg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
    <div class="section__container header__container">
        <h1>CART</h1>
    </div>
    </header>
    <!--================Header Area =================-->

    <!--================Cart Area =================-->
    <div class="cart-container">
    
        <table class="cart-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Room Name & Details</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>
                        <div class="room-details">
                            <img src="public/room/room-1.jpg" alt="Room Image">
                            <div class="room-info">
                                <h3>Deluxe Single/Double Room with Pool and Seaview</h3>
                                <p>Sleeps 2 | Pool Access | Free Wifi | Complimentary Breakfast</p>
                            </div>
                        </div>
                    </td>
                    <td>$57.55</td>
                    <td>$115.10</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>
                        <div class="room-details">
                            <img src="public/room/room-2.jpg" alt="Room Image">
                            <div class="room-info">
                                <h3>Deluxe Single/Double Room with Pool</h3>
                                <p>Sleeps 2 | Pool Access | Free Wifi | Complimentary Breakfast</p>
                            </div>
                        </div>
                    </td>
                    <td>$1049.00</td>
                    <td>$1049.00</td>
                </tr>
            </tbody>
        </table>

        <div class="cart-actions">
            <button onclick="window.location.href='{{ url('shop') }}'">Back to shopping</button>
            <button type="button" onclick="window.location.href='{{ route('Book') }}'" class="btn btn-lg btn-primary mt-2">Checkout</button>
        </div>
    </div>
    <!--================ End Cart Area =================-->

    <!--================ Start footer Area  =================-->
    @yield('Footer')
    <!--================ End footer Area  =================-->
</body>
