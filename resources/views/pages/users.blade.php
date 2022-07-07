@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">
    @if(session()->get('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session()->get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Users</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <table id="zero-config" class="table dt-table-hover userTable" style="width:100%">
                    <thead>
                        <tr>
                            {{-- <th>S.No</th> --}}
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                        @if ($users)
                            @foreach ($users as $u)
                                <tr>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->password}}</td>
                                    <td>{{$u->roll}}</td>
                                    {{-- <td><button class="">Add Permission</button></td> --}}
                                </tr>
                            @endforeach
                        @endif
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('user.store')}}">
                @csrf
             <div class="form-group">
                <label style="margin-bottom:10px">User Name</label>
                <input  type="text" name="name" id="user"  class="form-control" autocomplete="off" required >
              </div>
              <div class="form-group">
                <label style="margin-bottom:10px">Password</label>
                    <input type="Password" name="epass" id="Password"  class="form-control" autocomplete="off" required >
              </div>
              <div class="form-group">
                <label style="margin-bottom:10px" id="employee_namelabel">Role</label>
                     <select name="role" id='role' class='form-control' required>
                                    <option value="">-- Choose Role --</option>

                                     <option value="admin">Admin</option>
                                     <option value="Sales">Sales</option>
                                     <option value="HR">HR</option>
                                     <option value="Accounts">Accounts</option>
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



@endsection
