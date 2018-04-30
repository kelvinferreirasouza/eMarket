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
                <div class="panel panel-default">

                    <div class="panel-heading"><h3>Editar Usuário</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{route ('atualizar', $usuario->id)}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nome" class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="{{$usuario->nome}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="{{$usuario->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="login" class="col-sm-2 control-label">Login</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="login" placeholder="Digite seu nome" value="{{$usuario->login}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="col-sm-2 control-label">Senha</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="senha" placeholder="Digite sua nova senha ou deixe em branco para manter a antiga">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpf" class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cpf" placeholder="Digite seu cpf" value="{{$usuario->cpf}}">
                                </div>
                            </div>
                            <div class="regraAlteracaoTipoUsuario">
                                @if( Auth::user()->tipoUsuario == 'Administrador')
                                <div class="form-group">
                                    <label for="tipoUsuario" class="col-sm-2 control-label">Tipo de Usuário</label>
                                    <div class="col-sm-10">                    
                                        <select class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}">
                                            <option {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                            <option {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                            <option {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                                        </select>
                                    </div>
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="tipoUsuario" class="col-sm-2 control-label">Tipo de Usuário</label>
                                    <div class="col-sm-10">                    
                                        <select disabled class="form-control" name="" value="{{$usuario->tipoUsuario}}">
                                            <option disabled {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                            <option disabled {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                            <option disabled {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="fone" class="col-sm-2 control-label">Fone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fone" placeholder="Digite seu celular" value="{{$usuario->fone}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="reset" class="btn btn-default">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Editar Usuário</h5>
                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Basic Inputs</h4>
                        <form method="post" action="{{route ('atualizar', $usuario->id)}}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="nome" class="control-label labelInputEditUser">Nome:</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Digite o Nome" value="{{$usuario->nome}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="control-label labelInputEditUser">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Digite o Email" value="{{$usuario->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="login" class="control-label labelInputEditUser">Login:</label>
                                    <input type="text" class="form-control" name="login" placeholder="Digite o login" value="{{$usuario->login}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="senha" class="col-sm-3 control-label labelInputEditUser">Senha:</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Digite a senha">
                                </div>
                                <div class="col-sm-2">
                                    <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                    <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF" value="{{$usuario->cpf}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                    <input type="text" class="form-control" name="rg" placeholder="Digite o RG" value="{{$usuario->rg}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNasc" placeholder="Digite a Data de Nascimento" value="{{$usuario->dataNasc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                    <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro">
                                </div>
                                <div class="col-sm-2">
                                    <label for="lagradouro" class="control-label labelInputEditUser">N°:</label>
                                    <input type="text" class="form-control" name="numero" placeholder="Digite o Número do Lagradouro">
                                </div>
                                <div class="col-sm-4">
                                    <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                    <input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                    <input type="text" class="form-control" placeholder="Digite o Estado">
                                </div>
                                <div class="col-sm-4">
                                    <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                    <input type="text" class="form-control" placeholder="Digite o Municipio">
                                </div>
                                <div class="col-sm-2">
                                    <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                    <input type="text" class="form-control" placeholder="Digite o Telefone">
                                </div>
                                <div class="col-sm-2">
                                    <label for="celular" class="control-label labelInputEditUser">Cel:</label>
                                    <input type="text" class="form-control" placeholder="Digite o Celular" value="{{$usuario->fone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                    <input type="text" class="form-control" placeholder="Digite o Sexo" value="{{$usuario->sexo}}">
                                </div>
                                <div class="col-sm-3">
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo Usuario:</label>
                                    <input type="text" class="form-control" placeholder="Digite o celular" value="{{$usuario->tipoUsuario}}">
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="reset" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                @endsection