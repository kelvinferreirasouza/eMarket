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
                        <button class="btn btn-primary waves-effect waves-light btnCadProd"><a class="linkCancel" href="{{ route('cadastrarProduto') }}"><i class="fa fa-user-plus"></i>Cadastrar Produto</a></button>
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
                                                <center>
                                                        <a href="{{route('editarProduto', $produto->id)}}"><img src="imgs/iconEdit.png" title="Editar Produto" class="btnAcoes" ></a>  
                                                        <a href="{{route('visualizarProduto', $produto->id)}}"><img src="imgs/iconView.png" title="Visualizar Usuário" class="btnAcoes" ></a>  
                                                        <a href="{{route('excluirProduto', $produto->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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