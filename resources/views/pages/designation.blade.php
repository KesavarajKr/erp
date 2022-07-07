@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Designation</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" ><i class="bi bi-person-plus-fill"></i>&nbsp;&nbsp;Add Designation</button>

                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Designation</th>
                            <th>OT</th>
                            <th>PF</th>
                            <th>Salary Type</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($designation)
                            @foreach ($designation as $desig)
                                <tr>
                                    <td>{{$desig->id}}</td>
                                    <td>{{$desig->designation}}</td>
                                    <td>{{$desig->ot}}</td>
                                    <td>{{$desig->pf}}</td>
                                    <td>{{$desig->salarytype}}</td>
                                    <td><a href="/deletedesignation/{{$desig->id}}" onclick="return confirm('Do You want Delete Record?')" class="btn btn-danger">Delete</a></td>
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
          <h5 class="modal-title" id="exampleModalLabel">Add Designation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="/savedesignation">
            @csrf
        <div class="modal-body">


    <div class="form-group">
            <label class="control-label mb-10 text-left">Designation <span style="color:red">*</span></label>
            <input type="text" name="designation" id="" class="form-control" required>
        </div>


    <div class="form-group">
            <label class="control-label mb-10 text-left">OT<span style="color:red">*</span></label>
            <select class="form-control" name="ot" required>
                <option value="">-- Choose Option --</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="form-group">
            <label class="control-label mb-10 text-left">PF<span style="color:red">*</span></label>
            <select class="form-control" name="pf" required>
                <option value="">-- Choose Option --</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="form-group">
            <label class="control-label mb-10 text-left">Salary Type<span style="color:red">*</span></label>
            <select class="form-control" name="salarytype" required>
                <option value="">-- Choose Option --</option>
                <option value="Monthly">Monthly</option>
                <option value="Weekly">Weekly</option>
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
