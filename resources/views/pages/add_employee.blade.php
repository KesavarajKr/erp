@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

<div class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Add Employee</h4>
                </div>
            </div>
        </div>
        <form method="POST" action="{{route('employees.store')}}" enctype= multipart/form-data>
        <div class="widget-content widget-content-area">
            <div id="example-basic">
                <h3>General Details</h3>
                <section>

                        @csrf
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Employee ID</label>
                                @if($empcount)

                                @endif
                                <input type="text" name="empid" class="form-control" id="inputEmail4" placeholder="ID" value="{{$empcount}}" readonly >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Photo</label>
                                <input type="file" class="form-control" name="empimg" id="inputPassword4" placeholder="Password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Name<span id="user_name" class="error-info" style="margin-left: 10px; color:red;"></span></span></label>
                                <input type="text" class="form-control " name="empname" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Date Of birth<span id="DOB" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="date" onblur="fnCalculateAge();" class="form-control" name="empdob" id="dob" placeholder="">
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label for="inputAddress2">Education Qualification<span id="qfy" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="empeducation" id="Qualification" placeholder="Education">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Mobile Number<span id="mobile" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control f_mobile" name="empmbl" id="mobile_no" placeholder="Mobile Number">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputCity">E-mail ID<span id="user_email" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="email" class="form-control" name="empmail" id="email" placeholder="E-mail">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Gender</label>
                                <select id="inputState" class="form-control" name="empgen">
                                    <option selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Date Of Joining</label>
                                <input type="date" class="form-control" name="empdoj" id="inputZip">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Designation</label>
                                <select id="designationtype" class="form-control" name="empdesign">
                                    <option>Choose...</option>
                                    @if ($designation)
                                        @foreach ($designation as $desig)
                                            <option value="{{$desig->designation}}">{{$desig->designation}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                {{-- <input type="hidden" name="" id="pfdata">
                                <input type="hidden" name="" id="otdata"> --}}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Blood Group</label>
                                <select id="inputState" class="form-control" name="empblood">
                                    <option selected>Choose...</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Minor / Major</label>
                                <input type="text" class="form-control" name="empminor" id="minormajor" placeholder="Minor / Major">
                            </div>

                                <div class="form-group col-md-6">
                                    <label for="inputZip">Temporary Address</label>
                                    <textarea class="form-control" name="emptempaddr" placeholder="Temporary Address"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputZip">Permanant Address</label>
                                    <textarea class="form-control" name="empperaddr" placeholder="Permanant Address"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputState">Allowance Type</label>
                                    <select id="allowancetype" class="form-control allowancetype" name="empallowance">
                                        <option selected>Choose...</option>
                                        <option value="WithPF">With PF</option>
                                        <option value="WithoutPF">Without PF</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 actualbasic">
                                    <label for="inputZip">Actual Basic</label>
                                    <input type="text" class="form-control" name="actualbasic" placeholder="Actual Basic" value="0">
                                </div>
                                <div class="form-group col-md-6 dailysalary">
                                    <label for="inputZip">Daily Salary</label>
                                    <input type="text" class="form-control" name="dailysalary" placeholder="Daily Basic" value="0">
                                </div>
                                <div class="form-group col-md-6 grossallowance">
                                    <label for="inputZip">Gross Allowance</label>
                                    <input type="text" class="form-control" name="grossallowance" placeholder="Gross Allowance" value="0">
                                </div>
                                <div class="form-group col-md-6 pf">
                                    <label for="inputZip">PF</label>
                                    <input type="text" class="form-control" name="pfdata" id="pfdata" placeholder="PF" readonly>
                                </div>
                                <div class="form-group col-md-6 ot">
                                    <label for="inputZip">OT</label>
                                    <input type="text" class="form-control" name="otdata" id="otdata" placeholder="OT" readonly>
                                </div>
                                <div class="form-group col-md-6 salarytype">
                                    <label for="inputZip">Salary Type</label>
                                    <input type="text" class="form-control" name="salarytype" id="salarytype" placeholder="Salary Type" readonly>
                                </div>


                        </div>
                            </section>
                            <h3>Bank Details</h3>
                            <section>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Bank Name<span id="bank" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="bankname" id="bankname" placeholder="Bank Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Name Of Branch<span id="branch" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="branch" id="branchname" placeholder="Branch">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Account Holder Name<span id="holder" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="holdername" id="accholdername" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Account Number<span id="acc" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="accountnum" id="accno" placeholder="Account Number">
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label for="inputAddress2">IFSC Code<span id="ifsc" class="error-info" style="margin-left: 10px; color:red;"></span></label>
                                <input type="text" class="form-control" name="ifsccode" id="ifsc_code" placeholder="IFSC Code">
                            </div>

                        </div>

                        </section>
                        <h3>Family Details</h3>
                        <section>
                            <table class="table table-bordered table-scroll mt-3" id="productTable">
                        <thead>
                            <tr>
                                <th scope="col">Name<span id="fname" class="error-info fname" style="margin-left: 10px; color:red;"></span></th>
                                <th scope="col">Relation<span id="frelation" class="error-info frelation" style="margin-left: 10px; color:red;"></span></th>
                                <th scope="col">Mobile Number<span id="fmobile" class="error-info fmobile" style="margin-left: 10px; color:red;"></span></th>
                                <th scope="col"><button type="button" class="btn btn-primary" id="addProduct1">+</button></th>
                            </tr>
                        </thead>
                        <tbody id="app1">
                            <tr>
                                <td><input class="form-control f_name" type="text" name="f_name[]" id="f_name" placeholder="Name"></td>
                                <td><input class="form-control f_relation" type="text" name="f_relation[]" id="f_relation" placeholder="Relation"></td>

                                <td><input class="form-control f_mobile" type="text" name="f_mobile[]" id="f_mobile" placeholder="Mobile Number"></td>
                                <td><button type="button" class="btn btn-danger">X</button></td>
                            </tr>
                                </tbody>
                            </table>

                        </section>
                        <h3>Education Details</h3>
                        <section>
                            <table class="table table-bordered table-scroll mt-3" id="productTable1">
                        <thead>

                            <tr>
                                <th scope="col">Level</th>
                                <th scope="col">Board/Degree</th>
                                <th scope="col">Institute/University</th>
                                <th scope="col">Year Of Pass Out</th>
                                {{-- <th scope="col">Certificate Attachment</th> --}}
                                <th scope="col"><button type="button" class="btn btn-primary" id="eductionadd">+</button></th>
                            </tr>
                        </thead>
                        <tbody id="appp2">
                            <tr>
                                <td>
                                    <select class="form-control" name="level[]">
                                        <option value="">Choose Level</option>
                                        <option>Tenth</option>
                                        <option>Twelth</option>
                                        <option>UG</option>
                                        <option>PG</option>
                                        <option>Others</option>
                                    </select>
                                </td>
                                <td><input class="form-control" type="text" name="degree[]" placeholder="Board"></td>

                                <td><input class="form-control" type="text" name="university[]" placeholder="Institure"></td>
                                <td><input class="form-control" type="text" name="passedout[]" placeholder="Pass out"></td>
                                {{-- <td><input class="form-control" type="file" name="document[]" placeholder="Pass out"></td> --}}
                                <td><button type="button" class="btn btn-danger">X</button></td>

                            </tr>
                        </tbody>
                                </table>
                            </section>
                            <h3>Work Experience</h3>
                            <section>
                                <table class="table table-bordered table-scroll mt-3" id="productTable1">
                        <thead>

                            <tr>
                                <th scope="col">Year</th>
                                <th scope="col">Period</th>
                                <th scope="col">Role</th>
                                <th scope="col">Company</th>
                                <th scope="col">Designation</th>
                                <th scope="col"><button type="button" class="btn btn-primary" id="addexperiencedetails">+</button></th>
                            </tr>
                        </thead>
                        <tbody id="app3">
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="year[]" placeholder="Year">
                                </td>
                                <td><input class="form-control" type="text" name="period[]" placeholder="Period"></td>

                                <td><input class="form-control" type="text" name="role[]" placeholder="Role"></td>
                                <td><input class="form-control" type="text" name="company[]" placeholder="Company"></td>
                                <td><input class="form-control" type="text" name="empdesignation[]" placeholder="Designation"></td>
                                <td><button type="button" class="btn btn-danger">X</button></td>

                            </tr>
                        </tbody>
                        </table>
                        </section>
                        <h3>Documents</h3>
                        <section>
                            <table class="table table-bordered table-scroll mt-3" id="productTable">
                        <thead>
                            <tr>
                                <th scope="col">Document</th>
                                <th scope="col">Number<span style="color:red;font-size:18px;"> *</span></th>
                                <th scope="col">Image</th>
                                {{-- <th scope="col">Existing Image</th> --}}


                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><label>Aadhar Card<span style="color:red;font-size:18px;"> *</span></label></td>
                                <td><input class="form-control" type="text" name="Adharnoo" id="aadhaarno" ></td>
                                <td><input class="form-control img" type="file" name="image1" id="fileUpload1" ></td>
                                {{-- <td><img src="dist/img/document-icon.png" alt="" width="50" height="50" class="output"></td> --}}

                            </tr>
                            <tr>
                                <td><label>PAN Card</label></td>
                                <td><input class="form-control" type="text" name="pannoo"></td>
                                <td><input class="form-control img" type="file" name="image2" id="fileUpload2"></td>
                                {{-- <td><img src="dist/img/document-icon.png" alt="" width="50" height="50" class="output"></td> --}}

                            </tr>
                            <tr>
                                <td><label>Voter ID</label></td>
                                <td><input class="form-control" type="text" name="voternoo"></td>
                                <td><input class="form-control img" type="file" name="image3" id="fileUpload3"></td>
                                {{-- <td><img src="dist/img/document-icon.png" alt="IMG" width="50" height="50" class="output"></td> --}}
                            </tr>
                            <tr>
                                <td><label>Driving License</label></td>
                                <td><input class="form-control" type="text" name="licenseno"></td>
                                <td><input class="form-control img" type="file" name="image4" id="fileUpload3"></td>
                                {{-- <td><img src="dist/img/document-icon.png" alt="IMG" width="50" height="50" class="output"></td> --}}
                            </tr>

                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success btn-lg float-right" style="width:250px">Save</button>

                </section>

            </div>
        </form>



        </div>
    </div>
</div>

    </div>
</div>

</form>
@endsection
