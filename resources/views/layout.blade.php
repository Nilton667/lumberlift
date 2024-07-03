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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Lumberlift</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ASNT NDT</a></li>
                            <li><a class="dropdown-item" href="#">ENSAIO DE CARGA</a></li>
                            <li><a class="dropdown-item" href="#">GESTÃO DE LOFT RIGG</a></li>
                            <li><a class="dropdown-item" href="#">RETERMINAÇÃO DE SOQUETE</a></li>
                            <li><a class="dropdown-item" href="#">EXAME VISUAL</a></li>
                            <li><a class="dropdown-item" href="#">INSPEÇÃO DE CONTÊINER OFFSHORE</a></li>
                            <li><a class="dropdown-item" href="#">SI 2306 EXAME</a></li>
                            <li><a class="dropdown-item" href="#">SI 2307 EXAME</a></li>
                            <li><a class="dropdown-item" href="#">CCUs MANUTENÇÃO COMPLETA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
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
