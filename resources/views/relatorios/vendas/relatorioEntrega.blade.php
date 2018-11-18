<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Relatório de Entrega</title>
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

            .dataGeracao {
                font-size: 10pt;
                margin-top: -29px;
                margin-left: 490px;
            }

            hr {
                margin-top: 3px;
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
    </head>
    <body>
        <div class="col-sm-12">
            <img class="logo" src="http://emarketsoftware.herokuapp.com/imgs/logocompleto.png"/>
        </div>
    <center>
        <div class="col-sm-12">
            <p class="titulo">Relatório de Entrega</p>
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
                    <th class="text-center">Código de Barras</th>
                    <th class="text-center">Produto</th>
                    <th class="text-center">Preço Un</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Preço Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalGeral = 0 ?>
                @forelse($pedidoProdutos as $pedidoProduto)
                    <!-- Filtra apenas os produtos do pedido selecionado -->
                    @if($pedidoProduto['pedido_id'] == $venda->pedidoId)
                        <!-- Lista os Produtos -->
                        @foreach($produtos as $produto)
                            <!-- Mostra as informacoes do produto -->
                            @if($pedidoProduto->produto_id == $produto->id)
                                <tr>
                                    <td class="text-center"><img src="../../imgs/produtos/{{$produto->imagem1}}" height="60px" width="60px" style="border-radius: 40px"></td>
                                    <td class="text-center">{{$produto->produtoNome}}</td>
                                    <td class="text-center">{{ number_format((float)$pedidoProduto->qtd, 0, '.', '') }}
                                        @foreach($unidades as $unidade)
                                            @if($unidade->id == $produto->produtoUnidadeId )
                                                {{$unidade->sigla}}
                                            @endif 
                                        @endforeach
                                    </td>
                                    <?php
                                        $valor_unitario = str_replace(".", ",", number_format((float) $pedidoProduto->valor, 2, '.', ''));
                                        $valor_subtotal = str_replace(".", ",", number_format((float) $pedidoProduto->valor * $pedidoProduto->qtd, 2, '.', ''));
                                        $valor_frete = str_replace(".", ",", number_format((float) $venda->frete, 2, '.', ''));
                                        $total_pedido = str_replace(".", ",", number_format((float) $venda->total, 2, '.', ''));
                                        $subtotal_pedido = str_replace(".", ",", number_format((float) $venda->total - $venda->frete, 2, '.', ''));
                                    ?>
                                    <td class="text-center">R$ {{$valor_unitario}}</td>
                                    <td class="text-center">R$ {{$valor_subtotal}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
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