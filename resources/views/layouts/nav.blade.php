@section('nombreAyudante',$nombre_ayudante ?? '')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SWL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light " id="color_barra_nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/Logo SWL.png" height="65" width="65"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Caja
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="color_barra_nav">
                                <a class="dropdown-item" href="{{ route('nuevaCaja')}}">Hacer caja</a>
                                <a class="dropdown-item" href="{{ route('verCaja')}}">Ver caja</a>
                                <a class="dropdown-item" href="{{ route('verImpresiones')}}">Ver impresiones</a>
                                <a class="dropdown-item" href="{{ route('agregarImpresion')}}">Agregar impresion</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Llaves
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="color_barra_nav">
                                <a class="dropdown-item" href="/laboratorio">Hacer caja</a>
                                <a class="dropdown-item" href="{{ route('verCaja')}}">Ver caja</a>
                                <a class="dropdown-item" href="{{ route('verImpresiones')}}">Ver impresiones</a>
                                <a class="dropdown-item" href="{{ route('agregarImpresion')}}">Agregar impresion</a>
                            </div>
                        </li>
                        <!--prueba de dropdown dentro de otro-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Horarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="color_barra_nav">
                            <div class="dropdown-item dropdown-submenu">
                                <a>Horarios laboratorios</a>
                                <ul class="dropdown-menu" id="color_barra_nav">
                                <li><a class="dropdown-item" href="{{route('horariolabA')}}">Laboratorio A</a></li>
                                <li><a class="dropdown-item" href="{{route('horariolabB')}}">Laboratorio B</a></li>
                                <li><a class="dropdown-item" href="{{route('horariolabC')}}">Laboratorio C</a></li>
                                </ul>
                            </div>
                            <a class="dropdown-item" href="/horario_labUX">Horario laboratorio de usabilidad</a>
                            <a class="dropdown-item" href="/horario_rack">Horario Rack</a>
                            <a class="dropdown-item" href="/horario_ayudantes">Horario Ayudantes</a>
                            <a class="dropdown-item" href="/horario_salas">Salas</a>
                            
                        </li>
                        <!--Fin de prueba de dropdown dentro de otro-->
                        
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Documentos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="color_barra_nav">
                                <a class="dropdown-item" href="{{ route('manuales') }}">Manuales</a>
                                <a class="dropdown-item" href="{{ route('tutoriales') }}">Tutoriales</a>
                                <a class="dropdown-item" href="{{ route('claves') }}">Contraseñas</a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Avisos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="color_barra_nav">
                                <a class="dropdown-item" href="/nueva">Nuevo aviso</a>
                                <a class="dropdown-item" href="/lista">Lista de avisos</a>
                                <a class="dropdown-item" href="/sanciones">Sanciones</a>
                            </div>
                        </li>
                    
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administración
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="color_barra_nav">
                                <div class="dropdown-item dropdown-submenu">
                                    <a>Ayudantes</a>
                                    <ul class="dropdown-menu" id="color_barra_nav">
                                        <li><a class="dropdown-item" href="/agregarAyudante">Agregar Ayudante</a></li>
                                        <li><a class="dropdown-item" href="/listarAyudante">Lista de Ayudantes</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-item dropdown-submenu">
                                    <a>Laboratorio de Optimización</a>
                                    <ul class="dropdown-menu" id="color_barra_nav">
                                        <li><a class="dropdown-item" href="/agregarEquipo">Agregar Nuevo Equipo</a></li>
                                        <li><a class="dropdown-item" href="/asignarAlumno">Asignar Alumno</a></li>
                                        <li><a class="dropdown-item" href="/listarEquipos">Ver Equipos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
