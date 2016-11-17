<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bandeja de Denuncias</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        {{ Auth::user()->nombre }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/recibidas') }}">Recibidas</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/aceptadas') }}">Aceptadas</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/investigacion') }}">En investigación</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/documentadas') }}">Documentadas</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/procesadas') }}">Procesadas</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/cerradas') }}">Cerradas</a>
                </li>
                <li>
                    <a href="{{ url('/bandeja/denegadas') }}">Denegadas</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                </li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form> 
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-offset-2">
                        <h1>Bandeja de Denuncias 

                        @foreach(DB::table('entidades')->where('id_entidad', Auth::user()->entidad)->select('nombre_entidad')->get() as $entidad_actual)
                            {{ $entidad_actual->nombre_entidad }}
                        @endforeach
                        
                        </h1>   
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Denunciante</th>
                                    <th>Asunto de Denuncia</th>
                                    <th>Estado Actual</th>
                                    <th>Fecha y Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                @yield('content_bandeja')
                            </tbody>
                        </table>                      
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
<script>
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed === true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>

</html>