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
        <button class="btn btn-primary" data-bs-toggle="modal" id="add_btn" data-bs-target="#addMenuModal" style="width: 15%" id="add_btn">Add New Menu</button>
        </div>

        <!-- Menu  Table -->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name of Food</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Beef Kare-Kare</td>
                    <td>Lami siya</td>
                    <td>565</td>
                    <td>Not Available</td>
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
                    <td></td>
                    <td>Garlic Chicken</td>
                    <td>Bet nako ni Gi gutom ko</td>
                    <td>460</td>
                    <td>Available</td>
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

         <!-- Add Modal -->
         <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Add New Menu Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form id="MenuAddForm">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="nameFood" class="form-label">Name of Food</label>
                                    <input type="text" class="form-control" id="nameFood" name="nameFood" required>
                                </div>
                                <div class="col-6">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" rows="4" class="form-control" placeholder="Write your Description here..." required></textarea>
                            </div>                          
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Available">Available</option>
                                        <option value="Booked">Booked</option>
                                    </select>
                                </div>
                            <div class="col-6">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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


<script src='resources/js/Menu.js'></script>
@endsection
