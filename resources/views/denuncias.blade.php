  @extends('layouts.principal')

 @section('contenido_usuario')
 <!-- /Ayuda a visualizar el contenido del panel--><!-- Cuidado no tocar aqui, esto altera el contenido de cada pantalla -->
<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
<div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">

    <div class="container" id="panelDeDenuncia">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Denuncia</div>
                    <div class="panel-body">
                        <form role="form" method="POST"  action="{{ url( 'denuncia' ) }}" enctype="multipart/form-data" >
                               {{ csrf_field() }}
                            <div class="form-group"> <!-- Denuncia -->
                                <label for="id_acontecimiento" class="control-label">Tipo de Denuncia</label>
                                <select class="form-control" name="id_acontecimiento">
                                    <option value="1">Robo</option>
                                    <option value="2">Asesinato</option>
                                    <option value="3">Incendio</option>
                                    <option value="4">Inundación</option>
                                    <option value="5">Pleito en lugar público</option>
                                    <option value="6">Actos Inmorales</option>
                                    <option value="7">Accidente de tránsito</option>
                                    <option value="8">Violencia Intrafamiliar</option>
                                    <option value="9">Acoso Sexual</option>
                                    <option value="10">Partos</option>                                   
                                </select>                    
                            </div>
                            <div class="row ">
                                <!--<div class="col-md-5 col-sm-5 col-xs-5">-->
                                    <span class="help-block text-muted small-font" ><label for="fecha_id" class="control-label">Fecha de Denuncia</label></span>
                                    <input type="text" class="form-control" name="fecha" placeholder="fecha" />
                                </div>
                                <!--<div class="col-md-2 col-sm-2 col-xs-2">
                                    <span class="help-block text-muted small-font" ><label for="hora_id" class="control-label">Hora</label></span>
                                    <input type="text" class="form-control" name="hora" placeholder="YY" />
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <span class="help-block text-muted small-font" ><label for="fechaAcon_id" class="control-label">Fecha de Acontecimiento</label></span>
                                    <input type="text" class="form-control" name="fechaAcontecimiento" placeholder="CCV" />
                                </div>-->
                            </div>
                            <div class="form-group"> <!-- Elija Municipio-->
                                <label for="id_municipio" class="control-label">Municipio</label>
                                <select class="form-control" name="id_municipio">
                                    <option value="1">Apaneca</option>
                                    <option value="2">El Congo</option>
                                    <option value="3">Armenia</option>
                                </select>  
                            </div>
                            <div class="form-group"> <!-- Elija Departamento-->
                                <label for="id_departamento" class="control-label">Departamento</label>
                                <select class="form-control" name="id_departamento">
                                    <option value="1">Ahuachapán</option>
                                    <option value="2">Santa Ana</option>
                                    <option value="3">Sonsonate</option>
                                    <option value="4">Chalatenango</option>
                                    <option value="5">La Libertad</option>
                                    <option value="6">San Salvador</option>
                                    <option value="7">Cuscatlán</option>
                                    <option value="8">La Paz</option>
                                    <option value="9">Cabañas</option>
                                    <option value="10">San Vicente</option>
                                    <option value="11">Usulután</option>
                                    <option value="12">San Miguel</option>
                                    <option value="13">Morazán</option>
                                    <option value="14">La Unión</option>
                                </select>  
                            </div> 
                            <div class="form-group"> <!-- descripcion de denuncia-->
                                <label for="denuncia_id" class="control-label">Descripcion</label>
                                <textarea type="text" class="form-control" id="denuncia_id" name="descripcion_denuncia" placeholder=""></textarea>
                            </div>
                            <div class="form-group"> <!-- Elija tipo de Multimedia-->
                                <label for="tipo_multimedia" class="control-label">Tipo de Multimedia</label>
                                <select class="form-control" name="tipo_multimedia">
                                    <option value="VI">Video</option>
                                    <option value="AU">Audio</option>
                                    <option value="IM">Imagen</option>
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="nombre_multimedia" class="control-label">Archivo Multimedia</label>
                               <input type="file" class="form-control" name="nombre_multimedia">
                            </div>
  
                            <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar Denuncia</button> 
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection