<?php

namespace App\Http\Controllers;

use App\Models\monitoramentoModel;
use App\Models\produtos;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

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

    public function compra($id){
        // print_r($_SESSION['user']);
        // exit;
        $produto = produtos::find($id);
        $monitoramento = new monitoramentoModel;
        $estoque = $produto['estoque'];
        $estoque -= 1;
        $produto['estoque'] = $estoque;
        $produto->save();
        session(
            [
                'produto' => [
                    'id' => $produto->id,
                ]
            ]
        );


        return view('home.complete', ['produto' => $produto]);
    }
}
