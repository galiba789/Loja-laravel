<?php

use App\Http\Controllers\admin\admin;
use Illuminate\Support\Facades\Route;

// Rotas da loja
Route::get('/', function () {
    return view('home/home');
});

// Rotas do admin

Route::get('/admin', [admin::class, 'index']);
Route::get('/admin/produtos', [admin::class, 'produtos'])->name('admin/produtos');
Route::get('/admin/produtos/cadastro', [admin::class, 'cadastro'])->name('cadastro');
Route::post('/admin/produtos/cadastro/submit', [admin::class, 'submit'])->name('cadastrar');

