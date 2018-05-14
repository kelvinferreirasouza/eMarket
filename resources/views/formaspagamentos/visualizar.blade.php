@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Visualizar Forma de Pagamento</h4>
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
                            <li class="breadcrumb-item"><a href="#">Visualizar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarFormaPag', $formapagamentos->id)}}" class="formEditUser">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarFormasPag') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                            <h5>Visualizar</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="nome" class="control-label labelInputEditUser">Forma de Pagamento:</label>
                                    <input disabled type="text" class="form-control" name="nome" placeholder="Digite a forma de pagamento" value="{{$formapagamento->nome}}" required>
                                </div>
                                <div class="col-sm-4">
                                    <label for="descricao" class="control-label labelInputEditUser">Descrição:</label>
                                    <input disabled type="text" class="form-control" name="descricao" placeholder="Digite a descrição da forma de pagamento" value="{{$formapagamento->descricao}}" required>
                                </div>
                                <div class="col-sm-2">
                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                        <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                        	<option disabled value="1" {{ $formapagamento->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                        	<option disabled value="0" {{ $formapagamento->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection