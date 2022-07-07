@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Calendar</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Calendar</button>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-3">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Day</th>
                            <th>Month</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>05-10-2022</td>
                            <td>Tuesday</td>
                            <td>May</td>
                            <td><button class="btn btn-info btn-sm">Active</button></td>
                            <td><button class="btn btn-danger btn-sm">View</button></td>

                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Calendar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
  <div class="col-lg-6">
    <div class="form-group">
            <label class="control-label mb-10 text-left">From Date <span style="color:red">*</span></label>
            <input type="date" name="date1" id="" class="form-control" required>
        </div>
    </div>
           <div class="col-lg-6">
    <div class="form-group">
            <label class="control-label mb-10 text-left">To Date<span style="color:red">*</span></label>
            <input type="date" name="date2" id="" class="form-control" required>
        </div>
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
