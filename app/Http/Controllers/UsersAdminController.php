<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use DB;

use Exception;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $path = '/admin_users';

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin_rol');
    }

    public function index()
    {
        $users = DB::table('users')->orderBy('entidad')->get();
        return view($this->path.'/admin_users')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'/create_users');
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
            'nombre' => 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellido'=> 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'email' => 'required|email|max:255|unique:users',
            'direccion'=> 'required|max:255',
            'dui'=> 'required|digitS:9|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        try{
            $user = new User();

            $user->nombre = $request->nombre;
            $user->apellido = $request->apellido;
            $user->dui = $request->dui;
            $user->fecha_nacimiento = $request->fecha;
            $user->direccion = $request->direccion;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->rol = $request->rol;
            if($request->rol == 2){
                $user->entidad = $request->entidad;
            }
            if($request->verified){
                $user->verified = $request->verified;
            }else{
                $user->verified = 0;
            }
            
            $user->save();
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
            $user = User::findOrFail($id);

            return view($this->path.'/edit_users')->with("user",$user);
        }catch(Exception $e){
            return "Error al intentar modificar el Usuario".$e->getMessage();
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
            'nombre' => 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'apellido'=> 'required|max:75|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
            'email' => 'required|email|max:255',
            'direccion'=> 'required|max:255',
            'dui'=> 'required|digitS:9',
            'password' => 'min:6',
        ]);
        try{
            $user = User::findOrFail($id);

            $user->nombre = $request->nombre;
            $user->apellido = $request->apellido;
            $user->dui = $request->dui;
            $user->fecha_nacimiento = $request->fecha;
            $user->direccion = $request->direccion;
            $user->email = $request->email;
            if($request->password != null){
                $user->password = bcrypt($request->password);
            }      
            $user->rol = $request->rol;
            if($request->rol == 2){
                $user->entidad = $request->entidad;
            }
            if($request->verified){
                $user->verified = $request->verified;
            }else{
                $user->verified = 0;
            }
            
            $user->save();
            return redirect($this->path);
        }catch(Exception $e){
            return "Fatal error - ".$e->getMessage();
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
            $user = User::findOrFail($id);
            $user->delete();
            return redirect($this->path);
        }catch(Exception $e){
            return "No se pudo eliminar el Usuario Especificado";
        }
    }
}
