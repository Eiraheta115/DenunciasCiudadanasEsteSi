@extends('barras/barra_lateral')

@extends('barras/barra_admin_sistema')

@section('contenido')

        <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-3">
                        <h1>Gestión de Usuarios</h1>
                        @if($user)  
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Datos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$user->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>{{$user->nombre}}</td>
                                        </tr>
                                        <tr>
                                            <td>Apellido</td>
                                            <td>{{$user->apellido}}</td>
                                        </tr>
                                        <tr>
                                            <td>DUI</td>
                                            <td>{{$user->dui}}</td>
                                        </tr>
                                        <tr>
                                            <td>Fecha nacimiento</td>
                                            <td>{{$user->fecha_nacimiento}}</td>
                                        </tr>
                                        <tr>
                                        <td>Dirección</td>
                                        <td>{{$user->direccion}}</td>
                                        </tr>
                                        <tr>
                                            <td>Correo</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Rol</td>
                                            @foreach(DB::table('roles')->where('id_rol',$user->rol)->select('nombre_rol')->get() as $rol)
                                                <td>{{$rol->nombre_rol}}</td>
                                            @endforeach
                                        </tr>
                                        @if($user->rol == 2)
                                            <tr>
                                            <td>Entidad</td>
                                            @foreach(DB::table('entidades')->where('id_entidad',$user->entidad)->select('nombre_entidad')->get() as $enti)
                                                <td>{{$enti->nombre_entidad}}</td>
                                            @endforeach
                                        @endif
                                            </tr>
                                        <tr>
                                            <td>Estado</td>
                                            @if($user->verified)
                                                <td>{{"Verificado"}}</td>
                                            @else
                                                <td>{{"Sin verificar"}}</td>
                                            @endif
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>  
                        @else
                            {{"No existe este usuario"}}
                        @endif
                        <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-3">
                                    <a href="{{ url('/admin_users') }}" class="btn btn-primary">Regresar</a>
                                </div>
                                <div class="col-lg-5">
                                    <a href="{{ route('admin_users.edit',$user->id) }}" class="btn btn-info btn">Editar</a>
                                </div>
                            </div>           
                    </div>
                </div>
            </div>

@endsection