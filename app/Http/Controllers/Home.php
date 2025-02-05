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
}
