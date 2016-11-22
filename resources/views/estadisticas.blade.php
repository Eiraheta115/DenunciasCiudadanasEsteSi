@extends('layouts/estadisticas_layout')

@section('grafica')

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Datos Estadísticos de Denuncias Ciudadanas.'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
 @if(isset($datos))
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
@endif

@endsection

<br><br>
@section('tabla')
    @if(isset($datos))
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>{{$categoria}}</th>
                    @foreach($acontecimiento as $aco)
                    <th>{{$aco->nombre_acontecimiento}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
            @if($categoria=='Municipios' OR $categoria=='Departamento')
                @foreach($datos as $dato)
                    <tr>
                        <th>{{$dato->nombre_municipio}}</th>
                        <td>{{$dato->count}}</td>
                    </tr>
                @endforeach
            @elseif($categoria=='Departamentos')
                @foreach($datos as $dato)
                    <tr>
                        <th>{{$dato->nombre_departamento}}</th>
                        <td>{{$dato->count}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    @else {{"Seleccione su consulta."}}
    @endif
@endsection