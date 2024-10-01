@extends('Admin.layout.app')

@section('title', 'Admin Anvy')

@section('Navbar')
    @include('Admin.components.Navbar')
@endsection

@section('Sidebar')
    @include('Admin.components.Sidebar')
@endsection

@section('Module', 'Menu Management Module')
@section('Header','Menu Data')
@section('Details', 'User')

@section('Content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-primary">Add Menu</a>
        </div>

        <!-- Menu  Table -->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Birthdate</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td>4</td>
                    <td>

                        <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-pen"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-pen"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection


@section('Footer')
    @include('Admin.components.Footer')
@endsection


@section('scripts')
<script>
  $('#adminmenu').addClass('menu-open');
  $('#adminmenu').addClass('active');
</script>


<script src='resources/js/usermanagement.js'></script>
@endsection
