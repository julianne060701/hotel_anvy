@extends('Landing.layout.app')
@section('Navbar')
@include('Landing.components.Navbar')
@endsection
@section('Footer')
@include('Landing.components.Footer')
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
 
</style>
<body>
    <!--================Navigation Area =================-->
    @yield('Navbar')

    <!--================Breadcrumb Area =================-->
    <header class="header" id="home" style="background-image: linear-gradient(
      rgba(15, 26, 44, 0.5),
      rgba(15, 26, 44, 0.5)
    ), url('public/images/backg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; padding-block: 5rem;">
    <div class="section__container header__container">
        <h1>Reseve</h1>
    </div>
    </header>
    <!--================Breadcrumb Area =================-->

    <!-- Main Form Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Reservation Form Section -->
            <div class="col-md-8">
                <div class="booking-form p-5">
                    <h1>Reservation Form</h1>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h2>Check-In</h2>
                                <input type="date" class="form-control" placeholder="Check-In">
                            </div>
                            <div class="form-group col-md-6">
                                <h2>Check-Out</h2>
                                <input type="date" class="form-control" placeholder="Check-Out">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option value="">Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option value="">Children</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Type of Room">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="addonsSelect">
                                    <option value="">Add-ons</option>
                                    <option value="0">Food</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Loyalty Number (if any)">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Special Requests or Notes" rows="4"></textarea>
                        </div>
                        <a href="{{ route('Book') }}" class="btn booking-button">Next</a>
                    </form>
                </div>
            </div>

            <!-- Order Summary Section -->
            <div class="col-md-4">
                <div class="order-summary p-4" style="background-color: #6c757d; color: white; border-radius: 10px;">
                    <h2>Order Summary</h2>
                    <p><strong>#1111</strong></p>
                    <p>Type of Room: Deluxe Room</p>
                    <p>Price: ₱1200</p>
                    <hr>
                    <p><strong>Total: ₱1120</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Food Menu Modal -->
    <div class="modal fade" id="foodMenuModal" tabindex="-1" role="dialog" aria-labelledby="foodMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="foodMenuModalLabel">Food Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Pasta - ₱125</li>
                        <li>Pizza - ₱153</li>
                        <li>Burger - ₱100</li>
                        <li>Salad - ₱87</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add to Order</button>
                </div>
            </div>
        </div>
    </div>

    @yield('Footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addOnsSelect = document.getElementById('addonsSelect');
            addOnsSelect.addEventListener('change', function () {
                if (this.value === "0") {
                    $('#foodMenuModal').modal('show');
                }
            });
        });
    </script>
</body>

</html>
