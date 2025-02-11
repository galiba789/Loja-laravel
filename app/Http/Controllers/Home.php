<?php

namespace App\Http\Controllers;

use App\Models\monitoramento;
use App\Models\produtos;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index(){
        $produtos = produtos::where('estoque', '>=', 1)->get()->toArray();
        return view('home.home', ['produtos' => $produtos]);
    }

    public function produtos($id){
        $produto = produtos::find($id)->get()->toArray();
        // dd($produtos);
        // exit;
        return view('home.product-page', ['produto' => $produto[0]]);
    }


    public function compra($id)
    {
        // Verificar se o usuário está na sessão
        $user = session('user');
        if (!$user) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para realizar uma compra.');
        }

        // Encontrar o produto pelo ID
        $produto = produtos::find($id);

        // Atualizar o estoque do produto
        $estoque = $produto['estoque'];
        $estoque -= 1;
        $produto['estoque'] = $estoque;
        $produto->save();

        // Salvar o ID do produto na sessão
        session(['produto' => ['id' => $produto->id]]);

        // Inserir dados na tabela monitoramento
        DB::table('monitoramento')->insert([
            'user_id' => $user['id'],
            'product_id' => $produto->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return view('home.complete', ['produto' => $produto]);
    }
}
