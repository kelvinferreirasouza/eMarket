@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Cadastro de Fornecedor</h4>
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
                            <li class="breadcrumb-item"><a href="#">Fornecedores</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('salvarFornecedor')}}" class="formEditUser">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarFornecedores') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>
                            <h5>Cadastrar Fornecedor</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                    <input type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                    <input type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <label for="cpfCnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                    <input type="text" class="form-control" name="cpfCnpj" placeholder="Digite o CNPJ" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="ieRg" class="control-label labelInputEditUser">I.E:</label>
                                    <input type="text" class="form-control" name="ieRg" placeholder="Inscrição Estadual" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="control-label labelInputEditUser">E-mail:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Digite a email" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                    <input type="text" class="form-control" name="cep" placeholder="Digite a CEP" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                    <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                    <input type="text" class="form-control" name="numero" placeholder="Número" required>
                                </div>
                                <div class="col-sm-4">
                                    <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                    <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                    <input type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" required>
                                </div>
                                <div class="col-sm-4">
                                    <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                    <input type="text" class="form-control" name="estado" placeholder="Digite o Estado" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                    <input type="text" class="form-control" name="fone" placeholder="Digite o Fone Contato" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                    <select class="form-control labelInputEditUser" name="isAtivo">
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection