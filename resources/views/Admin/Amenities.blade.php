@extends('Admin.layout.app')

@section('title', 'Amenities')

@section('Navbar')
@include('Admin.components.Navbar')
@endsection

@section('Sidebar')
@include('Admin.components.Sidebar')
@endsection

@section('Module', 'Amenities Management Module')
@section('Header', 'Amenities Data')
@section('Details', 'Room')

@section('Content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" id="add_btn" data-bs-target="#addRoomModal" style="width: 15%" id="add_btn">Add New</button>
        </div>

         <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Amenity</th>
                    <th>Date Added</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th class="d-none">ID</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($Amenity as $a)
                <tr class="text-center">
                    <td>{{$a->amenity}}</td>
                    <td>{{$a->created_at}}</td>
                    <td>{{$a->status}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary btnView" id="edit_btn"><i class="fas fa-pen"></i></button>
                        <!-- <button class="btn btn-info btnView"><i class="fas fa-pen"></i>Edit</button> -->
                        <button class="btn btn-sm btn-danger btnArchive"> <i class="bi bi-trash"></i></i></button>
                    </td>
                    <td class="d-none">{{$a->id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         
        <!-- Add Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Add New Amenity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="AmenityAddForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="type" class="form-label">Amenity</label>
                                    <input type="text" class="form-control" id="amenity" name="amenity" placeholder="Air Conditioner" required>
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

        <!-- Edit Modal -->
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Edit Amenity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="AmenityEditForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="type" class="form-label">Amenity</label>
                                    <input type="text" class="form-control" id="amenity1" name="amenity" required>
                                    <input type="hidden" class="form-control" id="id" name="id" required>
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
        <div class="modal fade" id="modalArchive" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="modalAddLabel">Archive Amenity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Are you sure you want to archive this amenity? </p>
                        <form id="AmenityArchiveForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" class="form-control" id="archiveId" name="archiveId" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
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
    $('#amenities').addClass('active');
</script>


<script src='resources/js/amenities.js'></script>
@endsection
