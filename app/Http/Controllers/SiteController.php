<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a pagina Home
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostra a pagina sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo 'Conteúdo dinamico Sobre';
    }
    /**
     * Mostra a pagina contato
     *
     * @return void
     */
    public function contato()
    {
        echo 'Conteúdo dinamico contato';
    }

    /**
     * Mostra a pagina de serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo 'Conteúdo dinamico Serviços';
    }

    /**
     * Mostra o serviço pelo seu id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {

        $servicos = [
            1=>[
                'nome' => 'Lavagem de roupa',
                'descricao' => 'Três dias para entrega',
            ],
            2=>[
                'nome' => 'Lavagem de roupa',
                'descricao' => 'Roupas delicadas',
            ],
            3=>[
                'nome' => 'Lavagem de roupa',
                'descricao' => 'Roupas com manchas',
            ],
        ];
        //utilizando subpasta
        return view('site.servico', [
            'servico' => $servicos[$id]
        ]);
        
    }

}
