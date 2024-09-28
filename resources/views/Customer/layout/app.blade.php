<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Anvy Resort Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- other CS -->
    <link rel="stylesheet" href="resources/vendors/linericon/style.css">
    <link rel="stylesheet" href="resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="resources/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="resources/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('resources/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('resources/css/index.css') }}">

</head>
    <style>
        body {
            background-color: #f0f4f8;
        }

        .booking-form {
            background-color: #1a1a2e;
            padding: 30px;
            color: #fff;
            margin-bottom: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .booking-form h3 {
            color: #f9f9f9;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .booking-form .form-control {
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .check-btn {
            background-color: #ffb400;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px 24px;
        }

        .check-btn:hover {
            background-color: #e6a100;
        }

        .room-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .room-image img {
            width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .room-info {
            padding-left: 20px;
        }

        .room-title {
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .room-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffb400;
        }

        .booking-button {
            background-color: #ffb400;
            color: #fff;
            font-weight: bold;
            margin-top: 10px;
            border-radius: 8px;
        }

        .booking-button:hover {
            background-color: #e6a100;
        }

        /*=========== breadcrumb_area css =============*/
        .breadcrumb_area {
            position: relative;
            padding: 172px 0px 84px;
            background: #0099ff;
            z-index: 1;
            overflow: hidden;
        }

        .breadcrumb_area .bg-parallax {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('public/images/nav.jpg') no-repeat center center;
            background-size: cover;
            opacity: 0.80;
            z-index: -1;
        }
    </style>
</head>
    <!-- Scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="resources/js/jquery-3.2.1.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/stellar.js"></script>
    <script src="resources/js/jquery.ajaxchimp.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="resources/js/popper.js"></script>
    <script src="resources/vendors/owl-carousel/owl.carousel.min.js"></script></script>
<script src="resources/vendors/owl-carousel/owl.carousel.min.js"></script></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9/UABIMIIRRLP/XN44jW59Pq+EKxb61rPrBja"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/js/bootstrap-datetimepicker.min.js"></script>
