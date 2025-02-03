<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
{
    $pedidos = Pedido::with('produto')->get();
    return view('admin.pedidos.index', compact('pedidos'));
}

}
