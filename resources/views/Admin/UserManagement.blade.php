@extends('Admin.layout.app')
@section('title', 'NEIL')
@section('Navbar')
    @include('Admin.components.Navbar')
@endsection
@section('Sidebar')
    @include('Admin.components.Sidebar')
@endsection

@section('Module', 'User Management Module')
@section('Header','Master Data')
@section('Details', 'User')

@section('Content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped " id="UserTable">
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
                            @foreach ($User as $u)
                                <tr class="text-center">
                                    <td>{{$u->fname.' '.$u->lname}}</td>
                                    <td>{{$u->contact_num}}</td>
                                    <td>{{$u->address}}</td>
                                    <td>{{$u->birthdate}}</td>
                                    <td>
                                        <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Name_Holder"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-6">
                    <label>Name</label>
                    <input class="form-control" id="fname" required>
                </div>
                <div class="col-6">
                    <label style="color:white">Name</label>
                    <input class="form-control" id="lname" required>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                    <label>Age</label>
                    <input class="form-control" id="edad" disabled>
                </div>
                <div class="col-6">
                    <label>Birthday</label>
                    <input type="date" class="form-control" id="bday" required>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                    <label>Address</label>
                    <input class="form-control" id="address" required>
                </div>
                <div class="col-6">
                    <label>Contact Number</label>
                    <input class="form-control" id="connum" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('scripts')
<script>
  $('#masterData').addClass('menu-open');
  $('#user').addClass('active');

</script>
<script src='resources/js/usermanagement.js'></script>
@endsection

@section('Footer')
    @include('Admin.components.Footer')
@endsection
