<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation Email</title>
  </head>
  <body>
    <h1>¡Gracias por registrarte!</h1>

    <p>
       Solo necesitamos que hagas clic <a href='{{ url("register/confirm/{$user->token}") }}'>aqui para confirmar tu email</a>
   </p>
  </body>
</html>
