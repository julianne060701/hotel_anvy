@extends('Customer.layout.app')
@section('Navbar')
@include('Customer.components.Navbar')
@endsection
@section('Footer')
@include('Customer.components.Footer')
@endsection

<body>
    <!--================Navigation Area =================-->
    @yield('Navbar')

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Cart</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <div class="container">
    <div class="main-body">
    
    <div class="container px-3 my-5 clearfix">
    <!--  cart table -->
    <div class="card">
        <div class="card-header">
            <h2> Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered m-0">
  <thead>
    <tr>
      <!-- Set columns width -->
      <th class="text-center align-middle py-3 px-0" style="width: 40px;">
        <a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart">
          <i class="ino ion-md-trash"></i>
        </a>
      </th>
      <th class="text-center py-3 px-4" style="min-width: 400px;">Room Name &amp; Details</th>
      <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
      <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center align-middle px-0">
        <input type="checkbox">
      </td>
      <td class="p-4">
        <div class="media align-items-center">
          <img src="public/images/rooms/room2.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="">
          <div class="media-body">
            <h3>Deluxe Single/Double Room with Pool and Seaview</h3>
            <p>Sleeps 2    Pool Access    Free Wifi    Complimentary Breakfast</p>
          </div>
        </div>
      </td>
      <td class="text-right font-weight-semibold align-middle p-4">$57.55</td>
      <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
    </tr>

    <tr>
      <td class="text-center align-middle px-0">
        <input type="checkbox">
      </td>
      <td class="p-4">
        <div class="media align-items-center">
          <img src="public/images/rooms/room1.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="">
          <div class="media-body">
            <h3>Deluxe Single/Double Room with Pool</h3>
            <p>Sleeps 2    Pool Access    Free Wifi    Complimentary Breakfast</p>
          </div>
        </div>
      </td>
      <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
      <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
    </tr>
  </tbody>
</table>

            </div>
            <!-- /  cart table -->
  
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <button type="button" onclick="window.location.href='{{ route('Book') }}'" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
    
  

        </div>
    </div>
    @yield('Footer')

</body>

</html>
