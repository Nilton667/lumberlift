@extends('layout')

@section('title', 'Contacto')

@section('content')
<div class="header-container-wallpaper d-flex align-items-center"
style="background: url({{ asset('img/1.jpeg') }});">
    <div style="z-index: 0; position: absolute; top: 0; bottom: 0; width: 100%; background: rgba(0, 0, 0, .6);"></div>
    <div style="z-index: 1; display: relative;" class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: #fff; text-shadow: 4px 4px 6px rgba(0, 0, 0, .6);" class="display-5">
                    Contacto
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <h2 class="mb-3">Entrar em contacto</h2>
                <div>
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="nome" id="recipient-name" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" id="recipient-email" placeholder="Endereço de Email">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="assunto" required="" id="recipient-assunto" placeholder="Assunto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="recipient-mensagem" placeholder="Mensagem" style="min-height: 200px;"></textarea>
                    </div>
                </div>
                <center>
                    <button class="btn btn-outline-primary  mt-2" style="width: 180px; height: 45px; border-radius: 20px;" id="send-email" name="sendmail">Enviar</button>
                </center>
                <br>
            </div>
                <div class="col-12 col-sm-6 aos-init aos-animate" data-aos="fade-up">
                    <blockquote>
                        <br>
                        <div class="m-2">
                            <p>Luanda, Angola,
                                <br>Av. Fidel De Castro,
                                <br>Travessa Do Casino Boali,
                                <br>Distrito Urbano De Cabolombo
                            </p>
                            <br>
                            <p class="mb-0">
                                <b>Para suporte ou dúvidas,</b>
                                <br> Envie-nos um email para:
                            </p>
                            <p class="mb-1">
                                <a href="mailto:geral@lumberlift.co.ao">
                                    <i class="las la-envelope"></i> geral@lumberlift.co.ao
                                </a>
                            </p>
                            <p class="mb-1">
                                <a href="mailto:info@lumberlift.co.ao">
                                    <i class="las la-envelope"> </i> info@lumberlift.co.ao</a>
                                </p>
                                <br>
                                <p class="mb-1">
                                    <a href="tel:+244958727780">
                                        <i class="las la-phone"></i> (+244) 958 727 780</a>
                                    </p>
                                    <p class="mb-1">
                                        <a href="tel:+244958727780">
                                            <i class="lab la-whatsapp"></i> (+244) 958 727 780</a>
                                        </p>
                                    </div>
                                    <br>
                                </blockquote>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

<div class="row" style="max-width: 100%; padding: 0; margin: 0;">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2786.6823799826147!2d13.203359981121393!3d-8.975458394315812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a521fb9a8195e11%3A0xede53c68c3111603!2sAvenida%20Cmdt.%20Fidel%20Castro%2C%20Belas!5e0!3m2!1spt-PT!2sao!4v1720079870067!5m2!1spt-PT!2sao"
    width="100%"
    height="450"
    style="border: 0; margin: 0; padding: 0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
