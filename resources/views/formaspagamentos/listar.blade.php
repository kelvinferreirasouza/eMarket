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
                            <li class="breadcrumb-item"><a href="#">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                           <h5>Lista de Formas de Pagamento</h5>
                            <span>Listagem das formas de pagamento aceitas</span>   
                        </div>
                        <a href="{{route('cadastrarFormaPag')}}"><button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Forma Pagamento</button></a>
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
                                        @foreach($formaspagamentos as $formapagamento)
                                        <tr>
                                            <td>{{$formapagamento->id}}</td>
                                            <td>{{$formapagamento->nome}}</td>
                                            <td>{{$formapagamento->descricao}}</td>                                
                                            <td>
                                                @if($formapagamento->isAtivo == 1)
                                                    Ativo
                                                @else 
                                                    Inativo
                                                @endif
                                            </td>
                                            <td>
                                    <center>
                                        <a href="{{route('editarFormaPag', $formapagamento->id)}}"><img src="../imgs/iconEdit.png" title="Editar Forma Pagamento" class="btnAcoes" ></a>  
                                        <a href="{{route('visualizarFormaPag', $formapagamento->id)}}"><img src="../imgs/iconView.png" title="Visualizar Forma Pagamento" class="btnAcoes" ></a>  
                                        <a href="{{route('excluirFormaPag', $formapagamento->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../imgs/iconTrash.png" titles="Excluir Usuário" class="btnAcoes"></a>
                                    </center>
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