<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\attendance_detail;

class MonthwisereportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $monthyear = date("Y-m");
        $query=DB::table('employees')
        ->select('*')
        ->whereIn('emp_id',(function ($query) use ($monthyear){
            $query->from('attendance_details')
                ->select('empid')
                // ->where('attedanc_date','=',$monthyear);
                ->where('attedance_date','like','%'.$monthyear.'%');
        }))
        // ->join('workingdays', 'follow_ups.leadid', '=', 'leads.leadid')
        ->get();
return view('pages.month_wise_report',compact('query','monthyear'));

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

    public function monthwisereport(Request $request)
    {
        $monthyear = $request->month;
        $query=DB::table('employees')
        ->select('*')
        ->whereIn('emp_id',(function ($query) use ($monthyear){
            $query->from('attendance_details')
                ->select('empid')
                // ->where('attedanc_date','=',$monthyear);
                ->where('attedance_date','like','%'.$monthyear.'%');
        }))
        // ->join('workingdays', 'follow_ups.leadid', '=', 'leads.leadid')
        ->get();

        // return $query;
        // return response()->json(['report' => $query, 'monthyear' => $monthyear]);
        return view('pages.month_wise_report',compact('query','monthyear'));
    }
}
