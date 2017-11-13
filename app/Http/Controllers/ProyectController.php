<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        $proyectos = DB::table('proyecto')->get();
        return view('proyect', ['proyectos' => $proyectos]);
    }
    public function new()
    {
        return view('newproyect');
    }
    public function team()
    {
        $me = Auth::user()->name;
        $nombreP = $_POST['proyectName'];
        $descriptionP = $_POST['proyectDescription'];
        $spectsP = $_POST['proyectSpects'];
        $membersP = $_POST['proyectMembers'];
        $tagsP = $_POST['proyectTags'];
        $users = DB::table('users')->pluck('name');
        $users = json_encode($users);
        DB::table('proyecto')->insert([
            'nombre' => $nombreP,
            'lider' => $me,
            'descripcion' => $descriptionP,
            'especificaciones' => $spectsP,
            'integrantes' => $membersP,
            'tags' => $tagsP
        ]);
        return view('loading-team', ['users' => $users, 'nombreP' => $nombreP, 'miembros'=> $membersP ]);
    }
    public function single($nombreP)
    {
        if (isset($_POST['member'])) {
            $team = $_POST['member'];            
            $teamJS = json_encode($team);
            DB::table('proyecto')->where('nombre', '=', "$nombreP")->update([
                'team' => $teamJS,
            ]);
        }
        $proyect = DB::table('proyecto')->where('nombre', '=', "$nombreP")->get();
        $proyect = json_decode($proyect, true);
        return view('singleproyect',['nombreP' => $nombreP, 'proyect' => $proyect]);
    }

    public function evaluar()
    {
        if (isset($_POST['idm'])) {
            $idm = ($_POST['idm']);
            DB::table('mensajes')->where('id', '=', "$idm")->delete();
        } 
        $id = $_POST['id'];  
        $proyecto = DB::table('proyecto')->where('id', '=', "$id")->get();
        $proyecto = json_decode($proyecto, true);
        return view('evaluacion', ['proyecto' => $proyecto]);
    }
}
