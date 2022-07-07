@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
                    <h4><b>Lead View</b></h4>
                    @if(session()->get('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{session()->get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                    @endif
                    <div class="row mt-3">


                        <div class="col-lg-2">
                            <button class="btn btn-success w-100" data-toggle="modal" data-target="#mail"><i class="bi bi-send-check-fill"></i>&nbsp;&nbsp;&nbsp;Send Mail</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-info w-100 conertlead" data-leadid="{{$lead->leadid}}" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-arrow-repeat"></i>&nbsp;&nbsp;Convert</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary w-100 addfollowup" data-leadid="{{$lead->leadid}}" data-toggle="modal" data-target="#exampleModal1"><i class="bi bi-book-fill"></i>&nbsp;&nbsp;Add Follow up</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-warning w-100"><i class="bi bi-card-text"></i>&nbsp;&nbsp;Create Proposal</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-success w-100"><i class="bi bi-pencil-square"></i>&nbsp;&nbsp;Edit</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-danger w-100"><i class="bi bi-trash-fill"></i>&nbsp;&nbsp;Delete</button>
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-primary bi bi-calendar-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Lead Entry Date</b></h5>
                                            <p>{{$lead->leadentrydate}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-warning bi bi-person-circle" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Customer Name</b></h5>
                                            <p>{{$lead->customername}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-info bi bi-phone-vibrate-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Mobile Number</b></h5>
                                            <p>{{$lead->mobilenumber}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-danger bi bi-envelope-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>E-mail ID</b></h5>
                                            <p>{{$lead->email}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-secondary bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Address</b></h5>
                                            <p>{{$lead->address}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-warning bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Deal Name</b></h5>
                                            <p>{{$lead->dealname}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-primary bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Deal Value</b></h5>
                                            <p>{{$lead->dealvalue}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-success bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Type</b></h5>
                                            <p>{{$lead->type}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-danger bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Call Stage</b></h5>
                                            <p>{{$lead->callstage}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-warning bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Lead Source</b></h5>
                                            <p>{{$lead->leadsource}}</p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-info bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Lead Status</b></h5>
                                            <p><span class="badge badge-secondary">{{$lead->leadstatus}}</span></p>
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col-lg-3">
                                        <i class="mt-2 text-info bi bi-map-fill" style="font-size:50px"></i>
                                       </div>
                                       <div class="col-lg-9">
                                            <h5><b>Assign to</b></h5>
                                            @if($username = App\Models\User::where('id', array($lead->assign_userid))->first())
                                                <p>{{$username->name}}</p>
                                            @endif

                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-5"><b>Notes</b></h4>

                    <div class="col-lg-12">
                        <ul class="list-group">
                            @if($notes = App\Models\follow_up::where('leadid', array($lead->leadid))->get())
                                @foreach ($notes as $note)
                                <li class="list-group-item">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="row">
                                               <div class="col-lg-1">
                                                <i class="mt-2 text-info bi bi-book" style="font-size:50px"></i>
                                               </div>
                                               <div class="col-lg-9">
                                                    <h5><b>{{$note->title}}</b></h5>
                                                    <p>{{$note->description}}</p>
                                                    <span class="badge badge-success">Added to : {{$note->created_at}}</span>
                                               </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            @endif


                          </ul>
                    </div>
            </div>

                </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Follow up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="/saveFollowup">
            <div class="modal-body">

                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>
                        <input type="hidden" name="leadid" id="leadid">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Convert Lead</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="/leadstatus">
            <div class="modal-body">

                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lead ID</label>
                            <input type="text" name="leadid" class="form-control" id="leadsource" aria-describedby="emailHelp" placeholder="LeadID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lead Status</label>
                            <select class="form-control" name="leadstatus">
                                <option value="">-- Choose Lead Status --</option>
                                <option value="Pending">Pending</option>
                                <option value="Converted">Converted</option>
                            </select>
                        </div>
                        {{-- <input type="hidden" name="leadid" id="leadid"> --}}

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Send Mail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/sendMail" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        <input type="email" name="title"  class="form-control" id="fromdate" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" name="title"  class="form-control" id="fromdate" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Attachment</label>
                        <input type="file" name="title"  class="form-control" id="fromdate" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter Your Message"></textarea>
                    </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
