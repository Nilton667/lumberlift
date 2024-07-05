@extends('layout')

@section('title', 'Serviços')
@section('description', '')

@section('content')
<style>
    .container img{
        border-radius: 5px;
    }
</style>
<div class="header-container-wallpaper d-flex align-items-center"
style="
    background: url({{ asset('img/termos.jpg') }});
    background-position: left bottom;
    background-repeat: no-repeat;">
    <div style="z-index: 0; position: absolute; top: 0; bottom: 0; width: 100%; background: rgba(0, 0, 0, .6);"></div>
    <div style="z-index: 1; display: relative;" class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: #fff; text-shadow: 4px 4px 6px rgba(0, 0, 0, .6);" class="display-5">
                    Serviços
                </h1>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="asnt" class="text-center">ASNT NDT</h1>
                <p class="text-center lead">A ASNT publica e mantém um padrão importante, SNT-TC-1A , que, com a adição dos Códigos de Prática ANSI/ASNT CP-189 e ANSI/ASNT CP-105, abrange todos os aspectos da qualificação e certificação de pessoal.</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <center>
                <img src="{{ asset('img/asnt.jpg') }}" class="img-fluid" style="max-width: 100%; width: 450px;">
            </center>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6">
            <center>
                <img src="{{ asset('img/ensaio.jpg') }}" class="img-fluid" style="max-width: 100%; width: 450px;">
            </center>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="ensaio" class="text-center">Ensaio De Carga</h1>
                <p class="text-center lead">Prova de Carga é um ensaio de fundações executado através da aplicação de carregamento estático ou dinâmico sobre o elemento ensaiado e medição das deformações geradas com o objetivo de avaliar o desempenho da fundação.</p>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="loft" class="text-center">Gestão De LOFT RIGG</h1>
                <p class="text-center lead">Fornecimento de serviços de loft totalmente gerenciados, específicos para as necessidades dos nossos clientes.</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <center>
                <img src="{{ asset('img/loft.jpg') }}" class="img-fluid" style="max-width: 100%; width: 450px;">
            </center>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6">

        </div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="soquete" class="text-center">Reterminação De Soquete</h1>
                <p class="text-center lead"></p>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="visual" class="text-center">Exame Visual</h1>
                <p class="text-center lead">n/a</p>
            </div>
        </div>
        <div class="col-12 col-md-6">

        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6">
            <center>
                <img src="{{ asset('img/container.webp') }}" class="img-fluid" style="max-width: 100%; width: 450px;">
            </center>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="inspecao" class="text-center">Inspeção De Conteiner OFFSHORE</h1>
                <p class="text-center lead">Em um mercado que cresce globalmente, seus contêineres devem atender a todos os requisitos de segurança, estabilidade e usabilidade. Oferecemos uma gama completa de serviços para a indústria de contêineres.</p>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="si2306" class="text-center">SI 2306 Exame</h1>
                <p class="text-center lead">n/a</p>
            </div>
        </div>
        <div class="col-12 col-md-6">

        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6">

        </div>
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="si2307" class="text-center">SI 2307 Exame</h1>
                <p class="text-center lead">n/a</p>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="w-100">
                <h1 id="ccus" class="text-center">CCUs Manutenção Completa</h1>
                <p class="text-center lead">Uma tecnologia que tem como objetivo diminuir as emissões de dióxido de carbono na atmosfera.</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <center>
                <img src="{{ asset('img/ssu.webp') }}" class="img-fluid" style="max-width: 100%; width: 450px;">
            </center>
        </div>
    </div>
</div>
<br>
@endsection
