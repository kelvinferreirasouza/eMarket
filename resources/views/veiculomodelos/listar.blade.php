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
                            <li class="breadcrumb-item"><a href="#">Entregas</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarVeiculos') }}">Veiculos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarVeiculoModelos') }}">Modelos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Modelos de Veiculo</h5>
                            <span>Listagem das modelos de veiculos</span>   
                        </div>
                        
                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarVeiculoModelo', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}

                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->
                        
                        
                        <!-- BOTAO CADASTRO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Modelo</button></a>
                        <!-- FIM BOTAO CADASTRO MODAL -->

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">MODELOS<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarVeiculoModelo')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header">
                                                <CENTER><h5>Cadastrar Novo Modelo</h5></CENTER>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="veiculoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                        <select class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId">
                                                            <option></option>
                                                            @foreach($veiculomarcas as $marca)    
                                                            <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                                            @endforeach  
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="modelo" class="control-label labelInputEditUser">Nome da Modelo:</label>
                                                        <input type="text" class="form-control" name="modelo" placeholder="Digite a Modelo" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                        <select class="form-control labelInputEditUser" name="isAtivo">
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Inativo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="modal-footer modal-footer-cadVeiculoMarcas">
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
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($veiculomodelos as $veiculomodelo)
                                        <tr>
                                            <td>{{$veiculomodelo->id}}</td>
                                            <td>
                                                @foreach($veiculomarcas as $marca)
                                                @if( $veiculomodelo->veiculoMarcaId == $marca->id)
                                                {{ $marca->marca }}   
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{$veiculomodelo->modelo}}</td>
                                            <td>
                                                @if($veiculomodelo->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$veiculomodelo->id}}" data-whatever="{{$veiculomodelo->id}}" data-whatevermarca="{{$veiculomodelo->modelo}}" data-whatevermarcaid="{{$veiculomodelo->veiculoMarcaId}}" data-whateverativo="{{$veiculomodelo->isAtivo}}"><img src="../../../imgs/iconEdit.png" title="Editar Modelo" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$veiculomodelo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Modelo #{{$veiculomodelo->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVeiculoModelo', $veiculomodelo->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Editar Modelo</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="veiculoMarcaId" class="control-label labelInputEditUser">Setor:</label>
                                                                                <select class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId" value="{{ $veiculomodelo->veiculoMarcaId }}">
                                                                                    @foreach($veiculomarcas as $marca)    
                                                                                    <option value="{{ $marca->id }}" {{($veiculomodelo->veiculoMarcaId == $marca->id ? 'selected' : '')}}>{{ $marca->marca }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="modelo" class="control-label labelInputEditUser">Modelo:</label>
                                                                                <input type="text" class="form-control" name="modelo" placeholder="Digite o modelo" value="{{$veiculomodelo->modelo}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $veiculomodelo->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $veiculomodelo->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer modal-footer-veiculoMarcas">
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
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$veiculomodelo->id}}" data-whatever="{{$veiculomodelo->id}}" data-whatevermarca="{{$veiculomodelo->modelo}}" data-whatevermarcaid="{{$veiculomodelo->veiculoMarcaId}}" data-whateverativo="{{$veiculomodelo->isAtivo}}"><img src="../../../imgs/iconView.png" title="Visualizar Modelo" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$veiculomodelo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Modelo #{{$veiculomodelo->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVeiculoModelo', $veiculomodelo->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header">
                                                                        <CENTER><h5>Visualizar Modelo</h5></CENTER>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                        	<div class="col-sm-4">
                                                                                <label for="veiculoMarcaId" class="control-label labelInputEditUser">Setor:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId" value="{{ $veiculomodelo->veiculoMarcaId }}">
                                                                                    @foreach($veiculomarcas as $marca)    
                                                                                    <option disabled value="{{ $marca->id }}" {{($veiculomodelo->veiculoMarcaId == $marca->id ? 'selected' : '')}}>{{ $marca->marca }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="marca" class="control-label labelInputEditUser">Marca:</label>
                                                                                <input disabled type="text" class="form-control" name="marca" value="{{$veiculomodelo->modelo}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled {{ $veiculomodelo->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled {{ $veiculomodelo->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer modal-footer-veiculoMarcas">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                        </div>       
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->
                                                <a href="{{route('excluirVeiculoModelo', $veiculomodelo->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../../imgs/iconTrash.png" title="Excluir Unidade" class="btnAcoes"></a>
                                            </td>
                                        </tr>                         
                                        @empty
                                        <tr>
                                            <td colspan="200">Nenhum resultado encontrado!!</td>
                                        </tr>
                                        @endforelse                                 
                                    </tbody>
                                </table> 
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection