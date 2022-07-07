@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-6   layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h4><b>Salary Report</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    {{-- <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button> --}}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" >
                              View
                            </div>
                            <div class="card-body">
                              <form method="POST" action="/salaryReportgeneration">
                                @csrf
                                  <div class="row">
                                      <div class="col-lg-12">
                                        <label>Month</label>
                                        <input type="month" class="form-control mb-3" name="month">
                                      </div>

                                      <div class="col-lg-12">
                                          <button type="submit" class="btn btn-info w-100 m-auto d-block">Generate</button>
                                      </div>

                                  </div>
                              </form>

                            </div>
                          </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-6   layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h4><b>Custom Salary Report</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    {{-- <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button> --}}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" >
                              View
                            </div>
                            <div class="card-body">
                              <form method="POST" action="/customsalaryReportgeneration">
                                @csrf
                                  <div class="row">
                                      <div class="col-lg-6">
                                        <label>From Date</label>
                                        {{-- <input type="date" class="form-control mb-3" name="fromdate"> --}}
                                        <select class="form-control" name="fromdate">
                                            <option value="">-- Choose From Date --</option>
                                            @if($salarydate)
                                                @foreach ($salarydate as $salary)
                                                    <option value="{{$salary->from_date}}">{{$salary->from_date}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                      </div>
                                      <div class="col-lg-6">
                                        <label>To Date</label>
                                        {{-- <input type="date" class="form-control mb-3" name="todate"> --}}
                                        <select class="form-control" name="todate">
                                            <option value="">-- Choose To Date --</option>
                                            @if($salarydate)
                                                @foreach ($salarydate as $salary)
                                                    <option value="{{$salary->to_date}}">{{$salary->to_date}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                      </div>

                                      <div class="col-lg-12 mt-3">
                                          <button type="submit" class="btn btn-info w-100 m-auto d-block">Generate</button>
                                      </div>

                                  </div>
                              </form>

                            </div>
                          </div>
                    </div>

                </div>

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
            <div class="form-group">
                <label style="margin-bottom:10px">User Name</label>
                <input  type="text" name="userid" id="user"  class="form-control" onchange="kontakte(this)" autocomplete="off" required >

              </div>
              <div class="form-group">
                <label style="margin-bottom:10px">Password</label>

                    <input type="Password" name="epass" id="Password"  class="form-control" autocomplete="off" required >

              </div>
              <div class="form-group">
                <label style="margin-bottom:10px" id="employee_namelabel">Role</label>

                <!--<span><a class="label label-info" href="designation.php">Add Designation</a></span>-->


                     <select name="role" id='role' class='form-control' required>
                                       <option value="">-- Choose Role --</option>
                                     <option value="admin">Admin</option>
                                     <option value="Site Incharge">Site Incharge</option>
                                     <option value="Sales">Sales</option>
                                     <option value="HR">HR</option>
                      </select>



                </div>
                <div class="form-group check">

                    <input type="checkbox" class="check-inp" name="Billing" id="m1">
                    <label for="m1">Billing</label>

                    <input type="checkbox" class="check-inp" name="HR" id="m2">
                    <label for="m2">HR</label>

                    <input type="checkbox" class="check-inp" name="Leads" id="m3">
                    <label for="m3">Sales</label>
                </div>
                <div class="form-group emp">
                    <label style="margin-bottom:10px" id="employee_namelabel">Employee Name <span><a class="label label-info" href="/add_employee">Add Employee</a></span></label>

                        <select name='ename' id='employee_name' class='form-control select2' style="width:100%">
<option value="">--Choose Employee--</option>


</select>

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
