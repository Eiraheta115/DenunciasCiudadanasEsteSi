@extends('layouts.principal')

@section('contenido_usuario')

<link href="{{ '\css/bootstrap.min.css' }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('js/jquery.min.js') }}"> </script>
<div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
<div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">




    <div class="container well" id="panel_de_Usuario">
        <div class="row">
                <div class="col-xs-12"><h2>Tu Perfil de Usuario</h2></div>
            </div>
        <br /><br />
        @if(isset($edit))
        <form class="form-horizontal" method="GET" action="Guardar/{{Auth::user()->id }}">
                  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                  <label class="col-sm-2 control-label" for="formGroup2">Nombre</label>
                  <div class="col-sm-8">
                  <input class="form-control" type="text" id="name" name="nombre" placeholder="{{ Auth::user()->nombre }}" >
                  @if ($errors->has('nombre'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                  @endif
                    </div>
                    </div>

                    <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="formGroup2">Apellidos</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="apellido" name="apellido" placeholder="{{ Auth::user()->apellido }}" >
                    @if ($errors->has('apellido'))
                      <span class="help-block">
                      <strong>{{ $errors->first('apellido') }}</strong>
                      </span>

                    @endif
                  </div>
                  </div>
                    <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="formGroup2" id="tel">DUI</label>
                    <div class="col-md-6">
                    <input id="dui" type="text" class="form-control" name="dui" placeholder="{{ Auth::user()->dui }}" autofocus>
                    @if ($errors->has('dui'))
                      <span class="help-block">
                      <strong>{{ $errors->first('dui') }}</strong>
                      </span>
                    @endif
                      </div>
                      </div>

                    <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="formGroup2" id="tel">Fecha Nacimiento</label>
                    <div class="col-md-6">
                    <input id="fecha" type="date" class="form-control" name="fecha" required autofocus value="{{ Auth::user()->fecha_nacimiento }}">
                    @if ($errors->has('fecha'))
                      <span class="help-block">
                      <strong>{{ $errors->first('fecha') }}</strong>
                      </span>
                   @endif
                      </div>
                     </div>

                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                      <label class="col-sm-2 control-label" for="formGroup2" id="tel">Dirección</label>
                      <div class="input-group col-sm-3">
                      <input class="form-control" type="text" id="direccion" name="direccion" placeholder="{{ Auth::user()->direccion }}" >
                      @if ($errors->has('direccion'))
                        <span class="help-block">
                        <strong>{{ $errors->first('direccion') }}</strong>
                        </span>

                      @endif
                    </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="formGroup2" id="tel">Correo electrónico</label>
                    <div class="input-group col-sm-3">
                    <span class="input-group-addon">@</span>
                    <input class="form-control" type="text" id="email" name="email" placeholder="{{ Auth::user()->email }}" >
                    @if ($errors->has('email'))
                     <span class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                     </span>
                    @endif
                    </div>
                    </div>
                    <!--
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmación de Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="formGroup2">Estado</label>
                    <div class="col-sm-4">
                    <select class="form-control" id="formGroup2">
                      <option>En línea</option>
                      <option>Ocupado</option>
                      <option>Ausente</option>
                      <option>Desconectado</option>
                   </select>
                    </div>
                    </form>
                    <div class="form-group2">
                    <label class="col-sm-2 control-label" for="formGroup2"></label>
                    <div class="col-sm-8">
                    <button type="submit" class="btn btn-success btn-lg" ><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
                    <button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                    </div>
                    </div>
          @else
          <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup2">Nombre</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" id="formGroup2" placeholder="{{ Auth::user()->nombre }}" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup2">Apellidos</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" id="formGroup2" placeholder="{{ Auth::user()->apellido }}" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="col-sm-2 control-label" for="formGroup2">DUI</label>
                          <div class="col-sm-8">
                            <input class="form-control" type="text" id="formGroup2" placeholder="{{ Auth::user()->dui }}" readonly>
                          </div>
                        </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup2" id="tel">Dirección</label>

                        <div class="input-group col-sm-3">
                        <input class="form-control" type="text" id="formGroup2" placeholder="{{ Auth::user()->direccion }}" readonly>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup2" id="tel">Correo electrónico</label>
                        <div class="input-group col-sm-3">
                          <span class="input-group-addon">@</span>
                          <input class="form-control" type="text" id="formGroup2" placeholder="{{ Auth::user()->email }}" readonly>

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="formGroup2">Estado</label>
                        <div class="col-sm-4">

                          <select class="form-control" id="formGroup2">
                            <option>En línea</option>
                            <option>Ocupado</option>
                            <option>Ausente</option>
                            <option>Desconectado</option>

                          </select>

                        </div>
                      </form>
                      <div class="form-group2">
                      <label class="col-sm-2 control-label" for="formGroup2"></label>
                      <div class="col-sm-8">

                          <a href="{{url('editar')}}"><button type="button" class="btn btn-success btn-lg" ><span class="glyphicon glyphicon-floppy-saved"></span> Editar</button></a>
                      </div>
                    </div>

                      @endif
                      </div>
                        <br />

 </form>
 </div></div>
        </form>

 </div></div>

    </div>
@endsection
