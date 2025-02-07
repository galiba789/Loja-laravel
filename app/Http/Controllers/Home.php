<?php

namespace App\Http\Controllers;

use App\Models\produtos;
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
}
