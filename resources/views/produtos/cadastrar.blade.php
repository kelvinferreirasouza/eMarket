@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Cadastro de Produto</h4>
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
                                    <label for="codBarras" class="control-label labelInputEditUser">Código de Barras:</label>
                                    <input type="text" class="form-control" name="codBarras" placeholder="Digite o Código de Barras" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="produtoNome" class="control-label labelInputEditUser">Descrição:</label>
                                    <input type="text" class="form-control" name="produtoNome" placeholder="Digite a Descrição" required>
                                </div>
                                <div class="col-sm-2">
                                        <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                        <select class="form-control labelInputEditUser" name="produtoMarcaId" id="produtoMarcaId">
                                                <option></option>
                                                @foreach($marcas as $marca)    
                                                <option value="{{$marca->id}}">{{$marca->nome}}</option>
                                                @endforeach  
                                        </select>
                                </div>
                                <div class="col-sm-2">
                                        <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                        <select class="form-control labelInputEditUser" name="produtoUnidadeId" id="produtoUnidadeId">
                                                <option></option>
                                                @foreach($unidades as $unidade)    
                                                <option value="{{$unidade->id}}">{{$unidade->sigla}}</option>
                                                @endforeach  
                                        </select>
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
                                    <select class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId">
                                            <option></option>
                                            @foreach($setores as $setor)    
                                            <option value="{{$setor->id}}">{{$setor->nome}}</option>
                                            @endforeach  
                                        </select>
                                </div>
                                <div class="col-sm-2">
                                    <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                    <select class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId">
                                            <option></option>
                                            @foreach($categorias as $categoria)
                                            
                                            @if($setor->id == $categoria->produtoSetorId )
                                                <option value="{{$categoria->id}}">{{ $categoria->nome}}</option>
                                            @endif

                                            @endforeach  
                                        </select>
                                </div>
                                <!-- SCRIPT QUE VAI PEGAR O SETOR SELECIONADO E MOSTRAR APENAS AS CATEGORIAS RELACIONADAS A ELE -->
                                <script>
                                        $('#produtoSetorId').on('change', function () {
                                            var produtoSetorId = $(this).val();
                                            if (produtoSetorId) {
                                                $.ajax({
                                                    type: "GET",
                                                    url: "{{url('ajax/pegar-lista-categorias')}}?produtoSetorId=" + produtoSetorId,
                                                    success: function (res) {
                                                        if (res) {
                                                            $("#produtoCategoriaId").empty();
                                                            $.each(res, function (key, value) {
                                                                $("#produtoCategoriaId").append('<option value="' + key + '">' + value + '</option>');
                                                            });
        
                                                        } else {
                                                            $("#produtoSetorId").empty();
                                                        }
                                                    }
                                                });
                                            } else {
                                                $("#produtoSetorId").empty();
                                            }
        
                                        });
                                    </script>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection