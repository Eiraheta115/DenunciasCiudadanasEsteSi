@extends('layouts.principal')

@section('contenido_usuario')
<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
<div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">

    <div class="container well" id="panel_de_Usuario">
        <div class="row">
                <div class="col-xs-12"><h2>Tu Perfil de Usuario</h2></div>
            </div>
        <br /><br />
        <form class="form-horizontal">
 
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup">Nombre</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" id="formGroup" placeholder="Tu nombre">
                        </div>
                      </div>
 
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup">Apellidos</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" id="formGroup">
                        </div>
                      </div>
 
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup" id="tel">Teléfono</label>
 
                        <div class="input-group col-sm-3">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                          <input class="form-control" type="text" id="formGroup">
                          
                        </div>
                      </div>
 
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup" id="tel">Correo electrónico</label>
                        <div class="input-group col-sm-3">
                          <span class="input-group-addon">@</span>
                          <input class="form-control" type="text" id="formGroup">
                          
                        </div>
                      </div>
 
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup">Información biográfica</label>
                        <div class="col-sm-8">
                          
                          <textarea class="form-control" rows="4" id="formGroup"></textarea>
                          
                        </div>
                      </div>
 
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup">Estado</label>
                        <div class="col-sm-4">
                          
                          <select class="form-control" id="formGroup">
                            <option>En línea</option>
                            <option>Ocupado</option>
                            <option>Ausente</option>
                            <option>Desconectado</option>
                            
                          </select>
                          
                        </div>
                      </form>
                      </div>
                        <br />
 
                        <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup"></label>
                        <div class="col-sm-8">
                          
                            <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
                            
                            <button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
 
 
                        </div>
                      </div>
 </form>
 </div></div>
        </form> 
 
 </div></div>
 
    </div>  
@endsection
