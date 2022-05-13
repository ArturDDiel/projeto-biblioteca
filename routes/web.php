<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\RetiradaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Início
Route::get('/index', [IndexController::class, 'index']);

//Gêneros
Route::get('/genero', [GeneroController::class, 'listaGenero']);

Route::get('/genero/cadastro', [GeneroController::class, 'cadastroGenero']);

Route::post('/genero/cadastro', [GeneroController::class, 'salvarGenero']);

Route::delete('/genero/{id}/excluir', [GeneroController::class, 'excluir']);


//Livros
Route::get('/livro', [LivroController::class, 'listaLivro']);

Route::get('/livro/cadastro', [LivroController::class, 'cadastroLivro']);

Route::post('/livro/cadastro', [LivroController::class, 'salvarLivro']);

Route::delete('/livro/{id}/excluir', [LivroController::class, 'excluir']);

//Pessoa
Route::get('/pessoa', [PessoaController::class, 'listaPessoa']);

Route::get('/pessoa/cadastro', [PessoaController::class, 'cadastroPessoa']);

Route::post('/pessoa/cadastro', [PessoaController::class, 'salvarPessoa']);

Route::delete('/pessoa/{id}/excluir', [PessoaController::class, 'excluir']);

//Retirada
Route::get('/retirada', [RetiradaController::class, 'listaRetirada']);

Route::get('/retirada/cadastro', [RetiradaController::class, 'cadastroRetirada']);

Route::post('/retirada/cadastro', [RetiradaController::class, 'salvarRetirada']);

Route::delete('/retirada/{id}/excluir', [RetiradaController::class, 'excluir']);