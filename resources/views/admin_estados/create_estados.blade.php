@extends('layouts/principal')

@section('contenido_admin')


        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelCrearUser">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Crear Estado de Denuncia</div>
                                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/admin_estados">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('nombre_estado') ? ' has-error' : '' }}">
                                <label for="nombre_estado" class="col-lg-3 control-label">Nombre del Estado</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="nombre_estado" id="nombre_estado" placeholder="Nombre del Estado">
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
                                    <textarea class="form-control" rows="3" name="descripcion_estado" id="descripcion_estado" placeholder="Descripcion del Estado"></textarea>
                                    @if ($errors->has('descripcion_estado'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('descripcion_estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ url('/admin_estados') }}" class="btn btn-danger">Cancelar</a>
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