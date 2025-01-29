<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function produtos(){
        return view('admin.produto');
    }
    public function cadastro(){
        return view('admin.cadastro');

    }
    public function submit(Request $request) {
        $request->validate(
            [
                'nome' => ['required', 'min:2'],
                'preco' => ['required'],
                'descricao' => ['required', 'max:500'],
                'imagem' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            ],
            [
                'nome.required' => 'O nome do produto e obrigatorio',
                'nome.min' => 'O nome do produto deve ter no minimo :min caracteres ',
                'preco.required' => 'O preco e obrigatorio',
                'descricao.required' => 'A descricao do produto e obrigatoria',
                'descricao.max' => 'O produto deve ter no maximo :max caracteres',
                'imagem.required' => 'A imagem do produto e obrigatoria',
                'imagem.image' => 'Deve ser uma imagem',
                'imagem.mimes' => 'Formato nao suportado',
                'imagem.max' => 'a imagem deve ter no maximo :max caracteres',
            ]
        );

    }
}
