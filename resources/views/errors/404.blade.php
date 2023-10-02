
<title>404 Custom Error Page Example</title>
<link href="{{ asset('css/404.css') }}" rel="stylesheet">
@extends('masterPage')


@section('content')
</head>
<body>
    <div class="containerError">
        <div class="fundo">
            <h2 class="numero">404</h2>
            <p class="text">Essa página não existe. Click no sapo e volte para o menu principal</p>
        </div>
        <div class="subContainer">
            <div class="imgErro">
                <a href="{{ url('/') }}">
                    <img class="sapo" src="{{ asset('img/imgErro.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection