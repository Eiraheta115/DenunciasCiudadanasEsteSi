<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notificacion;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Denuncia;
use App\User;
use App\Municipio;
use App\Departamento;
use App\Acontecimiento;
use App\EstadoDenuncia;
use Auth;
use DB;
use Exception;
class DetallesDenunciaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('evalu_denun_rol');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/bandeja');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $denuncia = Denuncia::findOrFail($id);
            if($denuncia->id_entidad == Auth::user()->entidad){
                $user = User::findOrFail($denuncia->id_user);
                $acont = Acontecimiento::findOrFail($denuncia->id_acontecimiento);
                $muni = Municipio::findOrFail($denuncia->id_municipio);
                $depar = Departamento::findOrFail($muni->id_departamento);
                $estado = EstadoDenuncia::findOrFail($denuncia->id_estado);
                $actu_estados = DB::table('estado_denuncias')->where('id_estado','>',$estado->id_estado)->get();
                return view('/detalles_denuncia',['denuncia'=>$denuncia,'usuario'=>$user,
                'acontecimiento'=>$acont,'muni'=>$muni,'depar'=>$depar,'estado'=>$estado,
                'actu_estados'=>$actu_estados]);
            }
            return "Acceso denegado a la denuncia solicitada";
            
        }catch(Exeption $e){
            return "Error en leer detalles de la denuncia".$e->getMessage();
        }
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
       // $this->validate($request,[
         //   'observaciones' => 'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        //]);
        
        try{
            $denuncia = Denuncia::findOrFail($id);
            if($request->estado != 0){
                $denuncia->id_estado = $request->estado;
                $denuncia->save();
                $this->notificar($id, $denuncia->id_user, $request);
            }
            return redirect('/bandeja');
        }catch(Exception $e){
            return "Error al intentar modificar el estado de la denuncia".$e->getMessage();
        }
    }

    public function notificar($id_denun, $id_user, $request){
        try{
            $user = User::findOrFail($id_user);
            $denuncia = Denuncia::findOrFail($id_denun);
            Mail::to($user->email)->send(new Notificacion($denuncia, $request->observaciones));
            
            return redirect('/bandeja');
            
        }catch(Exception $e){
            return "No se pudo notificar al usuario".$e->getMessage();
        }
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
