@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Company Details</b></h4>
                    </div>
                </div>
                <form method="POST" action="/savecompany" enctype="multipart/form-data">
                    @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <img src="/images/{{$company->company_logo}}" class="img-fluid" style="width:150px;height:150px">
                        <input type="hidden" name="oldlogo" value="{{$company->company_logo}}">
                        <label>Company Logo</label>
                        <input type="file" name="companylogo" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <img src="/images/{{$company->signature}}" class="img-fluid" style="width:150px;height:150px">
                        <label>Signature</label>
                        <input type="file" name="signature" class="form-control">
                        <input type="hidden" name="oldsignature" value="{{$company->signature}}">
                    </div>
                    <div class="col-lg-6 mt-4">

                        <label>Company Name</label>
                        <input type="text" name="companyname" class="form-control" value="{{$company->companyname}}">
                    </div>

                    <div class="col-lg-6 mt-4">

                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{$company->city}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <img src="" class="img-fluid">
                        <label>Pincode</label>
                        <input type="text" name="pincode" class="form-control" value="{{$company->pincode}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <img src="" class="img-fluid">
                        <label>GST NO</label>
                        <input type="text" name="gstno" class="form-control" value="{{$company->gstno}}">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <img src="" class="img-fluid">
                        <label>Address</label>
                        {{-- <input type="text" name="address" class="form-control"> --}}
                        <textarea class="form-control" name="address">{{$company->address}}</textarea>
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
