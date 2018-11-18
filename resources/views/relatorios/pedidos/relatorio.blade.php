<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Relatório de Pedidos</title>
    </head>
    <style>
        .logo{
            width: 150px;
            height: 100px;
        }

        .titulo{
            font-size: 20pt;
            font-weight: bold;
            margin-top: -100px;
        }

        .status {
            font-size: 15pt;
            font-weight: bold;
            margin-top: -60px;
        }

        .dataGeracao {
            font-size: 10pt;
            margin-top: -30px;
            margin-left: 490px;
        }

        hr {
            margin-top: 25px;
        }
        
        .semRegistro{
            font-size: 12pt;
            font-weight: bold;
            margin-top: 40px; 
        }
        
        .totalizador{
            float: right;
            margin-top: 35px;
        }
    </style>
    <body>
        <div class="col-sm-12">
            <img class="logo" src="http://emarketsoftware.herokuapp.com/imgs/logocompleto.png"/>
        </div>
    <center>
        <div class="col-sm-12">
            <p class="titulo">Relatório de Pedidos</p>
        </div>

        <div class="col-sm-6">
            <p class="status">Status: {{$status}}</p>
        </div>
        <div class="col-sm-6">
            <?php $data = new DateTime(); ?>
            <p class="dataGeracao">Gerado em: {{$data->format("d/m/Y H:i:s")}}</p>
        </div>
        </center>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Nº Pedido</th>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Forma Pagamento</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                 <?php $totalGeral = 0 ?>
                @forelse($pedidos as $pedido)
                <tr>
                    <td class="text-center">{{ $pedido->id }}</td>
                    <td class="text-center">{{ $pedido->getClientePedido($pedido->id) }}</td>
                    <td class="text-center">{{ $pedido->data }}</td>
                    <td class="text-center">{{ $pedido->getFormaPagamento($pedido->metodo_pagamento)}}</td>
                    <td class="text-center">R$ {{ str_replace(".", ",", number_format((float) $pedido->total, 2, '.', '')) }}</td>
                    <?php $totalGeral = $totalGeral + $pedido->total ?>
                    <td class="text-center">{{ $pedido->getStatus($pedido->status) }}</td>
                </tr>
                @empty
                <div class="col-sm-12">
                    <p class="semRegistro">Nenhuma registro encontrado!!</p>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-sm-6 totalizador">
        <p><b>TOTAL GERAL:</b> R$ {{ str_replace(".", ",", number_format((float) $totalGeral, 2, '.', '')) }}</p>
    </div>
</body>
</html>