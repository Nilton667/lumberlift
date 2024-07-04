<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css?v=3') }}"/>
    <link rel="stylesheet" href="{{ asset('css/line-1.3.0/css/line-awesome.min.css') }}"/>
</head>
<body>
    <div class="preload">
        <div class="w-100">
            <center>
                <img width="180" src="{{ asset('favicon.png') }}">
            </center>
        </div>
    </div>

    <div class="onload">
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img width="100" src="{{ asset('favicon.png') }}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('home', 'sobre', 'servicos', 'contacto', 'parceiros', 'termos') ? '' : 'active' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('sobre') ? 'active' : '' }}" href="/sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->is('servicos') ? 'active' : '' }} dropdown-toggle" href="javascript:void('servicos')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/servicos">ASNT NDT</a></li>
                            <li><a class="dropdown-item" href="/servicos">Ensaio De Carga</a></li>
                            <li><a class="dropdown-item" href="/servicos">Gestão De LOFT RIGG</a></li>
                            <li><a class="dropdown-item" href="/servicos">Reterminação De Soquete</a></li>
                            <li><a class="dropdown-item" href="/servicos">Exame Visual</a></li>
                            <li><a class="dropdown-item" href="/servicos">Inspeção De Conteiner OFFSHORE</a></li>
                            <li><a class="dropdown-item" href="/servicos">SI 2306 Exame</a></li>
                            <li><a class="dropdown-item" href="/servicos">SI 2307 Exame</a></li>
                            <li><a class="dropdown-item" href="/servicos">CCUs Manutenção Completa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('parceiros') ? 'active' : '' }}" href="/parceiros">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('termos') ? 'active' : '' }}" href="/termos">Termos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contacto') ? 'active' : '' }}" href="/contacto">Contacto</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer>
            <div class="p-4 container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <br>
                        <img width="180" src="{{ asset('favicon.png') }}">
                        <br><br>
                        <p class="small" style="text-align: justify;">
                            Lifting	Services Somos uma empresa de prestação de serviços, com actividades voltadas Industria de equipamentos de elevação, nominadamente na Industria de Oleo e Gas, de direito e capitais 100% angolanos, com o NIF 5001340905, fundada em 2022 na cidade de Luanda, Capital de Angola.
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <br>
                        <h5>Contacto</h5>
                        <hr>
                        <p>
                            Luanda, Angola
                            <br>
                            Av. Fidel De Castro
                            <br>
                            Travessa Do Casino Boali
                            <br>
                            Distrito Urbano De Cabolombo
                        </p>
                        <p>
                            <a href="mailto:geral@lumberlifut.co.ao">
                                <i class="las la-envelope"></i> geral@lumberlifut.co.ao
                            </a>
                            <a href="mailto:info@lumberlifut.co.ao">
                                <i class="las la-envelope"></i> info@lumberlifut.co.ao
                            </a>
                        </p>
                        <p>
                            <a href="tel:+244958727780">
                                <i class="las la-phone"></i> (+244) 958 727 780
                            </a>
                            <a href="tel:+244958727780">
                                <i class="lab la-whatsapp"></i> (+244) 958 727 780
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <br>
                        <h5>Serviços</h5>
                        <hr>
                        <a href="/servicos">ASNT NDT</a>
                        <a href="/servicos">Ensaio De Carga</a>
                        <a href="/servicos">Gestão De LOFT RIGG</a>
                        <a href="/servicos">Reterminação De Soquete</a>
                        <br>
                        <h5>Outros Serviços</h5>
                        <a href="/servicos">Exame Visual</a>
                        <a href="/servicos">Inspeção De Conteiner</a>
                        <a href="/servicos">SI 2306 Exame</a>
                        <a href="/servicos">SI 2307 Exame</a>
                    </div>
                    <div class="col-12 col-md-3">
                        <br>
                        <h5>Empresa</h5>
                        <hr>
                        <a class="{{ request()->is('sobre') ? 'active' : '' }}" href="/sobre">Sobre</a>
                        <a class="{{ request()->is('parceiros') ? 'active' : '' }}" href="/parceiros">Parceiros</a>
                        <a href="{{ asset('doc/lumberlift.pdf') }}" target="_blank">Portifólio</a>
                        <a class="{{ request()->is('termos') ? 'active' : '' }}" href="/termos">Termos de serviços &amp; privacidade</a>
                        <br>
                        <h5>NEWSLETTER</h5>
                        <p>Inscreva-se na nossa newsletter e receba todas as novidades em primeira mão!</p>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="newsletter-email" aria-describedby="emailHelp" placeholder="Seu email">
                        </div>
                        <button id="newsletter-add" class="btn btn-primary">Subscrever</button>
                    </div>
                </div>
            </div>
            <div class="copyColor">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12">
                            <p class="m-0 text-light p-3 text-center">©{{ date('Y') }} Lumberlift Lda, Todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js?v=3')}}"></script>
</body>
</html>
