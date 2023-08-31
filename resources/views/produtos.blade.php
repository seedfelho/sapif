<div class="container">
	<br><br>
	<div class="row">
	@foreach($produtos as $produto)
		<div class="col-md-3">
			<a href="/produto/{{ $produto->id }}">
				<img src="{{ Voyager::image( $produto->foto ) }}" style="">
				<span>{{ $produto->descricao }}</span>
			</a>
		</div>
	@endforeach
	</div>
</div>