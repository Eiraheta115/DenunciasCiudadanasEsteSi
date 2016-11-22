<?php

use App\Acontecimiento;
use App\Departamento;

?>
<script type="text/javascript">

function ocul(){
    var cate = document.getElementById('categoria').value;
    if(cate == '3'){
        document.getElementById('depar').style.display='inline';
    }else{
        document.getElementById('depar').style.display='none';
    }
}

</script>
<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
    <div class="mbr-box mbr-box--stretched">
        <div class="mbr-box__magnet mbr-box__magnet--center-center">

            <div class="container" id="panelDeEstadisticas">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Estadísticas</div>
                                <div class="panel-body">

                                    <!--Grafica -->
                                    @yield('grafica')
                                    <!--Fin de la grafica -->
                                    <form role="form"  method="POST" action="{{ url( '/estadisticas' ) }}" class="form-inline">
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label for="categoria">Categoría</label>
                                            <select name="categoria" id="categoria" class="form-control" onchange="ocul()">
                                                <option value="1">Todos los departamentos</option>
                                                <option value="2">Todos los municipios</option>
                                                <option value="3">Departamento específico</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="display: none;" id="depar">
                                            <label for="departamentos">Departamentos</label>
                                            <select name="departamentos" id="departamentos" class="form-control">
                                                @foreach(Departamento::all() as $depar)
                                                    <option value="{{$depar->id_departamento}}">{{$depar->nombre_departamento}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="acontecimiento">Acontecimiento</label>
                                            <select name="acontecimiento" id="acontecimiento" class="form-control">
                                                @foreach(Acontecimiento::all() as $acon)
                                                    <option value="{{$acon->id_acontecimiento}}">{{$acon->nombre_acontecimiento}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Consultar" class="btn btn-info">
                                        </div>
                                    </form>
                                    <!--Inicio de tabla de datos-->

                                    @yield('tabla')
                                    <!-- Fin de la tabla -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>