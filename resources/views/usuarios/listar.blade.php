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
                            <li class="breadcrumb-item"><a href="{{ route('listarUsuarios') }}">Usuários</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('cadastrarUsuario')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Usuário</button></a>
                        <h5>Lista de Usuários Cadastros</h5>
                        <span>Listagem dos usuários cadastrados e suas informações</span>   

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>CPF</th>  
                                            <th>Contato</th>
                                            <th>Login</th>
                                            <th>Tipo</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->nome}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->cpf}}</td>
                                            <td>{{$usuario->celular}}</td>
                                            <td>{{$usuario->login}}</td>
                                            <td>{{$usuario->tipoUsuario}}</td>
                                            <td>
                                                <center>
                                                    @can('update', App\Usuario::class)
                                                        <a href="{{route('editarUsuario', $usuario->id)}}"><img src="../imgs/iconEdit.png" title="Alterar Usuário" class="btnAcoes" ></a>  
                                                    @endcan
                                                        <a href="{{route('visualizarUsuario', $usuario->id)}}"><img src="../imgs/iconView.png" title="Visualizar Usuário" class="btnAcoes" ></a>  
                                                        <a href="{{route('excluirUsuario', $usuario->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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