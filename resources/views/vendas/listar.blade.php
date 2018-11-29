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
                                            @if($venda->getStatus($venda->status) == 'Cancelada')
                                            <td class="text-center statusVenda-cancelada">{{$venda->getStatus($venda->status)}}<td>
                                                @elseif($venda->getStatus($venda->status) == 'Em Entrega')
                                            <td class="text-center statusVenda-saiuEntrega">{{$venda->getStatus($venda->status)}}<td>
                                                @else 
                                            <td class="text-center statusVenda-aprovada">{{$venda->getStatus($venda->status)}}<td>
                                                @endif

                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$venda->id}}" data-whatever="{{$venda->id}}" data-whateverpedidoId="{{$venda->pedidoId}}" data-whatevertotal="{{$venda->total}}" data-whateverfrete="{{$venda->frete}}" data-whateverdata="{{$venda->data}}" data-whateverstatus="{{$venda->status}}"><img src="../../imgs/iconEdit.png" title="Editar Venda" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$venda->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Venda Nº {{$venda->id}} <i class="fa fa-help"></i></h5>
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
                                                                                                $data = DateTime::createFromFormat('d/m/Y', $pedido->data);
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
                                                                                                    <option value="1" {{ $venda->status == 1 ? 'selected' : ''}}>Realizada</option>
                                                                                                    <option value="2" {{ $venda->status == 2 ? 'selected' : ''}}>Em Entrega</option>
                                                                                                    <option value="3" {{ $venda->status == 3 ? 'selected' : ''}}>Concluída</option>
                                                                                                    <option value="4" {{ $venda->status == 4 ? 'selected' : ''}}>Cancelada</option>
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
                                                                                    <div id="menu2{{$venda->id}}" class="container tab-pane fade"><br>
                                                                                        <?php
                                                                                        $cliente = $venda->getClienteEndereco($venda->pedidoId);
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-3">
                                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                                <input disabled type="text" class="form-control" name="cep" value="{{$cliente['cep']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="endereco" class="control-label labelInputEditUser">Endereço:</label>
                                                                                                <input disabled type="text" class="form-control" name="logradouro" value="{{$cliente['logradouro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                                <input disabled type="number" class="form-control" name="numero" value="{{$cliente['numero']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                                <input disabled type="text" class="form-control" name="complemento" value="{{$cliente['complemento']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                                <input disabled type="text" class="form-control" name="bairro" value="{{$cliente['bairro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                                <input disabled type="text" class="form-control" name="estado" value="{{$cliente['estado']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                                <input disabled type="text" class="form-control" name="municipio" value="{{$cliente['municipio']}}">
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
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Venda Nº {{$venda->id}} <i class="fa fa-help"></i></h5>
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
                                                                            <div class="col-sm-12">
                                                                                <ul class="nav nav-tabs" role="tablist">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" data-toggle="tab" href="#visualizarPedido{{$venda->id}}">Venda</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#visualizarProdutos{{$venda->id}}">Produtos</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#visualizarEndereco{{$venda->id}}">Entrega</a>
                                                                                    </li>
                                                                                </ul>

                                                                                <!-- Tab panes -->
                                                                                <div class="tab-content">
                                                                                    <div id="visualizarPedido{{$venda->id}}" class="container tab-pane active"><br>
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
                                                                                                <select disabled class="form-control labelInputEditUser" name="status">
                                                                                                    <option disabled value="1" {{ $venda->status == 1 ? 'selected' : ''}}>Venda Realizada</option>
                                                                                                    <option disabled value="2" {{ $venda->status == 2 ? 'selected' : ''}}>Saiu para Entrega</option>
                                                                                                    <option disabled value="3" {{ $venda->status == 3 ? 'selected' : ''}}>Venda Concluída</option>
                                                                                                    <option disabled value="4" {{ $venda->status == 4 ? 'selected' : ''}}>Venda Cancelada</option>
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
                                                                                    <div id="visualizarProdutos{{$venda->id}}" class="container tab-pane fade"><br>
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
                                                                                    <div id="visualizarEndereco{{$venda->id}}" class="container tab-pane fade"><br>
                                                                                        <?php
                                                                                        $cliente = $venda->getClienteEndereco($venda->pedidoId);
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-3">
                                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                                <input disabled type="text" class="form-control" name="cep" value="{{$cliente['cep']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="endereco" class="control-label labelInputEditUser">Endereço:</label>
                                                                                                <input disabled type="text" class="form-control" name="logradouro" value="{{$cliente['logradouro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                                <input disabled type="number" class="form-control" name="numero" value="{{$cliente['numero']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                                <input disabled type="text" class="form-control" name="complemento" value="{{$cliente['complemento']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                                <input disabled type="text" class="form-control" name="bairro" value="{{$cliente['bairro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                                <input disabled type="text" class="form-control" name="estado" value="{{$cliente['estado']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                                <input disabled type="text" class="form-control" name="municipio" value="{{$cliente['municipio']}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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

                                                <!-- BOTAO DA MODAL DE ENTREGA -->
                                                <a href="" data-toggle="modal" data-target="#modalEntrega{{$venda->id}}" data-whatever="{{$venda->id}}" data-whateverpedidoId="{{$venda->pedidoId}}" data-whatevertotal="{{$venda->total}}" data-whateverfrete="{{$venda->frete}}" data-whateverdata="{{$venda->data}}" data-whateverstatus="{{$venda->status}}"><img src="../../imgs/shipping-button.png" title="Realizar Entrega" class="btnAcoes"></a>

                                                <!-- INICIO MODAL DE ENTREGA -->
                                                <div class="modal fade" id="modalEntrega{{$venda->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Venda Nº {{$venda->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVenda', $venda->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Realizar Entrega</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <ul class="nav nav-tabs" role="tablist">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#visualizarPed{{$venda->id}}">Venda</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#visualizarProd{{$venda->id}}">Produtos</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" data-toggle="tab" href="#visualizarEnd{{$venda->id}}">Entrega</a>
                                                                                    </li>
                                                                                </ul>

                                                                                <!-- Tab panes -->
                                                                                <div class="tab-content">
                                                                                    <div id="visualizarPed{{$venda->id}}" class="container tab-pane"><br>
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
                                                                                                <select disabled class="form-control labelInputEditUser" name="status">
                                                                                                    <option disabled value="1" {{ $venda->status == 1 ? 'selected' : ''}}>Venda Realizada</option>
                                                                                                    <option disabled value="2" {{ $venda->status == 2 ? 'selected' : ''}}>Saiu para Entrega</option>
                                                                                                    <option disabled value="3" {{ $venda->status == 3 ? 'selected' : ''}}>Venda Concluída</option>
                                                                                                    <option disabled value="4" {{ $venda->status == 4 ? 'selected' : ''}}>Venda Cancelada</option>
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
                                                                                    <div id="visualizarProd{{$venda->id}}" class="container tab-pane fade"><br>
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
                                                                                    <div id="visualizarEnd{{$venda->id}}" class="container tab-pane active"><br>
                                                                                        <?php
                                                                                        $cliente = $venda->getClienteEndereco($venda->pedidoId);
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-3">
                                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                                <input disabled type="text" class="form-control" name="cep" value="{{$cliente['cep']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="endereco" class="control-label labelInputEditUser">Endereço:</label>
                                                                                                <input disabled type="text" class="form-control" name="logradouro" value="{{$cliente['logradouro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                                <input disabled type="number" class="form-control" name="numero" value="{{$cliente['numero']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                                <input disabled type="text" class="form-control" name="complemento" value="{{$cliente['complemento']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                                <input disabled type="text" class="form-control" name="bairro" value="{{$cliente['bairro']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                                <input disabled type="text" class="form-control" name="estado" value="{{$cliente['estado']}}">
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                                <input disabled type="text" class="form-control" name="municipio" value="{{$cliente['municipio']}}">
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="modal-footer modal-footer-prod">
                                                                        <a href="{{route('concluirEntrega', $venda->id)}}" class="btn btn-secondary btn-entregue"><i class="fas fa-clipboard-check"></i> Entregue</a>
                                                                        <a href="{{route('realizarEntrega', $venda->id)}}" class="btn btn-secondary btn-realizar-entrega" target="_blank" id="realizarEntrega"><i class="fas fa-shipping-fast"></i> Realizar Entrega</a>
                                                                        <button type="button" class="btn btn-secondary btn-voltar" data-dismiss="modal"><i class="fas fa-undo"></i> Voltar</button>
                                                                    </div>  
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL DE ENTREGA -->
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
                @push('scripts')
                <script>
                        $( "#realizarEntrega" ).click(function() {
                            window.location.href = '{{route("listarVendas")}}';
                        });

                </script>
                @endpush