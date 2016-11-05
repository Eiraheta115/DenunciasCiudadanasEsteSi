<!DOCTYPE html>
<html>
<head>
  meta charset="UTF-8">
  <title></title>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content=" ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/preview-ESCUDOELSALVADOR.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
  </head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-11">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href=" "><img src="images/preview-escudoelsalvador-1024x1024-23.png" class="mbr-navbar__brand-img mbr-brand__img" alt=" "></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-black" href=" ">PORTAL DE DENUNCIAS CIUDADANAS</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                          @if (Auth::guest())
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="/">HOME</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/ayuda') }}">AYUDA</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="/">ESTADISTICAS</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/login') }}">INICIAR SESIÓN</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-black" href="{{ url('/register') }}">REGISTRARSE</a></li>
                          @else
                          <li class="mbr-navbar__item">
                              <a href="#" class="mbr-buttons__link btn text-black"  aria-expanded="false">
                                  {{ Auth::user()->nombre }} <span class="caret"></span>
                              </a>

                              <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                                  <li>
                                      <a class="mbr-buttons__link btn text-black" href="{{ url('/logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif

                          </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
 <section class="engine"><a rel="external" href=" "> </a></section>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-7" style="background-image: url(images/porta2l-1280x720-72.jpg);">
 @yield('content')
</section>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-8" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 30px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><img src="images/esacolortransparente-3353x1224-19.png" class="mbr-contacts__img mbr-contacts__img--left"></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
                        1234 Street Name<br>
                        City, AA 99999</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><br></p>
                    </div>
                    <div class="col-sm-4">CONTACTS<div>Email: elsalvador@.com</div><div>Phone: +1 (0) 000 0000 001</div><div>Fax: +1 (0) 000 0000 002</div></div>
                </div>
            </div>
        </div>
    </div>


</section>


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="js/jarallax.js"></script>
  <script src="js/script.js"></script>


</body>
</html>
