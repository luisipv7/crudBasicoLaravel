@extends('layout.site')

@section('titulo', 'Contatos')
    

@section('conteudo')
    

<h3>Essa é a view da Index</h3>

        @foreach ($contatos as $contato)
            <p>{{ $contato->nome }}</p><br>
            <p>{{ $contato->tel }}</p><br><hr>
        @endforeach
@endsection