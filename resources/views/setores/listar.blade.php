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
                            <li class="breadcrumb-item"><a href="{{ route('listarProdutos') }}">Produtos</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('listarSetores') }}">Setores</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-flex">
                        <div>
                            <h5>Lista de Setores Cadastros</h5>
                            <span>Listagem dos setores cadastrados e suas informações</span>   
                        </div>

                        <!-- FORMULÁRIO DE BUSCA -->

                        <div class="form-search">
                            {!! Form::open(['route' => 'pesquisarSetor', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'Pesquisar..']) !!}

                            <button class="btn btn-primary">Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                            {!! Form::close() !!}
                        </div>

                        <!-- FIM FORMULÁRIO DE BUSCA -->


                        <!-- BOTAO CADASTRO MODAL -->
                        <a href="" data-toggle="modal" data-target="#modalCadastrar">
                            <button type="button" class="btn btn-primary waves-effect waves-light btnCadUser"><i class="fa fa-user-plus"></i>Cadastrar Setor</button></a>
                        <!-- FIM BOTAO CADASTRO MODAL -->

                        <!-- MODAL DE CADASTRAR -->
                        <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modalSetor" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">SETOR<i class="fa fa-help"></i></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: #fff">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route ('salvarSetor')}}" enctype="multipart/form-data" class="formEditUser">
                                            {{ csrf_field() }}
                                            <div class="card-header text-center">
                                                <h5>Cadastrar Setor</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-12">
                                                            @php        
                                                            $foto = '../imgs/setores/sem_foto.jpg';
                                                            @endphp

                                                            {!!"
                                                            <img src=$foto alt='js' width='220px' height='150px' style='margin-top: -2%'>
                                                            "!!}
                                                        </div>
                                                        <div class="col-sm-12 divFile">
                                                            <input type="file" name="file[]" class="form-control inputFile">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col-sm-12">
                                                            <label for="nome" class="control-label labelInputEditUser">Nome do Setor:</label>
                                                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do setor" required>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="col-sm-12" style="margin-top: 1%;">
                                                                <label for="isDestaque" class="control-label labelInputEditUser">Destaque:</label>
                                                                <select class="form-control labelInputEditUser" name="isDestaque">
                                                                    <option value="1">Sim</option>
                                                                    <option value="0">Não</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-12" style="margin-top: 1%; margin-bottom: 20%">
                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                    <option value="1">Ativo</option>
                                                                    <option value="0">Inativo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer modal-footer-formpag">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i>Salvar</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                </div>    
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
                                            <th>Nome do Setor</th>
                                            <th>Imagem</th>
                                            <th>Destaque</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>            
                                    <tbody>            
                                        @forelse($setores as $setor)
                                        <tr>
                                            <td>{{$setor->id}}</td>
                                            <td>{{$setor->nome}}</td>
                                            <td>    
                                                @if (($setor->id . '.svg') == $setor->imagem ||
                                                ($setor->id . '.jpg') == $setor->imagem ||
                                                ($setor->id . '.png') == $setor->imagem)
                                                <?php
                                                $foto = '../imgs/setores/' . $setor->imagem;
                                                ?>
                                                {!!" <center><img src=$foto alt='js' width='40px' height='40px'></center> "!!}
                                    @else 
                                    <?php
                                    $foto = '../imgs/setores/sem_foto.jpg';
                                    ?>
                                    {!!" <center><img src=$foto alt='js' width='60px' height='40px'></center> "!!}
                                    @endif
                                    </td>
                                    <td>
                                        @if($setor->isDestaque == 1)
                                        Sim
                                        @else 
                                        Não
                                        @endif
                                    </td>
                                    <td>
                                        @if($setor->isAtivo == 1)
                                        Ativo
                                        @else 
                                        Inativo
                                        @endif
                                    </td>
                                    <td>
                                        <!-- BOTAO EDITAR MODAL -->
                                        <a href="" data-toggle="modal" data-target="#modalEditar{{$setor->id}}" data-whatever="{{$setor->id}}" data-whatevernome="{{$setor->nome}}" data-whateverimagem="{{$setor->imagem}}" data-whateverativo="{{$setor->isAtivo}}"><img src="../../imgs/iconEdit.png" title="Editar Setor" class="btnAcoes"></a>
                                        <!-- MODAL DE EDITAR -->
                                        <div class="modal fade" id="modalEditar{{$setor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modalSetor" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Setor #{{$setor->id}} <i class="fa fa-help"></i></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #fff">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route ('atualizarSetor', $setor->id)}}" enctype="multipart/form-data" class="formEditUser">
                                                            {{ csrf_field() }}
                                                            <div class="card-header text-center">
                                                                <h5>Editar Setor</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">
                                                                            @if (($setor->id . '.svg') == $setor->imagem ||
                                                                            ($setor->id . '.jpg') == $setor->imagem ||
                                                                            ($setor->id . '.png') == $setor->imagem)
                                                                            <?php
                                                                            $foto = '../imgs/setores/' . $setor->imagem;
                                                                            ?>
                                                                            {!!" <center><img src=$foto alt='js' width='220px' height='150px'></center> "!!}
                                                                            @else 
                                                                            <?php
                                                                            $foto = '../imgs/setores/sem_foto.jpg';
                                                                            ?>
                                                                            {!!" <center><img src=$foto alt='js' width='220px' height='150px'></center> "!!}
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-sm-12 divFile">
                                                                            <input type="file" name="file[]" class="form-control inputFile">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">
                                                                            <label for="nome" class="control-label labelInputEditUser">Nome do Setor:</label>
                                                                            <input type="text" class="form-control" name="nome" value="{{$setor->nome}}" required>
                                                                        </div>

                                                                        <div class="col-sm-6">
                                                                            <div class="col-sm-12" style="margin-top: 1%;">
                                                                                <label for="isDestaque" class="control-label labelInputEditUser">Destaque:</label>
                                                                                <select class="form-control labelInputEditUser" name="isDestaque">
                                                                                    <option value="1" {{ $setor->isDestaque == 1 ? 'selected' : ''}}>Sim</option>
                                                                                    <option value="0" {{ $setor->isDestaque == 0 ? 'selected' : ''}}>Não</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-12" style="margin-top: 1%; margin-bottom: 20%">
                                                                                <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                                <select class="form-control labelInputEditUser" name="isAtivo">
                                                                                    <option value="1" {{ $setor->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                    <option value="0" {{ $setor->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
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
                                        <a href="" data-toggle="modal" data-target="#modalVisualizar{{$setor->id}}" data-whatever="{{$setor->id}}" data-whatevernome="{{$setor->nome}}" data-whateverativo="{{$setor->isAtivo}}"><img src="../../imgs/iconView.png" title="Visualizar Setor" class="btnAcoes"></a>

                                        <!-- MODAL DE VISUALIZAR -->
                                        <div class="modal fade" id="modalVisualizar{{$setor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modalSetor" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #0cb6734 !important; color: white">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff">Setor #{{$setor->id}} <i class="fa fa-help"></i></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" style="color: #fff">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route ('atualizarSetor', $setor->id)}}" class="formEditUser">
                                                            {{ csrf_field() }}
                                                            <div class="card-header text-center">
                                                                <h5>Visualizar Setor</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="form-group row">

                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">
                                                                            @if (($setor->id . '.svg') == $setor->imagem ||
                                                                            ($setor->id . '.jpg') == $setor->imagem ||
                                                                            ($setor->id . '.png') == $setor->imagem)
                                                                            <?php
                                                                            $foto = '../imgs/setores/' . $setor->imagem;
                                                                            ?>
                                                                            {!!" <center><img src=$foto alt='js' width='220px' height='150px'></center> "!!}
                                                                            @else 
                                                                            <?php
                                                                            $foto = '../imgs/setores/sem_foto.jpg';
                                                                            ?>
                                                                            {!!" <center><img src=$foto alt='js' width='220px' height='150px'></center> "!!}
                                                                            @endif
                                                                        </div>
                                                                        <div class="col-sm-12 divFile">
                                                                            <input disabled type="file" name="file[]" class="form-control inputFile">
                                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="col-sm-12">
                                                                            <label for="nome" class="control-label labelInputEditUser">Nome do Setor:</label>
                                                                            <input type="text" disabled class="form-control" name="nome" value="{{$setor->nome}}" required>
                                                                        </div>
                                                                        <div class="col-sm-6" style="margin-top: 1%;">
                                                                            <label for="isAtivo" class="control-label labelInputEditUser">Status:</label>
                                                                            <select disabled class="form-control labelInputEditUser" name="isAtivo">
                                                                                <option disabled {{ $setor->isAtivo == 1 ? 'selected' : ''}}>Ativo</option>
                                                                                <option disabled {{ $setor->isAtivo == 0 ? 'selected' : ''}}>Inativo</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                                                </div>       
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- FIM MODAL VISUALIZAR -->

                                        <a href="{{route('excluirSetor', $setor->id)}}" onclick="return confirm('Tem certeza que deseja deletar este registro?')"><img src="../../imgs/iconTrash.png" title="Excluir Setor" class="btnAcoes"></a>
                                    </td>
                                    </tr>                         
                                    @empty
                                    <tr>
                                        <td colspan="200">Nenhum resultado encontrado!!</td>
                                    </tr>
                                    @endforelse                                
                                    </tbody>
                                </table> 
                                {!! $setores->links() !!}
                            </div> 
                        </div>
                    </div>
                </div>
                @endsection