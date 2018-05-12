@extends('shared.layoutManager')
@yield('modalVisualizacao')
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Editar Sub-Categoria <i class="fa fa-help"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #fff">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route ('atualizarSubcategoria', $subcategoria->id)}}" class="formEditUser">
                    {{ csrf_field() }}
                    <div class="card-header">
                        <h5>Visualização de Sub-Categoria</h5>
                    </div>
                    <div class="card-block">
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="produtoCategoriaId" class="control-label labelInputEditUser">Categoria:</label>
                                <select disabled class="form-control labelInputEditUser" name="produtoCategoriaId" id="produtoCategoriaId">
                                    <option></option>
                                    @foreach($categorias as $categoria)    
                                    <option disabled value="{{$categoria->id}}" {{ $subcategoria->produtoCategoriaId == $categoria->id ? 'selected' : '' }} >{{$categoria->nome}}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="nome" class="control-label labelInputEditUser">Nome da Sub-Categoria:</label>
                                <input disabled type="text" class="form-control" name="nome" placeholder="Digite o nome da categoria" value="{{$subcategoria->nome}}" required>
                            </div>
                            <div class="col-sm-2">
                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                    <option disabled value="1" {{ $subcategoria->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                    <option disabled value="0" {{ $subcategoria->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                </select>
                            </div>
                        </div>
                    </div>     
                </form>
            </div>
        </div>
    </div>
<!-- Fim Modal de Visualizar -->
@endsection
