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
                            <li class="breadcrumb-item"><a href="#">Relatórios</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Vendas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Relatórios</h5>
                            <span>Listagem dos relatórios disponíveis para consulta.</span>   
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Setor</th>
                                            <th class="text-center">Relatório</th>
                                            <th class="text-center">Descrição</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-center">Vendas</td>
                                            <td class="text-center">Período</td>
                                            <td>Gera relatório das vendas conforme periodo estipulado.  </td>
                                            <td class="text-center">
                                                <!-- BOTAO VISUALIZAR MODAL -->
                                                <a href="" data-toggle="modal" data-target="#modal" ><img src="../../imgs/iconView.png" title="Editar Usuário" class="btnAcoes"></a>

                                                <!-- MODAL DE VISUALIZAR -->
                                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modalRelatorio" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Relatório <i class="fa fa-help"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color: #fff">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="#" class="formEditUser" target="_blank">
                                                                    {{ csrf_field() }}
                                                                    <div class="card-header text-center">
                                                                        <h5>Visualizar Relatório por Período</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <label for="periodo1" class="control-label labelInputEditUser">De:</label>
                                                                                <input type="date" class="form-control" id="periodo1" name="periodo1" required>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="periodo2" class="control-label labelInputEditUser">Até:</label>
                                                                                <input type="date" class="form-control" id="periodo2" name="periodo2" required>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="status" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="idStatus" id="idStatus">
                                                                                    <option value="1">Aguardando Pagamento</option>
                                                                                    <option value="2">Em Análise</option>
                                                                                    <option value="3">Pagamento Aprovado</option>
                                                                                    <option value="4">Disponível</option>
                                                                                    <option value="5">Em Disputa</option>
                                                                                    <option value="6">Pagamento Devolvido</option>
                                                                                    <option value="7">Cancelado</option>
                                                                                    <option value="9">Retenção Temporária</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                    <div class="modal-footer modal-footer-prod">
                                                                        <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Gerar Relatório</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                    </div>  
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM MODAL VISUALIZAR -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-center">Vendas</td>
                                            <td class="text-center">Realizadas</td>
                                            <td>Gera relatório com todos as vendas que foram realizadas.  </td>
                                            <td class="text-center">
                                                <?php $id=1 ?>
                                                <a href="{{route('relVendasRealizadas', $id)}}" target="_blank"><img src="../../imgs/iconView.png" title="Visualizar Relatório" class="btnAcoes"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-center">Vendas</td>
                                            <td class="text-center">Concluídas</td>
                                            <td>Gera relatório com todos as vendas concluídas e entregues.  </td>
                                            <td class="text-center">
                                                <?php $id=3 ?>
                                                <a href="{{route('relVendasConcluidas', $id)}}" target="_blank"><img src="../../imgs/iconView.png" title="Visualizar Relatório" class="btnAcoes"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-center">Vendas</td>
                                            <td class="text-center">Em Entrega</td>
                                            <td>Gera relatório com todos as vendas que estão em rota de entrega.  </td>
                                            <td class="text-center">
                                                <?php $id=2 ?>
                                                <a href="{{route('relVendasCanceladas', $id)}}" target="_blank"><img src="../../imgs/iconView.png" title="Visualizar Relatório" class="btnAcoes"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-center">Vendas</td>
                                            <td class="text-center">Canceladas</td>
                                            <td>Gera relatório com todos as vendas canceladas.  </td>
                                            <td class="text-center">
                                                <?php $id=4 ?>
                                                <a href="{{route('relVendasCanceladas', $id)}}" target="_blank"><img src="../../imgs/iconView.png" title="Visualizar Relatório" class="btnAcoes"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection