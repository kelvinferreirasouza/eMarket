<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>Comprovante de Entrega</title>
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

            .infoEntrega {
                font-size: 15pt;
                font-weight: bold;
                margin-top: -60px;
            }

            div.page_break + div.page_break{
                page-break-before: always;
            }
        </style>
    </head>
    <body>
        <div class="col-sm-12">
            <img class="logo" src="http://emarketsoftware.herokuapp.com/imgs/logocompleto.png"/>
        </div>
    <center>
        <div class="col-sm-12">
            <p class="titulo">Comprovante de Entrega</p>
        </div>
        <div class="col-sm-6">
            <p class="infoEntrega">Pedido Nº: {{$pedido->id}}, Venda Nº: {{$venda->id}}</p>
        </div>
        <div class="col-sm-6">
            <?php $data = new DateTime(); ?>
            <p class="dataGeracao">Gerado em: {{$data->format("d/m/Y H:i:s")}}</p>
        </div>
    </center>
    <hr>
    <p style=" font-size: 15pt; "><b>Dados da Venda: </b></p>
    <hr>
    <p><b>- Nome do Cliente:</b> {{$cliente->nome}}</p>
    <p><b>- Telefone de Contato:</b> {{$cliente->celular}}</p>
    <p><b>- Forma de Pagamento:</b> {{$venda->getFormaPagamento($venda->pedidoId)}}</p>
    <hr>

    <p style=" font-size: 15pt; "><b>Dados de Entrega: </b></p>
    <hr>
    <p><b>- Endereço:</b> {{$cliente->logradouro}}</p>
    <p><b>- Número:</b> {{$cliente->numero}}</p>
    <p><b>- Complemento:</b> {{$cliente->complemento}}</p>
    <p><b>- Bairro:</b> {{$cliente->bairro}}</p>
    <p><b>- Estado:</b> {{$cliente->estado}}</p>
    <p><b>- Município:</b> {{$cliente->municipio}}</p>
    <hr>

    <p style=" font-size: 15pt; "><b>Produtos da Venda: </b></p>
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
                <?php $total_pedido = 0 ?>
                <!-- Lista os Pedidos Produtos -->
                @forelse($pedidoProdutos as $pedidoProduto)
                <!-- Filtra apenas os produtos do pedido selecionado -->
                @if($pedidoProduto->pedido_id == $venda->pedidoId)
                <!-- Lista os Produtos -->
                @foreach($produtos as $produto)
                <!-- Mostra as informacoes do produto -->
                @if($pedidoProduto->produto_id == $produto->id)
                <tr>
                    <td class="text-center">{{$produto->codBarras}}</td>
                    <td class="text-center">{{$produto->produtoNome}}</td>
                    <?php
                    $valor_unitario = str_replace(".", ",", number_format((float) $pedidoProduto->valor, 2, '.', ''));
                    $valor_subtotal = str_replace(".", ",", number_format((float) $pedidoProduto->valor * $pedidoProduto->qtd, 2, '.', ''));
                    $valor_frete = str_replace(".", ",", number_format((float) $venda->frete, 2, '.', ''));
                    $total_pedido = str_replace(".", ",", number_format((float) $venda->total, 2, '.', ''));
                    $subtotal_pedido = str_replace(".", ",", number_format((float) $venda->total - $venda->frete, 2, '.', ''));
                    ?>
                    <td class="text-center">R$ {{$valor_unitario}}</td>
                    <td class="text-center">{{ number_format((float)$pedidoProduto->qtd, 0, '.', '') }}
                        @foreach($unidades as $unidade)
                        @if($unidade->id == $produto->produtoUnidadeId )
                        {{$unidade->sigla}}
                        @endif 
                        @endforeach
                    </td>
                    <td class="text-center">R$ {{$valor_subtotal}}</td>
                </tr>
                @endif
                @endforeach
                @endif
                @empty
            <p>Nenhum Produto encontrado!</p>
            @endforelse()
            </tbody>
            <tr style="background-color: #fff">
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td class="totalPedido text-right" style="border-color: #fff"><b>SUBTOTAL:</b></td>
                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$subtotal_pedido}}</td>
            </tr>
            <tr style="background-color: #fff">
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td class="totalPedido text-right" style="border-color: #fff"><b>FRETE:</b></td>
                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$valor_frete}}</td>
            </tr>
            <tr style="background-color: #fff">
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td style="border-color: #fff"></td>
                <td class="totalPedido text-right" style="border-color: #fff"><b>TOTAL:</b></td>
                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$total_pedido}}</td>
            </tr>
        </table>
    </div>
    <div class="page_break">
        <p style=" font-size: 15pt; "><b>Declaração de Recebimento: </b></p>
        <hr>
        <p align="justify" style=" font-size: 13pt ">
            Eu, <b><u>{{$cliente->nome}}</u></b>, inscrito no CPF nº: <b><u>{{$cliente->cpf}}</u></b>, declaro para os devidos fins ter conferido e recebido
            de <b><u>{{$empresa->razaoSocial}}</u></b>, inscrito no CNPJ nº: <b><u>{{$empresa->cnpj}}</u></b>  os produtos contidos neste documento, 
            referentes ao pedido de nº <b><u>{{$pedido->id}}</u></b> realizado em {{$pedido->data}}. 
        </p>
        <br>
        <p style=" font-size: 13pt">{{$empresa->municipio}},
            <?php
            setlocale(LC_TIME, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d');
            echo strftime("%d de %B de %Y", strtotime($date));
            ?>.
        </p>
        <br>
        <br>
        <center><p>_______________________________</p></center>
        <center><p style="text-transform: uppercase;"><b>{{$cliente->nome}}</b></p></center>
        <center><p><b>CPF: {{$cliente->cpf}}</b></p></center>
    </div>
</body>
</html>