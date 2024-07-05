@extends('layout')

@section('title', 'Parceiros')

@section('content')
<div class="header-container-wallpaper d-flex align-items-center"
style="
    background: url({{ asset('img/parceiro.jpeg') }});
    background-position: center;
    background-repeat: no-repeat;">
    <div style="z-index: 0; position: absolute; top: 0; bottom: 0; width: 100%; background: rgba(0, 0, 0, .6);"></div>
    <div style="z-index: 1; display: relative;" class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: #fff; text-shadow: 4px 4px 6px rgba(0, 0, 0, .6);" class="display-5">
                    Parceiros
                </h1>
            </div>
        </div>
    </div>
</div>
<br>
<center>
    <p class="lead mt-2">Informação temporariamente indisponível</p>
</center>
<br>
@endsection
