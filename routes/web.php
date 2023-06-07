<?php

use App\Http\Controllers\ChamadoController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\SetorController;
use App\Http\Controllers\SituacaoController;
use App\Models\Chamados;

Route::get('/', function () {
    return view('home');
})->name('home');

//Rotas para setor:
Route::get('/novo-setor', [SetorController::class, 'create']); //rota create
Route::post('/novo-setor', [SetorController::class, 'store'])->name('novoSetor'); //rota create submit

Route::get('/setores', [SetorController::class, 'index'])->name('setores.index'); //rota setores (index)

Route::get('/editar-setor/{id}', [SetorController::class, 'edit'])->name('editarSetor'); //rota edit
Route::put('/editar-setor/{id}', [SetorController::class, 'update'])->name('atualizarSetor'); //rota edit submit
Route::delete('/apagar-setor/{id}', [SetorController::class, 'destroy'])->name('apagarSetor'); //rota delete


//Rotas para situação:

Route::get('/nova-situacao', [SituacaoController::class, 'create']); //rota create
Route::post('/nova-situacao', [SituacaoController::class, 'store'])->name('novaSituacao'); //rota create submit

Route::get('/situacoes', [SituacaoController::class, 'index'])->name('situacoes.index'); //rota situacoes (index)

Route::get('/editar-situacao/{id}', [SituacaoController::class, 'edit'])->name('editarSituacao'); //rota edit
Route::put('/editar-situacao/{id}', [SituacaoController::class, 'update'])->name('atualizarSituacao'); //rota edit submit
Route::delete('/apagar-situacao/{id}', [SituacaoController::class, 'destroy'])->name('apagarSituacao'); //rota delete

//Rotas para Chamados:
Route::get('/novo-chamado', [ChamadoController::class, 'create']); //rota create
Route::post('/novo-chamado', [ChamadoController::class, 'store'])->name('novoChamado'); //rota store

Route::get('/chamados', [ChamadoController::class, 'index'])->name('chamados.index'); //Rota index

Route::get('/editar-chamado/{id}', [ChamadoController::class, 'edit'])->name('editarChamado'); //rota edit
Route::put('/editar-chamado/{id}', [ChamadoController::class, 'update'])->name('atualizarChamado');//rota update

Route::delete('/apagar-chamado/{id}', [ChamadoController::class, 'destroy'])->name('apagarChamado'); //rota delete