<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Pedido;

class VendaController extends Controller
{
    
    private $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }
    
    public function listarVendas() {
        
        $vendas = Venda::paginate(10);
        $pedidos = Pedido::all();
        
        return view('vendas.listar', compact('vendas', 'pedidos'));
    }
}
