<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content=" ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/preview-ESCUDOELSALVADOR.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/style2.css" type="text/css">
  <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="css/mbr-additional2.css" type="text/css">
</head>
<body>
 <section>
  @include('modulos.cabezera')
</section>
@if (Auth::guest())
 <section class="engine"></section>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-7" style="background-image: url(images/porta2l-1280x720-72.jpg);">
 @yield('content')
</section>
@else
<section class="engine"></section><section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-8" style="background-image: url(images/celeste.png);">
 @yield('contenido_usuario')
</section>

@endif
<footer>
  @include('modulos.footer')

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="js/jarallax.js"></script>
  <script src="js/script.js"></script>
</footer>
</body>
</html>
