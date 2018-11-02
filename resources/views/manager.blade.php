@extends('shared.layoutManager')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('manager') }}">Manager</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container bootstrap snippet" style="margin-top: -2%; max-width: 1500px">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded"> Clientes </div>
                                <div class="circle-tile-number text-faded ">{{$clientes}}</div>
                                <a class="circle-tile-footer" href="{{route ('listarClientes')}}">Detalhes <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading red"><i class="fa fa-truck fa-3x"></i></div></a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded"> Pedidos </div>
                                <div class="circle-tile-number text-faded ">{{$pedidos}}</div>
                                <a class="circle-tile-footer" href="{{route ('listarPedidos')}}">Detalhes <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading green"><i class="fa fa-money fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded"> Vendas do Dia </div>
                                <div class="circle-tile-number text-faded ">R$ 529,90</div>
                                <a class="circle-tile-footer" href="#">Detalhes <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading purple"><i class="fa fa-line-chart fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded"> Usuários Online </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="#">Detalhes <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</div>

@endsection