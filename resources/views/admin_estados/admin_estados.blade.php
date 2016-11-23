@extends('layouts/principal')

@section('contenido_admin')

<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelAdminUsers">
                <div class="row">
                    <div class="col-md-13">
                        <div class="panel panel-default">
                            <div class="panel-heading">Administración de Estados de Denuncia</div>
                                <div class="panel-body">

                    <div class="col-lg-11 col-lg-offset-1">
                        <h1 style="display: inline;">Gestionar Estados de Denuncia</h1>
                        <a href="{{ route('admin_estados.create')}}" class="btn btn-primary btn-sm">Crear Estado</a>
                        <br><br>
                        @if($estados)   
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Estado</th>
                                        <th>Nombre del Estado</th>
                                        <th>Descripción</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($estados as $estado)
                                    <tr>
                                        <td> {{ $estado->id_estado }} </td>
                                        <td> {{ $estado->nombre_estado }} </td>
                                        <td> {{ $estado->descripcion_estado }} </td>
                                        <td>
                                            <a href="{{ route('admin_estados.edit',$estado->id_estado) }}" class="btn btn-info btn-sm">Editar</a>
                                            <form method="POST" action="{{ route('admin_estados.destroy', $estado->id_estado) }} " style='display: inline;'>
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
                        
                        @else {{ 'No hay Estados de Denuncia Registrados.' }}   @endif               
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