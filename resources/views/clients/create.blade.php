@extends('app')<!-- chamando o local onde está o cabeçalho e rodapé -->

@section('titulo', 'Novo Cliente')<!-- Chamando o cabeçalho e informando o titulo da pagina -->

@section('conteudo')<!-- Informando onde o conteudo começa -->

    <h1>Novo Cliente</h1>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf<!-- Sistema de segurança token do laravel -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do cliente: </label>
                <input type="text" class="form-control" id="nome"  name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço: </label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
            </div>
            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite uma observação" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit"> Enviar</button>
            <a class="btn btn-warning" href="{{ route('clients.index') }}"> Voltar</a>

        </form>
        
@endsection<!-- Informando onde o conteudo termina -->