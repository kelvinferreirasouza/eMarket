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
                                                   <a href="{{route('editarSetor', $subcategoria->id)}}"><img src="../../imgs/iconEdit.png" title="Alterar Setor" class="btnAcoes" ></a>  
                                                   <a href="{{route('visualizarSetor', $subcategoria->id)}}"><img src="../../imgs/iconView.png" title="Visualizar Setor" class="btnAcoes" ></a>  
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