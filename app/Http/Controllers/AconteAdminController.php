<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Acontecimiento;

use Exception;

class AconteAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $path = '/admin_acontecimientos';

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin_rol');
    }

    public function index()
    {
        $acontecimiento = Acontecimiento::all();

        return view($this->path.'/admin_acont')->with('acontecimientos',$acontecimiento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'/create_acont');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre_acontecimiento' => 'required|unique:acontecimientos|max:30|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);
               
        try{
            $n_acont = new Acontecimiento();

            $n_acont->nombre_acontecimiento = $request->nombre_acontecimiento;
            $n_acont->id_entidad = $request->entidad;
            $n_acont->save();

            return redirect($this->path);
        }catch(Exception $e){
            return "Fatal error - ".$e->getMessage();
        }
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
        try{
            $n_acont = Acontecimiento::findOrFail($id);

            return view($this->path.'/edit_acont')->with('acontecimiento',$n_acont);

        }catch(Exception $e){
             return "Error al intentar modificar el Acontecimiento. Puede que no exista o ya fue borrada";
        }  
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
        $this->validate($request,[
            'nombre_acontecimiento' => 'required|max:30|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]); 
         
        try{
            $acontecimiento = Acontecimiento::findOrFail($id);
            $acontecimiento->nombre_acontecimiento = $request->nombre_acontecimiento;
            $acontecimiento->id_entidad = $request->entidad;
            $acontecimiento->save();

            return redirect($this->path);

        }catch(Exception $e){
             return "Error al intentar Actualizar el acontecimiento. No coindide con los registros".$e->getMessage();
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
        try{
            $acontecimiento = Acontecimiento::findOrFail($id);
            $acontecimiento->delete();
            return redirect($this->path);
        }catch(Exception $e){
            return "No se pudo eliminar el Acontecimiento";
        }
    }
}
