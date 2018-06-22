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
                            <li class="breadcrumb-item"><a href="{{ route('listarProdutos') }}">Produtos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Produtos Cadastros</h5>
                            <span>Listagem dos produtos cadastrados e suas informações</span>   
                        </div>
                        <!-- BOTAO CADASTRAR PRODUTO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar" >
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Produto</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalProd" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">PRODUTOS<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarProduto')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Produto</h5></CENTER>
                                            </div>
                                            <div class="card-block">
                                                <div class="card-block">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label for="codBarras" class="control-label labelInputEditUser">Código de Barras:</label>
                                                            <input type="text" class="form-control" name="codBarras" placeholder="Cód. Barras" required>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="produtoNome" class="control-label labelInputEditUser">Descrição:</label>
                                                            <input type="text" class="form-control" name="produtoNome" placeholder="Digite a Descrição" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                            <select class="form-control labelInputEditUser" name="produtoMarcaId" id="produtoMarcaId">
                                                                <option>Selecione..</option>
                                                                @foreach($marcas as $marca)    
                                                                <option value="{{$marca->id}}">{{$marca->nome}}</option>
                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label for="qtd" class="control-label labelInputEditUser">Quantidade:</label>
                                                            <input type="number" class="form-control" name="qtd" placeholder="Qtd. disp." required>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="qtdMin" class="control-label labelInputEditUser">Qtd Min:</label>
                                                            <input type="number" class="form-control" name="qtdMin" placeholder="Qtd. min.">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="precoCusto" class="control-label labelInputEditUser">Preço Custo:</label>
                                                            <input type="number" step="any" id="precoCusto" class="form-control" name="precoCusto" placeholder="Digite o custo" required>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="precoVenda" class="control-label labelInputEditUser">Preço Venda:</label>
                                                            <input type="number" step="any" class="form-control" name="precoVenda" placeholder="Preco de venda">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="margemLucro" class="control-label labelInputEditUser">Margem Lucro %:</label>
                                                            <input type="number" step="any" class="form-control" name="margemLucro" placeholder="Lucro %" required>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                                            <select class="form-control labelInputEditUser" name="produtoUnidadeId" id="produtoUnidadeId">
                                                                <option>Selecione..</option>
                                                                @foreach($unidades as $unidade)    
                                                                <option value="{{$unidade->id}}">{{$unidade->sigla}}</option>
                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                                            <select class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId">
                                                                <option>Selecione..</option>
                                                                @foreach($setores as $setor)    
                                                                <option value="{{$setor->id}}">{{$setor->nome}}</option>
                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                            <select class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId">
                                                                <option>Selecione..</option>
                                                                @foreach($categorias as $categoria)
                                                                <option></option>
                                                                @if($setor->id == $categoria->produtoSetorId )
                                                                <option value="{{$categoria->id}}">{{ $categoria->nome}}</option>
                                                                @endif

                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label for="produtoFornecedorId" class="control-label labelInputEditUser">Fornecedor:</label>
                                                            <select class="form-control labelInputEditUser" name="produtoFornecedorId" id="produtoFornecedorId">
                                                                <option>Selecione..</option>
                                                                @foreach($fornecedores as $fornecedor)
                                                                <option value="{{$fornecedor->id}}">{{$fornecedor->nomeFantasia}}</option>
                                                                @endforeach  
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="isPromocao" class="control-label labelInputEditUser">Promoção:</label>
                                                            <select class="form-control labelInputEditUser" name="isPromocao">
                                                                <option>Selecione..</option>
                                                                <option value="1">Sim</option>
                                                                <option value="0">Não</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                            <select class="form-control labelInputEditUser" name="isAtivo">
                                                                <option value="1">Ativo</option>
                                                                <option value="0">Inativo</option>
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
                                            </div>    
                                            <div class="modal-footer modal-footer-formpag">
                                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            </div>       
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM MODAL CADASTRO -->
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Código Barras</th>
                                            <th>Descrição</th>
                                            <th>Qtd</th>
                                            <th>Unidade</th>
                                            <th>Preço Custo</th>  
                                            <th>Preço Venda</th>
                                            <th>Margem Lucro</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach($produtos as $produto)
                                        <tr>
                                            <td>{{$produto->codBarras}}</td>
                                            <td>{{$produto->produtoNome}}</td>
                                            <td>{{$produto->qtd}}</td>
                                            <td>{{$produto->produtoUnidadeId}}</td>
                                            <td>{{$produto->precoCusto}}</td>
                                            <td>{{$produto->precoVenda}}</td>
                                            <td>{{$produto->margemLucro}}</td>
                                            <td>
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$produto->id}}" data-whatever="{{$produto->id}}" data-whatevercodbarras="{{$produto->codBarras}}" data-whatevernome="{{$produto->nome}}" data-whatevermarca="{{$produto->produtoMarcaId}}" data-whateverunidade="{{$produto->produtoUnidadeId}}" data-whateverqtd="{{$produto->qtd}}" data-whateverqtdmin="{{$produto->qtdMin}}" data-whateverprecocusto="{{$produto->precoCusto}}" data-whateverprecovenda="{{$produto->precoVenda}}" data-whatevermargemlucro="{{$produto->margemLucro}}" data-whateversetor="{{$produto->produtoSetorId}}" data-whatevercategoria="{{$produto->produtoCategoriaId}}" data-whateverativo="{{$produto->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Produto" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalProd" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Produto #{{$produto->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarProduto', $produto->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Produto</h5></CENTER>
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
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select class="form-control labelInputEditUser" name="produtoMarcaId" id="produtoMarcaId" value="{{$produto->produtoMarcaId}}">
                                                                                    @foreach($marcas as $marca)    
                                                                                    <option value="{{$marca->id}}" {{$marca->id == $produto->produtoMarcaId ? 'selected' : ''}}>{{$marca->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="qtd" class="control-label labelInputEditUser">Quantidade:</label>
                                                                                <input type="number" class="form-control" name="qtd" placeholder="Qtd. em estoque" value="{{$produto->qtd}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
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
                                                                            <div class="col-sm-2">
                                                                                <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                                                                <select class="form-control labelInputEditUser" name="produtoUnidadeId" id="produtoUnidadeId" value="{{$produto->produtoUnidadeId}}">
                                                                                    @foreach($unidades as $unidade)    
                                                                                    <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                                                                <select class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId" value="{{$produto->produtoSetorId}}">
                                                                                    <option></option>
                                                                                    @foreach($setores as $setor)    
                                                                                    <option value="{{$setor->id}}" {{$setor->id == $produto->produtoSetorId ? 'selected' : ''}}>{{$setor->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                                                <select class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId" value="{{$produto->produtoCategoriaId}}">
                                                                                    @foreach($categorias as $categoria)    
                                                                                    <option value="{{$categoria->id}}" {{$categoria->id == $produto->produtoCategoriaId ? 'selected' : ''}}>{{$categoria->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoFornecedorId" class="control-label labelInputEditUser">Fornecedor:</label>
                                                                                <select class="form-control labelInputEditUser" name="produtoFornecedorId" id="produtoFornecedorId">
                                                                                    <option></option>
                                                                                    @foreach($fornecedores as $fornecedor)
                                                                                    <option value="{{$fornecedor->id}}" {{$fornecedor->id == $produto->produtoFornecedorId ? 'selected' : ''}}>{{$fornecedor->nomeFantasia}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isPromocao" class="control-label labelInputEditUser">Promoção:</label>
                                                                                <select class="form-control labelInputEditUser" name="isPromocao">
                                                                                    <option></option>
                                                                                    <option value="1" {{ $produto->isPromocao == 1 ? 'selected' : ''}}>Sim</option>
                                                                                    <option value="0" {{ $produto->isPromocao == 0 ? 'selected' : ''}}>Não</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $produto->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $produto->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$produto->id}}" data-whatever="{{$produto->id}}" data-whatevercodbarras="{{$produto->codBarras}}" data-whatevernome="{{$produto->nome}}" data-whatevermarca="{{$produto->produtoMarcaId}}" data-whateverunidade="{{$produto->produtoUnidadeId}}" data-whateverqtd="{{$produto->qtd}}" data-whateverqtdmin="{{$produto->qtdMin}}" data-whateverprecocusto="{{$produto->precoCusto}}" data-whateverprecovenda="{{$produto->precoVenda}}" data-whatevermargemlucro="{{$produto->margemLucro}}" data-whateversetor="{{$produto->produtoSetorId}}" data-whatevercategoria="{{$produto->produtoCategoriaId}}" data-whateverativo="{{$produto->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Produto" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalProd" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Produto #{{$produto->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarProduto', $produto->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Produto</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="codBarras" class="control-label labelInputEditUser">Codigo de Barras:</label>
                                                                                <input disabled type="text" class="form-control" name="codBarras" placeholder="Digite o Código de Barras" value="{{$produto->codBarras}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="produtoNome" class="control-label labelInputEditUser">Nome:</label>
                                                                                <input disabled type="text" class="form-control" name="produtoNome" placeholder="Digite a Descrição" value="{{$produto->produtoNome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="produtoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="produtoMarcaId" id="produtoMarcaId" value="{{$produto->produtoMarcaId}}">
                                                                                    @foreach($marcas as $marca)    
                                                                                    <option disabled value="{{$marca->id}}" {{$marca->id == $produto->produtoMarcaId ? 'selected' : ''}}>{{$marca->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="produtoUnidadeId" class="control-label labelInputEditUser">Unidade:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="produtoUnidadeId" id="produtoUnidadeId" value="{{$produto->produtoUnidadeId}}">
                                                                                    @foreach($unidades as $unidade)    
                                                                                    <option disabled value="{{$unidade->id}}" {{$unidade->id == $produto->produtoUnidadeId ? 'selected' : ''}}>{{$unidade->descricao}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-3">
                                                                                <label for="qtd" class="control-label labelInputEditUser">Qtd:</label>
                                                                                <input disabled type="number" class="form-control" name="qtd" placeholder="Digite a quantidade em estoque" value="{{$produto->qtd}}" required>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="qtdMin" class="control-label labelInputEditUser">Qtd Min:</label>
                                                                                <input disabled type="number" class="form-control" name="qtdMin" placeholder="Digite a quantidade minima" value="{{$produto->qtdMin}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="precoCusto" class="control-label labelInputEditUser">Preço Custo:</label>
                                                                                <input disabled type="number" step="any" id="precoCusto" class="form-control" name="precoCusto" placeholder="Digite o custo do produto" value="{{$produto->precoCusto}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="precoVenda" class="control-label labelInputEditUser">Preço Venda:</label>
                                                                                <input disabled type="number" step="any" class="form-control" name="precoVenda" placeholder="Digite o preco de venda" value="{{$produto->precoVenda}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="margemLucro" class="control-label labelInputEditUser">Margem Lucro %:</label>
                                                                                <input disabled type="number" step="any" class="form-control" name="margemLucro" placeholder="Digite a margem de lucro" value="{{$produto->margemLucro}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId" value="{{$produto->produtoSetorId}}">
                                                                                    @foreach($setores as $setor)    
                                                                                    <option disabled value="{{$setor->id}}" {{$setor->id == $produto->produtoSetorId ? 'selected' : ''}}>{{$setor->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId" value="{{$produto->produtoCategoriaId}}">
                                                                                    @foreach($categorias as $categoria)    
                                                                                    <option disabled value="{{$categoria->id}}" {{$categoria->id == $produto->produtoCategoriaId ? 'selected' : ''}}>{{$categoria->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoFornecedorId" class="control-label labelInputEditUser">Fornecedor:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="produtoFornecedorId" id="produtoFornecedorId">
                                                                                    @foreach($fornecedores as $fornecedor)
                                                                                    <option disabled value="{{$fornecedor->id}}" {{$fornecedor->id == $produto->produtoFornecedorId ? 'selected' : ''}}>{{$fornecedor->nomeFantasia}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isPromocao" class="control-label labelInputEditUser">Promoção:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isPromocao">
                                                                                    <option disabled value="1" {{ $produto->isPromocao == 1 ? 'selected' : ''}}>Sim</option>
                                                                                    <option disabled value="0" {{ $produto->isPromocao == 0 ? 'selected' : ''}}>Não</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-2">
                                                                                    <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                    <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                        <option disabled value="1" {{ $produto->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                        <option disabled value="0" {{ $produto->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                        </div>       
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->

                                                <a href="{{route('excluirProduto', $produto->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="imgs/iconTrash.png" title="Excluir Produto" class="btnAcoes"></a>
                                            </td>
                                        </tr>                         
                                        @endforeach                                
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection