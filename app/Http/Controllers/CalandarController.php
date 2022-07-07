<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $calandar = DB::table('calandars')
        ->select('*')
        ->groupBy('dates')
        ->get();

        return view('pages.calandar',compact('calandar'));
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

    public function createCalandar(Request $request)
    {
        $fromdate = $request->fromdate;
        $todate = $request->todate;
        $year = date('Y', strtotime($fromdate));
        $month = date('m', strtotime($fromdate));
        $numberofdays=cal_days_in_month(CAL_GREGORIAN,$month,$year);

        $i=0;
        $format = 'd-m-Y';
        $format1 = 'l';

        $dates = array();
            $days = array();
            $current = strtotime($fromdate);
            $date3 = strtotime($todate);
            $stepVal = '+1 day';

            while ($current <= $date3) {


                $dates[] = date($format, $current);
                $days[] = date($format1, $current);
                // $month[] = date($format2, $current);
                // $month1 = date($format2, $current);

                // $year[] = date($format3, $current);

                // $month = date("F", mktime(0, 0, 0, $month, 10));
                $c_date=$dates[$i];
                $c_date = date("Y-m-d", strtotime($c_date));
                $c_day=$days[$i];
                $c_month=$month;
                $c_year=$year;
                $month_no= $month;
                $current = strtotime($stepVal, $current);
                // $sql1="SELECT count(*) as count FROM calender_details WHERE c_date='$c_date' order by id";
                // $result1=mysqli_query($con,$sql1);
                // $row1 = mysqli_fetch_assoc($result1);
                // $count=$row1['count'];
                $count = 0;
                if($count=="0"){

                    if($c_day == 'Sunday')
                    {
                        $status = 0;
                    }
                    else
                    {
                        $status = 1;
                    }



                        $calandar = DB::table('calandars')->insert(
                            [
                                'dates' => $c_date,
                                'days' => $c_day,
                                'months' => $c_month,
                                'years'=> $c_year,
                                'working_days'=>$numberofdays,
                                'mon_year'=>$c_year."-".$c_month,
                                'status'=>$status,

                            ]);
                            $leavecount = DB::table('calandars')
                            ->select('*')
                            ->where('months','=',$c_month)
                            ->where('years','=',$c_year)
                            ->where('status','=',0)
                            ->count();

                            $leave = $numberofdays - $leavecount;
                            $updateworkingday= DB::table('calandars')
                            ->where('months','=',$c_month)
                            ->where('years','=',$c_year)
                            ->update(array(
                                'working_days'=>$leave,

                            ));

                }
                $i=$i+1;
            }

            return back()->with('success','Calendar Generated Successfully...');
    }

    public function leavechange(Request $request)
    {
        $date = $request->date;
        $workingday = $request->workingday;
        $work = $request->work;
        $year = date('Y', strtotime($date));
        $month = date('m', strtotime($date));

        $updateworkingday= DB::table('calandars')
        ->where('dates','=',$date)
        ->update(array(
            'status'=>$workingday
        ));

        if($workingday == 1)
        {
            $leave = $work + 1;
        }
        else
        {
            $leave = $work - 1;
        }



                            $updateworkingday= DB::table('calandars')
                            ->where('months','=',$month)
                            ->where('years','=',$year)
                            ->update(array(
                                'working_days'=>$leave,

                            ));

        return back()->with('success','Updated...');
    }
}
