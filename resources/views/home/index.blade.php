@extends('layout')

@section('title', 'Lumberlift')

@section('content')
<div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-fundo"></div>
        <img style="object-position: center;" src="{{ asset('img/termos.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <div class="carousel-fundo"></div>
        <img src="{{ asset('img/1.jpeg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<div class="container">
    <div id="sobre" class="row">
        <blockquote>
            <h2>Sobre</h2>
        </blockquote>
        <p class="lead">
            <span class="text-primary"><b>LUMBERLIFT Lifting Services</b></span> Somos uma
            empresa de prestação de serviços, com actividades
            voltadas Industria de equipamentos de elevação,
            nominadamente na Industria de Oleo e Gas, de direito e
            capitais 100 angolanos, com o NIF 5001340905 fundada
            em 2022 na cidade de Luanda, Capital de Angola.
        </p>
        <p class="lead">
            Empresa
            inovadora com funcionários jovens especializados
            e qualificados em inspencao de equipamentos de elevação
            tal como na reparação, Re terminação de cabos de aço,
            ensaios nao desturtivos e aproveitamento de material
            reciclado e cuja prática profissional se apoia nas mais
            actualizadas tecnologias e metodologias de trabalho.
        </p>
    </div>
</div>
@endsection
