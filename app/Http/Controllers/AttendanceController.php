<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d");

// $attendance = DB::connection('mysql2')->table('attendance')
// ->select('*')
// ->where('logdate',$today)
// ->groupBy('empid')
// ->get();

$attendance = DB::table('attendance_details')
->select('*')
->groupBy('empid','attedance_date')
->get();


$e = DB::table('employees')
        ->select('*')
        ->get();

        return view('pages.attendance',compact('attendance','e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAttendance(Request $request)
    {
        $empid = $request->empid;
        $logindate = $request->logindate;

        $empattendance = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->get();

        return $empattendance;
    }

    public function getAttendanceFirst(Request $request)
    {
        $empid = $request->empid;
        $logindate = $request->logindate;

        $empattendancefirst = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->take(1)
        ->first();

        $empattendancesecond = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)->first();
        // dd($empattendancefirst->punchdetails);

        $to_time = strtotime($empattendancefirst->punchdetails);
$from_time = strtotime($empattendancesecond->punchdetails);
        $diff = round(abs($to_time - $from_time) / 60,2);

        $hours = intdiv($diff, 60).':'. ($diff % 60);

        return $hours;
    }

    public function getAttendanceSecond(Request $request)
    {
        $empid = $request->empid;
        $logindate = $request->logindate;

        $empattendancethird = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)
        ->skip(2)->first();


        $empattendancefourth = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)
        ->skip(2)
        ->skip(3)->first();
        // dd($empattendancefirst->punchdetails);
        $to_time = strtotime($empattendancethird->punchdetails);
$from_time = strtotime($empattendancefourth->punchdetails);
        $diff = round(abs($to_time - $from_time) / 60,2);

        $hours = intdiv($diff, 60).':'. ($diff % 60);

        return $hours;
    }

    public function getAttendanceTotal(Request $request)
    {
        // Morning Time

        $empid = $request->empid;
        $logindate = $request->logindate;

        $empattendancefirst = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->take(1)
        ->first();

        $empattendancesecond = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)->first();
        // dd($empattendancefirst->punchdetails);
        $to_time = strtotime($empattendancefirst->punchdetails);
$from_time = strtotime($empattendancesecond->punchdetails);
        $diff = round(abs($to_time - $from_time) / 60,2);

        $morninghours = intdiv($diff, 60).':'. ($diff % 60);


        // Evening Hours

        $empattendancethird = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)
        ->skip(2)->first();


        $empattendancefourth = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->where('logdate',$logindate)
        ->where('empid',$empid)
        ->skip(1)
        ->skip(2)
        ->skip(3)->first();
        // dd($empattendancefirst->punchdetails);
        $to_time = strtotime($empattendancethird->punchdetails);
$from_time = strtotime($empattendancefourth->punchdetails);
        $diff = round(abs($to_time - $from_time) / 60,2);

        $eveninghours = intdiv($diff, 60).':'. ($diff % 60);



$secs = strtotime($eveninghours)-strtotime("00:00:00");
$endTime = date("H:i:s",strtotime($morninghours)+$secs);


// $totaltime = date('h:i:s', $endTime);
        return $endTime;
    }

    public function getfilterattendance(Request $request)
    {

        $filterdate = $request->getdate;

        $filter =  DB::table('attendance_details')
        ->select('*')
        ->where('attedance_date',$filterdate)
        ->groupBy('empid','attedance_date')

        ->get();

        return $filter;
    }

    public function importattendance()
    {
        $attendance = DB::connection('mysql2')->table('attendance')
        ->select('*')
        ->get();
        $count = $attendance->count();

        foreach ($attendance as $a) {

        $empid = $a->empid;
        $punchdetails = $a->punchdetails;
        $attedance_date = $a->logdate;
        $id = $a->id;
        $checkid = DB::table('attendance_details')
        ->select('*')
        ->where('attendanceid','=',$id)
        ->first();

            if($checkid == '')
            {

                    $attendance_import = DB::table('attendance_details')->insert(
                        [
                            'empid' => $empid,
                            'punchindetails' => $punchdetails,
                            'attedance_date' => $attedance_date,
                            'attendanceid'=> $id
                        ]);


            }
            else
            {

            }

            $empattendancefirst = DB::connection('mysql2')->table('attendance')
            ->select('*')
            ->where('logdate',$attedance_date)
            ->where('empid',$empid)
            ->orderBy('lotime','asc')
            ->take(1)
            ->first();

            $empattendancesecond = DB::connection('mysql2')->table('attendance')
            ->select('*')
            ->where('logdate',$attedance_date)
            ->where('empid',$empid)
            ->orderBy('lotime','asc')
            ->skip(1)
            ->first();

            $empattendancethird = DB::connection('mysql2')->table('attendance')
            ->select('*')
            ->where('logdate',$attedance_date)
            ->where('empid',$empid)
            ->orderBy('lotime','asc')
            ->skip(1)
            ->skip(2)
            ->first();

            $empattendancefourth = DB::connection('mysql2')->table('attendance')
            ->select('*')
            ->where('logdate',$attedance_date)
            ->where('empid',$empid)
            ->orderBy('lotime','asc')
            ->skip(1)
            ->skip(2)
            ->skip(3)
            ->first();

            if($empattendancefirst)
            {
                $to_time = strtotime($empattendancefirst->punchdetails);
                $empattendancefirstlottime = $empattendancefirst->lotime;
            }
            else
            {
                $to_time = strtotime("00:00:00");
                $empattendancefirstlottime = "-";
            }

            if($empattendancesecond)
            {
                $from_time = strtotime($empattendancesecond->punchdetails);
                $empattendancesecondlottime = $empattendancesecond->lotime;
            }
            else
            {
                $from_time = strtotime("00:00:00");
                $empattendancesecondlottime = "-";
            }

                    $diff = round(abs($to_time - $from_time) / 60,2);

                    $morninghours = intdiv($diff, 60).':'. ($diff % 60);

                    if($empattendancethird)
                    {
                        $to_time = strtotime($empattendancethird->punchdetails);
                        $empattendancethirdlottime = $empattendancethird->lotime;
                    }
                    else
                    {
                        $to_time = strtotime("00:00:00");
                        $empattendancethirdlottime = "-";
                    }

                    if($empattendancefourth)
                    {
                        $from_time = strtotime($empattendancefourth->punchdetails);
                        $empattendancefourthlottime = $empattendancefourth->lotime;
                    }
                    else
                    {
                        $from_time = strtotime("00:00:00");
                        $empattendancefourthlottime = "-";
                    }

                            $diff = round(abs($to_time - $from_time) / 60,2);

                            $eveninghours = intdiv($diff, 60).':'. ($diff % 60);


                    // Work Hours Calculation

                    if($empattendancefourth )
                    {
                        $secs = strtotime($eveninghours)-strtotime("00:00:00");
                        $endTime = date("H:i:s",strtotime($morninghours)+$secs);
                    }
                    else
                    {
                        $endTime = "00:00:00";
                    }

                    // OT Calculation

                    if($endTime > "08:00:00")
                    {
                        $to_time = strtotime($endTime);
                        $from_time = strtotime("08:00:00");
                        $ot = round(abs($to_time - $from_time) / 60,2);

                        if($ot)
                        {
                            $overtime = intdiv($ot, 60).':'. ($ot % 60);
                        }
                        else
                        {
                            $overtime = "00:00";
                        }
                    }
                    else
                    {
                        $overtime = "00:00";
                    }



                    // Status Calculation

                    if($endTime < '07:45:00')
                    {
                        $status = "A";
                    }
                    else
                    {
                        $status = "P";
                    }

                    if($empattendancefirstlottime > "09:00:00")
                    {
                        $to_time = strtotime($empattendancefirstlottime);
                        $from_time = strtotime("09:00:00");
                        $morning = round(abs($to_time - $from_time) / 60,2);


                        if($morning)
                        {
                            $morninglate = intdiv($morning, 60).':'. ($morning % 60);
                        }
                        else
                        {
                            $morninglate = "00:00";
                        }
                    }
                    else
                    {
                        $morninglate = "00:00";
                    }

                    if($empattendancesecondlottime)
                    {

                        // $to_time = strtotime($empattendancesecondlottime);
                        // $from_time = strtotime("01:00:00");
                        // $selectedTime = $empattendancesecondlottime;


                        $endTime1 = strtotime("+60 minutes", strtotime($empattendancesecondlottime));

                        $onehr =  date('H:i:s', $endTime1);

                        if($empattendancethirdlottime > $onehr)
                        {
                            $to_time = strtotime($empattendancethirdlottime);
                            $from_time = strtotime($onehr);
                            $afternoon = round(abs($to_time - $from_time) / 60,2);

                            if($afternoon)
                            {
                                $afternoonlate = intdiv($afternoon, 60).':'. ($afternoon % 60);
                            }
                            else
                            {
                                $afternoonlate = "00:00";
                            }
                        }
                        else
                        {
                            $afternoonlate = "00:00:00";
                        }
                    }

                    if($afternoonlate)
                    {
                        $secs = strtotime($afternoonlate)-strtotime("00:00:00");
                        $totaltime = date("H:i:s",strtotime($morninglate)+$secs);


                    }
                    else
                    {
                        $totaltime = "00:00:00";
                    }

            $attendance_import1= DB::table('attendance_details')
            ->where('empid','=',$empid)
            ->where('attedance_date','=',$attedance_date)
            ->update(array(
                'morning_in'=>$empattendancefirstlottime,
                'lunch_out'=>$empattendancesecondlottime,
                'lunch_in'=>$empattendancethirdlottime,
                'eveningout'=>$empattendancefourthlottime,
                'status'=>$status,
                'totalworkhrs'=>$endTime,
                'ot'=>$overtime,
                'morning_late'=>$morninglate,
                'lunch_in_late'=>$afternoonlate,
                'total_late'=>$totaltime
            ));


        }

        return back()->with('success','Attendance Imported Successfully');



    }


    public function salarygenerate(Request $request)
    {
        $monthyear = $request->getmonthyear;

        //   $workingdays =  DB::table('workingdays')
        //     ->select('*')
        //     ->where('monyear','=',$monthyear)
        //     ->first();

            $workingdays =  DB::table('calandars')
            ->select('*')
            ->where('mon_year','=',$monthyear)
            ->first();

            // dd($workingdays);
            $employee =  DB::table('employees')
            ->select('*')
            ->where('salarytype','=','Monthly')
            ->get();


            foreach($employee as $emp)
            {
                $duplicatecheck = DB::table('salary_calulation')
                ->select('*')
                ->where('monthyear','=',$monthyear)
                ->where('emp_no','=',$emp->emp_id)
                ->first();
                // dd($duplicatecheck);
                if($duplicatecheck == '')
                {
                    $salaryinsert = DB::table('salary_calulation')->insert(
                        [
                           'emp_no' => $emp->emp_id,
                           'monthyear' => $monthyear,
                           'Total_days' => $workingdays->working_days,
                           'Actual_basic'=> $emp->actualbasic,
                        ]);

                        $presentdays = DB::table('attendance_details')
                        ->select('*')
                        ->where('attedance_date','like','%'.$monthyear.'%')
                        ->where('empid','=',$emp->emp_id)
                        ->where('status','=','p')
                        ->groupBy('empid','attedance_date')
                        ->get()
                        ->count();

                        $presentdays= DB::table('salary_calulation')
                        ->where('emp_no','=',$emp->emp_id)
                        ->where('monthyear','=',$monthyear)
                        ->update(array(
                            'Present_days'=>$presentdays,
                        ));

                        $otcheck =  DB::table('employees')
                        ->select('*')
                        ->where('ot','=','Yes')
                        ->where('emp_id','=',$emp->emp_id)
                        ->first();

                            if($otcheck)
                            {
                                $getot = DB::table('attendance_details')
                                ->where('empid','=',$otcheck->emp_id)
                                ->where('attedance_date','like','%'.$monthyear.'%')
                                ->get();

                                $time_arr = [];
                                foreach($getot as $oo)
                                {
                                    $time_arr[]= $oo->ot;
                                }
                                    $time = strtotime('00:00:00');
                                    $total_time = 0;

                                    foreach( $time_arr as $ele )
                                    {
                                        $sec_time = strtotime($ele) - $time;
                                        $total_time = $total_time + $sec_time;
                                    }
                                    $hours = intval($total_time / 3600);
                                    $total_time = $total_time - ($hours * 3600);
                                    $min = intval($total_time / 60);
                                    $sec = $total_time - ($min * 60);
                                    // print_r("$hours:$min:$sec"."<br>");
                                    $ttime = $hours.":".$min.":".$sec;

                            }

                            $salarydays= DB::table('salary_calulation')
                            // ->where('emp_no','=',$emp->emp_id)
                            ->where('emp_no','=',$otcheck->emp_id)
                            ->update(array(
                                'OT'=>$ttime
                            ));

                        // foreach($ot as $o)
                        // {


                        // }

                }
                else{}



                $salarydays= DB::table('salary_calulation')
                // ->where('emp_no','=',$emp->emp_id)
                ->where('monthyear','=',$monthyear)
                ->update(array(
                    'salary_days'=>DB::raw("Present_days + Holidays + weekoff"),
                    'basic_salary'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                    'GROSS_CR'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                    'GROSS_DR'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                    'Net_pay'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                ));


                $bonus = DB::table('salary_calulation')
                ->select('emp_no', 'basic_salary')
                ->whereIn('emp_no',(function ($query) {
                    $query->from('employees')
                        ->select('emp_id')
                        ->where('allowance_type','=','WithPF');
                }))
                ->get();

                foreach($bonus as $b)
                {
                            $emp_id=$b->emp_no;
                            $Net_pay=$b->basic_salary;
                            $bonus=(($Net_pay * 8.33) / 100);

                    $bonuscalc= DB::table('salary_calulation')
                    ->where('emp_no','=',$emp_id)
                    ->where('monthyear','=',$monthyear)
                    ->update(array(
                        'bonus'=>$bonus,
                    ));
                }

                $calc2= DB::table('salary_calulation')
                // ->where('emp_no','=',$emp->emp_id)
                ->where('monthyear','=',$monthyear)
                ->update(array(
                    'GROSS_CR'=>DB::raw("Net_pay+(HRA + WA + Misc_allow + OT_AMT + OT_HRS + bonus)"),
                ));

                $calc3= DB::table('salary_calulation')
                // ->where('emp_no','=',$emp->emp_id)
                ->where('monthyear','=',$monthyear)
                ->update(array(
                    'Net_pay'=>DB::raw("GROSS_CR"),
                ));

                $calc4 = DB::table('salary_calulation')
                ->select('emp_no', 'Net_pay')
                ->whereIn('emp_no',(function ($query) {
                    $query->from('employees')
                        ->select('emp_id')
                        ->where('allowance_type','=','WithPF');
                }))
                ->get();

                foreach($calc4 as $c)
                {
                            $emp_id=$c->emp_no;
                            $Net_pay=$c->Net_pay;
                            $ESI=$Net_pay*(0.75/100);
                            $PF=$Net_pay*(12/100);

                    $bonuscalc= DB::table('salary_calulation')
                    ->where('emp_no','=',$emp_id)
                    ->where('monthyear','=',$monthyear)
                    ->update(array(
                        'ESI'=>$ESI,
                        'EPF'=>$PF,
                    ));
                }

                $calc2= DB::table('salary_calulation')
                // ->where('emp_no','=',$emp->emp_id)
                ->where('monthyear','=',$monthyear)
                ->update(array(
                    'GROSS_DR'=>DB::raw("Net_pay-(EPF + ESI + uniform + LOANDEDN + ADVANCE_DEDN + OTH_MISC_DEDN + LATE_DEDN)"),
                ));

                $calc2= DB::table('salary_calulation')
                // ->where('emp_no','=',$emp->emp_id)
                ->where('monthyear','=',$monthyear)
                ->update(array(
                    'Net_pay'=>DB::raw("GROSS_DR"),
                ));
            }

        return $employee;


    }


    public function salarygenerateemployee(Request $request)
    {
        $empid = $request->employeeid;
        $monthyear = $request->monthyear;

        $salarygenerationemp = DB::table('employees')
        ->join('salary_calulation', 'employees.emp_id', '=', 'salary_calulation.emp_no')
        ->where("monthyear",$monthyear)
        ->where("emp_id",$empid)
        ->first();

        return $salarygenerationemp;
    }

    public function customsalarygenerateemployee(Request $request)
    {
        $empid = $request->employeeid;
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        $salarygenerationemp = DB::table('employees')
        ->join('salary_calulation', 'employees.emp_id', '=', 'salary_calulation.emp_no')
        ->where('from_date','=',$fromdate)
        ->where('to_date','=',$todate)
        ->where("emp_id",$empid)
        ->first();

        return $salarygenerationemp;
    }

    public function salaryReportgeneration(Request $request)
    {
        $monthyear = $request->month;

        $salarygenerationemp = DB::table('employees')
        ->join('salary_calulation', 'employees.emp_id', '=', 'salary_calulation.emp_no')
        ->where("monthyear",$monthyear)
        ->get();

        $company = DB::table('company_details')
        ->select('*')
        ->where('id','=','1')
        ->first();

        return view('pages.salary_report_full',compact('salarygenerationemp','monthyear','company'));
    }

    public function customsalaryReportgeneration(Request $request)
    {
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        $monthyear = $fromdate." - ".$todate;
        $salarygenerationemp = DB::table('employees')
        ->join('salary_calulation', 'employees.emp_id', '=', 'salary_calulation.emp_no')
        ->where('from_date','=',$fromdate)
        ->where('to_date','=',$todate)
        ->get();

        $company = DB::table('company_details')
        ->select('*')
        ->where('id','=','1')
        ->first();

        return view('pages.custom_salary_report',compact('salarygenerationemp','monthyear','company'));
    }

    public function updatesalarydetails(Request $request)
    {
        $totaldays = $request->totaldays;
        $presentday = $request->presentday;
        $holiday = $request->holiday;
        $weekoff = $request->weekoff;
        $salaryday = $request->salaryday;
        $actualbasic1 = $request->actualbasic1;
        $da = $request->da;
        $basicsalary = $request->basicsalary;
        $netsalary = $request->netsalary;
        $hra = $request->hra;
        $wa = $request->wa;
        $bonus = $request->bonus;
        $misc = $request->misc;
        $amt = $request->amt;
        $hrs = $request->hrs;
        $grosscr = $request->grosscr;
        $epf1 = $request->epf1;
        $esi = $request->esi;
        $loan = $request->loan;
        $advance = $request->advance;
        $misc1 = $request->misc1;
        $late = $request->late;
        $grossdr = $request->grossdr;
        $employeeid = $request->employeeid;
        $monthyear = $request->month;

        $salaryupdate= DB::table('salary_calulation')
        ->where('monthyear','=',$monthyear)
        ->where('emp_no','=',$employeeid)
        ->update(array(
            'Present_days'=>$presentday,
        'Holidays'=>$holiday,
        'weekoff'=>$weekoff,
        'salary_days'=>$salaryday,
        'Actual_basic'=>$actualbasic1,
        'DA'=>$da,
        'basic_salary'=>$basicsalary,
        'Net_pay'=>$netsalary,
        'HRA'=>$hra,
        'WA'=>$wa,
        'bonus'=>$bonus,
        'Misc_allow'=>$misc,
        'OT_AMT'=>$amt,
        'OT_HRS'=>$hrs,
        'GROSS_CR'=>$grosscr,
        'EPF'=>$epf1,
        'ESI'=>$esi,
        'LOANDEDN'=>$loan,
        'ADVANCE_DEDN'=>$advance,
        'OTH_MISC_DEDN'=>$misc1,
        'LATE_DEDN'=>$late,
        'GROSS_DR'=>$grossdr,
        ));

        return back();
    }

    public function attendanceentry(Request $request)
    {
        $empname = $request->empname;
        $date = $request->date;
        $time = $request->time;

        $totaltime = date("H:i:s",strtotime($time));

            $manualentry = DB::connection('mysql2')->table('attendance')->insert(
            [
                'empid' => $empname,
                'punchdetails' => $date." ".$time,
                'Deviceid' => 1,
                'logdate'=> $date,
                'lotime'=>$totaltime,
            ]);
            return back();
    }

    public function customsalarygenerate(Request $request)
    {
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        $time=strtotime($fromdate);
        $month=date("m",$time);
        $year=date("Y",$time);

        $datetime1 = strtotime($fromdate);
        $datetime2 = strtotime($todate);
        $days = (($datetime2 - $datetime1)/86400);

        // $month=date("F",$fromdate);
        // $year=date("Y",$fromdate);
            $workingdays =  DB::table('calandars')
            ->select('*')
            ->whereBetween('dates',[$fromdate,$todate])
            ->where('status','=','1')
            ->count();

            // dd($workingdays);
        $employee =  DB::table('employees')
            ->select('*')
            ->where('salarytype','=','Weekly')
            ->get();

            foreach($employee as $emp)
            {
                $duplicatecheck = DB::table('salary_calulation')
                ->select('*')
                ->where('from_date','=',$fromdate)
                ->where('to_date','=',$todate)
                ->where('emp_no','=',$emp->emp_id)
                ->first();
                // dd($duplicatecheck);
                if($duplicatecheck == '')
                {
                    $salaryinsert = DB::table('salary_calulation')->insert(
                        [
                           'emp_no' => $emp->emp_id,
                           'monthyear' => $year.'-'.$month,
                           'Total_days' => $days,
                           'daily_salary'=> $emp->daily_salary,
                           'from_date'=> $fromdate,
                           'to_date'=> $todate,
                        ]);

                        $presentdays = DB::table('attendance_details')
                        ->select('*')
                        ->whereBetween('attedance_date',[$fromdate,$todate])
                        ->where('empid','=',$emp->emp_id)
                        ->where('status','=','p')
                        ->groupBy('empid','attedance_date')
                        ->get()
                        ->count();

                        $presentdays= DB::table('salary_calulation')
                        ->where('emp_no','=',$emp->emp_id)
                        ->where('from_date','=',$fromdate)
                        ->where('to_date','=',$todate)
                        ->update(array(
                            'Present_days'=>$presentdays,
                        ));

                        $salarydays= DB::table('salary_calulation')
                    // ->where('emp_no','=',$emp->emp_id)
                    ->where('from_date','=',$fromdate)
                        ->where('to_date','=',$todate)
                    ->update(array(
                        // 'salary_days'=>DB::raw("Present_days + Holidays + weekoff"),
                        // 'basic_salary'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                        // 'GROSS_CR'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                        // 'GROSS_DR'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                        // 'Net_pay'=>DB::raw("(Actual_basic+DA) /Total_days * salary_days"),
                        'salary_days'=>DB::raw("Present_days + Holidays + weekoff"),
                        'basic_salary'=>DB::raw("daily_salary * salary_days"),
                        'Net_pay'=>DB::raw("basic_salary - LATE_DEDN")
                    ));
                    // }



                        }
            }

            return $employee;
    }
}
