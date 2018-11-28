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
                        
                        @if (Auth::user()->can('view', App\Fornecedor::class))

                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarFornecedor', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}

                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->
                        
                        @if (Auth::user()->can('create', App\Fornecedor::class))
                        <!-- BOTAO CADASTRAR FORNECEDOR MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Fornecedor</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalFornec" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">FORNECEDORES<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarFornecedor')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header text-center">
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
                                                        <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite a CEP" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                        <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Digite o Logradouro" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="numero" class="control-label labelInputEditUser">Número:</label>
                                                        <input type="text" class="form-control" name="numero" placeholder="Número" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="bairro" class="control-label labelInputEditUser">Bairro:</label>
                                                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="municipio" class="control-label labelInputEditUser">Município:</label>
                                                        <input type="text" class="form-control" name="municipio" id="cidade" placeholder="Digite o Município" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Digite o Estado" required>
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
                        @endif
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
                                        @forelse($fornecedores as $fornecedor)
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
                                                @if (Auth::user()->can('update', $fornecedor))
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$fornecedor->id}}" data-whatever="{{$fornecedor->id}}" data-whateverrazaosocial="{{$fornecedor->razaoSocial}}" data-whateverfantasia="{{$fornecedor->nomeFantasia}}" data-whatevercpfcnpj="{{$fornecedor->cpfCnpj}}" data-whateverierg="{{$fornecedor->ieRg}}" data-whateveremail="{{$fornecedor->email}}" data-whatevercep="{{$fornecedor->cep}}" data-whateverlogradouro="{{$fornecedor->logradouro}}" data-whatevernumero="{{$fornecedor->numero}}" data-whateverbairro="{{$fornecedor->bairro}}" data-whateverestado="{{$fornecedor->estado}}" data-whatevermunicipio="{{$fornecedor->municipio}}" data-whateverfone="{{$fornecedor->fone}}"data-whateverativo="{{$fornecedor->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Usuário" class="btnAcoes"></a>

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
                                                                    <div class="card-header text-center">
                                                                        <h5>Editar Fornecedor</h5>
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
                                                                                <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                                                <input type="text" class="form-control" name="logradouro" placeholder="Digite o Logradouro" value="{{$fornecedor->logradouro}}" required>
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
                                                <!-- FIM MODAL EDITAR -->
                                                @endif
                                                
                                                @if (Auth::user()->can('view', $fornecedor))
                                                <!-- BOTAO VISUALIZAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$fornecedor->id}}" data-whatever="{{$fornecedor->id}}" data-whateverrazaosocial="{{$fornecedor->razaoSocial}}" data-whateverfantasia="{{$fornecedor->nomeFantasia}}" data-whatevercpfcnpj="{{$fornecedor->cpfCnpj}}" data-whateverierg="{{$fornecedor->ieRg}}" data-whateveremail="{{$fornecedor->email}}" data-whatevercep="{{$fornecedor->cep}}" data-whateverlogradouro="{{$fornecedor->logradouro}}" data-whatevernumero="{{$fornecedor->numero}}" data-whateverbairro="{{$fornecedor->bairro}}" data-whateverestado="{{$fornecedor->estado}}" data-whatevermunicipio="{{$fornecedor->municipio}}" data-whateverfone="{{$fornecedor->fone}}"data-whateverativo="{{$fornecedor->isAtivo}}"><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

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
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Fornecedor</h5>
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
                                                                                <label for="logradouro" class="control-label labelInputEditUser">Logradouro:</label>
                                                                                <input disabled type="text" class="form-control" name="logradouro" placeholder="Digite o Logradouro" value="{{$fornecedor->logradouro}}" required>
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
                                                @endif
                                                
                                                @if (Auth::user()->can('delete', $fornecedor))
                                                <a href="{{route('excluirFornecedor', $fornecedor->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
                                                @endif
                                            </td>
                                        </tr> 
                                        @empty
                                        <tr>
                                            <td colspan="200">Nenhum resultado encontrado!!</td>
                                        </tr>
                                        @endforelse                               
                                    </tbody>
                                </table> 
                                <div class="pagination">{!! $fornecedores->links() !!}</div>
                            </div> 
                        </div>
                    </div>
                    @else
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                    <h3 style="color: red">Acesso NEGADO!!</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @endsection