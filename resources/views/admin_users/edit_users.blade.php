<?php
    use App\Entidad;
    use App\Rol;
?>
@extends('barras/barra_lateral')

@extends('barras/barra_admin_sistema')


@section('contenido')
    <script type="text/javascript">

function ocul(){
    var rol = document.getElementById('rol').value;
    if(rol == '2'){
        document.getElementById('entidad_container').style.display='block';
    }else{
        document.getElementById('entidad_container').style.display='none';
    }
}

</script>

        <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                        <h1>Gestionar Usuarios</h1>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" name="regis" role="form" method="POST" action="/admin_users/{{$user->id}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $user->nombre }}" required autofocus>

                                            @if ($errors->has('nombre'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nombre') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                            </div>

                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                <label for="apellido" class="col-md-4 control-label">Apellido</label>

                                    <div class="col-md-6">
                                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ $user->apellido }}" required>

                                            @if ($errors->has('apellido'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('apellido') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                            </div>

                            <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                                <label for="dui" class="col-md-4 control-label">DUI</label>

                                    <div class="col-md-6">
                                        <input id="dui" type="text" class="form-control" name="dui" value="{{ $user->dui }}" autofocus>

                                            @if ($errors->has('dui'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dui') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                            </div>

                            <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                                <label for="fecha" class="col-md-4 control-label">Fecha nacimiento</label>

                                    <div class="col-md-6">
                                        <input id="fecha" type="date" class="form-control" name="fecha" value="{{ $user->fecha_nacimiento }}" required>

                                            @if ($errors->has('fecha'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('fecha') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                            </div>

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $user->direccion }}" required autofocus>

                                    @if ($errors->has('direccion'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            <!--lista despl -->
                            <div class="form-group">
                                <label for="rol" class="col-lg-4 control-label">Rol de Usuario</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="rol" id="rol" onchange="ocul()">
                                        @foreach(DB::table('roles')->where('id_rol',$user->rol)->select('nombre_rol')->get() as $rol)
                                            <option  value='{{ $user->rol }}'> {{ $rol->nombre_rol }} </option>
                                        @endforeach
                                        @foreach(DB::table('roles')->where('id_rol','<>',$user->rol)->select('id_rol','nombre_rol')->get() as $rol)
                                            <option  value='{{ $rol->id_rol }}'> {{ $rol->nombre_rol }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if($user->rol == 2)
                                <div class="form-group" id='entidad_container'>
                            @else
                                <div class="form-group" style='display: none;' id='entidad_container'>
                            @endif
                                <label for="entidad" class="col-lg-4 control-label">Entidad Responsable</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="entidad" id="entidad" >
                                        @foreach(DB::table('entidades')->where('id_entidad',$user->entidad)->select('nombre_entidad')->get() as $entidad)
                                            <option  value='{{ $user->entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                        @endforeach
                                        @foreach(DB::table('entidades')->where('id_entidad','<>',$user->entidad)->select('id_entidad','nombre_entidad')->get() as $entidad)
                                            <option  value='{{ $entidad->id_entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id='verificado'>
                                <label for="verified" class="col-lg-4 control-label">Verificado</label>
                                <div class="col-lg-6">
                                    <div class="checkbox">
                                        <label>
                                            @if($user->verified)
                                            <input type="checkbox" name="verified" id="verified" checked>
                                            @else
                                                <input type="checkbox" name="verified" id="verified">
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>                             

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ url('/admin_users') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </di>
                </div>
            </div>

@endsection