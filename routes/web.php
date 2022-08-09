<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;

// Route::get('/', function () {
//     return view('home');
// })->name('home');


Route::get('/', [ProdutoController::class, 'home'])->name('home');

Route::group(['prefix' => 'produto', 'as' => 'produto.'], function () {

    Route::get('/', [ProdutoController::class, 'index'])->name('index');
    Route::get('/nova-fibra', [ProdutoController::class, 'index'])->name('nova-fibra');
    Route::get('/digital', [ProdutoController::class, 'index'])->name('digital');
    Route::get('/mobilidade', [ProdutoController::class, 'index'])->name('mobilidade');
    Route::get('/cobre', [ProdutoController::class, 'index'])->name('cobre');
    Route::get('/tv', [ProdutoController::class, 'index'])->name('tv');

    Route::get('/pesquisa/{id}', [ProdutoController::class, 'searchProduto'])->name('nova-fibra-pesquia');
});

Route::group(['prefix' => 'servico', 'as' => 'servico.'], function () {
    Route::get('/', [ServicoController::class, 'index'])->name('index');
});
