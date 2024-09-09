@extends('Admin.layout.app')
@section('title', 'NEIL')
@section('Navbar')
    @include('Admin.components.Navbar')
@endsection
@section('Sidebar')
    @include('Admin.components.Sidebar')
@endsection

@section('Content')

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1>Hello!</h1>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1>World!</h1>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('Footer')
    @include('Admin.components.Footer')
@endsection
