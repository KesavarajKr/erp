
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Renuga Engineering Works Employee Report</title>
</head>
<style>
    @page {
        size: A4;
    }

    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

    .page {
        width: 26cm;
        min-height: 35cm;
        /* padding: 2cm; */
        margin: 1cm auto;
        border: 1px solid #111;
        background: #fff;
    }

    .container {
        max-width: 1140px;
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }

    .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }

    .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }

    #page1 {
        margin: 30px;
    }

    #header {
        display: flex;
        justify-content: space-between;
    }

    #photo {
        border: 1px solid #111;
        height: 150px;
        width: 135px;
    }

    #gentable {
        border: 1px solid #111;
        width: 100%;
        border-spacing: 0;
    }

    #gentable th {
        font-size: 24px;
        border: 1px solid #111;
        padding: 15px;
    }

    #gentable td {
        border: 1px solid #111;
        padding: 15px;
    }

    .l-color {
        background-color: rgb(211, 209, 209);
    }

    #addr {
        padding: 50px 15px !important;
    }

    #footer {
        margin-top: 250px;
        display: flex;
        justify-content: space-between;
    }

    #header2 {
        text-align: center;
        text-transform: uppercase;
        font-style: italic;
    }

    .checklist {
        display: flex;
    }

    .check-l {
        padding: 8px 15px;
    }

    /* {
        border: 1px solid #111;
        width: 100%;
        border-spacing: 0;
    } */

    #famtable td {
        border: 1px solid #111;
        padding: 15px;
    }

    #famtable th {
        border: 1px solid #111;
        padding: 15px;
    }

    #famtable,
    #worktab,
    #banktab,
    #docutab,
    #edutable {
        border: 1px solid #111;
        width: 100%;
        border-spacing: 0;
    }

    #edutable th {
        border: 1px solid #111;
        padding: 15px;
    }

    #edutable td {
        border: 1px solid #111;
        padding: 15px;
    }

    #worktab th {
        border: 1px solid #111;
        padding: 15px;
    }

    #worktab td {
        border: 1px solid #111;
        padding: 15px;
    }

    #banktab td {
        border: 1px solid #111;
        padding: 15px;
    }
    #docutab td {
        border: 1px solid #111;
        padding: 15px;
    }
</style>



<body>
    <section class="page">
        <div id="page1">
            <div id="header">
                <div id="comname">
                    <!--<h1>TOT HYGIENE FORM</h1>-->
                    <img src="/assets/img/logo.jpg" style="width:200px;margin-top:25px" alt="">
                </div>
                <div id="comaddr">
                    <h2 style="text-align:center;">
                        SRI RENUGA ENGINEERING WORKS
                    </h2>
                    <p style="text-align:center;">NO. 1, SRI GANESH NAGAR, PEELAMEDU, COIMBATORE-641004.</p>
                    <p style="text-align:center;"><b>Contact No : </b>08048987800
                    </p>
                    <p style="text-align:center;"><b>Email ID : </b>hr@RENUGA.com</p>
                </div>
                <div id="image">
                    <div id="photo">
                        <img src="/images/{{$emp->image}}" alt="" style="height:150px;width:135px;">
                    </div>
                </div>
            </div>
            <hr>
            <div id="gendetails">
                <h2><u>GENERAL DETAILS</u></h2>
                <table id="gentable">
                    <thead>
                        <th style="width: 50%;">Details</th>
                        <th></th>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="l-color"><b>1. Employee ID : </b></td>

                            <td>{{$emp->emp_id}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>2. Name : </b></td>
                            <td>{{$emp->name}}</td>
                        </tr>
                        <tr>

                            <td class="l-color"><b>3. Date of birth (DD-MM-YYYY) : </b></td>
                            <td>{{$emp->dob}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>4. Educational Qualification : </b></td>
                            <td>{{$emp->education}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>5. Gender : </b></td>
                            <td>{{$emp->gender}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>6. Designation : </b></td>
                            <td>{{$emp->designation}}</td>
                        </tr>
                        <tr>
                            <td class="l-color" id="addr"><b>7. Present address in full : </b></td>
                            <td>{{$emp->temp_addr}}</td>
                        </tr>
                        <tr>
                            <td class="l-color" id="addr"><b>8. Permanent address in full : </b></td>
                            <td>{{$emp->perm_addr}}</td>
                        </tr>
                        <tr>

                            <td class="l-color"><b>9. Date of Joining : </b></td>
                            <td>{{$emp->doj}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>10. Blood Group : </b></td>
                            <td>{{$emp->blood_group}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>11. Mobile No : </b></td>
                            <td>{{$emp->mobile_num}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>13. Landline No : </b></td>
                            <td>{{$emp->mobile_num}}</td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>14. Email address : </b></td>
                            <td>{{$emp->e_mail}}</td>
                        </tr>
                        {{-- <tr>
                            <td class="l-color"><b>15. Nationality : </b></td>
                            <td></td>
                        </tr> --}}
                        {{-- <tr>
                            <td class="l-color"><b>16. Uniform fee : </b></td>
                            <td></td>
                        </tr> --}}
                        <tr>
                            <td class="l-color"><b>17. Allowance Type : </b></td>
                            <td>
                                {{$emp->allowance_type}}
                            </td>
                        </tr>
                        {{-- <tr>
                            <td class="l-color"><b>18. Actual Basic : </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="l-color"><b>19. Gross Allowance : </b></td>
                            <td></td>
                        </tr> --}}

                    </tbody>
                </table>
                <!--<div id="footer">-->
                <!--     <div id="l-side">-->
                <!--         <p>Place : </p>-->
                <!--         <p>Date : </p>-->
                <!--     </div>-->
                <!--     <div id="r-side">-->
                <!--         <p>Signature of the applicant</p>-->
                <!--     </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <section class="page">
        <div id="page1">
            <div id="header2">
                <h2>Personal Details</h3>
                    <hr>
            </div>
            <h2><u>Family Details</u></h2>
            <table id="famtable">
                <thead>
                    <th>NAME</th>
                    <th>RELATION</th>
                    <th>PHONE NUMBER</th>
                </thead>
                <tbody>
                    @if($empfamily)
                        @foreach ($empfamily as $family)
                        <tr>
                            <td>{{$family->name}}</td>
                            <td>{{$family->relation}}</td>
                            <td>{{$family->mobile_no}}</td>
                        </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
            <h2><u>Education Details</u></h2>
            <table id="edutable">
                <thead>
                    <th>LEVEL</th>
                    <th>BOARD/DEGREE</th>
                    <th>INSTITUTE/UNIVERSITY</th>
                    <th>YEAR OF PASSOUT</th>
                </thead>
                <tbody>
                    @if($empeducation)
                        @foreach ($empeducation as $education)
                        <tr>
                            <td>{{$education->std_level}}</td>
                            <td>{{$education->degree}}</td>
                            <td>{{$education->edu_university}}</td>
                            <td>{{$education->yearpassout}}</td>
                        </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
            <h2><u>Working Experience</u></h2>
            <table id="worktab">
                <thead>
                    <th>YEAR</th>
                    <th>PERIOD</th>
                    <th>ROLE</th>
                    <th>COMPANY</th>
                    <th>DESIGNATION</th>
                </thead>
                <tbody>
                    @if($empexperience)
                        @foreach ($empexperience as $experience)
                        <tr>
                            <td>{{$experience->exp_year}}</td>
                            <td>{{$experience->exp_period}}</td>
                            <td>{{$experience->exp_role}}</td>
                            <td>{{$experience->exp_company}}</td>
                            <td>{{$experience->exp_designation}}</td>
                        </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
            <h2><u>Bank Details</u></h2>
            <table id="banktab">
                <tr>
                    <td><b>Bank Name : </b></td>
                    <td>{{$emp->bank_name}}</td>
                    <td><b>Branch Name : </b></td>
                    <td>{{$emp->branch_name}}</td>
                </tr>
                <tr>
                    <td><b>Account Holder Name : </b></td>
                    <td>{{$emp->accountholder_name}}</td>
                    <td><b>Account No : </b></td>
                    <td>{{$emp->account_num}}</td>
                </tr>
                <tr>
                    <td><b>IFSC Code :</b></td>
                    <td>{{$emp->ifsc_code}}</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <h2><u>Document Details</u></h2>
            <table id="docutab">
                <tr>
                    <td><b>Aadhaar Card No : </b></td>
                    <td>{{$emp->aadhar_num}}</td>
                    <td><b>Pan Card No : </b></td>
                    <td>{{$emp->pan_num}}</td>
                    <td><b>Voter ID : </b></td>
                    <td>{{$emp->voterid_num}}</td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>

<script>
    window.print();
</script>
