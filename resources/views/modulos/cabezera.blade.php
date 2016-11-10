@if (Auth::guest())
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-11">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="/"><img src="images/escudo.png" class="mbr-navbar__brand-img mbr-brand__img" alt=" "></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-black" href="/">PORTAL DE DENUNCIAS CIUDADANAS</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/ayuda') }}">AYUDA</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="">ESTADISTICAS</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="">ESTADO DE DENUNCIA</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/login') }}">INICIAR SESIÓN</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/register') }}">REGISTRARSE</a></li></ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

@else

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-9">
  <div class="mbr-navbar__section mbr-section">
    <div class="mbr-section__container container">
      <div class="mbr-navbar__container">
        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
          <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
          <span class="mbr-brand__logo"><a href="/"><img src="images/escudo.png" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>
            <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="/">PORTAL DE DENUNCIAS CIUDADANAS</a></span>
          </span>
        </div>
        <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
        <div class="mbr-navbar__column mbr-navbar__menu">
          <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
            <div class="mbr-navbar__column">
              <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="">HISTORIAL DE DENUNCIAS</a></li> 
                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ url('/denuncias') }}">DENUNCIA</a></li>
                <li class="mbr-navbar__item">
                  <a class="mbr-buttons__link btn text-white" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESION
                  </a> </li>
                  <li class="mbr-navbar__item">
                    <a href="{{ url('/home') }}" class="mbr-buttons__link btn text-white"  aria-expanded="false"> PERFIL: {{ Auth::user()->name }} <span class="caret"></span></li>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form> 
                  </li>                                   
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

@endif
