<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use DB;

class DenunciasSeguimientoController extends Controller
{
    //Controlador que gestiona la bandeja de entrada de las denuncias con sus respectivas
    //Entidades y rol de usuario

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('evalu_denun_rol');
    }

    public function index(){
        return $this->show($estados = null);
        
    }

    public function show($estados){
        $entidad = Auth::user()->entidad;
        $id_estado = 0;

        switch($estados){
            case "": case "recibidas": $id_estado = 1; break;
            case "aceptadas": $id_estado = 2; break;
            case "investigacion": $id_estado = 3; break;
            case "documentadas": $id_estado = 4; break;
            case "procesadas": $id_estado = 5; break;
            case "cerradas": $id_estado = 6; break;
            case "denegadas": $id_estado = 11; break;

        }

        $consult = $this->consultas($id_estado, $entidad);

        return view('bandeja_denuncias')->with('result', $consult);
    }

    //funcion que realiza las consultas a la base de datos
    public function consultas($id_estado, $id_entidad){
        $denuncia = DB::table('denuncias')
                        ->join('users','denuncias.id_user','=','users.id')
                        ->join('acontecimientos','denuncias.id_acontecimiento','=','acontecimientos.id_acontecimiento')
                        ->join('estado_denuncias', function($join) use($id_estado){
                            $join->on('denuncias.id_estado','=','estado_denuncias.id_estado')
                                ->where('denuncias.id_estado','=', $id_estado);
                        })
                        ->join('entidades', function($join) use($id_entidad){
                            $join->on('denuncias.id_entidad','=','entidades.id_entidad')
                            ->where('denuncias.id_entidad','=', $id_entidad);
                        })
                        ->select('users.nombre','users.apellido','acontecimientos.nombre_acontecimiento','estado_denuncias.nombre_estado','denuncias.created_at','id_denuncia')
                        ->orderBy('denuncias.created_at','asc')
                        ->get();
        return $denuncia;
    }
}
