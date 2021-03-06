<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'username'=>'required',
                'password'=>'required'
            ]
            );

            $username = $request->input('username');
            $password = $request->input('password');


            if(Auth::attempt(['name'=>$username,'password'=>$password]))
            {


            }
            else
            {
                $user = User::where('name',$username)->first();
                $login = DB::table('users')
                ->select('*')
                ->where('name','=',$username)
                ->where('password','=',$password)
                ->first();
                if($login)
                {
                    Auth::login($user);
                    return redirect('dashboard');
                }
                else
                {
                    return redirect('/')->with('error',' Username Password incorrect..!!');
                }
            }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
