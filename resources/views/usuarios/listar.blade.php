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
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Usuários Cadastros</h5>
                            <span>Listagem dos usuários cadastrados e suas informações</span>   
                        </div>
                        <!-- BOTAO CADASTRO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Usuário</button></a>
                        <!-- FIM BOTAO CADASTRO MODAL -->

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalUser" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">USUÁRIO<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarUsuario')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Usuário</h5></CENTER>
                                            </div>
                                            <div class="card-block">                            
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="nome" class="control-label labelInputEditUser">Nome:</label>
                                                        <input type="text" class="form-control" name="nome" placeholder="Digite o nome completo" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="email" class="control-label labelInputEditUser">Email:</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Digite o email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <label for="login" class="control-label labelInputEditUser">Login:</label>
                                                        <input type="text" class="form-control" name="login" placeholder="Digite o login" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                                        <input type="password" class="form-control" name="senha" placeholder="Digite uma senha" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                                        <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Digite o CPF" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                                        <input type="text" class="form-control" name="rg" placeholder="Digite o RG">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                                        <input type="date" class="form-control" name="dataNasc" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2">
                                                        <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                        <input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                        <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                                        <input type="text" class="form-control" name="numero" placeholder="Digite o número">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                        <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                        <input type="text" class="form-control" name="estado" placeholder="Digite o estado">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                        <input type="text" class="form-control" name="municipio" placeholder="Digite o municipio">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="fone" class="control-label labelInputEditUser">Telefone:</label>
                                                        <input type="text" class="form-control" name="fone" placeholder="Digite o telefone">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="celular" class="control-label labelInputEditUser">Celular:</label>
                                                        <input type="text" class="form-control" name="celular" placeholder="Digite o celular" required>
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
                                                    <div class="col-sm-3">
                                                        <label for="cargoId" class="control-label labelInputEditUser">Cargo do Usuário</label>                    
                                                        <select class="form-control" name="cargoId" required>
                                                            <option>Selecione..</option>
                                                            @foreach($cargos as $cargo)
                                                            <option value="{{$cargo->id}}">{{$cargo->nome}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="cargoId" class="control-label labelInputEditUser">Status:</label>                    
                                                        <select class="form-control labelInputEditUser" name="isAtivo">
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Inativo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    </div>  
                                    <div class="modal-footer modal-footer-formpag">
                                        <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIM MODAL CADASTRO -->
                </div>
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
                                    <th>Login</th>
                                    <th>Cargo</th>
                                    <th>Contato</th>
                                    <th>Status</th>
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
                                    <td>{{$usuario->login}}</td>
                                    <td>
                                        @foreach($cargos as $cargo)
                                        @if( $usuario->cargoId == $cargo->id)
                                        {{ $cargo->nome }}   
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>{{$usuario->celular}}</td>
                                    <td>
                                        @if( $usuario->isAtivo == 1 )
                                        Ativo
                                        @else
                                        Inativo
                                        @endif
                                    </td>
                                    <td>
                                        <!-- BOTAO EDITAR MODAL -->
                                        <a href="" data-toggle="modal" data-target="#modalEditar{{$usuario->id}}"
                                           data-whatever="{{$usuario->id}}" data-whatevernome="{{$usuario->nome}}" data-whateveremail="{{$usuario->email}}"
                                           data-whateverlogin="{{$usuario->login}}" data-whateversenha="{{$usuario->senha}}"
                                           data-whatevercpf="{{$usuario->cpf}}" data-whateverrg="{{$usuario->rg}}" data-whateverdataNasc="{{$usuario->dataNasc}}"
                                           data-whatevercep="{{$usuario->cep}}" data-whateverlagradouro="{{$usuario->lagradouro}}" data-whatevernumero="{{$usuario->numero}}"
                                           data-whateverbairro="{{$usuario->bairro}}" data-whateverestado="{{$usuario->estado}}" data-whatevermunicipio="{{$usuario->municipio}}"
                                           data-whateverfone="{{$usuario->fone}}" data-whatevercelular="{{$usuario->celular}}" data-whateversexo="{{$usuario->sexo}}"
                                           data-whatevercargo="{{$usuario->cargoId}}" data-whateverativo="{{$usuario->isAtivo}}"><img src="../../imgs/iconEdit.png"
                                                                                                                                   title="Editar Usuário" class="btnAcoes"></a>

                                        <!-- MODAL DE EDITAR -->
                                        <div class="modal fade" id="modalEditar{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modalUser" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Usuário #{{$usuario->id}} <i class="fa fa-help"></i></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #fff">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route ('atualizarUsuario', $usuario->id)}}" class="formEditUser">
                                                            {{ csrf_field() }}
                                                            <div class="card-header">
                                                                <CENTER><h5>Editar Usuário</h5></CENTER>
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
                                                                        <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Digite o CPF" value="{{$usuario->cpf}}" required>
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
                                                                        @if( Auth::user()->cargoId == 1)
                                                                        <label for="cargoId" class="control-label labelInputEditUser">Cargo do Usuário</label>                    
                                                                        <select class="form-control" name="cargoId" value="{{$usuario->cargoId}}" required>
                                                                            @foreach($cargos as $cargo)
                                                                            <option value="{{$cargo->id}}" {{($usuario->cargoId == $cargo->id ? 'selected' : '')}}>{{$cargo->nome}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @else
                                                                        <label for="cargoId" class="control-label labelInputEditUser">Cargo do Usuário</label>                    
                                                                        <select disabled class="form-control" name="cargoId" value="{{$usuario->cargoId}}" required>
                                                                            @foreach($cargos as $cargo)
                                                                            <option value="{{$cargo->id}}" {{($usuario->cargoId == $cargo->id ? 'selected' : '')}}>{{$cargo->nome}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                        <select class="form-control labelInputEditUser" name="isAtivo">
                                                                            <option value="1" {{ $usuario->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                            <option value="0" {{ $usuario->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer modal-footer-prod">
                                                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                            </div>       
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- FIM MODAL EDITAR -->

                                        <!-- BOTAO VISUALIZAR MODAL -->
                                        <a href="" data-toggle="modal" data-target="#modalVisualizar{{$usuario->id}}" data-whatever="{{$usuario->id}}" data-whatevernome="{{$usuario->nome}}" data-whateveremail="{{$usuario->email}}" data-whateverlogin="{{$usuario->login}}" data-whateversenha="{{$usuario->senha}}" data-whatevercpf="{{$usuario->cpf}}" data-whateverrg="{{$usuario->rg}}" data-whateverdataNasc="{{$usuario->dataNasc}}" data-whatevercep="{{$usuario->cep}}" data-whateverlagradouro="{{$usuario->lagradouro}}" data-whatevernumero="{{$usuario->numero}}" data-whateverbairro="{{$usuario->bairro}}" data-whateverestado="{{$usuario->estado}}" data-whatevermunicipio="{{$usuario->municipio}}" data-whateverfone="{{$usuario->fone}}" data-whatevercelular="{{$usuario->celular}}" data-whateversexo="{{$usuario->sexo}}" data-whatevercargo="{{$usuario->cargoId}}" data-whateverativo="{{$usuario->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Usuário" class="btnAcoes"></a>

                                        <!-- MODAL DE VISUALIZAR -->
                                        <div class="modal fade" id="modalVisualizar{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modalUser" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Usuário #{{$usuario->id}} <i class="fa fa-help"></i></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #fff">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route ('atualizarUsuario', $usuario->id)}}" class="formEditUser">
                                                            {{ csrf_field() }}
                                                            <div class="card-header">
                                                                <CENTER><h5>Visualizar Usuário</h5></CENTER>
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
                                                                        <label for="cargoId" class="control-label labelInputEditUser">Cargo do Usuário</label>                    
                                                                        <select disabled class="form-control" name="cargoId" value="{{$usuario->cargoId}}" required>
                                                                            @foreach($cargos as $cargo)
                                                                            <option disabled {{($usuario->cargoId == $cargo->id ? 'selected' : '')}}>{{$cargo->nome}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                        <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                            <option disabled {{ $usuario->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                            <option disabled {{ $usuario->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer modal-footer-prod">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                            </div>  
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIM MODAL VISUALIZAR -->

                                        <a href="{{route('excluirUsuario', $usuario->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" title="Excluir Usuário" class="btnAcoes"></a>
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