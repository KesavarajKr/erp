@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h4><b>Salary Slip</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header" >
                              Monthly Salary Generation
                            </div>
                            <div class="card-body">
                              {{-- <form method="POST" action="/salarygenerate"> --}}
                                {{-- @csrf --}}
                                  <div class="row">
                                    <label>Select Month</label>
                                      <input type="month" class="form-control monthyear" name="month">
                                      <div class="col-lg-12 mt-4">
                                          <button class="btn btn-info btn-block salarygenerate">Generate</button>
                                      </div>

                                  </div>
                              {{-- </form> --}}

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="card">
                            <div class="card-header" >
                             Custom Date Salary Generation
                            </div>
                            <div class="card-body">
                              {{-- <form method="POST" action="/salarygenerate"> --}}
                                {{-- @csrf --}}
                                  <div class="row">
                                      {{-- <input type="month" class="form-control monthyear" name="month"> --}}

                                      <div class="form-group col-lg-6">
                                        <label>From Date</label>
                                        <input type="date" class="form-control fromdate" name="fromdate">
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <label>To Date</label>
                                        <input type="date" class="form-control todate" name="todate">
                                      </div>
                                      <div class="col-lg-12 ">
                                          <button class="btn btn-info btn-block customsalarygenerate">Generate</button>
                                      </div>

                                  </div>
                              {{-- </form> --}}

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-6 monthsalaryname mt-2">
                        <div class="card">
                            <div class="card-header" >
                              Monthwise Name Select
                            </div>
                            <div class="card-body">

                                  <div class="row">
                                      <div class="col-lg-12">
                                        <select class="form-control basic" name="" id="generatedemployee">
                                            <option>-- Choose Employee --</option>
                                        </select>
                                      </div>

                                      <div class="col-lg-12">
                                          <button class="btn btn-info btn-block getsalaryemployee mt-2">View</button>
                                      </div>

                                  </div>


                            </div>
                          </div>
                    </div>

                    <div class="col-lg-6 datesalaryname mt-2">
                        <div class="card">
                            <div class="card-header" >
                              Custom date Name Select
                            </div>
                            <div class="card-body">

                                  <div class="row">
                                      <div class="col-lg-12">
                                        <select class="form-control basic" name="" id="generatedemployeecustom">
                                            <option>-- Choose Employee --</option>
                                        </select>
                                      </div>

                                      <div class="col-lg-12">
                                          <button class="btn btn-info btn-block customgetsalaryemployee mt-2">View</button>
                                      </div>

                                  </div>


                            </div>
                          </div>
                    </div>

                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2" id="monthlysalaryworker">
                <div class="card">
                    <div class="card-header">
                      Employee Details
                    </div>
                    <form method="POST" action="/updatesalarydetails">
                        @csrf

                        <div class="card-body">
                            <div class="employee-image">
                                <img id="empimg" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" style="width:200px" class="img-fluid m-auto d-block">
                            </div>
                            <div class="employeedetails text-center mt-4">
                                <h4><b id="employeename"> Name <b></h4>
                                <div class="row mt-3">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Designation : <b id="designation"></b></h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Date Of Joining : <b id="dateofjoining"></b></h6>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6>Allowance Type : <b id="allowancetype"></b></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered mt-3" >
                                    <thead class="bg-danger">
                                        <tr>
                                            <th class="text-white">Total Days</th>
                                            <th class="text-white">Present Days</th>
                                            <th class="text-white">Holidays</th>
                                            <th class="text-white">Weekoff</th>
                                            <th class="text-white">Salary Days</th>
                                            <th class="text-white">Actual Basic</th>
                                            <th class="text-white">DA</th>
                                            <th class="text-white">Basic</th>
                                            <th class="text-white">Net Pay</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control totaldays" id="totaldays" name="totaldays" value="0" readonly></td>
                                            <td><input type="text" class="form-control presentday" name="presentday" id="Present_days" value="0"></td>
                                            <td><input type="text" class="form-control holiday" name="holiday" id="holidays" value="0"></td>
                                            <td><input type="text" class="form-control weekoff" name="weekoff" id="weekoff" value="0"></td>
                                            <td><input type="text" class="form-control salaryday" name="salaryday" id="salarydays" value="0"></td>
                                            <td><input type="text" class="form-control actualbasic1" name="actualbasic1" id="actualbasic" value="0.00" ></td>
                                            <td><input type="text" class="form-control da" name="da" id="da" value="0.00"></td>
                                            <td><input type="text" class="form-control basicsalary" name="basicsalary" id="basic" value="0.00"></td>
                                            <td><input type="text" class="form-control netsalary" name="netsalary" id="netpay" value="0.00"></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Allowance</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Deduction</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <table class="table table-bordered mt-4">
                                            <thead class="bg-danger">
                                                <tr>
                                                    <th class="text-white">HRA</th>
                                                    <th class="text-white">wa</th>
                                                    <th class="text-white">Bonus</th>
                                                    <th class="text-white">Oth/Misc Allowance</th>
                                                    <th class="text-white">OT/Amt</th>
                                                    <th class="text-white">OT Hrs</th>
                                                    <th class="text-white">Gross Cr</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control hra" id="hra" name="hra" value="0"></td>
                                                    <td><input type="text" class="form-control wa" id="wa" name="wa" value="0"></td>
                                                    <td><input type="text" class="form-control bonus" id="bonus" name="bonus" value="0"></td>
                                                    <td><input type="text" class="form-control misc" id="othmisc" name="misc" value="0"></td>
                                                    <td><input type="text" class="form-control amt" id="otamt" name="amt" value="0"></td>
                                                    <td><input type="text" class="form-control hrs" id="othrs" name="hrs" value="0"></td>
                                                    <td><input type="text" class="form-control grosscr" id="grosscr" name="grosscr" value="0.00"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table class="table table-bordered mt-4">
                                            <thead class="bg-danger">
                                                <tr>
                                                    <th class="text-white">epf</th>
                                                    <th class="text-white">esi</th>
                                                    <th class="text-white">Loan DEdn</th>
                                                    <th class="text-white">Advance dedn</th>
                                                    <th class="text-white">Oth Misc dedn</th>
                                                    <th class="text-white">Late dedn</th>
                                                    <th class="text-white">Gross Cr</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control epf1" id="epf" name="epf1" value="0.00"></td>
                                                    <td><input type="text" class="form-control esi" id="esi" name="esi" value="0.00"></td>
                                                    <td><input type="text" class="form-control loan" id="loandedn" name="loan" value="0"></td>
                                                    <td><input type="text" class="form-control advance" id="advancededn" name="advance" value="0"></td>
                                                    <td><input type="text" class="form-control misc1" id="othmiscdedn" name="misc1" value="0"></td>
                                                    <td><input type="text" class="form-control late" id="latededn" name="late" value="0"></td>
                                                    <td><input type="text" class="form-control grossdr" id="grosscrdedn" name="grossdr" value="0.00"></td>
                                                    <input type="hidden" name="employeeid" class="employeeid" id="employeeid">
                                                    <input type="hidden" name="month" class="month" >
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-success">Update Details</button>
                            </div>
                        </div>
                     </form>
                  </div>
            </div>

            <div class="widget-content widget-content-area" id="customsalaryperson">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" class="employeename form-control" readonly></td>
                            <th>Employee ID</th>
                            <td><input type="text" class="form-control employeeid" readonly></td>
                        </tr>
                        <tr>
                            <th>Salary Period</th>
                            <td><input type="text" class="salaryperiod form-control" readonly></td>
                            <th>Total Working Days</th>
                            <td><input type="text" class="form-control Total_days" readonly></td>
                        </tr>
                        <tr>
                            <th>One Day Salary</th>
                            <td><input type="text" class="form-control daily_salary" readonly></td>
                            <th>Deduction</th>
                            <td><input type="text" class="form-control decuction" readonly></td>
                        </tr>
                        <tr>
                            <th>Time Deduction</th>
                            <td><input type="text" class="form-control decuction" readonly></td>
                            <th>OT</th>
                            <td><input type="text" class="form-control" value="0" readonly></td>
                        </tr>
                        <tr>
                            <th>PF</th>
                            <td><input type="text" class="form-control" value="0" readonly></td>
                            <th>ESI</th>
                            <td><input type="text" class="form-control" value="0" readonly></td>
                        </tr>
                        <tr>
                            <th>Salary Days</th>
                            <td><input type="text" class="form-control salary_days" readonly></td>
                            <th>Net pay</th>
                            <td><input type="text" class="form-control netpay" readonly></td>
                        </tr>
                    </table>
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
