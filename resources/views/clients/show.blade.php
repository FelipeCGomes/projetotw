@extends('app')

@section('titulo', "Detalhes do cliente {$client->nome}")

@section('conteudo')

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cliente {{$client->nome}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><strong>Endereço: </strong>{{$client->endereco}}</h6>
                <p class="card-text"><strong>Observação: </strong>{{$client->observacao}}</p>
                <br>
                <a class="btn btn-warning" href="{{route('clients.index')}}">Voltar</a>
            </div>
        </div>

@endsection