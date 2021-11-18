<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Cria as rotas das páginas que estão no App=> Http=> Controller => SiteController
 */
Route::get('/', [SiteController::class, 'index'])->name('index');//Quanto a rota barra for chamada ele será redirecionado para index
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/servicos', [SiteController::class, 'servicos']);
Route::get('/servico/{id}', [SiteController::class, 'servico']);

Route::get('/saudacao/{nome?}', Saudacao::class);//Controller com ação unica - Utilizando o --invokable

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');//page home lista de clientes
// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');//metodo para criar usuario
// Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');//exibindo a pagina de informações
// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
// Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');//carregando o usuario para edição
// Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');//metodo de atualização de dados do usuario
// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

//Com essa declaração as 7 linhas acima foram substituidas por essa
Route::resource('clients', ClientController::class);
//Caso precise declara uma rota diferente consute na documentação laravel->controllers->resurce->controllers(array)

