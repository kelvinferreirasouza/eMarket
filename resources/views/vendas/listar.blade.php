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
                            <li class="breadcrumb-item"><a href="#">Financeiro</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarVendas') }}">Vendas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Vendas</h5>
                            <span>Listagem das vendas realizadas.</span>   
                        </div>

                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarFornecedor', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}

                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nº Venda</th>
                                            <th>Nº Pedido</th>
                                            <th>Cliente</th>
                                            <th>Data</th>
                                            <th>Forma Pagamento</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($vendas as $venda)
                                        <tr>
                                            <td>{{$venda->id}}</td>
                                            <td>{{$venda->pedidoId}}</td>
                                            <td>{{$pedidos->getClientePedido($pedido->id)}}</td>
                                            <td>{{$pedidos->getDataAttribute($venda->data)}}</td>
                                            <td>{{$pedidos->getFormaPagamento($pedido->metodo_pagamento)}}</td>
                                            <td>R$ {{str_replace(".", ",", number_format((float) $venda->total, 2, '.', ''))}}</td>
                                            <td>{{$venda->status}}</td>
                                            <td>

                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$venda->id}}" data-whatever="{{$venda->id}}" data-whateverpedidoId="{{$venda->pedidoId}}" data-whatevertotal="{{$venda->total}}" data-whateverfrete="{{$venda->frete}}" data-whateverdata="{{$venda->data}}" data-whateverstatus="{{$venda->status}}"><img src="../../imgs/iconEdit.png" title="Editar Venda" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$venda->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Venda Nº{{$venda->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVenda', $venda->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Editar Venda</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="modal-footer modal-footer-prod">
                                                                        <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    </div>       
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                                <!-- FIM MODAL EDITAR -->

                                                <!-- BOTAO VISUALIZAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$venda->id}}" data-whatever="{{$venda->id}}" data-whateverpedidoId="{{$venda->pedidoId}}" data-whatevertotal="{{$venda->total}}" data-whateverfrete="{{$venda->frete}}" data-whateverdata="{{$venda->data}}" data-whateverstatus="{{$venda->status}}"><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$venda->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Venda Nº{{$venda->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVenda', $venda->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Venda</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input disabled type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input disabled type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="modal-footer modal-footer-prod">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                    </div>  
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->

                                                <a href="{{route('excluirVenda', $venda->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" titles="Excluir Venda" class="btnAcoes"></a>
                                            </td>
                                        </tr> 
                                        @empty
                                        <tr>
                                            <td colspan="200">Nenhum resultado encontrado!!</td>
                                        </tr>
                                        @endforelse                               
                                    </tbody>
                                </table> 
                                <div class="pagination">{!! $vendas->links() !!}</div>
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection