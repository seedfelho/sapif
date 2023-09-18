<!DOCTYPE html>
<html>
<head>
<title>{{ $produto->descricao }}</title>
<link href="{{ asset('css/produtoSelecionado.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<!-- <div class="col-md-8 col-md-offset-2"> -->
		<div class="conteiner">
			<div class="img-produtoSelecionado">
            	<img src="{{ Voyager::image( $produto->foto ) }}" style="">
			</div>
			<div class="informacoes">
				<div class="descricaoProduto">
					<h1>{{ $produto->descricao }}</h1>
				</div>
				<div class="Mais inf">
					<p>{!! $produto->local_encontrado !!}</p>
					<p>{!! $produto->quem_encontrou !!}</p>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>