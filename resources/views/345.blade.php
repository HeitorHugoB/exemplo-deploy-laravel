<h1>Etapa 3,4 e 5</h1>

<p>Meu nome é {{ $nome }}, e tenho {{ $idade }} anos, e tabalho {{ $profissao }}</p>

@for($i=0; $i<count($arr); $i++)
    <p>{{ $arr[$i] }} - Indice é {{ $i }}</p>
    @if($i==2)
        <p>o Indice é {{ $i }}</p>
    @endif
@endfor

@foreach($arrNomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

<!-- Comentario do HTML -->
{{-- Comentario do Blade(Etapa 5)--}}