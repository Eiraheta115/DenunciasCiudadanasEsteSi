<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class EstadisticasController extends Controller
{
    private $path = '/estadisticas';

    function index(){
        return view($this->path);
    }

    function recibir(Request $request){
        $acont = DB::table('acontecimientos')->where('id_acontecimiento',$request->acontecimiento)->select('nombre_acontecimiento')->get();
        switch($request->categoria){
            case 1:
                $datos = $this->totalDepartamentos($request->acontecimiento);
                return view('estadisticas',['datos' => $datos,'categoria' => 'Departamentos','acontecimiento' => $acont]);
            break;
            case 2:
                $datos = $this->totalMunicipios($request->acontecimiento);
                return view('estadisticas',['datos' => $datos,'categoria' => 'Municipios','acontecimiento' => $acont]);
            break;
            case 3:
                $datos = $this->totalXDepar($request->acontecimiento, $request->departamentos);
                return view('estadisticas',['datos' => $datos,'categoria' => 'Departamento','acontecimiento' => $acont]);
            break;
        }
        return "Error al consultar estadisticas";
    }

    function totalMunicipios($acont){
        $munis = DB::table('denuncias')
                ->join('municipios','denuncias.id_municipio','=','municipios.id_municipio')
                ->join('acontecimientos', function($join) use($acont){
                    $join->on('denuncias.id_acontecimiento','=','acontecimientos.id_acontecimiento')
                        ->where('denuncias.id_acontecimiento','=',$acont);
                })
                ->select(DB::raw('municipios.nombre_municipio ,count(denuncias.id_municipio)'))
                ->groupBy('municipios.nombre_municipio')->get();
        return $munis;
    }

    function totalDepartamentos($acont){
        $depar = DB::table('denuncias')
                ->join('municipios','denuncias.id_municipio','=','municipios.id_municipio')
                ->join('acontecimientos', function($join) use($acont){
                    $join->on('denuncias.id_acontecimiento','=','acontecimientos.id_acontecimiento')
                        ->where('denuncias.id_acontecimiento','=',$acont);
                })
                ->join('departamentos','municipios.id_departamento','=','departamentos.id_departamento')
                ->select(DB::raw('departamentos.nombre_departamento ,count(denuncias.id_municipio)'))
                ->groupBy('departamentos.nombre_departamento')->get();
        return $depar;
    }

    function totalXDepar($acont,$depar){
        $deparX = DB::table('denuncias')
                ->join('municipios','denuncias.id_municipio','=','municipios.id_municipio')
                ->join('acontecimientos', function($join) use($acont){
                    $join->on('denuncias.id_acontecimiento','=','acontecimientos.id_acontecimiento')
                        ->where('denuncias.id_acontecimiento','=',$acont);
                })
                ->join('departamentos',function($join) use($depar){
                    $join->on('municipios.id_departamento','=','departamentos.id_departamento')
                        ->where('municipios.id_departamento','=',$depar);
                })
                ->select(DB::raw('municipios.nombre_municipio ,count(denuncias.id_municipio)'))
                ->groupBy('municipios.nombre_municipio')->get();
        return $deparX;
    }
}
