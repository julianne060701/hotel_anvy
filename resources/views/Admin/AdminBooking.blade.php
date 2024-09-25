@extends('Admin.layout.app')

@section('title', 'Admin Anvy')

@section('Navbar')
    @include('Admin.components.Navbar')
@endsection

@section('Sidebar')
    @include('Admin.components.Sidebar')
@endsection

@section('Module', 'Booking Management Module')
@section('Header','Booking Data')
@section('Details', 'User')

@section('Content')




@endsection

@section('Footer')
    @include('Admin.components.Footer')
@endsection

<script src="resources/plugins/moment/moment.min.js"></script>
<script src="resources/plugins/fullcalendar/main.js"></script>
@section('scripts')
<script>
  $('#adminbooking').addClass('menu-open');
  $('#adminbooking').addClass('active');
</script>
<script src='resources/js/usermanagement.js'></script>
@endsection
