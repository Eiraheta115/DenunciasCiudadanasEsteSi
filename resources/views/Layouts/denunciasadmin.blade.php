<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bandeja de Denuncias</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/Elementos/css/main.css" type="text/css">
</head>

<body>

        <div id="header">
        <div class="top">
        <nav id="nav">
            <ul>

                <li>
                    <a href="#">
                        Estados de Denuncia
                    </a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Recibidas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Aceptadas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">En investigación</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Documentadas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Procesadas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Cerradas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Denegadas</a>
                </li>
                <li>
                    <a href="#" id="top-link" class="skel-layers-ignoreHref">Cerrar Sesión</a>
                </li>
            </ul>
            </nav>
  </div>
        </div>
        <div id="main">

                <!-- Intro -->
                    <section id="top" class="one dark cover">
                        <div class="container">
                <div class="row">
                        <h1 id="tema">Bandeja de Denuncias.</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th id="tablita">Denunciante</th>
                                    <th id="tablita">Asunto</th>
                                    <th id="tablita">Fecha y Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="tablita">Zoila</td>
                                    <td id="tablita">Zoila</td>
                                    <td id="tablita">Zoila</td>
                                </tr>

                                <tr>
                                    <td id="tablita">Zoila</td>
                                    <td id="tablita">Zoila</td>
                                    <td id="tablita">Zoila</td>
                                </tr>
                                
                                @yield('content_bandeja')

                            </tbody>
                        </table>
                </div>

                        </div>
                    </section>

                

            </div>

    <!-- Scripts -->
            <script src="css/Elementos/js/jquery.min.js"></script>
            <script src="css/Elementos/js/jquery.scrolly.min.js"></script>
            <script src="css/Elementos/js/jquery.scrollzer.min.js"></script>
            <script src="css/Elementos/js/skel.min.js"></script>
            <script src="css/Elementos/js/util.js"></script>
            <script src="css/Elementos/js/main.js"></script>


    

</body>

</html>