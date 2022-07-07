<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;




class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $userid = Auth::user()->id;


        $users = DB::table('users')
        ->select('*')
        ->where('roll','=','Sales')
        ->get();

        if($user =='Admin')
        {
            $leads = DB::table('leads')
            ->select('*')
            ->get();
        }
        else
        {
            $leads = DB::table('leads')
            ->select('*')
            ->where('assign_userid','=',$userid)
            ->get();
        }


            $today = date("d-m-Y");
            $yesterday = date('d-m-Y',strtotime("-1 days"));

            $today1 = date('Y-m-d');
            $last60 = date('Y-m-d',strtotime("-60 days"));
                // $lastmonthyear = date("Y",strtotime("-1 month"));
                    //  $lastmonth = date("m",strtotime("-1 month"));

    if($user =='Admin')
    {
        $directleads = DB::table('leads')
        ->select('*')
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $directleads = DB::table('leads')
        ->select('*')
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $indiamartleads = DB::table('leads')
        ->select('*')
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $indiamartleads = DB::table('leads')
        ->select('*')
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }


    if($user == 'Admin')
    {
        $convertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->get();
    }
    else
    {
        $convertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $indiamartconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $indiamartconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $directconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $directconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }


    if($user == 'Admin')
    {
        $notconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->get();
    }
    else
    {
        $notconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $indiamartnotconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $indiamartnotconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $directnotconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $directnotconvertedleads = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $todayoverallleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->get();
    }
    else
    {
        $todayoverallleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $indiamarttodayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $indiamarttodayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $directtodayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $directtodayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $yesterdayoverallleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->get();
    }
    else
    {
        $yesterdayoverallleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $indiamartyesterdayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $indiamartyesterdayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $directyesterdayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $directyesterdayleads = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }


        $lastmonthyear = date("Y",strtotime("-1 month"));
        $lastmonth = date("m",strtotime("-1 month"));



    if($user == 'Admin')
    {
        $last30overallleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->get();
    }
    else
    {
        $last30overallleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $last30directleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $last30directleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $last30indiamartleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $last30indiamartleads = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $last60overallleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->get();
    }
    else
    {
        $last60overallleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $last60directleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('leadsource','=','Direct')
        ->get();
    }
    else
    {
        $last60directleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('leadsource','=','Direct')
        ->where('assign_userid','=',$userid)
        ->get();
    }

    if($user == 'Admin')
    {
        $last60indiamartleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('leadsource','=','Indiamart')
        ->get();
    }
    else
    {
        $last60indiamartleads = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('leadsource','=','Indiamart')
        ->where('assign_userid','=',$userid)
        ->get();
    }



        $salespersons = DB::table('users')
        ->select('*')
        ->where('roll','=','Sales')
        ->get();

        return view('pages.leads',compact('leads','directleads','indiamartleads','convertedleads','indiamartconvertedleads','directconvertedleads','notconvertedleads','indiamartnotconvertedleads','directnotconvertedleads','todayoverallleads','indiamarttodayleads','directtodayleads','yesterdayoverallleads','indiamartyesterdayleads','directyesterdayleads','last30overallleads','last30directleads','last30indiamartleads','last60overallleads','last60directleads','last60indiamartleads','user','salespersons','users'));
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

    public function savelead(Request $request)
    {
        $invID =0;
        $maxValue = DB::table('leads')->max('id');
        $invID=$maxValue+1;
        $invID = str_pad($invID, 4, '0', STR_PAD_LEFT);

        $leadid="LEAD".$invID;
        // $attendance_date = Carbon::createFromTimestamp(strtotime($request->get('attendance_date')) )->format('Y-m-d');

        // $leadentrydate = Carbon::createFromFormat('d/m/Y',strtotime($request->leadentrydate))->format('Y-m-d');

        $leadentrydate = $request->leadentrydate;
        $customername = $request->customername;
        $mobilenumber = $request->mobilenumber;
        $email = $request->email;
        $address = $request->address;
        $dealname = $request->dealname;
        $dealvalue = $request->dealvalue;
        $type = $request->type;
        $callstage = $request->callstage;
        $leadsource = $request->leadsource;
        $assignto = $request->assignto;

        $lead = DB::table('leads')->insert(
            [
                'leadid' => $leadid,
                'leadentrydate' => $leadentrydate,
                'customername' => $customername,
                'mobilenumber' => $mobilenumber,
                'email' => $email,
                'address' => $address,
                'dealname' => $dealname,
                'dealvalue' => $dealvalue,
                'type' => $type,
                'callstage' => $callstage,
                'leadsource' => $leadsource,
                'leadstatus' => 'Pending',
                'assign_userid' => $assignto
            ]);

            return redirect('/leads')->with('success','Lead Added Successfully');

    }

    public function deletelead(Request $request)
    {
        $leadid = $request->leadid;

        DB::table('leads')->where('id', $leadid)->delete();

        return redirect('/leads')->with('success','Leads Deleted Successfully');
    }

    public function viewlead(Request $request)
    {
        $leadid = $request->leadid;

        $lead= DB::table('leads')
        ->select('*')
        ->where('id','=',$leadid)
        ->first();

        return view('pages.leadview',compact('lead'));
    }

    public function saveFollowup(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $leadid = $request->leadid;
        $notificationdate = $request->notificationdate;
        $summery = $request->summery;
        date_default_timezone_set('Asia/Kolkata');
        // date('d-m-Y H:i');
        $mytime = date('d-m-Y H:i');

        // dd($mytime);
        $followup = DB::table('follow_ups')->insert(
            [
                'title' => $title,
                'description' => $description,
                'leadid' => $leadid,
                'created_at' => $mytime,
                'notification_date' => $notificationdate,
                'summery' => $summery
            ]);

            return back()->with('success','Followup Added Successfully');
    }

    public function leadstatus(Request $request)
    {
        $leadid = $request->leadid;
        $leadstatus = $request->leadstatus;

        $status = DB::table('leads')->where('leadid',$leadid)->update(array(
            'leadstatus'=>$leadstatus,
        ));

        return back()->with('success','Lead '.$leadstatus.' Successfully...');
    }

    public function leadedit(Request $request)
    {
        $leadid = $request->leadid;

        $leadedit = DB::table('leads')
        ->select('*')
        ->where('id','=',$leadid)
        ->first();
        // dd($leadedit);
        return view('pages.leadedit',compact('leadedit'));
    }

    public function updatelead(Request $request)
    {
        $id = $request->id;
        $leadentrydate = $request->leadentrydate;
        $customername = $request->customername;
        $mobilenumber = $request->mobilenumber;
        $email = $request->email;
        $address = $request->address;
        $dealname = $request->dealname;
        $dealvalue = $request->dealvalue;
        $type = $request->type;
        $callstage = $request->callstage;
        $leadsource = $request->leadsource;

        $updatelead = DB::table('leads')->where('id',$id)->update(array(

            'leadentrydate' => $leadentrydate,
            'customername' => $customername,
            'mobilenumber' => $mobilenumber,
            'email' => $email,
            'address' => $address,
            'dealname' => $dealname,
            'dealvalue' => $dealvalue,
            'type' => $type,
            'callstage' => $callstage,
            'leadsource' => $leadsource

        ));

        return redirect('/leads');
    }

    public function getFilteration(Request $request)
    {
        $filtertype = $request->filter;
        $today = date("d-m-Y");
        $yesterday = date('d-m-Y',strtotime("-1 days"));

        $today1 = date('Y-m-d');
        $last60 = date('Y-m-d',strtotime("-60 days"));

        $lastmonthyear = date("Y",strtotime("-1 month"));
        $lastmonth = date("m",strtotime("-1 month"));



        if($filtertype == 'allleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->get();
        }
        elseif($filtertype == 'convertedleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadstatus','=','Converted')
            ->get();
        }
        elseif($filtertype == 'notconvertedleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadstatus','=','Pending')
            ->get();
        }
        elseif($filtertype == 'todayoverallleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadentrydate','=',$today)
            ->get();
        }
        elseif($filtertype == 'yesterdayoverallleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadentrydate','=',$yesterday)
            ->get();
        }
        elseif($filtertype == 'last30overallleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->get();
        }
        elseif($filtertype == 'last60overallleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->get();
        }
        elseif($filtertype == 'indiamartleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadsource','=','Indiamart')
            ->get();
        }
        elseif($filtertype == 'indiamartconvertedleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->where('leadstatus','=','Converted')
            ->where('leadsource','=','Indiamart')
            ->get();
        }
        elseif($filtertype == 'indiamartnotconvertedleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Indiamart')
        ->get();
        }
        elseif($filtertype == 'indiamarttodayleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Indiamart')
        ->get();
        }
        elseif($filtertype == 'indiamartyesterdayleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Indiamart')
        ->get();
        }
        elseif($filtertype == 'last30indiamartleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Indiamart')
        ->get();
        }
        elseif($filtertype == 'last60indiamartleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->whereBetween('created_at', [$last60,$today1])
        ->where('leadsource','=','Indiamart')
        ->get();
        }
        elseif($filtertype == 'directleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'directconvertedleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Converted')
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'directnotconvertedleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadstatus','=','Pending')
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'directtodayleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$today)
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'directyesterdayleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->where('leadentrydate','=',$yesterday)
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'last30directleads')
        {
            $output = DB::table('leads')
        ->select('*')
        ->whereMonth('created_at', $lastmonth)
        ->whereYear('created_at', $lastmonthyear)
        ->where('leadsource','=','Direct')
        ->get();
        }
        elseif($filtertype == 'last60directleads')
        {
            $output = DB::table('leads')
            ->select('*')
            ->whereBetween('created_at', [$last60,$today1])
            ->where('leadsource','=','Direct')
            ->get();
        }

        return $output;
    }

    public function getDateFilteration(Request $request)
    {
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        $user = Auth::user()->name;
        $userid = Auth::user()->id;

        if($user == 'Admin')
        {
            $filter = DB::table('leads')
            ->select('*')
            ->whereBetween('created_at', [$fromdate,$todate])
            ->get();
        }
        else
        {
            $filter = DB::table('leads')
            ->select('*')
            ->whereBetween('created_at', [$fromdate,$todate])
            ->where('assign_userid','=',$userid)
            ->get();
        }


        return $filter;
    }

    public function sendMail(Request $request)
    {

    }

    public function leadassign(Request $request)
    {
        $leadid = $request->leadid;
        $username = $request->username;

        $assign = DB::table('leads')->where('leadid',$leadid)->update(array(
            'assign_userid'=>$username,
        ));

        return back()->with('success','Lead Assigned Successfully..');
    }



}
