@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')

<ul class="list-group">
    <form method="post">
        @csrf
        @foreach($episodes as $episode)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Episódio {{$episode->numero}}

            <input 
                type="checkbox" 
                name="episodes[]" 
                value="{{ $episode->id }}"
                @if ($episode->watched) checked @endif
            />
        </li>
        @endforeach
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
</ul>
@endsection