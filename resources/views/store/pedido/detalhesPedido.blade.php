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
                        <p><b><i class="far fa-money-bill-alt"></i> Valor Total:</b> R${{$pedido->total}}</p>
                    </div>
                    <div class="col-sm-12">
                        <p><b><i class="fas fa-flag-checkered"></i> Status:</b> {{$pedido->getStatus($pedido->status)}}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12 ">
                        <p><b><i class="fas fa-info-circle"></i> Código da Transação:</b></p><p> {{$pedido->codigo}}</p>
                    </div>
                    <div class="col-sm-12">
                        <p><b><i class="fas fa-info-circle"></i> Código de Referência:</b></p><p> {{$pedido->referencia}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flatPanel panel panel-primary col-sm-8">
        <div class="flatPanel panel-produtos-pedido"><i class="fas fa-cart-arrow-down"></i> Produtos do Pedido</div>
        <div class="panel-body">
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
                        @forelse($produtos as $produto)
                        <tr>
                            <td class="text-center"><img src="../../imgs/produtos/{{$produto->imagem1}}" height="60px" width="60px" style="border-radius: 40px"></td>
                            <td class="text-center">{{$produto->produtoNome}}</td>
                            <td class="text-center">{{$produto->pivot->qtd}}</td>
                            <td class="text-center">R$ {{$produto->pivot->valor}}</td>
                            <td class="text-center">R$ {{$produto->pivot->valor * $produto->pivot->qtd}}</td>
                        </tr>
                        @empty
                    <p>Nenhum Produto encontrado!</p>
                    @endforelse()
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>

@endsection