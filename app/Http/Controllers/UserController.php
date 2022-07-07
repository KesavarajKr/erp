<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->select('*')
        ->get();

        return view('pages.users',compact('users'));
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
        $users = new User();

        $rules = array(
            "name" => 'required',
            "role"=>'required',
            'epass' => 'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator -> fails())
        {
            return $validator -> errors();
        }
        else
        {
            $allusers = DB::table('users')
            ->select('*')
            ->where('name','=',$request -> name)
            ->first();

            $users ->name = $request -> name;
            $users ->roll = $request -> role;
            $users ->password = $request -> epass;

            if($allusers == '')
            {
                $savedata = $users->save();

                if($savedata)
                {
                    return back()->with('success','Users Created Successfully...');
                }
            }
            else
            {
                return back()->with('success','Already Username Created...');
            }



        }





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

    public function getuser()
    {

        $users = DB::table('users')
        ->select('*')
        ->get();

        return response()->json(['users'=>$users]);
    }


}
