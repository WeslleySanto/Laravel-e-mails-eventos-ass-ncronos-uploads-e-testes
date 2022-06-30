@extends('layout')

@section('cabecalho')
    Temporadas de '{!! $series->nome !!}'
@endsection

@section('conteudo')

<ul class="list-group">
    @foreach($seasons as $season)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{route('listar_episodes', $season->id)}}">
            Temporada {{$season->numero}}
        </a>
        <span class="badge bg-secondary text-white">
            {{$season->numberOfWatchedEpisodes()}}/{{$season->episodes->count()}}
        </span>
    </li>
    @endforeach
</ul>
@endsection