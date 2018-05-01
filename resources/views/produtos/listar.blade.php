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
                            <li class="breadcrumb-item"><a href="#!">Pessoas</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listar') }}">Usuários</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Produto</button>
                        <h5>Lista de Produtos</h5>
                        <span>Listagem dos produtos cadastrados e suas informações</span>   

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
                                            <td>{{$produto->precoCusto}}</td>
                                            <td>{{$produto->precoVenda}}</td>
                                            <td>{{$produto->margemLucro}}</td>
                                            <td>
                                                <center>
                                                        <a href="#"><img src="imgs/iconEdit.png" title="Alterar Usuário" class="btnAcoes" ></a>  
                                                        <a href="#"><img src="imgs/iconView.png" title="Visualizar Usuário" class="btnAcoes" ></a>  
                                                        <a href="#" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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