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
                        <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser">Cadastrar Usuário</button>
                        <h5>Lista de Usuários Cadastros</h5>
                        <span>Click on row to perform edit action then Enter for save</span>   

                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
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
                                            <td>{{$usuario->nome}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->cpf}}</td>
                                            <td>{{$usuario->celular}}</td>
                                            <td>{{$usuario->login}}</td>
                                            <td>{{$usuario->tipoUsuario}}</td>
                                            <td>
                                    <center>
                                        @can('update', App\Usuario::class)
                                        <a href="{{route('editar', $usuario->id)}}"><i class="fas fa-pencil-alt" style="margin-right:10%"></i></a>
                                        @endcan
                                        <a href="{{route('editar', $usuario->id)}}"><i class="fas fa-eye" style="margin-right:10%"></i></a>  
                                        <a href="{{route('editar', $usuario->id)}}"><i class="far fa-trash-alt"></i></a></td>
                                    </center>
                                    </tr>                         
                                    @endforeach                                
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection