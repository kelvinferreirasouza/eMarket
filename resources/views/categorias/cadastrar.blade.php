@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Cadastro de Categoria</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarCategorias') }}">Categorias</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('salvarProduto')}}" class="formEditUser">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarProdutos') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>
                            <h5>Cadastrar Produto</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="codBarras" class="control-label labelInputEditUser">Codigo de Barras:</label>
                                    <input type="text" class="form-control" name="codBarras" placeholder="Digite o Código de Barras" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="produtoNome" class="control-label labelInputEditUser">Nome:</label>
                                    <input type="text" class="form-control" name="produtoNome" placeholder="Digite a Descrição" required>
                                </div>
                                <div class="col-sm-2">
                                        <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                        <input type="number" class="form-control" name="produtoMarcaId" placeholder="Digite a marca">
                                </div>
                                <div class="col-sm-2">
                                        <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                        <input type="number" class="form-control" name="produtoUnidadeId" placeholder="Selecione a Unidade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="qtd" class="control-label labelInputEditUser">Qtd:</label>
                                    <input type="number" class="form-control" name="qtd" placeholder="Digite a quantidade em estoque" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="qtdMin" class="control-label labelInputEditUser">Qtd Min:</label>
                                    <input type="number" class="form-control" name="qtdMin" placeholder="Digite a quantidade minima">
                                </div>
                                <div class="col-sm-2">
                                    <label for="precoCusto" class="control-label labelInputEditUser">Preço Custo:</label>
                                    <input type="number" step="any" id="precoCusto" class="form-control" name="precoCusto" placeholder="Digite o custo do produto" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="precoVenda" class="control-label labelInputEditUser">Preço Venda:</label>
                                    <input type="number" step="any" class="form-control" name="precoVenda" placeholder="Digite o preco de venda">
                                </div>
                                <div class="col-sm-2">
                                    <label for="margemLucro" class="control-label labelInputEditUser">Margem Lucro %:</label>
                                    <input type="number" step="any" class="form-control" name="margemLucro" placeholder="Digite a margem de lucro" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                    <input type="number" class="form-control" name="produtoSetorId" placeholder="Selecione o Setor">
                                </div>
                                <div class="col-sm-6">
                                    <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                    <input type="number" class="form-control" name="produtoCategoriaId" placeholder="Digite o Categoria">
                                </div>

                            </div>
                        </div>     
                    </form>
                </div>

                @endsection