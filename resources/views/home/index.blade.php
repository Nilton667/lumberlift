@extends('layout')

@section('title', 'Lumberlift')

@section('content')
<style>
    h2{
        color: #0054A6;
    }
</style>
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
            <h2>Sobre Nós</h2>
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
<div class="compromisso">
    <div class="row p-0 m-0">
        <div class="col-12 col-md-6 p-5">
            <h2 style="color: #fff!important;">PORQUE NOS ESCOLHER?</h2>
            <br>
            <ul>
                <li class="lead">
                    Somos
                    uma empresa multi sectorial. Idealizada, criada e gerida por
                    jovens angolanos desejosos para apresentar de forma global com
                    novos pensamentos e trabalhar de acordo com a evolução
                    tecnológica e a demanda por uma maior acurácia, eficácia e
                    menores custos para exe cutar um dado projecto ou tarefa.
                </li>
                <br>
                <li class="lead">
                    Fazemos a integração de várias ciências, engenharias e tecnologias
                    para apresentar soluções locais para industria de equipamentos de
                    elevacao (Lifting Equipment Industry), Preservação do Ambiente e
                    Património Histórico/Cultural, Agricultura, Petróleo e Gás,
                    fornecendo Servicos e técnicas para manter os equipamento,
                    instalações, estruturas e infra estruturas de forma segura e
                    eficiente.
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-6 p-5">
            <h2 style="color: #fff!important;">Compromisso com o Cliente</h2>
            <br>
            <ul>
                <li class="lead">
                    A
                    nossa reputação é um património inestimável para atrair e
                    manter clientes. Nós ganhamos essa repu tação e trabalha
                    mos para mantê la a partir da atitude mos trada antes,
                    durante e após a prestação dos nossos serviços aos nossos
                    clientes.
                </li>
                <br>
                <li class="lead">
                    Os nossos funcionários devem sempre apresentar uma
                    atitude profissional, útil e amigável, ser cortês e educado
                    durante a execução e produzir um trabalho limpo e preciso,
                    que ofereça soluções para os nossos clientes.
                </li>
                <br>
                <li class="lead">
                    O nosso compromisso com um serviço de alta qualidade
                    mantém os clientes voltados para a LUMBERLIFT ano após
                    ano.
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
<div class="offset-image">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<br>
				<div class="p-4">
					<h2>MISSÃO</h2>
					<p class="lead" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);">
                        Servir aos nossos clientes e consumidores em todo Mundo como
                        parceiro mais fiável com posições de liderança em todos os mercados
                        e categorias relevantes, como uma equipa apaixonada e unida por
                        valores partilhados.
                    </p>
				</div>
			</div>
			<div class="col-12 col-md-6">
                <img class="mt-4 mt-md-0"
                src="img/missao.jpg"
                style="max-width: 100%; width: 450px;"/>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <br>
            <div class="p-4">
                <h2>VISÃO</h2>
                <p class="lead" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);">
                    Criação de valores, respeito e compromisso para a nossa equipa e
                    clientes é o nosso foco.
                </p>
                <p class="lead" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);">
                    Fornecer aos nossos clientes dados e informações técnicas para
                    melhor projectar, monitorar, construir e manter instalações, estrutura
                    e infraestruturas de forma segura, eficiente e respeitando o ambiente.
                </p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <img class="mt-4 mt-md-0"
            src="img/visao.jpg"
            style="max-width: 100%; width: 450px;"/>
        </div>
    </div>
</div>
<div class="offset-image">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<div class="p-4">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <h2 class="text-center">VALORES</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row owl-carousel owl-theme">
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Visão, Ética & Transparência</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Precisão</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Inspiração</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Qualidade & Melhoria Continua</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Colaboração</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Resolução de Problemas</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Responsabilidade Social & Ambiental</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="item">
                                <div class="mb-4">
                                    <center>
                                        <svg style="font-size: 30px; height: 25px;" aria-hidden="true" focusable="false" role="presentation" class="icon icon-quote" viewBox="0 0 41 35">
                                            <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z" fill="#666" sizeof="22" fill-rule="evenodd"></path>
                                        </svg>
                                    </center>
                                </div>
                                <h5 class="text-center m-3">Integridade Antecipação das Necessidades dos Clientes</h5>
                            </div>
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="paralax" style="background-image: url(img/container.webp);">
    <div style="background: linear-gradient(to right, rgba(105, 154, 183, 0.5), #4168ac); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
    <br>
    <div style="position: relative;">
        <center>
            <h1 class="text-white mb-4" style="font-weight: 400!important; text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5)">
                Peça ja o seu orçamento
            </h1>
            <a href="mailto:geral@lumberlift.co.ao">
                <button class="btn btn-outline-light" style="height: 45px; border-radius: 20px; min-width: 100px;">
                    <span class="lead"><b>geral@lumberlift.co.ao</b></span>
                </button>
            </a>
        </center>
    </div>
    <br>
</div>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 3,
            margin: 0,
            stagePadding: 0,
            smartSpeed: 450,
            autoplay:true,
            autoplayTimeout: 3000,
            autoplayHoverPause:true,
            nav: true,
            dots: true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    center:true,
                },
                600:{
                    items:2,
                    nav:false,
                    center:true,
                },
                1000:{
                    items:3,
                    nav:false,
                    center:true,
                }
            }
        });
    });
</script>
@endsection
