<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="{{ asset('css/store/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <title>Relatório de Pedidos</title>
    </head>
    <body>
        <h1>Relatório de Pedidos</h1>
        <h3>Status: Aguardando Pagamento</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nº Pedido</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Forma Pagamento</th>
                        <th class="text-center">SubTotal</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    @if($pedido->getStatus($pedido->status) == 'Aguardando Pagamento' )
                    <tr>
                        <td class="text-center">{{ $pedido->id }}</td>
                        <td class="text-center">{{ $pedido->data }}</td>
                        <td class="text-center">{{ $pedido->getFormaPagamento($pedido->metodo_pagamento)}}</td>
                        <td class="text-center">{{ str_replace(".", ",", number_format((float) $pedido->subtotal, 2, '.', '')) }}</td>
                        <td class="text-center">{{ str_replace(".", ",", number_format((float) $pedido->total, 2, '.', '')) }}</td>
                        <td class="text-center">{{ $pedido->getStatus($pedido->status)}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
