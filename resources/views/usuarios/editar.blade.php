@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Editar Usuário</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarUsuarios') }}">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarUsuario', $usuario->id)}}" class="formEditUser">
                        {{ csrf_field() }}

                        @if( Auth::user()->tipoUsuario == 'Gerente' && $usuario->tipoUsuario == 'Administrador')

                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarUsuarios') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar" style="display: none"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>  
                            <h5>Editar Usuário</h5>
                        </div>
                        
                        <div class="card-block">
                            
                            <div class="alert alert-danger background-danger">
                                    <i class="icofont icofont-warning"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>Você não tem permissão para editar este usuário!!
                            </div>
                            
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
                                        <option {{($usuario->tipoUsuario == 'Funcionário' ? 'selected' : '')}}>Funcionário</option>
                                    </select>
                                    @else
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select disabled class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}" required>
                                        <option disabled {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Funcionário' ? 'selected' : '')}}>Funcionário</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div> 

                        @else
                        
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarProdutos') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>
                            <h5>Editar Usuário</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="nome" class="control-label labelInputEditUser">Nome:</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Digite o Nome" value="{{$usuario->nome}}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="control-label labelInputEditUser">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Digite o Email" value="{{$usuario->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="login" class="control-label labelInputEditUser">Login:</label>
                                    <input type="text" class="form-control" name="login" placeholder="Digite o login" value="{{$usuario->login}}" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                    <input type="password" class="form-control" name="senha" placeholder="Para manter a mesma senha, deixe em branco">
                                </div>
                                <div class="col-sm-2">
                                    <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                    <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Digite o CPF" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                    <input type="text" class="form-control" name="rg" placeholder="Digite o RG" value="{{$usuario->rg}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNasc" placeholder="Digite a Data de Nascimento" value="{{$usuario->dataNasc}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                    <input type="text" class="form-control" name="cep" placeholder="Digite o CEP" value="{{$usuario->cep}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                    <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" value="{{$usuario->lagradouro}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                    <input type="text" class="form-control" name="numero" placeholder="Digite o Número" value="{{$usuario->numero}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                    <input type="text" class="form-control" name="bairro" placeholder="Digite o Bairro" value="{{$usuario->bairro}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                    <input type="text" class="form-control" name="estado" placeholder="Digite o Estado" value="{{$usuario->estado}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                    <input type="text" class="form-control" name="municipio" placeholder="Digite o Municipio" value="{{$usuario->municipio}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                    <input type="text" class="form-control" name="fone" placeholder="Digite o Telefone" value="{{$usuario->fone}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="celular" class="control-label labelInputEditUser">Cel:</label>
                                    <input type="text" class="form-control" name="celular" placeholder="Digite o Celular" value="{{$usuario->celular}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                    <input type="text" class="form-control" name="sexo" placeholder="Digite o Sexo" value="{{$usuario->sexo}}">
                                </div>
                                <div class="col-sm-3 regraAlteracaoTipoUsuario">
                                    @if( Auth::user()->tipoUsuario == 'Administrador')
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}" required>
                                        <option {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                        <option {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                        <option {{($usuario->tipoUsuario == 'Funcionário' ? 'selected' : '')}}>Funcionário</option>
                                    </select>
                                    @else
                                    <label for="tipoUsuario" class="control-label labelInputEditUser">Tipo de Usuário</label>                    
                                    <select disabled class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}" required>
                                        <option disabled {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                        <option disabled {{($usuario->tipoUsuario == 'Funcionário' ? 'selected' : '')}}>Funcionário</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div>                            
                        @endif
                    </form>
                </div>

                @endsection