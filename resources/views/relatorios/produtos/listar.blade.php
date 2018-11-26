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
                            <li class="breadcrumb-item"><a href="#">Relatórios</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Produtos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Relatórios</h5>
                            <span>Listagem dos relatórios disponíveis para consulta.</span>   
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Setor</th>
                                            <th class="text-center">Relatório</th>
                                            <th class="text-center">Descrição</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-center">Produtos</td>
                                            <td class="text-center">Estoque Mínimo</td>
                                            <td>Gera relatório com todos os produtos que estão com a quantidade de estoque mínima.  </td>
                                            <td class="text-center">
                                                <?php $id=1 ?>
                                                <a href="{{route('relProdutoEstoqueMin', $id)}}" target="_blank"><img src="../../imgs/iconView.png" title="Visualizar Relatório" class="btnAcoes"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection