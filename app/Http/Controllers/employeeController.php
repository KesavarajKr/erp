<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invID =0;
         $maxValue = DB::table('employees')->max('id');
         $invID=$maxValue+1;
         $invID = str_pad($invID, 4, '0', STR_PAD_LEFT);

         $empcount="RACEMP".$invID;

        $designation = DB::table('designation')
        ->select('*')
        ->get();



        return view('pages.add_employee',compact('empcount','designation'));
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
        // dd($request->empid);
        $employee = new Employee();

        $employee->emp_id = $request->empid;
        $employee->name = $request->empname;
        $employee -> dob = $request->empdob;

        $employee -> education = $request->empeducation;
        $employee -> mobile_num = $request->empmbl;
        $employee-> e_mail = $request->empmail;
        $employee -> gender = $request->empgen;
        $employee -> doj = $request->empdoj;
        $employee -> designation = $request->empdesign;


        $employee-> blood_group = $request->empblood;
        $employee->minor_major = $request->empminor;
        $employee->temp_addr = $request->emptempaddr;
        $employee-> perm_addr = $request->empperaddr;
        $employee->allowance_type = $request->empallowance;
        $employee->bank_name = $request->bankname;
        $employee->branch_name = $request->branch;
        $employee->accountholder_name = $request->holdername;
        $employee->account_num = $request->accountnum;
        $employee-> ifsc_code = $request->ifsccode;
        $employee->aadhar_num = $request->Adharnoo;

        $employee->pan_num = $request->pannoo;

        $employee->voterid_num = $request->voternoo;
        $employee->actualbasic = $request->actualbasic;
        $employee->grossallowance = $request->grossallowance;
        $employee->licenseno = $request->licenseno;
        $employee->pf=$request->pfdata;
        $employee->ot=$request->otdata;
        $employee->salarytype=$request->salarytype;
        $employee->daily_salary=$request->dailysalary;



        if($request->hasfile('empimg'))
        {
            $file = $request->file('empimg');
            $extension = $file ->getClientOriginalExtension();
            $filename = "Emp_".'_'.time().'.'.$extension;
            $file->move('images/',$filename);
            // $empimg = $filename;
            $employee->image = $filename;

        }

        if($request->hasfile('image1'))
        {
            $file = $request->file('image1');
            $extension = $file ->getClientOriginalExtension();
            $filename = "Img1_".'_'.time().'.'.$extension;
            $file->move('images/',$filename);
            $employee->aadhar_document = $filename;
            // dd($image1);
        }

        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');
            $extension = $file ->getClientOriginalExtension();
            $filename = "img2_".'_'.time().'.'.$extension;
            $file->move('images/',$filename);
            $employee->pan_document = $filename;
        }

        if($request->hasfile('image3'))
        {
            $file = $request->file('image3');
            $extension = $file ->getClientOriginalExtension();
            $filename = "img3_".'_'.time().'.'.$extension;
            $file->move('images/',$filename);
            $employee->voterid_document = $filename;
        }
        if($request->hasfile('image4'))
        {
            $file = $request->file('image4');
            $extension = $file ->getClientOriginalExtension();
            $filename = "img4_".'_'.time().'.'.$extension;
            $file->move('images/',$filename);
            $employee->licensedocument = $filename;
        }
        $savedata = $employee->save();

        // $level1 = $request->level;
        $year = $request->year;

        // dd($year);

        $id = DB::getPdo()->lastInsertId();

        foreach($year as $key => $year)
        {
            $year = $request->year[$key];
            $period = $request->period[$key];
            $role = $request->role[$key];
            $company = $request->company[$key];
            $empdesignation = $request->empdesignation[$key];

            $experience = DB::table('exprience_details')->insert(
                            [
                                'exp_year' => $year,
                                'exp_period' => $period,
                                'exp_role' => $role,
                                'exp_company' => $company,
                                'exp_designation' => $empdesignation,
                                'emp_id' => $id,
                            ]);
         }

         $f_name = $request->f_name;

         foreach($f_name as $key => $f_name)
         {
             $f_name = $request->f_name[$key];
             $f_relation = $request->f_relation[$key];
             $f_mobile = $request->f_mobile[$key];


             $familydetails = DB::table('emp_familydetails')->insert(
                             [
                                 'name' => $f_name,
                                 'relation' => $f_relation,
                                 'mobile_no' => $f_mobile,
                                 'emp_id' => $id,
                             ]);
          }

          $level1 = $request->level;

        foreach($level1 as $key => $level1)
            {

                $level = $request->level[$key];
                $degree = $request->degree[$key];
                $university = $request->university[$key];
                $passedout = $request->passedout[$key];
                // $document = $request->document[$key];

                $empdata = DB::table('emp_eduction')->insert(
                    [
                        'std_level' => $level,
                        'degree' => $degree,
                        'edu_university' => $university,
                        'yearpassout' => $passedout,
                        // 'edu_certificate' => $document,
                        'emp_id' => $id,
                    ]);
            }

        if($experience)
        {
                return redirect('/emp_report')->with('success','Employee Added Successfully');
        }
        else
        {
            return "save fail";
        }

    //    $insertemp = DB::table('employees')->insert([
    //         'emp_id' => $empid,
    //         'name' => $empname,
    //         // 'image' => $empimg,
    //         'dob' => $empdob,
    //         'education' => $empeducation,
    //         'mobile_num' => $empmbl,
    //         'e_mail' => $empmail,
    //         'gender' => $empgen,
    //         'doj' => $empdoj,
    //         'designation' => $empdesignation,
    //         'blood_group' => $empblood,
    //         'minor_major' => $empminor,
    //         'temp_addr' => $emptempaddr,
    //         'perm_addr' => $empperaddr,
    //         'bank_name' => $bankname,
    //         'branch_name' => $branch,
    //         'accountholder_name' => $holdername,
    //         'account_num' => $accountnum,
    //         'ifsc_code' => $ifsccode,
    //         // 'aadhar_document' => $image1,
    //         // 'pan_document' => $image2,
    //         // 'voterid_document' => $image3,
    //         'aadhar_num' => $Adharnoo,
    //         'pan_num' => $pannoo,
    //         'voterid_num' => $voternoo,
    //         'allowance_type' => $empallowance,
    //     ]);



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

    public function emp_report()
    {
          $employees = DB::table('employees')
        ->select('*')
        ->where('emp_view','=','1')
        ->get();

        return view('pages.emp_report',compact('employees'));
    }

    public function getemp(Request $request)
    {
        // dd($request);
        $empid = $request->empid;
        // dd($empid);
        $emp = DB::table('employees')
        ->select('*')
        ->where('id','=',$empid)
        ->first();

        $empfamily = DB::table('emp_familydetails')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();

        $empeducation = DB::table('emp_eduction')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();

        $empexperience = DB::table('exprience_details')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();


        return view('pages.emp_details',compact('emp','empfamily','empeducation','empexperience'));
    }

    public function id_card()
    {
        $employees = DB::table('employees')
        ->select('*')
        ->get();

        return view('pages.idcard',compact('employees'));
    }

    public function getidcard(Request $request)
    {
        $empid = $request->empid;

        $emp = DB::table('employees')
        ->select('*')
        ->where('id','=',$empid)
        ->first();

        $empfamily = DB::table('emp_familydetails')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->first();

        $company = DB::table('company_details')
        ->select('*')
        ->where('id','=','1')
        ->first();

        return view('pages.idcardprint',compact('emp','empfamily','company'));
    }

    public function deleteemp(Request $request)
    {
        $empid = $request->empid;

        // DB::table('employees')->where('id', $empid)->delete();
        // DB::table('emp_eduction')->where('emp_id', $empid)->delete();
        // DB::table('emp_familydetails')->where('emp_id', $empid)->delete();
        // DB::table('exprience_details')->where('emp_id', $empid)->delete();

        DB::table('employees')->where('id',$empid)->update(array(
            'emp_view'=>0,
        ));
        DB::table('emp_eduction')->where('emp_id',$empid)->update(array(
            'emp_view'=>0,
        ));
        DB::table('emp_familydetails')->where('emp_id',$empid)->update(array(
            'emp_view'=>0,
        ));
        DB::table('exprience_details')->where('emp_id',$empid)->update(array(
            'emp_view'=>0,
        ));

        return redirect('/emp_report')->with('success','Employee Deleted Successfully');
    }

    public function empedit(Request $request)
    {
        $empid = $request->empid;

        $employee = DB::table('employees')
        ->select('*')
        ->where('id','=',$empid)
        ->first();

        $empfamily = DB::table('emp_familydetails')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();

        $empeducation = DB::table('emp_eduction')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();

        $empexperience = DB::table('exprience_details')
        ->select('*')
        ->where('emp_id','=',$empid)
        ->get();

        return view('pages.empedit',compact('employee','empfamily','empeducation','empexperience'));
    }

    public function updateemployee(Request $request)
    {
        $emp_id = $request->empid;
        $name = $request->empname;
        $dob = $request->empdob;

        $education = $request->empeducation;
        $mobile_num = $request->empmbl;
        $e_mail = $request->empmail;
        $gender = $request->empgen;
        $doj = $request->empdoj;
        $designation = $request->empdesign;
        $blood_group = $request->empblood;
        $minor_major = $request->empminor;
        $temp_addr = $request->emptempaddr;
        $perm_addr = $request->empperaddr;
        $allowance_type = $request->empallowance;
        $bank_name = $request->bankname;
        $branch_name = $request->branch;
        $accountholder_name = $request->holdername;
        $account_num = $request->accountnum;
        $ifsc_code = $request->ifsccode;
        $aadhar_num = $request->Adharnoo;
        $pan_num = $request->pannoo;
        $voterid_num = $request->voternoo;
        $actualbasic = $request->actualbasic;
        $grossallowance = $request->grossallowance;
        $licenseno = $request->licenseno;
        $id = $request->id;

        if($request->hasfile('empimg'))
        {
            $file1 = $request->file('empimg');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "emp_".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $image = $request->oldempimg;
        }

        if($request->hasfile('image1'))
        {
            $file1 = $request->file('image1');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "aadhar_".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $aadhardocument = $request->oldaadharimg;
        }

        if($request->hasfile('image2'))
        {
            $file1 = $request->file('image2');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "pan_".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $oldpanimg = $request->oldpanimg;
        }

        if($request->hasfile('image3'))
        {
            $file1 = $request->file('image3');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "voter_".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $oldvoterimg = $request->oldvoterimg;
        }

        if($request->hasfile('image4'))
        {
            $file1 = $request->file('image4');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "license_".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $oldlicenseimg = $request->oldlicenseimg;
        }

        $employees = DB::table('employees')->where('id',$id)->update(array(
            'name'=>$name,
            'image'=>$image,
            'dob'=>$dob,
            'education'=>$education,
            'mobile_num'=>$mobile_num,
            'e_mail'=>$e_mail,
            'gender'=>$gender,
            'doj'=>$doj,
            'designation'=>$designation,
            'blood_group'=>$blood_group,
            'temp_addr'=>$temp_addr,
            'perm_addr'=>$perm_addr,
            'bank_name'=>$bank_name,
            'branch_name'=>$branch_name,
            'accountholder_name'=>$accountholder_name,
            'account_num'=>$account_num,
            'ifsc_code'=>$ifsc_code,
            'aadhar_document'=>$aadhardocument,
            'pan_document'=>$oldpanimg,
            'voterid_document'=>$oldvoterimg,
            'aadhar_num'=>$aadhar_num,
            'pan_num'=>$pan_num,
            'voterid_num'=>$voterid_num,
            'licenseno'=>$licenseno,
            'actualbasic'=>$actualbasic,
            'grossallowance'=>$grossallowance,
            'allowance_type'=>$allowance_type,
            'licensedocument'=>$oldlicenseimg,

        ));

            $f_name = $request->f_name;
            $f_relation = $request->f_relation;
            $f_mobile = $request->f_mobile;
            $familyid = $request->familyid;

            $family = DB::table('emp_familydetails')->where('id',$familyid)->update(array(
                'name'=>$f_name,
                'relation'=>$f_relation,
                'mobile_no'=>$f_mobile
            ));

            $level = $request->level;
            $degree = $request->degree;
            $university = $request->university;
            $passedout = $request->passedout;
            $educationid = $request->educationid;

            $education = DB::table('emp_eduction')->where('id',$educationid)->update(array(
                'std_level'=>$level,
                'degree'=>$degree,
                'edu_university'=>$university,
                'yearpassout'=>$passedout
            ));

            $year = $request->year;
            $period = $request->period;
            $role = $request->role;
            $company = $request->company;
            $empdesignation = $request->empdesignation;
            $experienceid = $request->experienceid;

            $experience = DB::table('exprience_details')->where('id',$experienceid)->update(array(
                'exp_year'=>$year,
                'exp_period'=>$period,
                'exp_role'=>$role,
                'exp_company'=>$company,
                'exp_designation'=>$empdesignation
            ));

            return redirect('/emp_report');
    }

    public function restore_employees(Request $request)
    {
        $employees = DB::table('employees')
        ->select('*')
        ->where('emp_view','=',0)
        ->get();

        return view('pages.restore_employees',compact('employees'));
    }

    public function restore(Request $request)
    {
        $empid = $request->empid;

        DB::table('employees')->where('id',$empid)->update(array(
            'emp_view'=>1,
        ));
        DB::table('emp_eduction')->where('emp_id',$empid)->update(array(
            'emp_view'=>1,
        ));
        DB::table('emp_familydetails')->where('emp_id',$empid)->update(array(
            'emp_view'=>1,
        ));
        DB::table('exprience_details')->where('emp_id',$empid)->update(array(
            'emp_view'=>1,
        ));

        return back();
    }



}
