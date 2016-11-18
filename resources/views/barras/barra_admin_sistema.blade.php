@section('opciones_barra')
                <li>
                    <a href="{{ url('/admin_users') }}">Gestionar Usuarios</a>
                </li>
                <li>
                    <a href="{{ url('/admin_evaluadores') }}">Gestionar Evaluadores</a>
                </li>
                <li>
                    <a href="{{ url('/admin_estados') }}">Gestionar Estados</a>
                </li>
                <li>
                    <a href="{{ url('/admin_entidades') }}">Gestionar Entidades</a>
                </li>
                <li>
                    <a href="{{ url('/admin_acontecimientos') }}">Gestionar Acontecimietos</a>
                </li>
@endsection