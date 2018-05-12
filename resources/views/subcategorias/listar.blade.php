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
                    <div class="card-header">
                        <a href="{{route('cadastrarSubcategoria')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Sub-Categoria</button></a>
                        <h5>Lista de Sub-Categorias</h5>
                        <span>Listagem das sub-categorias de produtos cadastrados.</span>   

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
                                    <center>
                                        <!-- Botão Editar Modal -->
                                        <img src="../../imgs/iconEdit.png" title="Alterar Setor" data-toggle="modal" data-target="#exampleModalLong" class="btnAcoes" ></a>  

                                        <!-- Modal de Editar -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Editar Sub-Categoria <i class="fa fa-help"></i></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #fff">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route ('atualizarSubcategoria', $subcategoria->id)}}" class="formEditUser">
                                                            {{ csrf_field() }}
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label for="produtoCategoriaId" class="control-label labelInputEditUser" style="margin-left: -71%">Categoria:</label>
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
                                        <!-- Botão Visualizar Modal -->
                                        <img src="../../imgs/iconView.png" title="Alterar Setor" data-toggle="modal" data-target="#exampleModalLong" class="btnAcoes" ></a>  
                                        <!-- Modal de Visualizar -->
                                        <a href="{{route('excluirSubcategoria', $subcategoria->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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
