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
                            <li class="breadcrumb-item"><a href="{{ route('listarUnidades') }}">Unidades</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                           <h5>Lista de Unidades</h5>
                            <span>Listagem das unidades de produtos</span>   
                        </div>
                        <a href="{{route('cadastrarUnidade')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Unidade </button></a>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descrição</th>
                                            <th>Sigla</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach($unidades as $unidade)
                                        <tr>
                                            <td>{{$unidade->id}}</td>
                                            <td>{{$unidade->descricao}}</td>
                                            <td>{{$unidade->sigla}}</td>
                                            <td>
                                                @if($unidade->isAtivo == 1)
                                                    Ativo
                                                @else 
                                                    Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <center>
                                                   <a href="{{route('editarUnidade', $unidade->id)}}"><img src="../imgs/iconEdit.png" title="Alterar Unidade" class="btnAcoes" ></a>  
                                                   <a href="{{route('visualizarUnidade', $unidade->id)}}"><img src="../imgs/iconView.png" title="Visualizar Unidade" class="btnAcoes" ></a>  
                                                   <a href="{{route('excluirUnidade', $unidade->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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