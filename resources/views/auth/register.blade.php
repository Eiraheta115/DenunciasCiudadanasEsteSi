@extends('layouts.principal')

@section('content')

<!-- /Ayuda a visualizar el contenido del panel de Registro -->
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
                    <!-- /Intentando que funcione y salga en el centro -->
                    <div class="container" id="panelDeRegistro">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <br><br><br><br><br><br>
                                <div class="panel panel-default">
                                    <div class="panel-heading">Registrese</div>
                                    @include('partials.flash')
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                                    @if ($errors->has('nombre'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('nombre') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                                <label for="apellido" class="col-md-4 control-label">Apellido</label>

                                                <div class="col-md-6">
                                                    <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                                    @if ($errors->has('apellido'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('apellido') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                                                <label for="dui" class="col-md-4 control-label">DUI</label>

                                                <div class="col-md-6">
                                                    <input id="dui" type="text" class="form-control" name="dui" value="{{ old('dui') }}" autofocus>

                                                    @if ($errors->has('dui'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('dui') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                                                <label for="fecha" class="col-md-4 control-label">Fecha nacimiento</label>

                                                <div class="col-md-6">
                                                    <input id="fecha" type="date" class="form-control" name="fecha" value="{{ old('fecha') }}" required autofocus>

                                                    @if ($errors->has('fecha'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('fecha') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                                <label for="direccion" class="col-md-4 control-label">Dirección</label>

                                                <div class="col-md-6">
                                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                                    @if ($errors->has('direccion'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('direccion') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
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
                                              </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary_registrate" >
                                                        Registrese
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- aqui termina mi idea -->
                   </div>
        </div>

    </div>
</section>
@endsection
