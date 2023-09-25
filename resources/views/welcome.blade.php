 @extends('masterPage')


 @section('content')
 <div class="InputContainer">
     <form action="/" method="post">
         @csrf
         <input placeholder="Digite aqui sua busca" id="input" class="input" name="descricao" type="text">
     </form>
 </div>
 <div>
     <div class="container">
         <br><br>
         <div class="itens">
             @if (count($produtos) === 0)
             <div class="item">teste</div>
             @else
             @foreach($produtos as $produto)
             <div class="item">
                 <div class="img-itens">
                     <img src="{{ Voyager::image( $produto->foto ) }}" style="">
                 </div>
                 <div class="texto">{{ $produto->descricao }}
                     <br><br><a class="alinha-box" href="/produto/{{ $produto->id }}">
                         <button class="btn-ver">Ver</button>
                     </a>
                 </div>
             </div>
             @endforeach
             @endif
         </div>
     </div>
 </div>
 @endsection