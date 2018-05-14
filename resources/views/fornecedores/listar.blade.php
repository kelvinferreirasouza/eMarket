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
                            <li class="breadcrumb-item"><a href="#">Pessoas</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarFornecedores') }}">Fornecedores</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('cadastrarSetor')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Fornecedor</button></a>
                        <h5>Lista de Fornecedores</h5>
                        <span>Listagem dos fornecedores cadastrados.</span>   

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Razão Social</th>
                                            <th>Nome Fantasia</th>
                                            <th>CNPJ</th>
                                            <th>I.E</th>
                                            <th>Fone</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach($fornecedores as $fornecedor)
                                        <tr>
                                            <td>{{$fornecedor->id}}</td>
                                            <td>{{$fornecedor->razaoSocial}}</td>
                                            <td>{{$fornecedor->nomeFantasia}}</td>
                                            <td>{{$fornecedor->cnpj}}</td>
                                            <td>{{$fornecedor->ie}}</td>
                                            <td>{{$fornecedor->fone}}</td>
                                            <td>
                                                @if($fornecedor->isAtivo == 1)
                                                    Ativo
                                                @else 
                                                    Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <center>
                                                   <a href="#"><img src="../imgs/iconEdit.png" title="Alterar Setor" class="btnAcoes" ></a>  
                                                   <a href="#"><img src="../imgs/iconView.png" title="Visualizar Setor" class="btnAcoes" ></a>  
                                                   <a href="{{route('excluirFornecedor', $fornecedor->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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