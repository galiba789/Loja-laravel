<?php

use App\Http\Controllers\admin\admin;
use App\Http\Controllers\Home;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use App\Http\Middleware\CommonUseIslogged;
use Illuminate\Support\Facades\Route;

// Rotas da loja
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/cadastro', [UserController::class, 'cadastro'])->name('userCadastro');
Route::post('/cadastroSubmit', [UserController::class, 'cadastroSubmit'])->name('userCadastroSubmit');
Route::post('/loginSubmit', [UserController::class, 'loginSubmit'])->name('userLoginSubmit');
Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/produtos/{id}', [Home::class, 'produtos'])->name('produtos');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Rota de compra
Route::middleware([CommonUseIslogged::class])->group(function(){
    Route::get('/confirmacao/{id}', [Home::class, 'compra'])->name('confirmacao');
});

// Rotas do admin
Route::middleware([CheckIsNotLogged::class])->group(function(){
    Route::get('/admin', [admin::class, 'login']);
    Route::post('/admin/loginSubmit', [admin::class, 'loginSubmit'])->name('submit');
});

Route::middleware([CheckIsLogged::class])->group(function(){
    Route::get('/admin/dashboard', [admin::class, 'index']);
    Route::get('/admin/monitoramento', [admin::class, 'monitoramento'])->name('admin/monitoramento');
    Route::get('/admin/produtos', [admin::class, 'produtos'])->name('admin/produtos');
    Route::get('/admin/produtos/cadastro', [admin::class, 'cadastro'])->name('cadastro');
    Route::post('/admin/produtos/cadastro/submit', [admin::class, 'submit'])->name('cadastrar');
    Route::get('admin/produtos/editar/{id}', [admin::class, 'editar'])->name('editar');
    Route::put('admin/produtos/editar/submit/{id}', [admin::class, 'editarSubmit'])->name('atualizar');
    Route::delete('admin/produtos/deletar/{id}', [admin::class, 'destroy'])->name('excluir');
});




