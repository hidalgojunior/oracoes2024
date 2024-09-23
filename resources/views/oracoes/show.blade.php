@extends('layouts.app')

@section('content')
    <h1>Detalhes da Oração</h1>

    <p>Nome: {{ $oracao->nome_solicitante }}</p>
    <p>Pedido: {{ $oracao->pedido_oracao }}</p>

    <a href="{{ route('oracoes.index') }}">Voltar</a>
@endsection
