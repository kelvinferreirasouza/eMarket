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
                            <li class="breadcrumb-item"><a href="{{ route('listarSetores') }}">Setores</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Usuário</button>
                        <h5>Lista de Setores</h5>
                        <span>Listagem dos setores de produtos cadastrados.</span>   

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome do Setor</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach($setores as $setor)
                                        <tr>
                                            <td>{{$setor->id}}</td>
                                            <td>{{$setor->nome}}</td>
                                            <td>{{$setor->isAtivo}}</td>
                                            <td>
                                                <center>
                                                   <a href="{{route('editarSetor', $setor->id)}}"><img src="imgs/iconEdit.png" title="Alterar Usuário" class="btnAcoes" ></a>  
                                                   <a href="#"><img src="imgs/iconView.png" title="Visualizar Usuário" class="btnAcoes" ></a>  
                                                   <a href="{{route('excluirSetor', $setor->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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