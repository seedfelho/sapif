<!DOCTYPE html>
<html>
<head>
<title>{{ $produto->descricao }}</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <img src="{{ Voyager::image( $produto->foto ) }}" style="">
			<h1>{{ $produto->descricao }}</h1>
			<p>{!! $produto->local_encontrado !!}</p>
			<p>{!! $produto->quem_encontrou !!}</p>

		</div>
	</div>
</div>

</body>
</html>