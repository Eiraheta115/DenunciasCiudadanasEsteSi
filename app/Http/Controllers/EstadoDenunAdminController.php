<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\EstadoDenuncia;

use Exception;

class EstadoDenunAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $path = '/admin_estados';

    public function index()
    {
        $estados = EstadoDenuncia::all();

        return view($this->path.'/admin_estados')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'/create_estados');
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
            'nombre_estado' => 'required|max:30|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'descripcion_estado' => 'required|max:255|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);

        try{
            $n_estado = new EstadoDenuncia();

            $n_estado->nombre_estado = $request->nombre_estado;
            $n_estado->descripcion_estado = $request->descripcion_estado;
            $n_estado->save();

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
            $estado = EstadoDenuncia::findOrFail($id);

            return view($this->path.'/edit_estados')->with('estado',$estado);

        }catch(Exception $e){
             return "Error al intentar modificar el Estado de Denuncias. Puede que no exista o ya fue borrada";
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
            'nombre_estado' => 'required|max:30|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'descripcion_estado' => 'required|max:255|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
        ]);
        
        try{
            $estado = EstadoDenuncia::findOrFail($id);
            $estado->nombre_estado = $request->nombre_estado;
            $estado->descripcion_estado = $request->descripcion_estado;
            $estado->save();

            return redirect($this->path);

        }catch(Exception $e){
             return "Error al intentar Actualizar el Estado de Denuncia. No coindide con los registros";
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
            $estado = EstadoDenuncia::findOrFail($id);
            $estado->delete();
            return redirect($this->path);
        }catch(Exception $e){
            return "No se pudo eliminar el Estado de Denuncia";
        }
    }
}
