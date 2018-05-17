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
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Fornecedores</h5>
                            <span>Listagem dos fornecedores cadastrados</span>   
                        </div>
                        <a href="{{route('cadastrarFornecedor')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Fornecedor</button></a>
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
                                            <td>{{$fornecedor->cpfCnpj}}</td>
                                            <td>{{$fornecedor->ieRg}}</td>
                                            <td>{{$fornecedor->fone}}</td>
                                            <td>
                                                @if($fornecedor->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>

                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$fornecedor->id}}" data-whatever="{{$fornecedor->id}}" data-whateverrazaosocial="{{$fornecedor->razaoSocial}}" data-whateverfantasia="{{$fornecedor->nomeFantasia}}" data-whatevercpfcnpj="{{$fornecedor->cpfCnpj}}" data-whateverierg="{{$fornecedor->ieRg}}" data-whateveremail="{{$fornecedor->email}}" data-whatevercep="{{$fornecedor->cep}}" data-whateverlagradouro="{{$fornecedor->lagradouro}}" data-whatevernumero="{{$fornecedor->numero}}" data-whateverbairro="{{$fornecedor->bairro}}" data-whateverestado="{{$fornecedor->estado}}" data-whatevermunicipio="{{$fornecedor->municipio}}" data-whateverfone="{{$fornecedor->fone}}"data-whateverativo="{{$fornecedor->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$fornecedor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Fornecedor #{{$fornecedor->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFornecedor', $fornecedor->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Fornecedor</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="{{$fornecedor->razaoSocial}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="{{$fornecedor->nomeFantasia}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cpfCnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                                                                <input type="text" class="form-control" name="cpfCnpj" placeholder="Digite o CNPJ" value="{{$fornecedor->cpfCnpj}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ieRg" class="control-label labelInputEditUser">I.E:</label>
                                                                                <input type="text" class="form-control" name="ieRg" placeholder="Inscrição Estadual" value="{{$fornecedor->ieRg}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="email" class="control-label labelInputEditUser">E-mail:</label>
                                                                                <input type="text" class="form-control" name="email" placeholder="Digite a email" value="{{$fornecedor->email}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input type="text" class="form-control" name="cep" placeholder="Digite a CEP" value="{{$fornecedor->cep}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                                                <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" value="{{$fornecedor->lagradouro}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                <input type="text" class="form-control" name="numero" placeholder="Número" value="{{$fornecedor->numero}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$fornecedor->bairro}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                                                                <input type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" value="{{$fornecedor->municipio}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input type="text" class="form-control" name="estado" placeholder="Digite o Estado" value="{{$fornecedor->estado}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                                                                <input type="text" class="form-control" name="fone" placeholder="Digite o contato" value="{{$fornecedor->fone}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $fornecedor->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $fornecedor->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$fornecedor->id}}" data-whatever="{{$fornecedor->id}}" data-whateverrazaosocial="{{$fornecedor->razaoSocial}}" data-whateverfantasia="{{$fornecedor->nomeFantasia}}" data-whatevercpfcnpj="{{$fornecedor->cpfCnpj}}" data-whateverierg="{{$fornecedor->ieRg}}" data-whateveremail="{{$fornecedor->email}}" data-whatevercep="{{$fornecedor->cep}}" data-whateverlagradouro="{{$fornecedor->lagradouro}}" data-whatevernumero="{{$fornecedor->numero}}" data-whateverbairro="{{$fornecedor->bairro}}" data-whateverestado="{{$fornecedor->estado}}" data-whatevermunicipio="{{$fornecedor->municipio}}" data-whateverfone="{{$fornecedor->fone}}"data-whateverativo="{{$fornecedor->isAtivo}}"><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$fornecedor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Fornecedor #{{$fornecedor->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFornecedor', $fornecedor->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Fornecedor</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input disabled type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="{{$fornecedor->razaoSocial}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input disabled type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="{{$fornecedor->nomeFantasia}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cpfCnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                                                                <input disabled type="text" class="form-control" name="cpfCnpj" placeholder="Digite o CNPJ" value="{{$fornecedor->cpfCnpj}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ieRg" class="control-label labelInputEditUser">I.E:</label>
                                                                                <input disabled type="text" class="form-control" name="ieRg" placeholder="Inscrição Estadual" value="{{$fornecedor->ieRg}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="email" class="control-label labelInputEditUser">E-mail:</label>
                                                                                <input disabled type="text" class="form-control" name="email" placeholder="Digite a email" value="{{$fornecedor->email}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input disabled type="text" class="form-control" name="cep" placeholder="Digite a CEP" value="{{$fornecedor->cep}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                                                <input disabled type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" value="{{$fornecedor->lagradouro}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                <input disabled type="text" class="form-control" name="numero" placeholder="Número" value="{{$fornecedor->numero}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input disabled type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$fornecedor->bairro}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                                                                <input disabled type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" value="{{$fornecedor->municipio}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input disabled type="text" class="form-control" name="estado" placeholder="Digite o Estado" value="{{$fornecedor->estado}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                                                                <input disabled type="text" class="form-control" name="fone" placeholder="Digite o contato" value="{{$fornecedor->fone}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled value="1" {{ $fornecedor->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled value="0" {{ $fornecedor->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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

                                                <a href="{{route('excluirFornecedor', $fornecedor->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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