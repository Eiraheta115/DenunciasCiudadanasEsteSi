@extends('barras/barra_lateral')

@extends('barras/barra_admin_sistema')

@section('contenido')

        <div class="container">
                <div class="row">
                    <div class="col-lg-13">
                        <h1 style="display: inline;">Gestionar Usuarios</h1>
                        <a href="{{ route('admin_users.create')}}" class="btn btn-primary btn-sm">Crear Usuario</a>
                        <br><br>
                        @if($users)   
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Usuario</th>
                                        <th>Nombre Usuario</th>
                                        <th>Apellido Usuario</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Entidad</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->nombre }} </td>
                                        <td> {{ $user->apellido }} </td>
                                        <td>{{$user->email}}</td>
                                        @foreach(DB::table('roles')->where('id_rol',$user->rol)->select('nombre_rol')->get() as $rol)
                                            <td> {{ $rol->nombre_rol }} </td>
                                        @endforeach

                                        @foreach(DB::table('entidades')->where('id_entidad',$user->entidad)->select('nombre_entidad')->get() as $entidad)
                                            <td> {{ $entidad->nombre_entidad }} </td>
                                        @endforeach

                                        @if(!$user->entidad)
                                            <td> {{ "No aplica." }} </td>
                                        @endif

                                        @if($user->verified)
                                            <td>{{"Verificado"}}</td>
                                        @else
                                            <td>{{"No verificado"}}</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin_users.edit',$user->id) }}" class="btn btn-info btn-sm">Editar</a>
                                            <form method="POST" action="{{ route('admin_users.destroy', $user->id) }} " style='display: inline;'>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>  
                        
                        @else {{ 'No Hay Usuarios Registrados.' }}   @endif               
                    </div>
                </div>
            </div>

@endsection