@extends('layout.app')
@section('title', 'NEIL')
@section('Navbar')
    @include('components.Navbar')
@endsection
@section('Sidebar')
    @include('components.Sidebar')
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
    @include('components.Footer')
@endsection
