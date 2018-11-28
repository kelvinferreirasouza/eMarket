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
                            <li class="breadcrumb-item"><a href="#">Encomendas</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarFretes') }}">Fretes</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Localidades para Entrega</h5>
                            <span>Listagem das localidades aceitas para entrega</span>   
                        </div>
                        
                        @if (Auth::user()->can('view', App\Frete::class))

                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarFornecedor', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}
                        </div>
                        <!-- FIM FORMULÁRIO DE BUSCA -->
                        
                        @if (Auth::user()->can('create', App\Frete::class))
                        <!-- BOTAO CADASTRAR LOCALIDADE MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Localidade</button></a>

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalFornec" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">LOCALIDADES<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarFrete')}}" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header text-center">
                                                <h5>Cadastrar Localidade</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                        <select class="form-control labelInputEditUser" id="estado" name="estado" onchange="listarCidades()" >
                                                            <option>Selecione o Estado...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="municipio" class="control-label labelInputEditUser">Município:</label>
                                                        <select class="form-control labelInputEditUser" id="municipio" name="municipio">
                                                            <option>Selecione a Cidade...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="valor" class="control-label labelInputEditUser">Taxa Entrega:</label>
                                                        <input type="number" step="any" class="form-control" name="valor" required>
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
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Município</th>
                                            <th class="text-center">Taxa Entrega R$</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($fretes as $frete)
                                        <tr>
                                            <td class="text-center">{{$frete->id}}</td>
                                            <td class="text-center">{{$frete->estado}}</td>
                                            <td class="text-center">{{$frete->municipio}}</td>
                                            <td class="text-center">R$ {{str_replace(".", ",", number_format((float)$frete->valor, 2, '.', ''))}}</td>
                                            <td>
                                                @if (Auth::user()->can('update', $frete))
                                                <!-- BOTAO EDITAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalEditar{{$frete->id}}" data-whatever="{{$frete->id}}" data-whateverestado="{{$frete->estado}}" data-whatevermunicipio="{{$frete->municipio}}" data-whatevervalor="{{$frete->valor}}"><img src="../../imgs/iconEdit.png" title="Editar Localidade" class="btnAcoes"  onclick="setIdModal()"></a>

                                                <!-- MODAL DE EDITAR -->
                                                <div class="modal fade" id="modalEditar{{$frete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Localidade #{{$frete->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFrete', $frete->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Editar Localidade</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <select class="form-control labelInputEditUser" id="estadoEditar" name="estado">
                                                                                    <option>Selecione o Estado...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Município:</label>
                                                                                <select class="form-control labelInputEditUser" name="municipio">
                                                                                    <option value="1">Pelotas</option>
                                                                                    <option value="0">São Paulo</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="valor" class="control-label labelInputEditUser">Taxa Entrega:</label>
                                                                                <input type="number" step="any" class="form-control" name="valor" value="{{$frete->valor}}" required>
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
                                                
                                                @if (Auth::user()->can('view', $frete))
                                                <!-- BOTAO VISUALIZAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modalVisualizar{{$frete->id}}" data-whatever="{{$frete->id}}" data-whateverestado="{{$frete->estado}}" data-whatevermunicipio="{{$frete->municipio}}" data-whatevervalor="{{$frete->valor}}"><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modalVisualizar{{$frete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalFornec" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Localidade #{{$frete->id}} <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route ('atualizarFrete', $frete->id)}}" class="formEditUser">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Fornecedor</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <label for="estado" class="control-label labelInputEditUser">Estado:</label>
                                                                                <select class="form-control labelInputEditUser" id="" name="estado" onchange="listarCidades()" >
                                                                                    <option>Selecione o Estado...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="municipio" class="control-label labelInputEditUser">Município:</label>
                                                                                <select class="form-control labelInputEditUser" id="municipio" name="municipio">
                                                                                    <option>Selecione o Estado...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="valor" class="control-label labelInputEditUser">Taxa Entrega:</label>
                                                                                <input type="number" step="any" class="form-control" name="valor" value="{{$frete->valor}}" required>
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
                                                
                                                @if (Auth::user()->can('delete', $frete))
                                                <a href="{{route('excluirFrete', $frete->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" titles="Excluir Frete" class="btnAcoes"></a>
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
                                <div class="pagination">{!! $fretes->links() !!}</div>
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
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            var url = "https://br-cidade-estado-nodejs.glitch.me/estados";
            var retorno = listarEstados(url);
        });


        function listarEstados(estado) {
            $.ajax({
                type: "GET",
                url: estado
            }).done(function (data) {
                for (var indice in data) {
                    $('#estado').append('<option>' + data[indice].id + '</option>');
                    $('#estadoEditar').append('<option>' + data[indice].id + '</option>');
                }
            }).fail(function () {
                console.log("Erro!");
            });
        }
        
        function setIdModal(id) {
            var idModal = id;
            var url = "https://br-cidade-estado-nodejs.glitch.me/estados";
            var retornoModal = listarEstadosModal(url, idModal); 
        }
        
        function listarEstadosModal(estado, idModal) {
            $.ajax({
                type: "GET",
                url: estado
            }).done(function (data) {
                for (var indice in data) {
                    $('#estadoEditar'+idModal).append('<option>' + data[indice].id + '</option>');
                }
            }).fail(function () {
                console.log("Erro!");
            });
        }

        function listarCidades() {
            var url = "https://br-cidade-estado-nodejs.glitch.me/estados/" + $('#estado').val() + "/cidades";
            var retorno = listarCidadess(url);
        }

        function listarCidadess(estado) {
            $.ajax({
                type: "GET",
                url: estado
            }).done(function (data) {
                console.log(data);
                for (var indice in data) {
                    $('#municipio').append('<option>' + data[indice].cidade + '</option>');
                }
            }).fail(function () {
                console.log("Erro!");
            });
        }


    </script>
    @endsection