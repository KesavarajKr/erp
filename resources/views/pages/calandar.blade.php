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
                    <div class="col-lg-8">
                        <h4><b>Calendar</b></h4>
                    </div>

                    <div class="col-lg-4 text-right">
                        {{-- <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Users</button> --}}
                    <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>
                <form method="POST" action="/createCalandar">
                    @csrf
                <div class="row mt-4">

                        @csrf
                        <div class="col-lg-4">
                            <input type="date" name="fromdate" class="form-control" required>
                        </div>
                        <div class="col-lg-4">
                            <input type="date" name="todate" class="form-control" required>
                        </div>

                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success m-auto d-block">Create Calander</button>
                        </div>

                </div>
            </form>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Date</th>
                            <th>Days</th>
                            <th>Working Days</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($calandar)
                            @foreach ($calandar as $cal)
                                <tr>
                                    <td>{{$cal->years}}</td>
                                    <td>{{$cal->months}}</td>
                                    <td>{{$cal->dates}}</td>
                                    <td>{{$cal->days}}</td>
                                    <td>{{$cal->working_days}}</td>
                                    <td>
                                        @if($cal->status == '1')
                                            <span class="badge badge-success getcalanderdate"  data-workdays="{{$cal->working_days}}" data-date="{{$cal->dates}}"  data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;width:100px">Working Day</span>
                                            @else
                                            <span class="badge badge-danger getcalanderdate" data-workdays="{{$cal->working_days}}" data-date="{{$cal->dates}}" data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;width:100px">Holiday</span>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Leave Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/leavechange">
                @csrf
                <input type="hidden" name="workingday" value="1">
                <input type="hidden" name="date" class="getdate">
                <input type="hidden" name="work" class="getworkdays">
                <input type="submit" onclick="return confirm('Do You want Update this Data?')" class="btn btn-success" style="width:100%" value="Working Day">
            </form>

            <form method="POST" action="/leavechange">
                @csrf
                <input type="hidden" name="workingday" value="0">
                <input type="hidden" name="date" class="getdate">
                <input type="hidden" name="work" class="getworkdays">
                <input type="submit" onclick="return confirm('Do You want Update this Data?')" class="btn btn-danger" style="width:100%" value="Holiday">
            </form>
        </div>

      </div>
    </div>
  </div>


@endsection
