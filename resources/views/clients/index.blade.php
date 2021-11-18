@extends('app')<!-- chamando o local onde está o cabeçalho e rodapé -->

@section('titulo', 'Lista de clientes')<!-- Chamando o cabeçalho e informando o titulo da pagina -->

@section('conteudo')<!-- Informando onde o conteudo começa -->


        <h1>Lista de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Açõs</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <th>{{ $client->id }}</th>
                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a></td>
                    <td>{{$client->endereco}}</td>
                    <td>
                        <a class="btn btn-outline-info" href="{{ route('clients.edit', $client) }}">Editar</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                        @csrf    
                        @method ('DELETE');
                        <button class="btn btn-outline-danger" type="submit" onclick=" return confirm('Deseja excluir esse usuario?')">Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <a class="btn btn-outline-primary" href="{{ route('clients.create') }}">Novo Cliente</a>
@endsection<!-- Informando onde o conteudo termina -->
