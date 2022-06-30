@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')


<form action={{ route('criar_serie') }} method="post">
    @csrf
    <div class="row mb-3">
        <div class="col-8">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" 
                autofocus
                class="form-control" 
                name="nome" id="nome"
                value="{{ old('nome') }}">
        </div>
        <div class="col-2">
            <label for="seasonQty" class="form-label">Nº Temporadas:</label>
            <input type="text" class="form-control" name="seasonQty" id="seasonQty"
                value="{{ old('seasonQty') }}">
        </div>
        <div class="col-2">
            <label for="episodePerSeason" class="form-label">Eps / Temporada:</label>
            <input type="text" class="form-control" name="episodePerSeason" id="episodePerSeason"
                value="{{ old('episodePerSeason') }}">
        </div>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>


@endsection