@extends('Admin.layout.app')

@section('title', 'Rooms')

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
            <button type="button" class="btn btn-primary" id="add_btn" data-bs-toggle="modal"
                data-bs-target="#addRoomModal">
                Add New Room
            </button>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th> 
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Bed</th>
                    <th>Capacity</th>
                    <th>Price per Night</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th class="d-none">ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Room as $r)
                <tr class="text-center">
                    <td>
                        @if($r->room_image)
                            <img src="{{ asset('public/upload/' . $r->room_image) }}" alt="Room Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $r->room_number }}</td>
                    <td>{{ $r->room_type }}</td>
                    <td>{{ $r->getBedType->type }}</td>
                    <td>{{ $r->capacity }}</td>
                    <td>{{ $r->rate }}</td>  
                    <td>{{ $r->Status }}</td>
                    <td>
                        <button class="btn btn-sm btn-info" id="view_btn"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-primary btnView"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-sm btn-danger btnArchive"><i class="bi bi-trash"></i></button>
                    </td>
                    <td class="d-none">{{ $r->id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Room Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Add New Room</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="UserAddForm">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="room_number" class="form-label">Room Number</label>
                                    <input type="text" class="form-control" id="room_number" name="room_number" required>
                                </div>
                                <!-- Multiple select dapat dari -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="room_type" class="form-label">Room Type</label>
                                    <input type="text" class="form-control" id="room_type" name="room_type" required>
                                </div>
                                <div class="col-6">
                                    <label for="capacity" class="form-label">Capacity</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="rate" class="form-label">Price per Night</label>
                                    <input type="text" class="form-control" id="rate" name="rate" required>
                                </div>
                                <div class="col-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Available">Available</option>
                                        <option value="Booked">Booked</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" id="room_image" name="room_image" accept="image/*"
                                        required>
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

        <!-- Edit Room Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="modalEditLabel">Edit Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="RoomEditForm">
                    @csrf
                    <input type="hidden" id="id_1" name="id">
                    <div class="row">
                        <div class="col-6">
                            <label for="room_number" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="room_number" name="room_number" required>
                        </div>
                        <div class="col-6">
                            <label for="room_type" class="form-label">Room Type</label>
                            <input type="text" class="form-control" id="room_type" name="room_type" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" required>
                        </div>
                        <div class="col-6">
                            <label for="rate" class="form-label">Price per Night</label>
                            <input type="number" class="form-control" id="rate" name="rate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                                <option value="Booked">Booked</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="bed_type" class="form-label">Bed Type</label>
                            <input type="text" class="form-control" id="bed_type" name="bed_type" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="room_image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="room_image" name="room_image" accept="image/*">
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

        <!-- Archive Modal -->
        <div class="modal fade" id="modalArchive" tabindex="-1" role="dialog" aria-labelledby="modalArchiveLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="id">Archive Room Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="RoomArchiveForm">
                            @csrf
                            <div class="text-center">
                                <input class="d-none" id="archiveRoomId" name="id">
                                <h5>Are you sure you want to archive this room?</h5>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Yes, Archive</button>
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
<script src='resources/js/Room.js'></script>
@endsection