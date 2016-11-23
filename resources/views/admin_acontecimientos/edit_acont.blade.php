@extends('barras/barra_lateral')
@extends('layouts/principal')

@section('contenido_admin')
<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelEditUser">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edición de Acontecimientos</div>
                                <div class="panel-body">
<div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="/admin_acontecimientos/{{ $acontecimiento->id_acontecimiento }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('nombre_acontecimiento') ? ' has-error' : '' }}">
                                <label for="nombre_acontecimiento" class="col-lg-3 control-label">Nombre del Acontecimiento</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="nombre_acontecimiento" id="nombre_acontecimiento" value="{{ $acontecimiento->nombre_acontecimiento }}" placeholder="Nombre Acontecimiento">
                                    @if ($errors->has('nombre_acontecimiento'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nombre_acontecimiento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="entidad" class="col-lg-3 control-label">Entidad Responsable</label>
                                <div class="col-lg-7">
                                    <select class="form-control" name="entidad" id="entidad">
                                       @foreach(DB::table('entidades')->where('id_entidad', $acontecimiento->id_entidad)->select('id_entidad', 'nombre_entidad')->get() as $entidad)
                                            <option value='{{ $entidad->id_entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                       @endforeach

                                       @foreach(DB::table('entidades')->where('id_entidad','<>', $acontecimiento->id_entidad)->select('id_entidad', 'nombre_entidad')->get() as $entidad)
                                            <option value='{{ $entidad->id_entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <button type="submit" class="btn btn-info">Actualizar</button>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ url('/admin_acontecimientos') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </di>
                    </div>
                </div>
            </div>
            </div>
                </div>
            </div>
            </div>
                </div>
            </div>

@endsection