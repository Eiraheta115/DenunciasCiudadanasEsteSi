<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Entidad;

use Exception;

class EntidadesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $path = '/admin_entidades';


    public function index()
    {
        $entidades = Entidad::all();

        return view($this->path.'/admin_entidades')->with('entidades',$entidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'/create_entidades');
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
            'nombre_entidad' => 'required|max:150|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);
        
        try{
            $n_entidad = new Entidad();

            $n_entidad->nombre_entidad = $request->nombre_entidad;
            $n_entidad->save();

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
            $entidad = Entidad::findOrFail($id);

            return view($this->path.'/edit_entidades')->with('entidad',$entidad);

        }catch(Exception $e){
             return "Error al intentar modificar la Entidad. Puede que no exista o ya fue borrada";
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
            'nombre_entidad' => 'required|max:150|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);
        
        try{
            $entidad = Entidad::findOrFail($id);
            $entidad->nombre_entidad = $request->nombre_entidad;
            $entidad->save();

            return redirect($this->path);

        }catch(Exception $e){
             return "Error al intentar Actualizar la entidad. No coindide con los registros";
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
            $entidad = Entidad::findOrFail($id);
            $entidad->delete();
            return redirect($this->path);
        }catch(Exception $e){
            return "No se pudo eliminar la Entidad";
        }
    }
}
