@extends('layouts/denunciasadmin')

@section('content_bandeja')
   
    @foreach($result as $fila)

        <tr>
            <td> {{ $fila->nombre.' '.$fila->apellido }} </td>
            <td> {{ $fila->nombre_acontecimiento }} </td>
            <td> {{ $fila->nombre_estado }} </td>
            <td> {{ $fila->created_at }} </td>
        </tr>

    @endforeach

@endsection

