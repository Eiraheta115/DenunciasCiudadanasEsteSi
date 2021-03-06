@extends('layouts/principal')

@section('contenido_admin')

<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelAdminUsers">
                <div class="row">
                    <div class="col-md-11 col-lg-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Administración de Acontecimientos</div>
                                <div class="panel-body">

                    <div class="col-lg-11 col-lg-offset-1">
                        <h1 style="display: inline;">Gestionar Acontecimientos</h1>
                        <a href="{{ route('admin_acontecimientos.create')}}" class="btn btn-primary btn-sm">Crear Acontecimiento</a>
                        <br><br>
                        @if($acontecimientos)   
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Acontecimiento</th>
                                        <th>Nombre del Acontecimiento</th>
                                        <th>Entidad Responsable</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($acontecimientos as $acontecimiento)
                                    <tr>
                                        <td> {{ $acontecimiento->id_acontecimiento }} </td>
                                        <td> {{ $acontecimiento->nombre_acontecimiento }} </td>
                                         @foreach(DB::table('entidades')->where('id_entidad', $acontecimiento->id_entidad)->select('nombre_entidad')->get() as $entidad_actual)
                                            <td> {{ $entidad_actual->nombre_entidad }} </td>
                                        @endforeach
                                        <td>
                                            <a href="{{ route('admin_acontecimientos.edit',$acontecimiento->id_acontecimiento) }}" class="btn btn-info btn-sm">Editar</a>
                                            <form method="POST" action="{{ route('admin_acontecimientos.destroy', $acontecimiento->id_acontecimiento) }} " style='display: inline;'>
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
                        
                        @else {{ 'No hay Acontecimientos registradas.' }}   @endif               
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