<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PagSeguro;
use App\Pedido;
use App\Models\Venda;

class ApiPagSeguroController extends Controller
{
    public function request(Request $request, PagSeguro $pagseguro, Pedido $pedido)
    {
        if(!$request->notificationCode)
            return response()->json(['error' => 'NotNotificationCode'], 404);
        
        $response = $pagseguro->getStatusTransaction($request->notificationCode);
        
        $pedido = $pedido->where('referencia', $response['reference'])->get()->first();
        $pedido->changeStatus($response['status']);
        
        if($response['status'] == 3){
            $this->realizaVenda($pedido);
        } else if($response['status'] == 6 || $response['status'] == 7){
            $this->cancelaVenda($pedido);
        }
        
        return response()->json(['success' => true]);
    }
    
    public function realizaVenda($pedido)
    {
        Venda::create([
            'pedidoId' => $pedido->id,
            'total'    => $pedido->total,
            'frete'    => $pedido->frete,
            'data'     => date('Y-m-d'),
            'status'   => 1,
        ]);
    }
    
    public function cancelaVenda($pedido)
    {   
        Venda::where('pedidoId', $pedido->id)
                ->update(['status' => 3]);
    }
}
