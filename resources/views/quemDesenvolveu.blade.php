<link href="{{ asset('css/quemDesenvolveu.css') }}" rel="stylesheet">
@extends('masterPage')


@section('content')
<div class="container">
    <p class="textTop">Esse site foi desenvolvido como TCC</p>
    <div class="imagens">
        <div class="textoImg">
            <div class="foto">
                <img src="{{ asset('img/sergio.jpg') }}">
            </div>
            <p class="nome">Sergio Eduardo Ferreira Filho</p>
            <p class="nome">Orientando</p>
        </div>
        <div class="textoImg">
            <div class="foto">
                <img src="{{ asset('img/diego.jpg') }}">
            </div>
            <p class="nome">Diego Barros e Silva</p>
            <p class="nome">Orientador</p>
        </div>
        <div class="textoImg">
            <div class="foto">
                <img src="{{ asset('img/vagner.jpg') }}">
            </div>
            <p class="nome">Vagner da Silva Bezerra</p>
            <p class="nome">Co-Orientador</p>
        </div>
    </div>
</div>
@endsection