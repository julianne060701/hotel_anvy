@extends('Admin.layout.app')

@section('title', 'Beds')

@section('Navbar')
@include('Admin.components.Navbar')
@endsection

@section('Sidebar')
@include('Admin.components.Sidebar')
@endsection

@section('Module', 'Bed Management Module')
@section('Header', 'Bed Data')
@section('Details', 'User')

@section('Content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" id="add_btn" data-bs-target="#addRoomModal" style="width: 15%" id="add_btn">Add New</button>
        </div>

         <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Bed Type</th>
                    <th>Date Added</th>
                    <th>Action</th>
                    <th class="d-none">ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Bed as $b)
                <tr class="text-center">
                    <td>{{$b->type}}</td>
                    <td>{{$b->created_at}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary btnView" id="edit_btn"><i class="fas fa-pen"></i></button>
                        <!-- <button class="btn btn-info btnView"><i class="fas fa-pen"></i>Edit</button> -->
                        <button class="btn btn-sm btn-danger btnArchive"> <i class="bi bi-trash"></i></i></button>
                    </td>
                    <td class="d-none">{{$b->id}}</td>
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
                        <h5 class="modal-title" id="modalAddLabel">Add New Bed Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="BedAddForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="type" class="form-label">Bed Type</label>
                                    <input type="text" class="form-control" id="type" name="type" placeholder="Twin Bed" required>
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
                        <h5 class="modal-title" id="modalAddLabel">Edit Bed Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="BedEditForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="type" class="form-label">Bed Type</label>
                                    <input type="text" class="form-control" id="type1" name="type" required>
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
                        <h5 class="modal-title" id="modalAddLabel">Archive Bed Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Are you sure you want to archive this bed type? </p>
                        <form id="BedArchiveForm">
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
    $('#bed').addClass('active');
</script>


<script src='resources/js/Bed.js'></script>
@endsection
