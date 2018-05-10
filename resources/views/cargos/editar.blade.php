@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Editar Cargo</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarUsuarios') }}">Usuários</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarCargos') }}">Cargos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarCargo', $cargo->id)}}" class="formEditUser">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarCargos') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button type="submit" class="btn btn-primary btnSalvar"><i class="icofont icofont-save"></i>Salvar</button></div>
                            </div>
                            <h5>Editar Cargo</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="nome" class="control-label labelInputEditUser">Nome do Cargo:</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome do setor" value="{{$cargo->nome}}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="descricao" class="control-label labelInputEditUser">Descrição do Cargo:</label>
                                    <input type="text" class="form-control" name="descricao" placeholder="Digite a descrição do cargo"
                                    value="{{$cargo->descricao}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="isAtivo" class="control-label labelInputEditUser">Ativo:</label>
                                    <select name="isAtivo" class="form-control">
										@if($cargo->isAtivo == 1 )
                                            <option selected value="{{$cargo->isAtivo}}">Ativo</option>
                                            <option value="0">Inativo</option>
                                        @else 
                                        	<option value="1">Ativo</option>
                                        	<option selected value="{{$cargo->isAtivo}}">Inativo</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection