 @extends('layouts.principal')

@section('content')

<div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
 <div class="mbr-hero animated fadeInUp">            
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-12" style="background-color:#CCCCFF ">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 93px;">
        <div class="mbr-section__row row">
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="images/registro.jpg" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text_manejo">PASO 1</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Registrese en nuestra página para brindarle mayor información sobre sus denuncias&nbsp;<br>Debe llenar el formulario que se le presenta despues de presionar el boton</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="{{ url('/register') }}" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">Registrarse</a></div>
                </div>
            </div>
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="images/login.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text_manejo">PASO 2</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Identifiquese con su e-mail y su contraseña para tener mayores beneficios&nbsp;</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="{{ url('/login') }}" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">Iniciar Sesión</a></div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="images/denuncia.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text_manejo">Paso 3</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Realizar la denuncia despues de presionar en el boton Denuncia, llenar el formulario respectivo y si tiene evidencia multimedia subirla junto con el formulario</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">Denuncia</a></div>
                </div>
            </div>
            
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="images/6b97809c5f88e2e6d6872b68fd5f23bc.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text_manejo">Paso 4</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Puede revisar &nbsp;el estado sus denuncias privadas por medio de un codigo que se le proporcionara en el momento de guardar la denuncia&nbsp;</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-default">Estado de la Denuncia</a></div>
                </div>
            </div>
            
           </div> 
            
        </div>
    </div>
</section>

@endsection