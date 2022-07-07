<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $company = DB::table('company_details')
        ->select('*')
        ->where('id','=',1)
        ->first();

        return view('pages.companydetails',compact('company'));
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

    public function savecompany(Request $request)
    {

        if($request->hasfile('companylogo'))
        {
            $file1 = $request->file('companylogo');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "companylogo".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $logo = $filename1;
        }
        else
        {
            $logo = $request->oldlogo;
        }

        if($request->hasfile('signature'))
        {
            $file1 = $request->file('signature');
            $extension1 = $file1 ->getClientOriginalExtension();
            $filename1= "signature".time().'.'.$extension1;
            $file1->move('images/',$filename1);
            $image = $filename1;
        }
        else
        {
            $image = $request->oldsignature;
        }

        $companyname = $request->companyname;
        $city = $request->city;
        $pincode = $request->pincode;
        $gstno = $request->gstno;
        $address = $request->address;

        $company= DB::table('company_details')->where('id',1)->update(array(
            'company_logo'=>$logo,
            'signature'=>$image,
            'companyname'=>$companyname,
            'city'=>$city,
            'pincode'=>$pincode,
            'gstno'=>$gstno,
            'address'=>$address
        ));

        return redirect('/company');

    }
}
