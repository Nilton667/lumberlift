<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="preload">
        <div class="w-100">
            <center>
                <img src="{{ asset('img/logo.png') }}">
            </center>
        </div>
    </div>

    <div class="onload">
        @yield('content')
        <footer class="p-4">
            <div class="row">
                <div class="col-12 col-md-3">

                </div>
                <div class="col-12 col-md-3">
                    <h5>Contactos</h5>
                    <hr>
                    <i data-lucide="menu"></i>
                </div>
                <div class="col-12 col-md-3">
                    <h5>Informação</h5>
                    <hr>
                </div>
                <div class="col-12 col-md-3">
                    <h5>Links Úteis</h5>
                    <hr>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>