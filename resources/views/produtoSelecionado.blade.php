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
					<div class="testF">
						<p class="textProduto">Local encontrado:</p>
						<p class="textProduto2">{!! $produto->local_encontrado !!}</p>
					</div>
					<div class="testF">
						<p class="textProduto">Quem encontrou:</p>
						<p class="textProduto2"> {!! $produto->quem_encontrou !!}</p>
					</div>
				</div>
				<div class="infSecundaria">
					@if ($produto->retirado == true)
					<div>
						<p class="infoRetirado">Informações de quem retirou:</p>
						<div class="testF">
							<p class="textProduto">Nome:</p>
							<p class="textProduto2">{!! $produto->nome_retirada !!}</p>
						</div>
						<div class="testF">
							<p class="textProduto">Email:</p>
							<p class="textProduto2"> {!! $produto->email !!}</p>
						</div>
					</div>
					@endif
				</div>
				@if ($produto->retirado == false)
					<a class="alinha-box" href="/localRetirada">
						<button class="btn-ver">Onde retirar</button>
					</a>
				@endif

			</div>
		</div>
	</div>
</div>
@endsection