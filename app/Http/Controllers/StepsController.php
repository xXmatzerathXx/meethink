<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function steps()
    {
        return view('steps');
    }
}
