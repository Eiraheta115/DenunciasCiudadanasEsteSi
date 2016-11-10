@extends('layouts.principal')

@section('content')
<!-- Cuidado no tocar aqui, esto altera el contenido de cada pantalla -->
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
                <div class="row"><div class=" col-sm-8 col-sm-offset-2">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">DENUNCIAS CIUDADANAS</h1>
                        <p class="mbr-hero__subtext">Brinde su Información</p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-primary" href="login">INICIAR SESIÓN</a> 
                    <a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-primary" href="register">REGISTRARSE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection