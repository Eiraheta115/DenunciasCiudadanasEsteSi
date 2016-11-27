<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Denuncia;

use App\Multimedia;

use Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;



class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        $this->middleware('auth');
        $this->middleware('user_rol');
    }

    public function index()
    {
        return view('denuncias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //Insertar datos en Tabla denuncias
        $idusuario = auth()->user()->id;
        $denuncia = new Denuncia(); 
        $denuncia->descripcion_denuncia = $request->descripcion_denuncia;
        $denuncia->fecha_hora = $request->fecha;
        $denuncia->id_user = $idusuario;
        $denuncia->id_municipio = $request->id_municipio;
        $denuncia->id_acontecimiento = $request->id_acontecimiento;
        
         

        
       $id_acontecimiento =  $request->id_acontecimiento;
        $id_entidad = DB::table('acontecimientos')
        ->where('id_acontecimiento','=',$id_acontecimiento)
        ->value('id_entidad');
        $denuncia->id_entidad = $id_entidad; 
        

        $denuncia->save();
        
        //Insertar datos en tabla multimedias
        $multimedia = new Multimedia();
        $multimedia->tipo_multimedia = $request->tipo_multimedia;
        $archivo = $request->file('nombre_multimedia');
        $ruta_archivo =  time().'_'.$archivo->getClientOriginalName();
        Storage::disk('archivo_multimedia')
        ->put($ruta_archivo, file_get_contents($archivo->getRealPath() ));
        $multimedia->nombre_multimedia = $ruta_archivo; 
        $multimedia->id_denuncia = DB::table('denuncias')
        ->orderby('created_at','DESC')
        ->value('id_denuncia');
        $multimedia->save();
        return Redirect::to('/denuncias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

