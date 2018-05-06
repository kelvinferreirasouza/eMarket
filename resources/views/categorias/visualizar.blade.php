@extends('shared.layoutManager')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Manager - Visualizar Categoria</h4>
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
                            <li class="breadcrumb-item"><a href="{{ route('listarCategorias') }}">Categorias</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Visualizar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <form method="post" action="{{route ('atualizarCategoria', $categoria->id)}}" class="formEditProd">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <div class="col-sm-2">
                                <div class="col-sm-6"><button class="btn btn-warning btnCancelar"><a class="linkCancel" href="{{ route('listarCategorias') }}"><i class="icofont icofont-ui-reply"></i><b>Voltar</b></a></button></div>
                                <div class="col-sm-6"><button class="btn btn-primary btnVisualizarEditar"><i class="icofont icofont-pencil-alt-5"></i><a class="linkCancel" href="{{route('editarCategoria', $categoria->id)}}"><b>Editar</b></a></button></div>
                            </div>
                            <h5>Visualizar Categoria</h5>
                        </div>
                        <div class="card-block">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="nome" class="control-label labelInputEditUser">Nome da Categoria:</label>
                                        <input disabled type="text" class="form-control" name="nome" placeholder="Digite o nome do setor" value="{{$categoria->nome}}" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="produtoSetorId" class="control-label labelInputEditUser">Setor:</label>
                                        <select disabled class="form-control labelInputEditUser" name="produtoSetorId" id="produtoSetorId" value="{{ $categoria->produtoSetorId }}">
                                            @foreach($setores as $setor)    
                                            <option value="{{ $setor->id }}" {{($categoria->produtoSetorId == $setor->id ? 'selected' : '')}}>{{ $setor->nome }}</option>
                                            @endforeach  
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                        <select disabled class="form-control labelInputEditUser" value="{{ $categoria->isAtivo }}">
                                            <option value="1" {{ $categoria->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                            <option value="{{ $categoria->isAtivo }}" {{ $categoria->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>     
                    </form>
                </div>

                @endsection