<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index()
    {
        if (Auth::check()){
            $name = Auth::user()->name;
            $data = DB::table('user_information')->where('user', '=', "$name")->get();
            $dataArray = json_decode($data, true);  
            $status = $dataArray[0]['status']; 
        }
        return view('home', ['dataArray' => $dataArray]);
    }
}
