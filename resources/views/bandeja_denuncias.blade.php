
@extends('/layouts/principal')

@section('contenido_evaluador')

<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelBandejaEntrada">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Bandeja de Entrada</div>
                                <div class="panel-body">

  
   
                                    <div class="col-lg-11 col-lg-offset-1">
                                        <h1>Bandeja de Denuncias 

                                        @foreach(DB::table('entidades')->where('id_entidad', Auth::user()->entidad)->select('nombre_entidad')->get() as $entidad_actual)
                                            {{ $entidad_actual->nombre_entidad }}
                                        @endforeach
                        
                                        </h1>   
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                 <thead>
                                    <tr>
                                                        <th>Denunciante</th>
                                                        <th>Asunto de Denuncia</th>
                                                        <th>Estado Actual</th>
                                                        <th>Fecha y Hora</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($result as $fila)

                                                        <tr>
                                                            <td> {{ $fila->nombre.' '.$fila->apellido }} </td>
                                                            <td> {{ $fila->nombre_acontecimiento }} </td>
                                                            <td> {{ $fila->nombre_estado }} </td>
                                                            <td> {{ $fila->created_at }} </td>
                                                            <td> <a href="/detalles/{{$fila->id_denuncia}}" type="button" class="btn btn-info btn-sm ">Ver detalles</a> </td>
                                                        </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
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

