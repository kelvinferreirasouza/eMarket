@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Editar de Produto</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarProdutos') }}">Produtos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarProduto', $produto->id)}}" class="formEditProd">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarProdutos') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>
                            <h5>Editar Produto</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="codBarras" class="control-label labelInputEditUser">Codigo de Barras:</label>
                                    <input type="text" class="form-control" name="codBarras" placeholder="Digite o Código de Barras" value="{{$produto->codBarras}}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="produtoNome" class="control-label labelInputEditUser">Nome:</label>
                                    <input type="text" class="form-control" name="produtoNome" placeholder="Digite a Descrição" value="{{$produto->produtoNome}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                    <input type="number" class="form-control" name="produtoMarcaId" placeholder="Digite a marca" value="{{$produto->produtoMarcaId}}" >
                                </div>
                                <div class="col-sm-2">
                                    <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                    <input type="number" class="form-control" name="produtoUnidadeId" placeholder="Selecione a Unidade" value="{{$produto->produtoUnidadeId}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="qtd" class="control-label labelInputEditUser">Qtd:</label>
                                    <input type="number" class="form-control" name="qtd" placeholder="Digite a quantidade em estoque" value="{{$produto->qtd}}" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="qtdMin" class="control-label labelInputEditUser">Qtd Min:</label>
                                    <input type="number" class="form-control" name="qtdMin" placeholder="Digite a quantidade minima" value="{{$produto->qtdMin}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="precoCusto" class="control-label labelInputEditUser">Preço Custo:</label>
                                    <input type="number" step="any" id="precoCusto" class="form-control" name="precoCusto" placeholder="Digite o custo do produto" value="{{$produto->precoCusto}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="precoVenda" class="control-label labelInputEditUser">Preço Venda:</label>
                                    <input type="number" step="any" class="form-control" name="precoVenda" placeholder="Digite o preco de venda" value="{{$produto->precoVenda}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="margemLucro" class="control-label labelInputEditUser">Margem Lucro %:</label>
                                    <input type="number" step="any" class="form-control" name="margemLucro" placeholder="Digite a margem de lucro" value="{{$produto->margemLucro}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">

                                    <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                    <select class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId" value="{{$produto->produtoSetorId}}">
                                        <option></option>
                                        @foreach($setores as $setor)    
                                        <option value="{{$setor->id}}" {{$setor->id == $produto->produtoSetorId ? 'selected' : ''}}>{{$setor->nome}}</option>
                                        @endforeach  
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                    <input type="number" class="form-control" name="produtoCategoriaId" placeholder="Digite o Categoria" value="{{$produto->produtoCategoriaId}}">
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection