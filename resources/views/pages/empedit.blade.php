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
        <form method="POST" action="/updateemployee" enctype= multipart/form-data>
        <div class="widget-content widget-content-area">
            <div id="example-basic">
                <h3>General Details</h3>
                <section>

                        @csrf
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Employee ID</label>
                                <input type="hidden" name="id" value="{{$employee->id}}">
                                <input type="text" name="empid" class="form-control" id="inputEmail4" placeholder="ID" value="{{$employee->emp_id}}" readonly >
                            </div>
                            <div class="col-lg-1">
                                <img src="/images/{{$employee->image}}" class="img-fluid" style="width:100px">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Photo </label>
                                <input type="file" class="form-control" name="empimg" id="inputPassword4" placeholder="Password">
                                <input type="hidden" name="oldempimg" value="{{$employee->image}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Name</label>
                                <input type="text" class="form-control" name="empname" id="inputPassword4" placeholder="Name" value="{{$employee->name}}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Date Of birth</label>
                                <input type="date" class="form-control" name="empdob" id="inputAddress" placeholder="" value="{{$employee->dob}}">
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label for="inputAddress2">Education Qualification</label>
                                <input type="text" class="form-control" name="empeducation" id="inputAddress2" placeholder="Education" value="{{$employee->education}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Mobile Number</label>
                                <input type="text" class="form-control" name="empmbl" id="inputCity" placeholder="Mobile Number" value="{{$employee->mobile_num}}">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputCity">E-mail ID</label>
                                <input type="email" class="form-control" name="empmail" id="inputCity" placeholder="E-mail" value="{{$employee->e_mail}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Gender</label>
                                <select id="inputState" class="form-control" name="empgen">
                                    <option selected>Choose...</option>
                                    <option value="Male" @if($employee->gender == 'Male') selected @else @endif>Male</option>
                                    <option value="Female" @if($employee->gender == 'Female') selected @else @endif>Female</option>
                                    <option value="Others" @if($employee->gender == 'Others') selected @else @endif>Others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Date Of Joining</label>
                                <input type="date" class="form-control" name="empdoj" id="inputZip" value="{{$employee->doj}}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Designation</label>
                                <select id="inputState" class="form-control" name="empdesign">
                                    <option selected>Choose...</option>
                                    <option value="Staff" @if($employee->designation == 'Staff') selected @else @endif>Staff</option>
                                    <option value="Worker" @if($employee->designation == 'Worker') selected @else @endif>Worker</option>
                                    <option value="Driver" @if($employee->designation == 'Driver') selected @else @endif>Driver</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Blood Group</label>
                                <select id="inputState" class="form-control" name="empblood">
                                    <option selected>Choose...</option>
                                    <option value="A+" @if($employee->blood_group == 'A+') selected @else @endif>A+</option>
                                    <option value="A-" @if($employee->blood_group == 'A-') selected @else @endif>A-</option>
                                    <option value="B+" @if($employee->blood_group == 'B+') selected @else @endif>B+</option>
                                    <option value="B-" @if($employee->blood_group == 'B-') selected @else @endif>B-</option>
                                    <option value="O+" @if($employee->blood_group == 'O+') selected @else @endif>O+</option>
                                    <option value="O-" @if($employee->blood_group == 'O-') selected @else @endif>O-</option>
                                    <option value="AB+" @if($employee->blood_group == 'AB+') selected @else @endif>AB+</option>
                                    <option value="AB-" @if($employee->blood_group == 'AB-') selected @else @endif>AB-</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Minor / Major</label>
                                <input type="text" class="form-control" name="empminor" id="inputZip" placeholder="Minor / Major">
                            </div>

                                <div class="form-group col-md-6">
                                    <label for="inputZip">Temporary Address</label>
                                    <textarea class="form-control" name="emptempaddr" placeholder="Temporary Address">{{$employee->temp_addr}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputZip">Permanant Address</label>
                                    <textarea class="form-control" name="empperaddr" placeholder="Permanant Address">{{$employee->perm_addr}}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputState">Allowance Type</label>
                                    <select id="inputState" class="form-control" name="empallowance">
                                        <option selected>Choose...</option>
                                        <option value="With PF" @if($employee->allowance_type == 'With PF') selected @else @endif>With PF</option>
                                        <option value="Without PF" @if($employee->allowance_type == 'Without PF') selected @else @endif>Without PF</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 actualbasic">
                                    <label for="inputZip">Actual Basic</label>
                                    <input type="text" class="form-control" name="actualbasic" placeholder="Actual Basic" value="{{$employee->actualbasic}}">
                                </div>
                                <div class="form-group col-md-6 grossallowance">
                                    <label for="inputZip">Gross Allowance</label>
                                    <input type="text" class="form-control" name="grossallowance" placeholder="Gross Allowance" value="{{$employee->grossallowance}}">
                                </div>

                        </div>
                            </section>
                            <h3>Bank Details</h3>
                            <section>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Bank Name</label>
                                <input type="text" class="form-control" name="bankname" id="inputEmail4" placeholder="Bank Name" value="{{$employee->bank_name}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Name Of Branch</label>
                                <input type="text" class="form-control" name="branch" id="inputPassword4" placeholder="Branch" value="{{$employee->branch_name}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Account Holder Name</label>
                                <input type="text" class="form-control" name="holdername" id="inputPassword4" placeholder="Name" value="{{$employee->accountholder_name}}">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Account Number</label>
                                <input type="text" class="form-control" name="accountnum" id="inputAddress" placeholder="Account Number" value="{{$employee->account_num}}">
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label for="inputAddress2">IFSC Code</label>
                                <input type="text" class="form-control" name="ifsccode" id="inputAddress2" placeholder="IFSC Code" value="{{$employee->ifsc_code}}">
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
                            @if($empfamily)
                                @foreach ($empfamily as $family)
                                <tr>
                                    <td><input class="form-control f_name" type="text" name="f_name" id="f_name" placeholder="Name" value="{{$family->name}}"></td>
                                    <td><input class="form-control f_relation" type="text" name="f_relation" id="f_relation" placeholder="Relation" value="{{$family->relation}}"></td>
                                    <td><input class="form-control f_mobile" type="text" name="f_mobile" id="f_mobile" placeholder="Mobile Number" value="{{$family->mobile_no}}"></td>
                                    <input type="hidden" name="familyid" value="{{$family->id}}">
                                    <td><button type="button" class="btn btn-danger">X</button></td>
                                </tr>
                                @endforeach
                            @endif

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
                            @if($empeducation)
                                @foreach ($empeducation as $education)
                                <tr>
                                    <td>
                                        <select class="form-control" name="level">
                                            <option >Choose Level</option>
                                            <option @if($education->std_level == 'Tenth') selected @else @endif>Tenth</option>
                                            <option @if($education->std_level == 'Twelth') selected @else @endif>Twelth</option>
                                            <option @if($education->std_level == 'UG') selected @else @endif>UG</option>
                                            <option @if($education->std_level == 'PG') selected @else @endif>PG</option>
                                            <option @if($education->std_level == 'Others') selected @else @endif>Others</option>
                                        </select>
                                    </td>
                                    <td><input class="form-control" type="text" name="degree" placeholder="Board" value="{{$education->degree}}"></td>

                                    <td><input class="form-control" type="text" name="university" placeholder="Institure" value="{{$education->edu_university}}"></td>
                                    <td><input class="form-control" type="text" name="passedout" placeholder="Pass out" value="{{$education->yearpassout}}"></td>
                                    {{-- <td><input class="form-control" type="file" name="document[]" placeholder="Pass out"></td> --}}
                                    <td><button type="button" class="btn btn-danger">X</button></td>
                                    <input type="hidden" name="educationid" value="{{$education->id}}">
                                </tr>
                                @endforeach
                            @endif

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
                            @if($empexperience)
                                @foreach ($empexperience as $experience)
                                <tr>
                                    <td>
                                        <input class="form-control" type="text" name="year" placeholder="Year" value="{{$experience->exp_year}}">
                                    </td>
                                    <td><input class="form-control" type="text" name="period" placeholder="Period" value="{{$experience->exp_period}}"></td>

                                    <td><input class="form-control" type="text" name="role" placeholder="Role" value="{{$experience->exp_role}}"></td>
                                    <td><input class="form-control" type="text" name="company" placeholder="Company" value="{{$experience->exp_company}}"></td>
                                    <td><input class="form-control" type="text" name="empdesignation" placeholder="Designation" value="{{$experience->exp_designation}}"></td>
                                    <td><button type="button" class="btn btn-danger">X</button></td>
                                    <input type="hidden" name="experienceid" value="{{$experience->id}}">
                                </tr>
                                @endforeach
                            @endif
                            {{-- <tr>
                                <td>
                                    <input class="form-control" type="text" name="year[]" placeholder="Year">
                                </td>
                                <td><input class="form-control" type="text" name="period[]" placeholder="Period"></td>

                                <td><input class="form-control" type="text" name="role[]" placeholder="Role"></td>
                                <td><input class="form-control" type="text" name="company[]" placeholder="Company"></td>
                                <td><input class="form-control" type="text" name="empdesignation[]" placeholder="Designation"></td>
                                <td><button type="button" class="btn btn-danger">X</button></td>

                            </tr> --}}
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
                                <th scope="col">Existing Image</th>


                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><label>Aadhar Card<span style="color:red;font-size:18px;"> *</span></label></td>
                                <td><input class="form-control" type="text" name="Adharnoo" id="aadhaarno" value="{{$employee->aadhar_num}}"></td>
                                <td><input class="form-control img" type="file" name="image1" id="fileUpload1" ></td>
                                <input type="hidden" name="oldaadharimg" value="{{$employee->aadhar_document}}">
                                <td><img src="/images/{{$employee->aadhar_document}}" alt="" width="50" height="50" class="output"></td>

                            </tr>
                            <tr>
                                <td><label>PAN Card</label></td>
                                <td><input class="form-control" type="text" name="pannoo" value="{{$employee->pan_num}}"></td>
                                <td><input class="form-control img" type="file" name="image2" id="fileUpload2"></td>
                                <input type="hidden" name="oldpanimg" value="{{$employee->pan_document}}">
                                <td><img src="/images/{{$employee->pan_document}}" alt="" width="50" height="50" class="output"></td>

                            </tr>
                            <tr>
                                <td><label>Voter ID</label></td>
                                <td><input class="form-control" type="text" name="voternoo" value="{{$employee->voterid_num}}"></td>
                                <td><input class="form-control img" type="file" name="image3" id="fileUpload3"></td>
                                <input type="hidden" name="oldvoterimg" value="{{$employee->voterid_document}}">
                                <td><img src="/images/{{$employee->voterid_document}}" alt="IMG" width="50" height="50" class="output"></td>
                            </tr>
                            <tr>
                                <td><label>Driving License</label></td>
                                <td><input class="form-control" type="text" name="licenseno" value="{{$employee->licenseno}}"></td>
                                <td><input class="form-control img" type="file" name="image4" id="fileUpload3"></td>
                                <input type="hidden" name="oldlicenseimg" value="{{$employee->licensedocument}}">
                                <td><img src="/images/{{$employee->licensedocument}}" alt="IMG" width="50" height="50" class="output"></td>
                            </tr>

                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Update</button>

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
