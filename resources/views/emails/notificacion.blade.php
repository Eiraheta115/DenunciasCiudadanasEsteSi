<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
</head>
<body>
                    @foreach(DB::table('estado_denuncias')->where('id_estado',$denuncia->id_estado)->get() as $denun)
                        <p>{{"Su denuncia con ID: ".$denuncia->id_denuncia}}</p>
                        <p>{{$denuncia->descripcion_denuncia}}</p>
                        <p>{{"Ahora se encuentra en el siguiente estado: ".$denun->nombre_estado}}</p>
                        @if($observaciones != null )
                            <p>Observaciones: {{ $observaciones }}</p>
                        @endif
                    @endforeach
</body>
</html>