<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Salary Report</title>
</head>
<body>
<style>
	td
	{
		border-style:solid;
		border-color:#ccc;
		font-size:13px;
		padding:3px;
		border-width:0.5px;


	}
</style>
<table style="width:100%;border-top:1px solid #ccc;border-right:1px solid #ccc;border-left:1px solid #ccc">
	<tr>
		<td style="width:25%;border:0px">
		<img src="images/{{$company->company_logo}}" style="width:150px;padding:15px 15px">
		</td>
		<td style="width:75%;border:0px">
		<h2 style="text-align:center;font-size:35px;padding:0px;margin-top:15px;margin-bottom:15px">{{$company->companyname}}</h2>
		<p style="font-size:20px;text-align:center;margin-top:0px;text-transform:uppercase">{{$company->address}}</p>
		<p style="font-size:20px;text-align:center;font-weight:bold">SALARY SHEET FOR THE MONTH OF {{$monthyear}}</p>
	</td>
</tr>

</table>
<table style="width:100%" cellspacing="0">
	<thead style="font-weight:bold;">

		<tr>
			<td rowspan="4">SI</td>
			<td rowspan="4">Salary Period</td>
			<td colspan="1">Satff No</td>
			<td colspan="1">DOJ</td>
			<td colspan="1">Department</td>
			<td colspan="1">Total Days</td>
			<td colspan="1">Holidays</td>
			<td colspan="1">Holiday Weekend</td>
			<td colspan="1">Actual Basic</td>
			<td colspan="2">Allowance</td>
			<td colspan="1">OT</td>
			<td rowspan="4">Gross CR</td>
			<td colspan="3">Deduction</td>
			<td rowspan="4">Gross DR</td>
			<td rowspan="4">Net Pay</td>
			<td rowspan="4">Sign</td>
		</tr>
		<tr>
			<td rowspan="2">Name</td>
			<td rowspan="2">Branch</td>
			<td  rowspan="2">Designation</td>
			<td  rowspan="2">Present Days</td>
			<td  rowspan="2">Weekoff</td>
			<td  rowspan="2">Salary Days</td>
			<td  rowspan="2">Basic</td>
			<td colspan="1">HRA</td>
			<td colspan="1">OTH / Misc Allow</td>
			<td colspan="1">OT HRS</td>
			<td colspan="1">EPF</td>
			<td colspan="1">LOAN DEDN</td>
			<td colspan="1">OTH / MISC DEDN</td>


		</tr>
		<tr>

			<td colspan="1">DA</td>
			<td colspan="1"></td>
			<td colspan="1">OT AMT</td>
			<td colspan="1">ESI</td>
			<td colspan="1">Advance DEDM</td>
			<td colspan="1">LATE / EARLY DEDN</td>


		</tr>



	</thead>



        @if($salarygenerationemp)
            <?php $i=1; ?>
            @foreach ($salarygenerationemp as $salary)
            <thead style="text-align:right;">
                <tr>
                    <td rowspan="4"><?php echo $i++; ?></td>
                    <td rowspan="4">{{$monthyear}}</td>
                    <td colspan="1">{{$salary->emp_no}}</td>
                    <td colspan="1">
                        {{$salary->doj}}
                    </td>
                    <td colspan="1"></td>
                    <td colspan="1">{{$salary->Total_days}}</td>
                    <td colspan="1">{{$salary->Holidays}}</td>
                    <td colspan="1">{{$salary->Holiday_worked}}</td>
                    <td colspan="1">{{$salary->Actual_basic}}</td>
                    <td colspan="2"></td>
                    <td colspan="1">{{$salary->OT}}</td>
                    <td rowspan="4">{{$salary->GROSS_CR}}</td>
                    <td colspan="3"></td>
                    <td rowspan="4">{{$salary->GROSS_DR}}</td>
                    <td rowspan="4">{{$salary->Net_pay}}</td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td rowspan="2">{{$salary->name}}</td>
                    <td rowspan="2">{{$salary->branch_name}}</td>
                    <td  rowspan="2">Worker</td>
                    <td  rowspan="2">{{$salary->Present_days}}</td>
                    <td  rowspan="2">{{$salary->weekoff}}</td>
                    <td  rowspan="2">{{$salary->salary_days}}</td>
                    <td  rowspan="2">{{$salary->basic_salary}}</td>
                    <td colspan="1">{{$salary->HRA}}</td>
                    <td colspan="1">{{$salary->Misc_allow}}</td>
                    <td colspan="1">{{$salary->bonus}}</td>
                    <td colspan="1">{{$salary->EPF}}</td>
                    <td colspan="1">{{$salary->LOANDEDN}}</td>
                    <td colspan="1">{{$salary->OTH_MISC_DEDN}}</td>
                </tr>
                <tr>
                    <td colspan="1">{{$salary->DA}}</td>
                    <td colspan="1"></td>
                    <td colspan="1">{{$salary->OT_AMT}}</td>
                    <td colspan="1">{{$salary->ESI}}</td>
                    <td colspan="1">{{$salary->ADVANCE_DEDN}}</td>
                    <td colspan="1">{{$salary->LATE_DEDN}}</td>
                </tr>
        </thead>
            @endforeach
        @endif








</table>


</body>

<script>
    window.print();
</script>
</html>
