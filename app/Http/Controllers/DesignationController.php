<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation = DB::table('designation')
        ->select('*')
        ->get();
        return view('pages.designation',compact('designation'));
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

    public function savedesignation(Request $request)
    {
        $designation = $request->designation;
        $pf = $request->pf;
        $ot = $request->ot;
        $salarytype = $request->salarytype;

        DB::table('designation')->insert(
            [
                'designation' => $designation,
                'ot' => $ot,
                'pf' => $pf,
                'salarytype' => $salarytype,
            ]);
        return back();
    }

    public function deletedesignation(Request $request)
    {
        $designationid = $request->desig;
        DB::table('designation')->where('id', $designationid)->delete();

        return redirect('/designation')->with('success','Designation Deleted Successfully');

    }

    public function getpfdata(Request $request)
    {
        $designationtype = $request->designationtype;

        $designation = DB::table('designation')
        ->select('*')
        ->where('designation','=',$designationtype)
        ->first();


        return $designation;
    }
}
