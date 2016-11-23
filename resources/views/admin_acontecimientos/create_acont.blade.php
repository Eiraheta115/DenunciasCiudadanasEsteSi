<?php
use App\Entidad;
?>
@extends('layouts/principal')

@section('contenido_admin')


        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelCrearUser">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Crear Acontecimiento</div>
                                <div class="panel-body">
                 <div class="col-lg-10 col-lg-offset-2">
                        <form class="form-horizontal" role="form" method="POST" action="/admin_acontecimientos">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('nombre_acontecimiento') ? ' has-error' : '' }}">
                                <label for="nombre_acontecimiento" class="col-lg-3 control-label">Nombre del Acontecimiento</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" name="nombre_acontecimiento" id="nombre_acontecimiento" placeholder="Nombre del Acontecimiento">
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
                                        @foreach(Entidad::all() as $entidad)
                                            <option  value='{{ $entidad->id_entidad }}'> {{ $entidad->nombre_entidad }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-2">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ url('/admin_acontecimientos') }}" class="btn btn-danger">Cancelar</a>
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
</di>
                
            

@endsection