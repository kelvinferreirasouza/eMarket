@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container container-profile">
    <div class="profile-block col-sm-6">
        <div class="panel text-center">
            <div class="user-heading"> <a href="#"><img src="{{'../imgs/clientes/' . Auth::guard('clientes')->user()->foto}}" alt="" title=""></a>
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
        <div class="flatPanel panel-produtos-pedido"><i class="fas fa-dolly"></i> Meus Pedidos:</div>
        <div class="panel-body">
            <div class="card-block">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Nº Pedido</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Forma de Pagamento</th>
                            <th class="text-center">Total R$</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>            
                    <tbody> 
                        @forelse($pedidos as $pedido)
                        <tr>
                            <td class="text-center">{{$pedido->id}}</td>
                            <td class="text-center">{{$pedido->data}}</td>
                            <td class="text-center">{{$pedido->getFormaPagamento($pedido->metodo_pagamento)}}</td>
                            <td class="text-center">R$ {{number_format((float)$pedido->total, 2, '.', '')}}</td>
                            <td class="text-center">{{$pedido->getStatus($pedido->status)}}</td>
                            <td class="text-center"><a href="{{route('detalhesPedido', $pedido->id)}}"><img src="../imgs/visualizar.png" class="iconPedido" alt="Visualizar Pedido"</a></td>
                        </tr>
                        @empty
                    <p>Nenhum Pedido encontrado!</p>
                    @endforelse()
                    </tbody>
                </table> 
                <center><div class="pagination paginationPedidos">{!! $pedidos->links() !!}</div></center>
            </div> 
        </div>
    </div>
        </div>
    </div>
</div>


@endsection