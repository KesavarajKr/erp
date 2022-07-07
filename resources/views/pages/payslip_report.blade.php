<html>

<head>
    <title>Payslip</title>
</head>

<body>

            <table style="border-top:1px solid black;border-right:1px solid black;border-left:1px solid black;width:100%">
                <tr>
                    <td style="padding:30px">
                        <img src="images/{{$company->company_logo}}" style="float:left;width:250px" >
                        <h3 style="text-align:center;font-size:25px;font-weight:bold;margin-top:25px;margin-bottom:10px">{{$company->companyname}}</h3>
                        <h3 style="text-align:center;font-size:15px;font-weight:300;margin-top:15px;margin-bottom:10px">{{$company->address}}
                        </h3>

                    </td>
                </tr>
                <tr>
                    <td><h3 style="text-align:center;font-size:18px;font-weight:bold">PAY SLIP FOR THE MONTH OF <span style="text-transform:uppercase;">{{$month}}</span></h3></td>
                </tr>
            </table>


            <table style="border-top:1px solid black;border-right:1px solid black;border-left:1px solid black;width:100%">
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Staff No</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->emp_id}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Aadhar No</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->aadhar_num}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">ESI No</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->ESI}}</td>
                </tr>
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Staff Name </th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->name}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Date Of Join </th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->doj}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Bank A/C No</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->account_num}}</td>
                </tr>
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Designation </th>
                    <td style="width:16.6%;padding:10px 10px">Worker </td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Salary Days</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->salary_days}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Bank Name</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->bank_name}}</td>
                </tr>
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Branch </th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->branch_name}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Leave Dedn Days</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->branch_name}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Bank IFSC</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->ifsc_code}}</td>
                </tr>
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Department </th>
                    <td style="width:16.6%;padding:10px 10px"></td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Days In Month</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->Total_days}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">PAN No</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->pan_num}}</td>
                </tr>
                <tr>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">UAN No </th>
                    <td style="width:16.6%;padding:10px 10px"></td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">Actual Basic</th>
                    <td style="width:16.6%;padding:10px 10px">{{$salarygenerationemp->basic_salary}}</td>
                    <th style="text-align:left;width:16.6%;padding:10px 10px">LOP Amount</th>
                    <td style="width:16.6%;padding:10px 10px">-</td>
                </tr>
            </table>
            <table cellspacing="0" style="border-top:1px solid black;border-right:1px solid black;border-left:1px solid black;width:100%">
                <thead>
                    <tr>
                        <th colspan="3" style="border-right:1px solid black;padding:3px 0px;font-weight:bold">Earnings</th>
                        <th colspan="2">Deduction</th>
                    </tr>
                    <tr>
                        <th style="border-top:1px solid black;padding:3px 0px;border-right:1px solid black;border-bottom:1px solid black">Particulars</th>
                        <th style="border-top:1px solid black;border-right:1px solid black;border-bottom:1px solid black">Actual (RS)</th>
                        <th style="border-top:1px solid black;border-right:1px solid black;border-bottom:1px solid black">Earned (RS)</th>
                        <th style="border-top:1px solid black;border-right:1px solid black;border-bottom:1px solid black">Particulars</th>
                        <th style="border-top:1px solid black;border-bottom:1px solid black">Amount (RS)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">BASIC</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->Actual_basic}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->basic_salary}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">EPF</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->EPF}}</td>
                    </tr>
                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">HRA</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->HRA}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->HRA}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">LOAN</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->LOANDEDN}}</td>
                    </tr>
                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">DA</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->DA}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->DA}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">ESI</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->ESI}}</td>
                    </tr>

                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">Misc_allow</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->Misc_allow}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->Misc_allow}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">UNIFORM</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">0</td>
                    </tr>

                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">OT/AMT</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->OT_AMT}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->OT_AMT}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">ADVANCE_DEDN</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->ADVANCE_DEDN}}</td>
                    </tr>

                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">Misc_allow</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->Misc_allow}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->Misc_allow}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">OTH_MISC_DEDN</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->OTH_MISC_DEDN}}</td>
                    </tr>

                    <tr>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">OT_HRS</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->bonus}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->bonus}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">LATE_DEDN</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->LATE_DEDN}}</td>
                    </tr>


                    <tr>
                        <th style="text-align:center;border-right:1px solid black;padding:3px;border-bottom:1px solid black">GROSS SALARY</th>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->GROSS_CR}}</td>
                        <td style="text-align:right;border-right:1px solid black;padding:3px;border-bottom:1px solid black">{{$salarygenerationemp->GROSS_CR}}</td>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">Total Deduction</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{$desuc}}</td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align:center;border-right:1px solid black;padding:3px;border-bottom:1px solid black">
                            {{-- <span id="words"></span>only --}}
                        </th>
                        <th style="text-align:left;border-right:1px solid black;padding:3px;border-bottom:1px solid black">Net Pay</th>
                        <td style="text-align:right;padding:3px;border-bottom:1px solid black">{{ $finalsalary }}</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align:center;border-bottom:1px solid black;padding:10px 0px">This is a computer-generated document. No signature is required</td>
                    </tr>

                </tbody>

            </table>


</body>

</html>

<script>
    window.print();
</script>
