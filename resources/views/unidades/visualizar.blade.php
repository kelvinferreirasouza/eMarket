@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Visualizar Unidade</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarProdutos') }}">Produtos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarUnidades') }}">Unidades</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarUnidade', $unidade->id)}}" class="formEditProd">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarProdutos') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button class="btn btn-primary btnVisualizarEditar"><i class="icofont icofont-pencil-alt-5"></i><a class="linkCancel" href="{{route('editarUnidade', $unidade->id)}}"><b>Editar</b></a></button></div>
                            </div>
                            <h5>Visualizar Unidade</h5>
                        </div>

                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="descricao" class="control-label labelInputEditUser">Descrição:</label>
                                    <input disabled type="text" class="form-control" name="descricao" placeholder="Digite o nome do setor" value="{{$unidade->descricao}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="sigla" class="control-label labelInputEditUser">Sigla:</label>
                                    <input disabled type="text" class="form-control" name="sigla" placeholder="Digite o nome do setor" value="{{$unidade->sigla}}" required>
                                </div>
                                <div class="col-sm-2">
                                    <label for="isAtivo" class="control-label labelInputEditUser">Ativo:</label>
                                    <input disabled type="number" class="form-control" name="isAtivo" placeholder="1 para ativo e 0 para desativado" value="{{$unidade->isAtivo}}" required>
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>

                @endsection