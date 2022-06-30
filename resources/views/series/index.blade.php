@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

<a href="{{ route('form_criar_serie')}}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        @auth <a href="{{route('listar_temporadas', $serie->id)}}" > @endauth
            {{$serie->nome}}
        @auth</a>@endauth
        @auth
        <span class="d-flex">
            <a href="{{route('form_editar', $serie->id)}}" class="btn btn-primary btn-sm">
                <button class="btn btn-info">E</button>
            </a>
            <form method="post" action="{{route('deletar_serie', $serie->id)}}" onsubmit="return confirm('Tem certeza?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
        </span>
        @endauth
    </li>
    @endforeach
</ul>
@endsection