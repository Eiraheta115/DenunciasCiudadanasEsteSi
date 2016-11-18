@extends('barras/barra_lateral')

@extends('barras/barra_admin_sistema')

@section('contenido')

        <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                        <h1>Gestionar Entidades</h1>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="/admin_entidades/{{ $entidad->id_entidad }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('nombre_entidad') ? ' has-error' : '' }}">
                                <label for="nombre_entidad" class="col-lg-3 control-label">Nombre de la Entidad</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="nombre_entidad" id="nombre_entidad" value="{{ $entidad->nombre_entidad }}" placeholder="Nombre Entidad">
                                    @if ($errors->has('nombre_entidad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nombre_entidad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <button type="submit" class="btn btn-info">Actualizar</button>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ url('/admin_entidades') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </di>
                </div>
            </div>

@endsection