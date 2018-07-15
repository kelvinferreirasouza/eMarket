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
                            <li class="breadcrumb-item"><a href="{{ route('listarFornecedores') }}">Clientes</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Clientes</h5>
                            <span>Listagem dos clientes cadastrados</span>   
                        </div>

                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarCliente', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}

                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->


                        <!-- BOTAO CADASTRAR CLIENTE MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Cliente</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalFornec" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">CLIENTES<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarCliente')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Cliente</h5></CENTER>
                                            </div>
                                            <div class="card-block">                            
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="nome" class="control-label labelInputEditUser">Nome Completo:</label>
                                                        <input type="text" class="form-control" name="nome" placeholder="Digite o nome completo"required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="email" class="control-label labelInputEditUser">Email:</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Digite o email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
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
                                                    <div class="col-sm-3">
                                                        <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                                        <input type="date" class="form-control" name="dataNasc" required style="padding-left: 5px">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                                        <select class="form-control" name="sexo" required>
                                                            <option>Selecione..</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Feminino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2">
                                                        <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                        <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                        <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Digite o Logradouro">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                                        <input type="text" class="form-control" name="numero" placeholder="Digite o número">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Digite o estado">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                        <input type="text" class="form-control" name="municipio" id="cidade" placeholder="Digite o municipio">
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
                                                    <div class="col-sm-2">
                                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>                  
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
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome Completo</th>
                                            <th>E-Mail</th>
                                            <th>CPF</th>
                                            <th>Sexo</th>
                                            <th>Contato</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->id}}</td>
                                            <td>{{$cliente->nome}}</td>
                                            <td>{{$cliente->email}}</td>
                                            <td>{{$cliente->cpf}}</td>
                                            <td>
                                                @if($cliente->sexo == 1)
                                                Masculino
                                                @else 
                                                Feminino
                                                @endif
                                            </td>
                                            <td>{{$cliente->celular}}</td>
                                            <td>
                                                @if($cliente->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$cliente->id}}"
                                                   data-whatever="{{$cliente->id}}" data-whatevernome="{{$cliente->nome}}" data-whateveremail="{{$cliente->email}}" data-whateversenha="{{$cliente->senha}}" data-whatevercpf="{{$cliente->cpf}}" data-whateverrg="{{$cliente->rg}}" data-whateverdataNasc="{{$cliente->dataNasc}}"
                                                   data-whatevercep="{{$cliente->cep}}" data-whateverlogradouro="{{$cliente->logradouro}}" data-whatevernumero="{{$cliente->numero}}" data-whateverbairro="{{$cliente->bairro}}" data-whateverestado="{{$cliente->estado}}"data-whatevermunicipio="{{$cliente->municipio}}" data-whateverfone="{{$cliente->fone}}" data-whatevercelular="{{$cliente->celular}}" data-whateversexo="{{$cliente->sexo}}" data-whateverativo="{{$cliente->isAtivo}}">
                                                    <img src="../../imgs/iconEdit.png" title="Editar Cliente" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Cliente #{{$cliente->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarCliente', $cliente->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Cliente</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">                            
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="nome" class="control-label labelInputEditUser">Nome Completo:</label>
                                                                                <input type="text" class="form-control" name="nome" placeholder="Digite o nome completo" value="{{$cliente->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="email" class="control-label labelInputEditUser">Email:</label>
                                                                                <input type="email" class="form-control" name="email" placeholder="Digite o email" value="{{$cliente->email}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-3">
                                                                                <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                                                                <input type="password" class="form-control" name="senha" placeholder="Digite uma senha" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                                                                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="Digite o CPF" value="{{$cliente->cpf}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                                                                <input type="text" class="form-control" name="rg" placeholder="Digite o RG" value="{{$cliente->rg}}">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                                                                <input type="date" class="form-control" name="dataNasc" value="{{$cliente->dataNasc}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                                                                <select class="form-control" name="sexo" required>
                                                                                    <option value="1" {{ $cliente->sexo == 1 ? 'selected' : ''}}>Masculino</option>
                                                                                    <option value="0" {{ $cliente->sexo == 2 ? 'selected' : ''}}>Feminino</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input type="text" class="form-control" name="cep" placeholder="Digite o CEP" value="{{$cliente->cep}}">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                                                <input type="text" class="form-control" name="logradouro" placeholder="Digite o Logradouro" value="{{$cliente->logradouro}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                                                                <input type="text" class="form-control" name="numero" placeholder="Digite o número" value="{{$cliente->numero}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$cliente->bairro}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input type="text" class="form-control" name="estado" placeholder="Digite o estado" value="{{$cliente->estado}}">
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                <input type="text" class="form-control" name="municipio" placeholder="Digite o municipio" value="{{$cliente->municipio}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Telefone:</label>
                                                                                <input type="text" class="form-control" name="fone" placeholder="Digite o telefone" value="{{$cliente->fone}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="celular" class="control-label labelInputEditUser">Celular:</label>
                                                                                <input type="text" class="form-control" name="celular" placeholder="Digite o celular" required value="{{$cliente->celular}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>                    
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1">Ativo</option>
                                                                                    <option value="0">Inativo</option>
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$cliente->id}}"
                                                   data-whatever="{{$cliente->id}}" data-whatevernome="{{$cliente->nome}}" data-whateveremail="{{$cliente->email}}" data-whateversenha="{{$cliente->senha}}" data-whatevercpf="{{$cliente->cpf}}" data-whateverrg="{{$cliente->rg}}" data-whateverdataNasc="{{$cliente->dataNasc}}"
                                                   data-whatevercep="{{$cliente->cep}}" data-whateverlogradouro="{{$cliente->logradouro}}" data-whatevernumero="{{$cliente->numero}}" data-whateverbairro="{{$cliente->bairro}}" data-whateverestado="{{$cliente->estado}}"data-whatevermunicipio="{{$cliente->municipio}}" data-whateverfone="{{$cliente->fone}}" data-whatevercelular="{{$cliente->celular}}" data-whateversexo="{{$cliente->sexo}}" data-whateverativo="{{$cliente->isAtivo}}">
                                                    <img src="../../imgs/iconView.png" title="Editar Cliente" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Cliente #{{$cliente->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarCliente', $cliente->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Cliente</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">                            
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="nome" class="control-label labelInputEditUser">Nome Completo:</label>
                                                                                <input disabled type="text" class="form-control" name="nome" placeholder="Digite o nome completo" value="{{$cliente->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="email" class="control-label labelInputEditUser">Email:</label>
                                                                                <input disabled type="email" class="form-control" name="email" placeholder="Digite o email" value="{{$cliente->email}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-3">
                                                                                <label for="senha" class="control-label labelInputEditUser">Senha:</label>
                                                                                <input disabled type="password" class="form-control" name="senha" placeholder="Digite uma senha" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cpf" class="control-label labelInputEditUser">CPF:</label>
                                                                                <input disabled type="text" id="cpf" class="form-control" name="cpf" placeholder="Digite o CPF" value="{{$cliente->cpf}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="rg" class="control-label labelInputEditUser">RG:</label>
                                                                                <input disabled type="text" class="form-control" name="rg" placeholder="Digite o RG" value="{{$cliente->rg}}">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="dataNasc" class="control-label labelInputEditUser">Data Nascimento:</label>
                                                                                <input disabled type="date" class="form-control" name="dataNasc" value="{{$cliente->dataNasc}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="sexo" class="control-label labelInputEditUser">Sexo:</label>
                                                                                <select disabled class="form-control" name="sexo" required>
                                                                                    <option disabled value="1" {{ $cliente->sexo == 1 ? 'selected' : ''}}>Masculino</option>
                                                                                    <option disabled value="0" {{ $cliente->sexo == 2 ? 'selected' : ''}}>Feminino</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input disabled type="text" class="form-control" name="cep" placeholder="Digite o CEP" value="{{$cliente->cep}}">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                                                <input disabled type="text" class="form-control" name="logradouro" placeholder="Digite o Logradouro" value="{{$cliente->logradouro}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">N°:</label>
                                                                                <input disabled type="text" class="form-control" name="numero" placeholder="Digite o número" value="{{$cliente->numero}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input disabled type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$cliente->bairro}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input disabled type="text" class="form-control" name="estado" placeholder="Digite o estado" value="{{$cliente->estado}}">
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Municipio:</label>
                                                                                <input disabled type="text" class="form-control" name="municipio" placeholder="Digite o municipio" value="{{$cliente->municipio}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Telefone:</label>
                                                                                <input disabled type="text" class="form-control" name="fone" placeholder="Digite o telefone" value="{{$cliente->fone}}">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="celular" class="control-label labelInputEditUser">Celular:</label>
                                                                                <input disabled type="text" class="form-control" name="celular" placeholder="Digite o celular" required value="{{$cliente->celular}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>                    
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled value="1" {{ $cliente->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled value="0" {{ $cliente->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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

                                                <a href="{{route('excluirCliente', $cliente->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" titles="Excluir Cliente" class="btnAcoes"></a>
                                            </td>
                                        </tr>                         
                                        @empty
                                        <tr>
                                            <td colspan="200">Nenhum resultado encontrado!!</td>
                                        </tr>
                                        @endforelse                                 
                                    </tbody>
                                </table> 
                                <div class="pagination">{!! $clientes->links() !!}</div>
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection