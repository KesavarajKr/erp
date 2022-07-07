@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-3">
                        <h4><b>Call Update</b></h4>
                    </div>
                    <div class="col-lg-5">

                        <input type="date" class="form-control callupdatefilter" name="date" value="">
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="#" class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;">Add Call Update</a>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Lead ID</th>
                            <th>Title</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="notecontent">
                        @if($callupdate)
                            @foreach ($callupdate as $update)
                            <tr>
                                <td>{{$update->created_at}}</td>
                                <td>{{$update->leadid}}</td>
                                <td>{{$update->title}}</td>
                                <td>
                                    <td><button class="btn btn-warning viewnotes"  data-leadid="{{$update->leadid}}" data-toggle="modal" data-target="#myModal5">View Notes</button></td>
                                    @if($leads = App\Models\Lead::where('leadid', array($update->leadid))->first())
                                    <td><a href="viewlead/{{$leads->id}}" class="btn btn-primary" >View Lead</a></td>
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



  <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Call Update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="list-group callupdatecontent">


              </ul>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
