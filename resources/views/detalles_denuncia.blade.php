@extends('/layouts/principal')

@section('contenido_evaluador')

<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelDetallesDenuncia">
                <div class="row">
                    <div class="col-md-8 col-lg-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Detalles de Denuncia</div>
                                <div class="panel-body">
                                    <div class="col-lg-11 col-lg-offset-1">
                        <h1>Detalles de Denuncia</h1>
                <div class="col-lg-9 col-lg-offset-1"> 
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Apartado</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>ID Denuncia</th>
                                            <td>{{$denuncia->id_denuncia}}</td>
                                        </tr>
                                        <tr>
                                            <th>Usuario</th>
                                            <td>{{$usuario->nombre.' '.$usuario->apellido}}</td>
                                        </tr>
                                        <tr>
                                            <th>Acontecimiento</th>
                                            <td>{{$acontecimiento->nombre_acontecimiento}}</td>
                                        </tr>
                                        <tr>
                                            <th>Departamento</th>
                                            <td>{{$depar->nombre_departamento}}</td>
                                        </tr>
                                        <tr>
                                            <th>Municipio</th>
                                            <td>{{$muni->nombre_municipio}}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha del suceso</th>
                                            <td>{{$denuncia->fecha_hora}}</td>
                                        </tr>
                                        <tr>
                                            <th>Fecha recibida</th>
                                            <td>{{$denuncia->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Descripción</th>
                                            <td>{{$denuncia->descripcion_denuncia}}</td>
                                        </tr>
                                        <tr>
                                            <th>Estado</th>
                                            <td>{{$estado->nombre_estado}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        <form class="form-horizontal" name="det" role="form" method="POST" action="/detalles/{{$denuncia->id_denuncia}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="estado" class="col-lg-4 control-label">Cambiar Estado</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="estado" id="estado">
                                        <option value="0">---</option>
                                        @foreach($actu_estados as $actu)
                                        <option value="{{$actu->id_estado}}">{{$actu->nombre_estado}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group{{ $errors->has('observaciones') ? ' has-error' : '' }}">
                                <label for="observaciones" class="col-lg-4 control-label">Observaciones:</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="7" name="observaciones" id="observaciones"></textarea>
                                        @if ($errors->has('observaciones'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('observaciones') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-2">
                                    <button type="submit" class="btn btn-info">Actualizar</button>
                                </div>
                                <div class="col-lg-7">
                                    <a href="{{ url('/bandeja') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </form>         
                    </div>           
                                        
                                    </div>
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