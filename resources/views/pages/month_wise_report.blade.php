@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h4><b>Month Wise Report</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

                <form method="POST" action="/monthwisereport">
                    @csrf

                <div class="row mt-4">
                    <div class="col-lg-8">
                        <input type="month" name="month"  class="form-control monthyear">
                    </div>

                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success m-auto d-block ">View Report</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                {{-- <table id="zero-config" class="table dt-table-hover" style="width:100%"> --}}
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mon-year</th>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Total Day</th>
                            <th>Total Present</th>
                            <th>Total Absent</th>
                        </tr>
                    </thead>
                    <tbody id="monthwisereport">
                        @if($query)
                            @foreach ($query as $qr)
                            <tr>
                                <td>{{$monthyear}}</td>
                                <td>{{$qr->emp_id}}</td>
                                <td>{{$qr->name}}</td>
                                <td>
                                    @if($getmonth = App\Models\calandar::where("mon_year", $monthyear)->first())
                                    {{$getmonth->working_days}}
                                 @endif
                                </td>
                                <td>
                                    @if($getcount = App\Models\attendance_detail::where("status", "p")->where("attedance_date","Like", '%'.$monthyear.'%')->where("empid", $qr->emp_id)->groupBy('attedance_date')->get())

                                        {{$getcount->count()}}
                                     @endif
                                </td>
                                <td>
                                    @if($getcount = App\Models\attendance_detail::where("status", "a")->where("attedance_date","Like", '%'.$monthyear.'%')->where("empid", $qr->emp_id)->groupBy('attedance_date')->get())

                                    {{$getcount->count()}}
                                 @endif
                                </td>
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
