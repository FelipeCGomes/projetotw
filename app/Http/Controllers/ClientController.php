<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return void
     */
    public function index()
    {
        $clients = Client::get();

        return view(
            'clients.index',
            ['clients' => $clients]
        );
    }

    /**
     * Mostra um cliente específico
     *
     * @param integer $id
     * @return void
     */
    public function show(int $id)
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Exbibe o formulário de criação
     *
     * @return void
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Mostra o formulário para edição
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);

    }

    /**
     * Atualiza os dados do usuario e salva no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        $client = Client::find($id);

        $client->update([
            'nome'=> $request->nome,
            'endereco'=> $request->endereco,
            'observacao'=> $request->observacao,
        ]);

        return redirect('/clients');
    }


    /**
     * Exclui o cliente do banco de dados
     *
     * @param integer $id
     * @return void
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
