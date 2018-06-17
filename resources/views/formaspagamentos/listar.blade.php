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
                            <li class="breadcrumb-item"><a href="#">Financeiro</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarFormasPag') }}">Formas de Pagamento</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Formas Pagamento</h5>
                            <span>Listagem das formas de pagamento aceitas no sistema.</span>   
                        </div>
                        <!-- BOTAO CADASTRAR CARGO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Forma Pagamento</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">FORMAS DE PAGAMENTO<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarFormaPag')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Forma Pagamento</h5></CENTER>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="nome" class="control-label labelInputEditUser">Forma de Pagamento:</label>
                                                        <input type="text" class="form-control" name="nome" placeholder="Digite o nome da forma de pagamento" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="descricao" class="control-label labelInputEditUser">Descrição:</label>
                                                        <input type="text" class="form-control" name="descricao" placeholder="Digite a descrição" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="isAtivo" class="control-label labelInputEditUser">Ativo:</label>
                                                        <select name="isAtivo" class="form-control">
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
                                            <th>Forma de Pagamento</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @foreach ($formasPagamentos as $formapag)
                                        <tr>
                                            <td>{{$formapag->id}}</td>
                                            <td>{{$formapag->nome}}</td>
                                            <td>{{$formapag->descricao}}</td>
                                            <td>
                                                @if($formapag->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$formapag->id}}" data-whatever="{{$formapag->id}}" data-whatevernome="{{$formapag->nome}}" data-whateverdescricao="{{$formapag->descricao}}" data-whateverativo="{{$formapag->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Cargo" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$formapag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Cargo #{{$formapag->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFormaPag', $formapag->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Cargo</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="nome" class="control-label labelInputEditUser">Forma de Pagamento:</label>
                                                                                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do cargo" value="{{$formapag->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="descricao" class="control-label labelInputEditUser">Descrição:</label>
                                                                                <input type="text" class="form-control" name="descricao" placeholder="Digite a descrição do cargo"
                                                                                       value="{{$formapag->descricao}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $formapag->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $formapag->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$formapag->id}}" data-whatever="{{$formapag->id}}" data-whatevernome="{{$formapag->nome}}" data-whateverdescricao="{{$formapag->descricao}}" data-whateverativo="{{$formapag->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Cargo" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$formapag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Forma de Pagamento #{{$formapag->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFormaPag', $formapag->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Forma de Pagamento</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="nome" class="control-label labelInputEditUser">Forma de Pagamento:</label>
                                                                                <input disabled type="text" class="form-control" name="nome" placeholder="Digite o nome do setor" value="{{$formapag->nome}}" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="descricao" class="control-label labelInputEditUser">Descrição:</label>
                                                                                <input disabled type="text" class="form-control" name="descricao" placeholder="Digite a descrição"
                                                                                       value="{{$formapag->descricao}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled {{ $formapag->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled {{ $formapag->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                        </div>       
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->
                                                <a href="{{route('excluirFormaPag', $formapag->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
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