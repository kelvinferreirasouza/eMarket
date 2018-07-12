@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Cadastrar Usuário</h4>
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
                            <li class="breadcrumb-item"><a href="#">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('salvarUsuario')}}" class="formEditUser">
                        {{ csrf_field() }}

                        @if( Auth::user()->cargoId == 1 || Auth::user()->cargoId == 2 )

                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarUsuarios') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>  
                            <h5>Cadastrar Usuário</h5>
                        </div>

                        <div class="card-block">                            
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="nome" class="control-label labelInputEditUser">Nome:</label>
                                    <input type="text" class="form-control" name="nome" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="control-label labelInputEditUser">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="login" class="control-label labelInputEditUser">Login:</label>
                                    <input type="text" class="form-control" name="login" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                    <input type="password" class="form-control" name="senha" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                    <input type="text" class="form-control" name="rg">
                                </div>
                                <div class="col-sm-2">
                                    <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNasc" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                    <input type="text" class="form-control" name="cep">
                                </div>
                                <div class="col-sm-6">
                                    <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                    <input type="text" class="form-control" name="logradouro">
                                </div>
                                <div class="col-sm-2">
                                    <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                    <input type="text" class="form-control" name="numero">
                                </div>
                                <div class="col-sm-2">
                                    <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                    <input type="text" class="form-control" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                    <input type="text" class="form-control" name="estado">
                                </div>
                                <div class="col-sm-4">
                                    <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                    <input type="text" class="form-control" name="municipio">
                                </div>
                                <div class="col-sm-2">
                                    <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                    <input type="text" class="form-control" name="fone">
                                </div>
                                <div class="col-sm-2">
                                    <label for="celular" class="control-label labelInputEditUser">Cel:</label>
                                    <input type="text" class="form-control" name="celular" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                    <select class="form-control" name="sexo" required>
                                        <option>Selecione..</option>
                                        <option value="Masculino">Masculine</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 regraAlteracaoTipoUsuario">
                                    @if( Auth::user()->cargoId == 1)
                                    <label for="cargoId" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select class="form-control" name="cargoId" required>
                                        <option value="1">Administrador</option>
                                        <option value="2">Gerente</option>
                                        <option value="3">Funcionário</option>
                                    </select>
                                    @elseif (Auth::user()->cargoId == 2) 
                                    <label for="cargoId" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select disabled class="form-control" name="cargoId" required>
                                        <option value="3">Funcionário</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div> 

                        @else

                        <div class="card-header">
                            <div class="alert alert-danger background-danger">
                                <i class="icofont icofont-warning"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>Você não tem permissão para cadastrar um usuário!!
                            </div>
                        </div>
                        @endif
                    </form>
                </div>

                @endsection