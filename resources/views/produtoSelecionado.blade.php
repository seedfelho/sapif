<link href="{{ asset('css/produtoSelecionado.css') }}" rel="stylesheet">
@extends('masterPage')


@section('content')
<div class="container">
	<div class="row">
		<p class="topo">Item selecionado</p>
		<!-- <div class="col-md-8 col-md-offset-2"> -->
		<div class="conteiner">
			<div class="img-produtoSelecionado">
            	<img src="{{ Voyager::image( $produto->foto ) }}" style="">
			</div>
			<div class="informacoes">
				<div class="descricaoProduto">
					<h1 class="tituloProduto">{{ $produto->descricao }}</h1>
				</div>
				<div class="infPrimaria">
					<p class="textProduto">Local encontrado:{!! $produto->local_encontrado !!}</p>
					<p class="textProduto">Quem encontrou:{!! $produto->quem_encontrou !!}</p>
				</div>
				<div class="infSecundaria">

				</div>
				<a class="alinha-box" href="/localRetirada">
                    <button class="btn-ver">Onde retirar</button>
                </a>
			</div>
		</div>
	</div>
</div>
@endsection