<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
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
    public function enviarmessage()
    {
        $destinatario = $_POST['destinatario'];
        $remitente = $_POST['remitente'];
        $mensaje = $_POST['mensaje'];
        $tipo = $_POST['tipo'];

        DB::table('mensajes')->insert([
            'destinatario' => $destinatario,
            'remitente' => $remitente,
            'mensaje' => $mensaje,
            'tipo' => $tipo,
        ]);
        $users = DB::table('users')->pluck('name');
        return view('list', ['users'=>$users]);
    }
    public function message()
    {
        $me = Auth::user()->name;
        $mensajes = DB::table('mensajes')->where('destinatario', '=', "$me")->get();
        return view('message', ['mensajes' => $mensajes]);
    }
    public function update()
    {
        $id = $_POST['id'];
        $action = $_POST['action'];
        if ($action == 'delete'){
            DB::table('mensajes')->where('id', '=', "$id")->delete();
        }
        if ($action == 'close'){
                DB::table('mensajes')->where('id', '=', "$id")->update([
                    'estado' => 'abierto',
                ]);
            }
        $me = Auth::user()->name;
        $mensajes = DB::table('mensajes')->where('destinatario', '=', "$me")->get();
        return view('message', ['mensajes' => $mensajes]);
    }
}
