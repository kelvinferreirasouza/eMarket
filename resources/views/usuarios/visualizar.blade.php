@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Visualizar Usuário</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listar') }}">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizar', $usuario->id)}}" class="formEditUser">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listar') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button class="btn btn-primary btnVisualizarEditar"><i class="icofont icofont-pencil-alt-5"></i><a class="linkCancel" href="{{route('editar', $usuario->id)}}"><b>Editar</b></a></button></div>
                            </div>
                            <h5>Visualizar Informações do Usuário</h5>
                        </div>
                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="nome" class="control-label labelInputEditUser">Nome:</label>
                                    <input disabled type="text" class="form-control" name="nome" value="{{$usuario->nome}}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="control-label labelInputEditUser">Email:</label>
                                    <input disabled type="email" class="form-control" name="email" value="{{$usuario->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="login" class="control-label labelInputEditUser">Login:</label>
                                    <input disabled type="text" class="form-control" name="login" value="{{$usuario->login}}" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                    <!-- INPUT APENAS PARA VISUALIZACAO NO FORM -->
                                    <input disabled type="password" class="form-control">
                                    <!-- INPUT QUE INFORMA O FORM QUE O PASSWORD NAO FOI ALTERADO E O MESMO NAO PODE FICAR DISABLED -->
                                    <input type="password" class="form-control" name="senha" style="display:none">
                                </div>
                                <div class="col-sm-2">
                                    <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                    <input disabled type="text" id="cpf" class="form-control" name="cpf" value="{{$usuario->cpf}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                    <input disabled type="text" class="form-control" name="rg" value="{{$usuario->rg}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                    <input disabled type="date" class="form-control" name="dataNasc" value="{{$usuario->dataNasc}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                    <input disabled type="text" class="form-control" name="cep" value="{{$usuario->cep}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                    <input disabled type="text" class="form-control" name="lagradouro" value="{{$usuario->lagradouro}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                    <input disabled type="text" class="form-control" name="numero" value="{{$usuario->numero}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                    <input disabled type="text" class="form-control" name="bairro" value="{{$usuario->bairro}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                    <input disabled type="text" class="form-control" name="estado" value="{{$usuario->estado}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                    <input disabled type="text" class="form-control" name="municipio" value="{{$usuario->municipio}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                    <input disabled type="text" class="form-control" name="fone" value="{{$usuario->fone}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="celular" class="control-label labelInputEditUser">Cel:</label>
                                    <input disabled type="text" class="form-control" name="celular" value="{{$usuario->celular}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                    <input disabled type="text" class="form-control" name="sexo" value="{{$usuario->sexo}}">
                                </div>
                                <div class="col-sm-3 regraAlteracaoTipoUsuario">
                                    @if( Auth::user()->tipoUsuario == 'Administrador')
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}" required>
                                        <option {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                        <option {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                        <option {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                                    </select>
                                    @else
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select disabled class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}" required>
                                        <option disabled {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                @endsection