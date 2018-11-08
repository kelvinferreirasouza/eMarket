<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="{{ asset('css/store/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <title>Relatório de Pedidos</title>
    </head>
    <body>
        <h1>Pedidos: Aguardando Pagamento</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nº Pedido</th>
                        <th class="text-center">Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    <tr>
                        <td class="text-center">{{ $pedido->id }}</td>
                        <td class="text-center">{{ $pedido->data }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
