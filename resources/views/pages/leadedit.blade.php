@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Lead Edit</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        {{-- <a href="/create-invoice" class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;">Create Invoice</a> --}}
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <form method="POST" action="/updatelead">
                    @csrf
                  <div class="row">



                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lead Entry Date</label>
                            <input type="text" class="form-control" name="leadentrydate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$leadedit->leadentrydate}}" readonly>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="text" class="form-control" name="customername" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$leadedit->customername}}">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" class="form-control" name="mobilenumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile Number" value="{{$leadedit->mobilenumber}}">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$leadedit->email}}">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea class="form-control" name="address" placeholder="Address">{{$leadedit->address}}</textarea>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deal Name</label>
                            <input type="text" class="form-control" name="dealname" value="{{$leadedit->dealname}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Deal Name">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deal Value</label>
                            <input type="text" class="form-control" name="dealvalue" value="{{$leadedit->dealvalue}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Deal Value">
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <select class="form-control" name="type">
                                <option>-- Choose Type --</option>
                                <option value="Customer" @if($leadedit->type == 'Customer') selected @else @endif>Customer</option>
                                <option value="Dealer" @if($leadedit->type == 'Dealer') selected @else @endif>Dealer</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Call State</label>
                            <select class="form-control" name="callstage">
                                <option>-- Choose Call Stage --</option>
                                <option value="Interested" @if($leadedit->callstage == 'Interested') selected @else @endif>Interested</option>
                                <option value="Not Interested" @if($leadedit->callstage == 'Not Interested') selected @else @endif>Not Interested</option>
                                <option value="Dicy" @if($leadedit->callstage == 'Dicy') selected @else @endif>Dicy</option>
                                <option value="Invalid" @if($leadedit->callstage == 'Invalid') selected @else @endif>Invalid</option>
                                <option value="No Requirement" @if($leadedit->callstage == 'No Requirement') selected @else @endif>No Requirement</option>
                                <option value="Untouched" @if($leadedit->callstage == 'Untouched') selected @else @endif>Untouched</option>
                            </select>
                          </div>
                      </div>
                      <input type="hidden" name="id" value="{{$leadedit->id}}">
                      <input type="hidden" name="leadsource" value="{{$leadedit->leadsource}}">

                  </div>
                  <button type="submit" class="btn btn-primary float-right">Update Lead</button>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection
