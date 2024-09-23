@extends('layouts.app')

@section('content')
    <h1>Criar Nova Oração</h1>

    <form action="{{ route('oracoes.store') }}" method="POST">
        @csrf
        <label for="nome_solicitante">Nome do Solicitante:</label>
        <input type="text" name="nome_solicitante" required>

        <label for="pedido_oracao">Pedido de Oração:</label>
        <textarea name="pedido_oracao" required></textarea>

        <button type="submit">Enviar</button>
    </form>
@endsection
