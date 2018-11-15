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
                                            <th class="text-center">Nº Venda</th>
                                            <th class="text-center">Nº Pedido</th>
                                            <th class="text-center">Cliente</th>
                                            <th class="text-center">Data</th>
                                            <th class="text-center">Forma Pagamento</th>
                                            <th class="text-center">Total R$</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($vendas as $venda)
                                        <tr>
                                            <td class="text-center">{{$venda->id}}</td>
                                            <td class="text-center">{{$venda->pedidoId}}</td>
                                            <td class="text-center">{{$venda->getClienteVenda($venda->pedidoId)}}</td>
                                            <td class="text-center">{{$venda->getDataAttribute($venda->data)}}</td>
                                            <td class="text-center">{{$venda->getFormaPagamento($venda->pedidoId)}}</td>
                                            <td class="text-center">R$ {{str_replace(".", ",", number_format((float) $venda->total, 2, '.', ''))}}</td>
                                            @if($venda->getStatus($venda->status) == 'Venda Cancelada')
                                            <td class="text-center statusVenda-cancelada">{{$venda->getStatus($venda->status)}}<td>
                                                @else
                                            <td class="text-center statusVenda-cancelada" style="color: green">{{$venda->getStatus($venda->status)}}<td>
                                                @endif

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
                                                                            <div class="col-sm-12">
                                                                                <ul class="nav nav-tabs" role="tablist">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" data-toggle="tab" href="#home{{$venda->id}}">Venda</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#menu1{{$venda->id}}">Produtos</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#menu2{{$venda->id}}">Entrega</a>
                                                                                    </li>
                                                                                </ul>

                                                                                <!-- Tab panes -->
                                                                                <div class="tab-content">
                                                                                    <div id="home{{$venda->id}}" class="container tab-pane active"><br>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-2">
                                                                                                <label for="data" class="control-label labelInputEditUser">Nº Venda:</label>
                                                                                                <input disabled type="text" class="form-control" name="id" value="{{$venda->id}}" required>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <label for="data" class="control-label labelInputEditUser">Nº Pedido:</label>
                                                                                                <input disabled type="text" class="form-control" name="pedidoId" value="{{$venda->pedidoId}}" required>
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <!-- Formata a data para o formatado americano para enviar ao input date -->
                                                                                                <?php
                                                                                                $data = DateTime::createFromFormat('d/m/Y', $venda->data);
                                                                                                $dataVenda = $data->format('Y-m-d');
                                                                                                ?>
                                                                                                <label for="data" class="control-label labelInputEditUser">Data:</label>
                                                                                                <input disabled type="date" class="form-control" name="data" value="{{$dataVenda}}" required>
                                                                                            </div>
                                                                                            <div class="col-sm-5">
                                                                                                <label for="cliente_id" class="control-label labelInputEditUser">Nome do Cliente:</label>
                                                                                                <input disabled type="text" step="any" class="form-control" name="cliente" value="{{$venda->getClienteVenda($venda->pedidoId)}}">
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <label for="metodo_pagamento" class="control-label labelInputEditUser">Forma de Pagamento:</label>
                                                                                                <input disabled type="text" step="any" class="form-control" name="cliente" value="{{$venda->getFormaPagamento($venda->pedidoId)}}">
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <label for="cliente_id" class="control-label labelInputEditUser">Status:</label>
                                                                                                <select class="form-control labelInputEditUser" name="status">
                                                                                                    <option value="1" {{ $venda->status == 1 ? 'selected' : ''}}>Venda Realizada</option>
                                                                                                    <option value="2" {{ $venda->status == 2 ? 'selected' : ''}}>Saiu para Entrega</option>
                                                                                                    <option value="3" {{ $venda->status == 3 ? 'selected' : ''}}>Venda Concluída</option>
                                                                                                    <option value="4" {{ $venda->status == 4 ? 'selected' : ''}}>Venda Cancelada</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <label for="precoVenda" class="control-label labelInputEditUser">Frete:</label>
                                                                                                <input disabled type="number" step="any" class="form-control" name="frete" value="{{$venda->frete}}">
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <label for="total" class="control-label labelInputEditUser">Valor Total:</label>
                                                                                                <input disabled type="number" step="any" class="form-control" name="total" value="{{$venda->total}}" required>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="codigo" class="control-label labelInputEditUser">Código da Transação:</label>
                                                                                                <input disabled type="text" id="codigo" class="form-control" name="codigo" value="{{$venda->getCodeTransaction($venda->pedidoId)}}" required>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="referencia" class="control-label labelInputEditUser">Referência:</label>
                                                                                                <input disabled type="text" class="form-control" name="referencia" value="{{$venda->getCodeReference($venda->pedidoId)}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="menu1{{$venda->id}}" class="container tab-pane fade"><br>
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

                                                                                            <p>Nenhum Produto encontrado!</p>

                                                                                            </tbody>
                                                                                            <tr style="background-color: #fff">
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td class="totalPedido text-right" style="border-color: #fff">SubTotal:</td>
                                                                                                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ </td>
                                                                                            </tr>
                                                                                            <tr style="background-color: #fff">
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td class="totalPedido text-right" style="border-color: #fff">Frete:</td>
                                                                                                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ </td>
                                                                                            </tr>
                                                                                            <tr style="background-color: #fff">
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td style="border-color: #fff"></td>
                                                                                                <td class="totalPedido text-right" style="border-color: #fff">Total:</td>
                                                                                                <td class="totalPedidoValor text-right" style="border-color: #fff">R$ </td>
                                                                                            </tr>
                                                                                        </table> 
                                                                                    </div>
                                                                                    <div id="menu2{{$venda->id}}" class="container tab-pane fade"><br>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-3">
                                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                                <input type="text" class="form-control" name="cep" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="endereco" class="control-label labelInputEditUser">Endereço:</label>
                                                                                                <input type="text" class="form-control" name="logradouro" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                                <input type="number" class="form-control" name="numero" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                                <input type="text" class="form-control" name="complemento" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                                <input type="text" class="form-control" name="bairro" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                                <input type="text" class="form-control" name="estado" value="">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                                <input type="text" class="form-control" name="municipio" value="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
                                                                            <div class="col-sm-2">
                                                                                <label for="id" class="control-label labelInputEditUser">Nº Venda:</label>
                                                                                <input disabled type="text" class="form-control" name="id" value="{{$venda->id}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="pedidoId" class="control-label labelInputEditUser">Nº Pedido:</label>
                                                                                <input disabled type="text" class="form-control" name="pedidoId" value="{{$venda->pedidoId}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="pedidoId" class="control-label labelInputEditUser">Nº Pedido:</label>
                                                                                <input disabled type="text" class="form-control" name="pedidoId" value="{{$venda->pedidoId}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
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