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
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Veículos de Entrega</h5>
                            <span>Listagem dos veículos cadastrados para realizarem entregas</span>   
                        </div>
                        
                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarVeiculo', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}

                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->
                        
                        
                        <!-- BOTAO CADASTRO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Veículo</button></a>
                        <!-- FIM BOTAO CADASTRO MODAL -->

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">VEÍCULOS<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarVeiculo')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header text-center">
                                                <h5>Cadastrar Novo Veículo</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="veiculoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                        <select class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId">
                                                            <option>Selecione</option>
                                                            @foreach($veiculomarcas as $marca)    
                                                            <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                                            @endforeach  
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="veiculoModeloId" class="control-label labelInputEditUser">Modelo:</label>
                                                        <select class="form-control labelInputEditUser" name="veiculoModeloId" id="veiculoModeloId">
                                                            <option>Selecione</option>
                                                        </select>
                                                    </div>
                                                    <script>
                                                            $('#veiculoMarcaId').on('change', function () {
                                                                var veiculoMarcaId = $(this).val();
                                                                if (veiculoMarcaId) {
                                                                    $.ajax({
                                                                        type: "GET",
                                                                        url: "{{url('ajax/pegar-lista-modelos')}}?veiculoMarcaId=" + veiculoMarcaId,
                                                                        success: function (res) {
                                                                            if (res) {
                                                                                $("#veiculoModeloId").empty();
                                                                                $.each(res, function (key, value) {
                                                                                    $("#veiculoModeloId").append('<option value="' + key + '">' + value + '</option>');
                                                                                });

                                                                            } else {
                                                                                $("#produtoSetorId").empty();
                                                                            }
                                                                        }
                                                                    });
                                                                } else {
                                                                    $("#veiculoMarcaId").empty();
                                                                }

                                                            });
                                                        </script>
                                                    <div class="col-sm-2">
                                                        <label for="placa" class="control-label labelInputEditUser">Placa:</label>
                                                        <input type="text" class="form-control" name="placa" placeholder="Digite a Placa" required>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="ano" class="control-label labelInputEditUser">Ano:</label>
                                                        <input type="text" class="form-control" name="ano" placeholder="Digite o Ano" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="renavam" class="control-label labelInputEditUser">Renavam:</label>
                                                        <input type="text" class="form-control" name="renavam" placeholder="Digite o Renavam" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label for="cor" class="control-label labelInputEditUser">Cor:</label>
                                                        <input type="text" class="form-control" name="cor" placeholder="Digite a Cor" required>
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
                                            <th>Placa</th>
                                            <th>Cor</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($veiculos as $veiculo)
                                        <tr>
                                            <td>{{$veiculo->id}}</td>
                                            <td>
                                                @foreach($veiculomarcas as $marca)
                                                @if( $veiculo->veiculoMarcaId == $marca->id)
                                                {{ $marca->marca }}   
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($veiculomodelos as $modelo)
                                                @if( $veiculo->veiculoModeloId == $modelo->id)
                                                {{ $modelo->modelo }}   
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{$veiculo->placa}}</td>
                                            <td>{{$veiculo->cor}}</td>
                                            <td>
                                                @if($veiculo->isAtivo == 1)
                                                Ativo
                                                @else 
                                                Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$veiculo->id}}" data-whatever="{{$veiculo->id}}" data-whatevermarcaid="{{$veiculo->veiculoMarcaId}}" data-whatevermodeloid="{{$veiculo->veiculoModeloId}}" data-whateverano="{{$veiculo->ano}}" data-whateverplaca="{{$veiculo->placa}}" data-whateverrenavam="{{$veiculo->renavam}}" data-whatevercor="{{$veiculo->cor}}" data-whateverativo="{{$veiculo->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Veículo" class="btnAcoes"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$veiculo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Veículo #{{$veiculo->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVeiculo', $veiculo->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Editar Veículo</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="veiculoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId" value="{{ $veiculo->veiculoMarcaId }}">
                                                                                    @foreach($veiculomarcas as $marca)    
                                                                                    <option value="{{ $marca->id }}" {{($veiculo->veiculoMarcaId == $marca->id ? 'selected' : '')}}>{{ $marca->marca }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="veiculoModeloId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select class="form-control labelInputEditUser" name="veiculoModeloId" id="veiculoModeloId" value="{{ $veiculo->veiculoModeloId }}">
                                                                                    @foreach($veiculomodelos as $modelo)    
                                                                                    <option value="{{ $modelo->id }}" {{($veiculo->veiculoModeloId == $modelo->id ? 'selected' : '')}}>{{ $modelo->modelo }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="placa" class="control-label labelInputEditUser">Placa:</label>
                                                                                <input type="text" class="form-control" name="placa" placeholder="Digite a Placa" value="{{$veiculo->placa}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ano" class="control-label labelInputEditUser">Ano:</label>
                                                                                <input type="text" class="form-control" name="ano" placeholder="Digite o Ano" value="{{$veiculo->ano}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="renavam" class="control-label labelInputEditUser">Renavam:</label>
                                                                                <input type="text" class="form-control" name="renavam" placeholder="Digite o Renavam" value="{{$veiculo->renavam}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="cor" class="control-label labelInputEditUser">Cor:</label>
                                                                                <input type="text" class="form-control" name="cor" placeholder="Digite a Cor" value="{{$veiculo->cor}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $veiculo->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $veiculo->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer modal-footer-veiculoMarcas">
                                                                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        </div>       
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL EDITAR -->

                                                <!-- BOTAO VISUALIZAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$veiculo->id}}" data-whatever="{{$veiculo->id}}" data-whatevermarcaid="{{$veiculo->veiculoMarcaId}}" data-whatevermodeloid="{{$veiculo->veiculoModeloId}}" data-whateverano="{{$veiculo->ano}}" data-whateverplaca="{{$veiculo->placa}}" data-whateverrenavam="{{$veiculo->renavam}}" data-whatevercor="{{$veiculo->cor}}" data-whateverativo="{{$veiculo->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Veículo" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$veiculo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Veículo #{{$veiculo->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarVeiculo', $veiculo->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Veículo</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="veiculoMarcaId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="veiculoMarcaId" id="veiculoMarcaId" value="{{ $veiculo->veiculoMarcaId }}">
                                                                                    @foreach($veiculomarcas as $marca)    
                                                                                    <option disabled value="{{ $marca->id }}" {{($veiculo->veiculoMarcaId == $marca->id ? 'selected' : '')}}>{{ $marca->marca }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="veiculoModeloId" class="control-label labelInputEditUser">Marca:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="veiculoModeloId" id="veiculoModeloId" value="{{ $veiculo->veiculoModeloId }}">
                                                                                    @foreach($veiculomodelos as $modelo)    
                                                                                    <option disabled value="{{ $modelo->id }}" {{($veiculo->veiculoModeloId == $modelo->id ? 'selected' : '')}}>{{ $modelo->modelo }}</option>
                                                                                    @endforeach  
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label disabled for="placa" class="control-label labelInputEditUser">Placa:</label>
                                                                                <input disabled type="text" class="form-control" name="placa" placeholder="Digite a Placa" value="{{$veiculo->placa}}" required>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="ano" class="control-label labelInputEditUser">Ano:</label>
                                                                                <input disabled type="text" class="form-control" name="ano" placeholder="Digite o Ano" value="{{$veiculo->ano}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="renavam" class="control-label labelInputEditUser">Renavam:</label>
                                                                                <input disabled type="text" class="form-control" name="renavam" placeholder="Digite o Renavam" value="{{$veiculo->renavam}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="cor" class="control-label labelInputEditUser">Cor:</label>
                                                                                <input disabled type="text" class="form-control" name="cor" placeholder="Digite a Cor" value="{{$veiculo->cor}}" required>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option disabled value="1" {{ $veiculo->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option disabled value="0" {{ $veiculo->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer modal-footer-veiculoMarcas">
                                                                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        </div>       
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->
                                                <a href="{{route('excluirVeiculo', $veiculo->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" title="Excluir Unidade" class="btnAcoes"></a>
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