<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        $name = Auth::user()->name;
        $data = DB::table('user_information')->where('user', '=', "$name")->get();
        $dataArray = json_decode($data, true);  
        return view('user', ['dataArray' => $dataArray ]);
    }
    public function single($user)
    {
        $name = $user;
        $data = DB::table('user_information')->where('user', '=', "$user")->get();
        $dataArray = json_decode($data, true);  
        return view('usersingle', ['dataArray' => $dataArray, 'user' => $user  ]);
    }
    public function portafolio()
    {  
        return view('portafolio');
    }
}
