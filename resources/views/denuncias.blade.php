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
                        <form>
                            <div class="form-group"> <!-- Denuncia -->
                                <label for="state_id" class="control-label">Tipo de Denuncia</label>
                                <select class="form-control" id="state_id">
                                    <option value="AC">Acoso Sexual</option>
                                    <option value="RO">Robo</option>
                                    <option value="AS">Asesinato</option>
                                    <option value="AB">Abuso Sexual</option>
                                    <option value="AC">Actos Inmorales</option>
                                    <option value="NE">Negligencia Medica</option>
                                    <option value="IN">Incendio</option>
                                </select>                    
                            </div>
                            <div class="row ">
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <span class="help-block text-muted small-font" ><label for="fecha_id" class="control-label">Fecha</label></span>
                                    <input type="text" class="form-control" placeholder="fecha" />
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <span class="help-block text-muted small-font" ><label for="hora_id" class="control-label">Hora</label></span>
                                    <input type="text" class="form-control" placeholder="YY" />
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <span class="help-block text-muted small-font" ><label for="fechaAcon_id" class="control-label">Fecha de Acontecimiento</label></span>
                                    <input type="text" class="form-control" placeholder="CCV" />
                                </div>
                            </div>
                            <div class="form-group"> <!-- Elija Municipio-->
                                <label for="municipio_id" class="control-label">Municipio</label>
                                <select class="form-control" id="municipio_id">
                                    <option value="Soyapango">Soyapango</option>
                                    <option value="Soyapango">San Salvador</option>
                                    <option value="Mejicanos">Mejicanos</option>
                                </select>  
                            </div>
                            <div class="form-group"> <!-- Elija Departamento-->
                                <label for="fechaAcon_id" class="control-label">Departamento</label>
                                <select class="form-control" id="state_id">
                                    <option value="Soyapango">La Libertad</option>
                                    <option value="Soyapango">Sonsonate</option>
                                    <option value="Mejicanos">San Miguel</option>
                                </select>  
                            </div> 
                            <div class="form-group"> <!-- descripcion-->
                                <label for="multi_id" class="control-label">Descripcion</label>
                                <input type="text" class="form-control" id="multi_id" name="descripcion" placeholder="">
                            </div>
                            <div class="form-group"> <!-- descripcion-->
                                <label for="multi_id" class="control-label">Multimedia</label>
                                <input type="text" class="form-control" id="multi_id" name="multimedia" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar Denuncia</button> 
                        </form>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection