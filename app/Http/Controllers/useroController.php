<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Exception;

class useroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }
    public function editar(){
     return view('home')->with(['edit'=>true]);
   }

   public function guardar(Request $request, $id){
  $this->validate($request,[
    'nombre' => 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
    'apellido'=> 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
    'email' => 'required|email|max:255|unique:users',
    'direccion'=> 'required|max:255',
    'dui'=> 'required|digitS:9|unique:users',
    //'password' => 'required|min:6|confirmed',
      ]);
      try{
          $user = User::findOrFail($id);

          $user->nombre = $request->nombre;
          $user->apellido = $request->apellido;
          $user->dui = $request->dui;
          $user->fecha_nacimiento = $request->fecha;
          $user->direccion = $request->direccion;
          $user->email = $request->email;
          $user->save();
          return view('/home')->with(['edit'=>false]);
      }catch(Exception $e){
          return "Fatal error - ".$e->getMessage();
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
