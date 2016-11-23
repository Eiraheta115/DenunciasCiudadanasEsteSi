@extends('layouts/principal')

@section('contenido_admin')

<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelAdminUsers">
                <div class="row">
                    <div class="col-md-11 col-lg-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Administración de Entidades</div>
                                <div class="panel-body">

                    <div class="col-lg-8 col-lg-offset-2">
                        <h1 style="display: inline;">Gestionar Entidades</h1>
                        <a href="{{ route('admin_entidades.create')}}" class="btn btn-primary btn-sm">Crear Entidad</a>
                        <br><br>
                        @if($entidades)   
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Entidad</th>
                                        <th>Nombre de la Entidad</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entidades as $entidad)
                                    <tr>
                                        <td> {{ $entidad->id_entidad }} </td>
                                        <td> {{ $entidad->nombre_entidad }} </td>
                                        <td>
                                            <a href="{{ route('admin_entidades.edit',$entidad->id_entidad) }}" class="btn btn-info btn-sm">Editar</a>
                                            <form method="POST" action="{{ route('admin_entidades.destroy', $entidad->id_entidad) }} " style='display: inline;'>
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
                        
                        @else {{ 'No hay Entidades registradas.' }}   @endif               
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