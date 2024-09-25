@extends('Admin.layout.app')

@section('title', 'Admin Anvy')

@section('Navbar')
@include('Admin.components.Navbar')
@endsection

@section('Sidebar')
@include('Admin.components.Sidebar')
@endsection

@section('Module', 'Room Management Module')
@section('Header', 'Room Data')
@section('Details', 'User')

@section('Content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" id="add_btn" data-bs-target="#addRoomModal">Add
                Room</a>

        </div>

        <!-- Room  Table -->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Capacity</th>
                    <th>Price per Night</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>Deluxe</td>
                    <td>2</td>
                    <td>$120</td>
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
                <tr>
                    <td>102</td>
                    <td>Suite</td>
                    <td>4</td>
                    <td>$200</td>
                    <td>Booked</td>
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


        <!-- Add Room Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="UserAddForm">
                            <div class="row">
                                <div class="col-6">
                                    <label for="roomNumber" class="form-label">Room Number</label>
                                    <input type="text" class="form-control" id="roomNumber" name="room_number" required>
                                </div>
                                <div class="col-6">
                                    <label for="roomType" class="form-label">Room Type</label>
                                    <input type="text" class="form-control" id="roomType" name="room_type" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="capacity" class="form-label">Capacity</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity" required>
                                </div>
                                <div class="col-6">
                                    <label for="price" class="form-label">Price per Night</label>
                                    <input type="text" class="form-control" id="price" name="price_per_night" required>
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

                            </div>
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
    $('#rooms').addClass('menu-open');
    $('#room').addClass('active');
</script>


<script src='resources/js/usermanagement.js'></script>
@endsection