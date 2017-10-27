<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectController extends Controller
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
    public function proyect()
    {
        return view('proyect');
    }
    public function new()
    {
        return view('newproyect');
    }
    public function team()
    {
        $nombreP = $_POST['proyectName'];
        $descriptionP = $_POST['proyectDescription'];
        $spectsP = $_POST['proyectSpects'];
        $membersP = $_POST['proyectMembers'];
        $tagsP = $_POST['proyectTags'];
        $users = DB::table('users')->pluck('name');
        DB::table('proyecto')->insert([
            'nombre' => $nombreP,
            'descripcion' => $descriptionP,
            'especificaciones' => $spectsP,
            'integrantes' => $membersP,
            'tags' => $tagsP
        ]);
        return view('teamselect', ['users' => $users, 'nombreP' => $nombreP]);
    }
    public function single($nombreP)
    {
        $team = $_POST['member'];
        $teamJS = json_encode($team);
        DB::table('proyecto')->where('nombre', '=', "$nombreP")->update([
            'team' => $teamJS,
        ]);
        $proyect = DB::table('proyecto')->where('nombre', '=', "$nombreP")->get();
        $proyect = json_decode($proyect, true);
        return view('singleproyect',['nombreP' => $nombreP, 'proyect' => $proyect]);
    }
}
