<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/vue-material@0.7.1/dist/vue-material.css">
    <style>

    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">


    <md-toolbar class="md-dense">
        <h2 class="md-title" style="flex: 1">
            <a href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </h2>
        @if (Auth::guest())
        @else
            <md-menu>
                <md-button class="md-icon-button" md-menu-trigger>
                    <md-icon>person</md-icon>
                </md-button>
                <md-menu-content>
                    <md-subheader class="center">
                        {{ Auth::user()->name }}
                    </md-subheader>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <md-menu-item>
                            Salir
                            <md-icon class="md-primary">vpn_key</md-icon>
                        </md-menu-item>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </md-menu-content>
            </md-menu>
        @endif
    </md-toolbar>
    @yield('content')
</div>

<!-- Scripts {{ $script = mix('js/app.js') }} -->
<script src="{{ ltrim($script,  "/") }}"></script>
</body>
</html>
