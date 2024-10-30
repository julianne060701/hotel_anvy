@extends('Admin.layout.app')
@section('title', 'Admin Anvy')
@section('Navbar')
    @include('Admin.components.Navbar')
@endsection
@section('Sidebar')
    @include('Admin.components.Sidebar')
@endsection

@section('Module', 'Defaut')
@section('Header','Default')
@section('Details', 'Blank')

@section('Content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>Blank!</h1>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        $('#Blank_B').addClass('active')
    </script>
@endsection

@section('Footer')
    @include('Admin.components.Footer')
@endsection
