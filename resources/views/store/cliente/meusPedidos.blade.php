@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container">
    <div class="profile-block col-sm-6">
        <div class="panel text-center">
            <div class="user-heading"> <a href="#"><img src="http://cumbrianrun.co.uk/wp-content/uploads/2014/02/default-placeholder-300x300.png" alt="" title=""></a>
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

    <div class="card-block">
        <div class="row">
            <div class="col-md-6 table-responsive">
                <table class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">Nº Pedido</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Pagamento</th>
                            <th class="text-center">Total R$</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        <tr>
                            <td class="text-center">523424123</td>
                            <td class="text-center">00/00/00</td>
                            <td class="text-center">Boleto</td>
                            <td class="text-center">R$129,99</td>
                            <td class="text-center">Aprovado</td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>
</div>


@endsection