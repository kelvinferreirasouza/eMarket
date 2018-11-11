<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PagSeguro;
use App\Pedido;

class ApiPagSeguroController extends Controller
{
    public function request(Request $request, PagSeguro $pagseguro, Pedido $pedido)
    {
        if(!$request->notificationCode)
            return response()->json(['error' => 'NotNotificationCode'], 404);
        
        $response = $pagseguro->getStatusTransaction($request->notificationCode);
        
        $pedido = $pedido->where('referencia', $response['reference'])->get()->first();
        $pedido->changeStatus($response['status']);
        
        return response()->json(['success' => true]);
    }
}
