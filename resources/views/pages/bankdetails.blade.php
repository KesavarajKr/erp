@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Bank Details</b></h4>
                    </div>
                </div>
                <form method="POST" action="/savebank" enctype="multipart/form-data">
                    @csrf

                <div class="row">
                    <div class="col-lg-6">

                        <label>Account Name</label>
                        <input type="text" name="accountname" class="form-control" value="{{$bank->accountname}}">
                    </div>
                    <div class="col-lg-6">

                        <label>Account Code</label>
                        <input type="text" name="accountcode"  class="form-control" value="{{$bank->accountcode}}">

                    </div>
                    <div class="col-lg-6 mt-4">

                        <label>Currency</label>
                        <input type="text" name="currency" class="form-control" value="{{$bank->currency}}">
                    </div>

                    <div class="col-lg-6 mt-4">

                        <label>Account Number</label>
                        <input type="text" name="accountnum" class="form-control" value="{{$bank->accountnum}}">
                    </div>
                    <div class="col-lg-6 mt-4">

                        <label>Bank Name</label>
                        <input type="text" name="bankname" class="form-control" value="{{$bank->bankname}}">
                    </div>
                    <div class="col-lg-6 mt-4">

                        <label>IFSC</label>
                        <input type="text" name="ifsc" class="form-control" value="{{$bank->ifsc}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label>Swift Code</label>
                        <input type="text" name="swiftcode" class="form-control" value="{{$bank->swiftcode}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label>MICR Code</label>
                        <input type="text" name="micrcode" class="form-control" value="{{$bank->micrcode}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control" value="{{$bank->branch}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{$bank->description}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4 btn-lg">Update</button>
            </form>
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
