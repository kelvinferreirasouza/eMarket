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
                            <li class="breadcrumb-item"><a href="{{ route('listarCategorias') }}">Categorias</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarSubcategorias') }}">SubCategorias</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Sub-Categorias</h5>
                            <span>Listagem das sub-categorias dos produtos</span>   
                        </div>
                        <!-- BOTAO CADASTRO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Sub-Categoria</button></a>
                        <!-- FIM BOTAO CADASTRO MODAL -->

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
                                        <form method="post" action="{{route ('salvarSubcategoria')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Produto</h5></CENTER>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                        <select class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId">
                                                            <option></option>
                                                            @foreach($categorias as $categoria)    
                                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                                            @endforeach  
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="nome" class="control-label labelInputEditUser">Nome da Sub-Categoria:</label>
                                                        <input type="text" class="form-control" name="nome" placeholder="Digite o nome da categoria" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                        <select class="form-control labelInputEditUser" name="isAtivo">
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Inativo</option>
                                                        </select>
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
                                            <th>ID</th>
                                            <th>Categoria</th>
                                            <th>Sub-Categoria</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>  
                                        <tr>
                                            @foreach($subcategorias as $subcategoria)

                                            <td>{{$subcategoria->id}}</td>
                                            <td>
                                                @foreach($categorias as $categoria)
                                                @if( $subcategoria->produtoCategoriaId == $categoria->id)
                                                {{ $categoria->nome }}   
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{$subcategoria->nome}}</td>
                                            <td>
                                                @if($subcategoria->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>

                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$subcategoria->id}}" data-whatever="{{$subcategoria->id}}" data-whatevernome="{{$subcategoria->nome}}" data-whateverativo="{{$subcategoria->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Sub-Categoria" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$subcategoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Sub-Categoria #{{$subcategoria->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarSubcategoria', $subcategoria->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Sub-Categoria</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                                                <select class="form-control labelInputEditUser modalBack" name="produtoCategoriaId" id="produtoCategoriaId">
                                                                                    <option></option>
                                                                                    @foreach($categorias as $categoria)    
                                                                                    <option value="{{$categoria->id}}" {{ $subcategoria->produtoCategoriaId == $categoria->id ? 'selected' : '' }} >{{$categoria->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nome" class="control-label labelInputEditUser">Nome da Sub-Categoria:</label>
                                                                                <input type="text" class="form-control" name="nome" placeholder="Digite o nome da categoria" value="{{$subcategoria->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $subcategoria->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $subcategoria->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$subcategoria->id}}" data-whatever="{{$subcategoria->id}}" data-whatevernome="{{$subcategoria->nome}}" data-whateverativo="{{$subcategoria->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Sub-Categoria" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$subcategoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Sub-Categoria #{{$subcategoria->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarSubcategoria', $subcategoria->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Sub-Categoria</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                                                                <select disabled class="form-control labelInputEditUser modalBack" name="produtoCategoriaId" id="produtoCategoriaId">
                                                                                    <option></option>
                                                                                    @foreach($categorias as $categoria)    
                                                                                    <option disabled value="{{$categoria->id}}" {{ $subcategoria->produtoCategoriaId == $categoria->id ? 'selected' : '' }} >{{$categoria->nome}}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nome" class="control-label labelInputEditUser">Nome da Sub-Categoria:</label>
                                                                                <input disabled type="text" class="form-control" name="nome" placeholder="Digite o nome da categoria" value="{{$subcategoria->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled {{ $subcategoria->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled {{ $subcategoria->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
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


                                                <a href="{{route('excluirSubcategoria', $subcategoria->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" title="Excluir Sub-Categoria" class="btnAcoes"></a>
                                                </center>
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