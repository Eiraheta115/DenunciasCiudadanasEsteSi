<?php
    use App\Entidad;
    use App\Rol;
?>
@extends('layouts/principal')

@section('contenido_admin')
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

        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelCrearUser">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Crear Usuario</div>
                                <div class="panel-body">
                
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Gestionar Usuarios</h1>                 
                    </div>
              
                
                    <div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" name="regis" role="form" method="POST" action="/admin_users">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

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
                                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

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
                                        <input id="dui" type="text" class="form-control" name="dui" value="{{ old('dui') }}" autofocus>

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
                                        <input id="fecha" type="date" class="form-control" name="fecha" value="{{ old('fecha') }}" required autofocus>

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
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

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
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirmación de Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                            <!--lista despl -->
                            <div class="form-group">
                                <label for="rol" class="col-lg-4 control-label">Rol de Usuario</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="rol" id="rol" onchange="ocul()">
                                        @foreach(Rol::all() as $roles)
                                            <option  value='{{ $roles->id_rol }}'> {{ $roles->nombre_rol }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" style='display: none;' id='entidad_container'>
                                <label for="entidad" class="col-lg-4 control-label">Entidad Responsable</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="entidad" id="entidad" >
                                        @foreach(Entidad::all() as $entidad)
                                            <option  value='{{ $entidad->id_entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id='verificado'>
                                <label for="verified" class="col-lg-4 control-label">Verificado</label>
                                <div class="col-lg-1">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="verified" id="verified">
                                        </label>
                                    </div>
                                </div>
                            </div>                             

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ url('/admin_users') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </di>
                    </di>
                    </di>
                    </di>
                    </di>
                    </di>
                    </di>
                    </di>
                    </di>
                
            

@endsection