@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container container-profile">
    <div class="profile-block col-sm-6">
        <div class="panel text-center">
            <div class="user-heading"> <a href="#"><img src="{{'../../imgs/clientes/' . Auth::guard('clientes')->user()->foto}}" alt="" title=""></a>
                <h1>{{ Auth::guard('clientes')->user()->nome }}</h1>
                <p>{{ Auth::guard('clientes')->user()->email }}</p>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{route('minhaConta')}}"><i class="fas fa-address-card"></i>Minha Conta</a></li>
                <li class="active"><a href="{{route('meusPedidos')}}"><i class="fas fa-dolly"></i>Meus Pedidos</a></li>
                <li><a href="{{route('logoutCliente')}}"><i class="fas fa-user-times"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="flatPanel panel panel-primary col-sm-8">
        @if($pedido->getStatus($pedido->status) == 'Cancelado')
        <a style="display: none" href="#" class="btn btn-primary btnCancelarPedido" onclick="return confirm('Pedido já cancelado')"><i class="fas fa-calendar-times"></i> Cancelar Pedido</a>
        @else
        <a href="{{route('cancelarPedido', $pedido->id)}}" class="btn btn-primary btnCancelarPedido" onclick="return confirm('Tem certeza que deseja cancelar este pedido?')"><i class="fas fa-calendar-times"></i> Cancelar Pedido</a>
        @endif

        <div class="flatPanel panel-produtos-pedido"><i class="fas fa-info-circle"></i> Dados do Pedido: #{{$pedido->id}}</div>
        <div class="panel-body">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <p><b><i class="far fa-calendar-alt"></i> Data:</b> {{$pedido->data}}</p>
                    </div>
                    <div class="col-sm-12">
                        <p><b><i class="far fa-credit-card"></i> Forma de Pagamento:</b> {{$pedido->getFormaPagamento($pedido->metodo_pagamento)}}</p>
                    </div>
                    <div class="col-sm-12">
                        <p><b><i class="far fa-money-bill-alt"></i> Valor Total:</b> R${{ str_replace(".", ",", number_format((float) $pedido->total, 2, '.', '')) }}</p>
                    </div>
                    <div class="col-sm-12">
                        @if($pedido->getStatus($pedido->status) == 'Cancelado')
                        <p style="color: #bd2130"><b><i class="fas fa-flag-checkered"></i> Status:</b> 
                            {{$pedido->getStatus($pedido->status)}}
                        </p>
                        @elseif($pedido->getStatus($pedido->status) == 'Pagamento Aprovado')
                        <p style="color: #239a55"><b><i class="fas fa-flag-checkered"></i> Status:</b> 
                            {{$pedido->getStatus($pedido->status)}}
                        </p>
                        @elseif($pedido->getStatus($pedido->status) == 'Aguardando Pagamento')
                        <p style="color: #f09235"><b><i class="fas fa-flag-checkered"></i> Status:</b> 
                            {{$pedido->getStatus($pedido->status)}}
                        </p>
                        @else
                        <p><b><i class="fas fa-flag-checkered"></i> Status:</b> 
                            {{$pedido->getStatus($pedido->status)}}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12 ">
                        <p><b><i class="fas fa-info-circle"></i> Código da Transação:</b></p><p> {{$pedido->codigo}}</p>
                    </div>
                    <div class="col-sm-12">
                        <p><b><i class="fas fa-info-circle"></i> Código de Referência:</b></p><p> {{$pedido->referencia}}</p>
                    </div>
                    {{$venda['total']}}
                </div>
            </div>
        </div>
    </div>
    <div class="flatPanel panel panel-primary col-sm-8">
        <div class="flatPanel panel-produtos-pedido"><i class="fas fa-cart-arrow-down"></i> Resumo dos Itens</div>
        <div class="panel-body panel-produtos-order">
            <div class="col-sm-12 table-responsive">
                <table class="table table-striped table-bordered table-hover nowrap">
                    <thead>
                        <tr>
                            <th class="text-center"><i class="far fa-images"></i></th>
                            <th class="text-center">Produto</th>
                            <th class="text-center">Quantidade</th>
                            <th class="text-center">Preço Unitário</th>
                            <th class="text-center">Subtotal</th>
                        </tr>
                    </thead>            
                    <tbody> 
                        <?php 
                              $total_pedido    = 0;
                              $subtotal        = 0;
                              $subtotal_pedido = 0;
                              $valor_frete     = 0;
                        ?>
                        @forelse($produtos as $produto)
                        <tr>
                            <td class="text-center"><img src="../../imgs/produtos/{{$produto->imagem1}}" height="60px" width="60px" style="border-radius: 40px"></td>
                            <td class="text-center">{{$produto->produtoNome}}</td>
                            <td class="text-center">
                                {{number_format((float)$produto->pivot->qtd, 0, '.', '')}}
                                @foreach($unidades as $unidade)
                                    @if($unidade->id == $produto->produtoUnidadeId )
                                        {{$unidade->sigla}}
                                    @endif 
                                @endforeach
                            </td>
                            <?php
                                $valor_unitario    = str_replace(".", ",", number_format((float) $produto->pivot->valor, 2, '.', ''));
                                $valor_subtotal    = str_replace(".", ",", number_format((float) $produto->pivot->valor * $produto->pivot->qtd, 2, '.', ''));
                                $valor_frete       = str_replace(".", ",", number_format((float) $pedido->frete, 2, '.', ''));
                                $subtotal_pedido   = str_replace(".", ",", number_format((float) $pedido->subtotal, 2, '.', ''));
                                $total_pedido      = str_replace(".", ",", number_format((float) $pedido->total, 2, '.', ''));
                            ?>
                            <td class="text-center">R$ {{$valor_unitario}}</td>
                            <td class="text-center">R$ {{$valor_subtotal}}</td>
                        </tr>
                        @empty
                            <p>Nenhum Produto encontrado!</p>
                        @endforelse()
                    </tbody>
                    <tr style="background-color: #fff">
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td class="totalPedido text-right" style="border-color: #fff">SubTotal:</td>
                        <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$subtotal_pedido}}</td>
                    </tr>
                    <tr style="background-color: #fff">
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td class="totalPedido text-right" style="border-color: #fff">Frete:</td>
                        <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$valor_frete}}</td>
                    </tr>
                    <tr style="background-color: #fff">
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td style="border-color: #fff"></td>
                        <td class="totalPedido text-right" style="border-color: #fff">Total:</td>
                        <td class="totalPedidoValor text-right" style="border-color: #fff">R$ {{$total_pedido}}</td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>
</div>

@endsection