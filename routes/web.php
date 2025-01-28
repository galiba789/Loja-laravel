<?php

use App\Http\Controllers\admin\login;
use Illuminate\Support\Facades\Route;

// Rotas da loja
Route::get('/', function () {
    return view('home/home');
});

// Rotas do admin

Route::get('/admin', [login::class, 'login']);
Route::get('/admin/register', [login::class, 'register']);
