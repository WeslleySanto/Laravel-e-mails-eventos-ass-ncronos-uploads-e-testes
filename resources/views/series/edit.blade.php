@extends('layout')

@section('cabecalho')
    Editar Série '{{$serie->nome}}'
@endsection

@section('conteudo')

@include('series.components.form', [
    'action' => route('atualizar_serie', $serie->id),
    'nome' => $serie->nome, 
    'update' => true,
    'botao' => 'Editar'
])


@endsection