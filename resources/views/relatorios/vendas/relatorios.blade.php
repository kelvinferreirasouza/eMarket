<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Relatório de Vendas</title>
    </head>
    <body>
        <div class="col-sm-12">
            <center>
            <h1>Relatório de Vendas</h1>
            <h3>Status: {{$status}}</h3>
            </center>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nº Venda</th>
                        <th class="text-center">Nº Pedido</th>
                        <th class="text-center">Cliente</th>
                        <th class="text-center">Data</th>
                        <th class="text-center">Forma Pagamento</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendas as $venda)
                    <tr>
                        <td class="text-center">{{ $venda->id }}</td>
                        <td class="text-center">{{ $venda->pedidoId }}</td>
                        <td class="text-center">{{ $venda->getClienteVenda($venda->pedidoId)}}</td>
                        <td class="text-center">{{ $venda->data }}</td>
                        <td class="text-center">{{ $venda->getFormaPagamento($venda->pedidoId)}}</td>
                        <td class="text-center">R$ {{ str_replace(".", ",", number_format((float) $venda->total, 2, '.', '')) }}</td>
                        <td class="text-center">{{ $venda->getStatus($venda->status) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>