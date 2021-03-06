<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
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
    public function information()
    {
        return view('information');
    }
    public function step2()
    {
        if (isset($_POST['hobbies'])){
            $hobbies = $_POST['hobbies'];
            $name = Auth::user()->name;
            $hobbiesJS = json_encode($hobbies); //converts an array to JSON string
            //json_decode($jsonString) // converts json string to php array
            DB::table('user_information')->where('user', '=', "$name")->update([
                'hobbies' => $hobbiesJS,
            ]);
            return view('information2', ['hobbies' => $hobbies]);            
        }
        else {
            return view('information2');
        }
        
    }
    public function step3()
    {
        if (isset($_POST['virtudes'])){
            $name = Auth::user()->name;
            $virtudes = $_POST['virtudes'];
            $virtudesJS = json_encode($virtudes); //converts an array to JSON string
            //json_decode($jsonString) // converts json string to php array
            DB::table('user_information')->where('user', '=', "$name")->update([
                'virtues' => $virtudesJS,
            ]);
            return view('information3', ['virtudes' => $virtudes]);
        }
        else{
            return view('information3');
        }
    }
    public function complete()
    {
        if (isset($_POST['skills'])){
            $name = Auth::user()->name;
            $skills = $_POST['skills'];
            $skillsJS = json_encode($skills); //converts an array to JSON string
            //json_decode($jsonString) // converts json string to php array
            DB::table('user_information')->where('user', '=', "$name")->update([
                'skills' => $skillsJS,
                'status' => 'true',
            ]);
        }
        return redirect ('/loading');
    }
}


//@foreach ($hobbies as $hobbie)
//{{ $hobbie }}
//@endforeach