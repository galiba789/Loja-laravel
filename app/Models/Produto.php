<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function pedidos()
{
    return $this->hasMany(Pedido::class);
}

}
