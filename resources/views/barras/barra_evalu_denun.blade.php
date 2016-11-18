@section('opciones_barra')
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
@endsection