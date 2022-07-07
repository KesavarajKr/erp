@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h4><b>Month Wise Full Report</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>
                <form method="POST" action="/monthwisefullreportfilter">
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
                <div class="table-responsive" style="overflow-x:scroll">
                {{-- <table id="zero-config" class="table table-bordered dt-table-hover" > --}}
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%;overflow-x:scroll">
                    <thead >
                        <tr>
                            <th style="text-align:center;overflow-wrap: break-word; min-width: 80px; max-width: 80px; width: 80px;">Year-Mon</th>
                            <th style="text-align:center;overflow-wrap: break-word; min-width: 80px; max-width: 80px; width: 80px;">Emp ID</th>
                            <th style="text-align:center;overflow-wrap: break-word; min-width: 80px; max-width: 80px; width: 80px;">Name</th>
                            @if($workingdays)

                            {{-- @for ($i = 1; $i < $workingdays->workiingdays; $i++)
                                <th>{{$i}}</th>
                             @endfor --}}
                                @foreach ($workingdays as $work)
                                    <th style="font-size:10px;text-align:center;overflow-wrap: break-word; min-width: 100px; max-width: 100px; width: 100px;">
                                        <div >

                                            @if($work->status == "0")
                                            <span style="color:red">{{$work->dates}}</span>
                                             <span style="color:red">{{$work->days}}</span>
                                                @else
                                                <span >{{$work->dates}}</span>
                                                <span>{{$work->days}}</span>
                                            @endif

                                        </div>
                                    </th>
                                @endforeach
                            @endif



                        </tr>
                    </thead>
                    <tbody>
                        @if($query)
                            @foreach ($query as $qr)
                            <tr>
                                <td>{{$monthyear}}</td>
                                <td>{{$qr->emp_id}}</td>
                                <td>{{$qr->name}}</td>
                                @if($workingdays)
                                    @foreach ($workingdays as $work)
                                        @if($work->dates)
                                            <td >
                                            @if($getdaily = App\Models\attendance_detail::where("attedance_date",$work->dates)->where("empid", $qr->emp_id)->first())

                                                    @if($getdaily->status)

                                                        {{$getdaily->status}}
                                                        @else
                                                    @endif
                                                @else
                                                @if($work->status == 0)
                                                    <span style="color:red">H</span>
                                                @endif
                                            @endif

                                            </td>
                                        @endif

                                    @endforeach
                                @endif

                                    {{-- @if($getdaily = App\Models\attendance_detail::where("attedance_date","Like", '%'.$monthyear.'%')->where("empid", $qr->emp_id)->groupBy('attedance_date')->get())

                                    @foreach ($getdaily as $attendance)

                                        @if ($attendance->status != '')
                                            <td>
                                                {{$attendance->status}}
                                            </td>
                                        @else
                                            <td>
                                                Y
                                            </td>
                                        @endif
                                    @endforeach


                                     @endif --}}

                                </tr>
                                @endforeach
                            @endif


                    </tbody>

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
