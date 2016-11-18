@extends('barras/barra_lateral')

@extends('barras/barra_admin_sistema')

@section('contenido')

        <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-2">
                        <h1>Gestionar Estados de Denuncia</h1>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="/admin_estados/{{ $estado->id_estado }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('nombre_estado') ? ' has-error' : '' }}">
                                <label for="nombre_estado" class="col-lg-3 control-label">Nombre del Estado</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="nombre_estado" id="nombre_estado" value="{{ $estado->nombre_estado }}" placeholder="Nombre Estado">
                                    @if ($errors->has('nombre_estado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nombre_estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('descripcion_estado') ? ' has-error' : '' }}">
                                <label for="descripcion_estado" class="col-lg-3 control-label">Descripción del Estado</label>
                                <div class="col-lg-7">
                                    <textarea class="form-control" name="descripcion_estado" id="descripcion_estado" placeholder="Descripción del Estado">{{ $estado->descripcion_estado }}</textarea>
                                    @if ($errors->has('descripcion_estado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descripcion_estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <button type="submit" class="btn btn-info">Actualizar</button>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ url('/admin_estados') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </di>
                </div>
            </div>

@endsection