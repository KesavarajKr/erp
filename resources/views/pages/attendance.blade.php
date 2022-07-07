@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            @if(session()->get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-4">
                        <h4><b>Attendance</b></h4>
                    </div>
                    <div class="col-lg-3">
                        <input type="date" class="form-control attendancefilter" name="date" value="">
                    </div>
                    <div class="col-lg-5 text-right">
                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-outline fancy-button btn-0" style="font-size:16px;">Add Attendance</button>
                        <a href="/importattendance" onclick="return confirm('Do You want Generate Attendance..?')" class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;">Import Attendance</a>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-3">
                {{-- <button class="btn btn-warning">Print</button>
                <button class="btn btn-primary">Export Excel</button> --}}
                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Emp ID</th>
                            <th>Date</th>
                            <th>Morning IN</th>
                            <th>Lunch Out</th>
                            <th>Lunch IN</th>
                            <th>Evening Out</th>
                            <th>Working Hours</th>
                            <th>OT</th>
                            <th>Late Time</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody id="attendanceappend">
                        @if($attendance)
                            @foreach ($attendance as $att)
                            <tr>
                                <td>{{$att->empid}}</td>
                                <td>{{$att->attedance_date}}</td>
                                <td>{{$att->morning_in}}</td>
                                <td>{{$att->lunch_out}}</td>
                                <td>{{$att->lunch_in}}</td>
                                <td>{{$att->eveningout}}</td>
                                <td>{{$att->totalworkhrs}}</td>
                                <td>{{$att->ot}}</td>
                                <td>{{$att->total_late}}</td>
                                <td>{{$att->status}}</td>
                            </tr>
                            @endforeach
                        @endif


                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="attendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Attendance Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Direction</th>
                    </tr>
                </thead>
                <tbody id="attendanceout">

                </tbody>

            </table>
            <table class="table table-bordered">
                <tr>
                    <th>Morning Entry to Lunch Out Time</th>
                    <th><span id="time1"></span></th>
                </tr>
                <tr>
                    <th>Lunch In to Evening Out Time</th>
                    <th><span id="time2"></span></th>
                </tr>
                <tr>
                    <th>Today Working Time</th>
                    <th><span id="time3"></span></th>
                </tr>
                <tr>
                    <th>Attendance</th>
                    <th id="attendancestatus"></th>
                </tr>
            </table>

        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Attendance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="/attendanceentry">
            @csrf
        <div class="modal-body">

                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Employee Name</label>
                    <select class="form-control" name="empname" required>
                        <option>-- Choose Employee --</option>
                        @if($e)
                            @foreach ($e as $emp)
                                <option value="{{$emp->emp_id}}">{{$emp->name}}</option>
                            @endforeach
                        @endif
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" name="date">
                    <input type="hidden" name="deviceid" value="1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Time</label>
                    <input type="time" class="form-control" name="time">
                    <input type="hidden" name="deviceid" value="1">
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
