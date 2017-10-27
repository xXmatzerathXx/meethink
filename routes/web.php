<?php
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    if (Auth::check()){
        $name = Auth::user()->name;
        $data = DB::table('user_information')->where('user', '=', "$name")->get();
        $dataArray = json_decode($data, true);  
        $status = $dataArray[0]['status']; 
    }
    if (!Auth::check()){
        return view('start');        
    }
    else if (Auth::check() && $status == 'false'){
        return view('information');
    }
    else {
        return view('home', ['dataArray' => $dataArray ]);
    }
});
    
    
Auth::routes();
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return view('start');
})->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/start', 'StartController@start')->name('start');
Route::get('/steps', 'stepsController@steps')->name('steps');
Route::any('/user', 'UserController@user')->name('user');
Route::post('/proyect', 'ProyectController@proyect')->name('proyect');
Route::any('/list', 'ListController@list')->name('list')->middleware('auth');;
Route::post('/message', 'MessageController@message')->name('message');
Route::any('/information', 'InformationController@information')->name('information');
Route::any('/information2', 'InformationController@step2')->name('information2');
Route::any('/information3', 'InformationController@step3');
Route::any('/information4', 'InformationController@step4');
Route::any('/complete', 'InformationController@complete');
Route::any('/team', 'ProyectController@team');
Route::any('/usuario/{user}', 'UserController@single');
Route::any('newproyect', 'ProyectController@new')->name('newproyect');
Route::any('proyectsingle/{nombreP}', 'ProyectController@single')->name('proyectosingle');
