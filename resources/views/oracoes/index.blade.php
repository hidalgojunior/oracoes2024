@extends('layouts.app')

@section('content')
    <h1>Lista de Orações</h1>

    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ route('oracoes.create')  }}">Criar uma nova oração</a>

    <ul>
        @foreach($oracoes as $oracao)
            <li>
                {{ $oracao->nome_solicitante }} - {{ $oracao->pedido_oracao }}
                <a href="{{ route('oracoes.show',$oracao->id)  }}">Ver</a>
            </li>
        @endforeach
    </ul>
@endsection
