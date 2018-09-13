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
                            <li class="breadcrumb-item"><a href="{{ route('listarEmpresas') }}">Empresas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Empresas</h5>
                            <span>Listagem das empresas cadastrados</span>   
                        </div>
                        <!-- BOTAO CADASTRAR EMPRESA MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Empresa</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalFornec" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">EMPRESAS<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarEmpresa')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header text-center">
                                                <h5>Cadastrar Empresa</h5>
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
                                                        <label for="cnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                                        <input type="text" class="form-control" name="cnpj" placeholder="Digite o CNPJ" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="ie" class="control-label labelInputEditUser">I.E:</label>
                                                        <input type="text" class="form-control" name="ie" placeholder="Inscrição Estadual" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                        <input type="text" class="form-control" name="cep" placeholder="Digite a CEP" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                        <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    
                                                    <div class="col-sm-2">
                                                        <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                        <input type="text" class="form-control" name="numero" placeholder="Número" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                        <input type="text" class="form-control" name="complemento" placeholder="Digite o complemento" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                        <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                                        <input type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                        <input type="text" class="form-control" name="estado" placeholder="Digite o Estado" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                                        <input type="text" class="form-control" name="fone" placeholder="Digite o Telefone" required>
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
                                        @foreach($empresas as $empresa)
                                        <tr>
                                            <td>{{$empresa->id}}</td>
                                            <td>{{$empresa->razaoSocial}}</td>
                                            <td>{{$empresa->nomeFantasia}}</td>
                                            <td>{{$empresa->cnpj}}</td>
                                            <td>{{$empresa->ie}}</td>
                                            <td>{{$empresa->fone}}</td>
                                            <td>
                                                @if($empresa->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>

                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$empresa->id}}" data-whatever="{{$empresa->id}}" data-whateverrazaosocial="{{$empresa->razaoSocial}}" data-whateverfantasia="{{$empresa->nomeFantasia}}" data-whatevercpfcnpj="{{$empresa->cnpj}}" data-whateverierg="{{$empresa->ie}}" data-whatevercep="{{$empresa->cep}}" data-whateverlagradouro="{{$empresa->lagradouro}}" data-whatevernumero="{{$empresa->numero}}" data-whateverbairro="{{$empresa->bairro}}" data-whatevercomplemento="{{$empresa->complemento}}" data-whateverestado="{{$empresa->estado}}" data-whatevermunicipio="{{$empresa->municipio}}" data-whateverfone="{{$empresa->fone}}"data-whateverativo="{{$empresa->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$empresa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Empresa #{{$empresa->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarEmpresa', $empresa->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Editar Empresa</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="{{$empresa->razaoSocial}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="{{$empresa->nomeFantasia}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                                                                <input type="text" class="form-control" name="cnpj" placeholder="Digite o CNPJ" value="{{$empresa->cnpj}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ie" class="control-label labelInputEditUser">I.E:</label>
                                                                                <input type="text" class="form-control" name="ie" placeholder="Inscrição Estadual" value="{{$empresa->ie}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input type="text" class="form-control" name="cep" placeholder="Digite a CEP" value="{{$empresa->cep}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                                                <input type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" value="{{$empresa->lagradouro}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                <input type="text" class="form-control" name="numero" placeholder="Número" value="{{$empresa->numero}}" required>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                <input type="text" class="form-control" name="complemento" placeholder="Digite o complemento" value="{{$empresa->complemento}}" required>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$empresa->bairro}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                                                                <input type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" value="{{$empresa->municipio}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input type="text" class="form-control" name="estado" placeholder="Digite o Estado" value="{{$empresa->estado}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                                                                <input type="text" class="form-control" name="fone" placeholder="Digite o contato" value="{{$empresa->fone}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $empresa->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $empresa->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$empresa->id}}" data-whatever="{{$empresa->id}}" data-whateverrazaosocial="{{$empresa->razaoSocial}}" data-whateverfantasia="{{$empresa->nomeFantasia}}" data-whatevercpfcnpj="{{$empresa->cnpj}}" data-whateverie="{{$empresa->ie}}" data-whatevercep="{{$empresa->cep}}" data-whateverlagradouro="{{$empresa->lagradouro}}" data-whatevernumero="{{$empresa->numero}}" data-whateverbairro="{{$empresa->bairro}}" data-whatevercomplemento="{{$empresa->complemento}}" data-whateverestado="{{$empresa->estado}}" data-whatevermunicipio="{{$empresa->municipio}}" data-whateverfone="{{$empresa->fone}}"data-whateverativo="{{$empresa->isAtivo}}"><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$empresa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Empresa #{{$empresa->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarEmpresa', $empresa->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Empresa</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="razaoSocial" class="control-label labelInputEditUser">Razão Social:</label>
                                                                                <input disabled type="text" class="form-control" name="razaoSocial" placeholder="Digite a Razão Social" value="{{$empresa->razaoSocial}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="nomeFantasia" class="control-label labelInputEditUser">Nome Fantasia:</label>
                                                                                <input disabled type="text" class="form-control" name="nomeFantasia" placeholder="Digite a Nome Fantasia" value="{{$empresa->nomeFantasia}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="cnpj" class="control-label labelInputEditUser">CNPJ:</label>
                                                                                <input disabled type="text" class="form-control" name="cnpj" placeholder="Digite o CNPJ" value="{{$empresa->cnpj}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ie" class="control-label labelInputEditUser">I.E:</label>
                                                                                <input disabled type="text" class="form-control" name="ie" placeholder="Inscrição Estadual" value="{{$empresa->ie}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="cep" class="control-label labelInputEditUser">CEP:</label>
                                                                                <input disabled type="text" class="form-control" name="cep" placeholder="Digite a CEP" value="{{$empresa->cep}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="lagradouro" class="control-label labelInputEditUser">Lagradouro:</label>
                                                                                <input disabled type="text" class="form-control" name="lagradouro" placeholder="Digite o Lagradouro" value="{{$empresa->lagradouro}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                                                <input disabled type="text" class="form-control" name="numero" placeholder="Número" value="{{$empresa->numero}}" required>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="complemento" class="control-label labelInputEditUser">Complemento:</label>
                                                                                <input disabled type="text" class="form-control" name="complemento" placeholder="Digite o bairro" value="{{$empresa->complemento}}" required>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                                                <input disabled type="text" class="form-control" name="bairro" placeholder="Digite o bairro" value="{{$empresa->bairro}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Cidade:</label>
                                                                                <input disabled type="text" class="form-control" name="municipio" placeholder="Digite o Cidade" value="{{$empresa->municipio}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <input disabled type="text" class="form-control" name="estado" placeholder="Digite o Estado" value="{{$empresa->estado}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="fone" class="control-label labelInputEditUser">Fone:</label>
                                                                                <input disabled type="text" class="form-control" name="fone" placeholder="Digite o contato" value="{{$empresa->fone}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled value="1" {{ $empresa->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled value="0" {{ $empresa->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
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

                                                <a href="{{route('excluirEmpresa', $empresa->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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