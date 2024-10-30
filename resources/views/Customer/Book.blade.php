@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection
<link rel="icon" href="resources/dist/img/adminLogo.jpg">

<link rel="stylesheet" href="{{ url('resources/css/booking.css') }}">
<style>
  
</style>

<body>
    <!--================Navigation Area =================-->
    @yield('Navbar')

    <!--================Breadcrumb Area =================-->
    <header class="header" id="home"
        style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/backg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
        <div class="section__container header__container">
            <h1>Reserve</h1>
        </div>
    </header>
    <!--================Breadcrumb Area =================-->
    <div class="container2 d-flex">
    <div class="form-section">
 
    <div class="section2-header">
    <i class="bx bxs-user"></i>
        <span class="section2-title">Guest Information</span>
    </div>
    
    <div class="form2-group">
        <label for="name">First Name</label>
        <input type="text" id="name" placeholder="Enter your first name" required>
    </div>
    
    <div class="form2-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" placeholder="Enter your last name" required>
    </div>

    <div class="form2-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email" required>
    </div>

    <div class="form2-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" placeholder="Enter your phone number" required>
    </div>

    <div class="section2-header">
        <i class="bx bxs-calendar"></i>
        <span class="section2-title">Reservation Details</span>
    </div>

    <div class="form2-group">
        <label for="checkin-date">Check-In Date</label>
        <input type="date" id="checkin-date" required>
    </div>
    
    <div class="form2-group">
        <label for="checkout-date">Check-Out Date</label>
        <input type="date" id="checkout-date" required>
    </div>

    <div class="form2-group">
        <label for="guests">Number of Guests</label>
        <input type="number" id="guests" min="1" placeholder="Enter number of guests" required>
    </div>

    <div class="form2-group">
        <label for="loyalty">Loyalty Card</label>
        <input type="text" id="loyalty" placeholder="Enter your Loyalty Card">
    </div>

    <div class="section2-header">
        <i class="bx bxs-cog"></i>
        <span class="section2-title">Additional Options</span>
    </div>

    <div class="form2-group full-width">
        <label for="addonsSelect">Add-ons</label>
        <select id="addonsSelect">
            <option value="">Select an add-on</option>
            <option value="0">Food</option>
        </select>
    </div>

    <div class="form2-group full-width">
        <label for="requests">Special Requests</label>
        <textarea id="requests" rows="3" placeholder="Any special requests?"></textarea>
    </div>

</div>


   
    <div class="order-summary">
        <h3>Order Summary</h3>
        <p>Item 1: $100</p>
        <p>Item 2: $200</p>
        <p>Total: $300</p>

       
        <div class="button-container2">
        <button type="submit" class="btn-submit">Book Now</button>
        </div>
    </div>
</div>

    @yield('Footer')


</body>

</html>