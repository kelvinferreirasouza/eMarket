@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container container-profile">
    <div class="profile-block col-sm-6">
        <div class="panel text-center">
            <div class="user-heading"> <a href="#"><img src="{{'../imgs/clientes/' . Auth::guard('clientes')->user()->foto}}" alt="" title=""></a>
                <h1>{{ Auth::guard('clientes')->user()->nome }}</h1>
                <p>{{ Auth::guard('clientes')->user()->email }}</p>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{route('minhaConta')}}"><i class="fas fa-address-card"></i>Minha Conta</a></li>
                <li><a href="{{route('meusPedidos')}}"><i class="fas fa-dolly"></i>Meus Pedidos</a></li>
                <li><a href="{{route('logoutCliente')}}"><i class="fas fa-user-times"></i>Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="card-block">

        @if(session('message'))
        <div class="alert alert-success">
            <p>{{session('message')}}</p>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            <p>{{session('error')}}</p>
        </div>
        @endif

        {!! Form::open(['route' => 'atualizarPerfilCliente']) !!}
        {{ csrf_field() }}

        <div class="flatPanel panel panel-primary col-sm-8">
            <div class="flatPanel panel-produtos-pedido"><i class="far fa-id-card"></i> Meu Perfil
                <a class="btn btn-primary btnEditPerfil" id="btnEditPerfil"><i class="far fa-edit"></i> Editar</a>   
                <button type="submit" class="btn btn-primary btnSalvar" id="btnSalvar" style="display: none"><i class="far fa-edit"></i> Salvar</button>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 table-responsive">
                    <div class="form-row">
                        <div class="col-sm-12">
                            <div class="col-sm-6 divPerfil">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" value="{{ Auth::guard('clientes')->user()->nome }}" required disabled>
                            </div>
                            <div class="col-sm-3 divPerfil">
                                <label>CPF:</label>
                                <input type="text" class="form-control" name="cpf" placeholder="CPF" value="{{ Auth::guard('clientes')->user()->cpf }}" required disabled>
                            </div>
                            <div class="col-sm-3 divPerfil">
                                <label>RG:</label>
                                <input type="text" class="form-control" name="rg" id="rg" value="{{ Auth::guard('clientes')->user()->rg }}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="col-sm-6 divPerfil">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="CPF" value="{{ Auth::guard('clientes')->user()->email }}" required disabled>
                                </div>
                                <div class="col-sm-6 divPerfil">
                                    <label>Senha: </label>
                                    <input type="password" class="form-control" name="password" id="password" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="col-md-2 mb-3 divPerfil">
                                    <label>CEP:</label>
                                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" value="{{ Auth::guard('clientes')->user()->cep  }}" required disabled>
                                </div>
                                <div class="col-sm-8 divPerfil">
                                    <label>Logradouro:</label>
                                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Logradouro" value="{{ Auth::guard('clientes')->user()->logradouro }}" required disabled>
                                </div>
                                <div class="col-md-2 mb-3 divPerfil">
                                    <label>Número:</label>
                                    <input type="text" class="form-control" name="numero" id="numero" placeholder="Número" value="{{ Auth::guard('clientes')->user()->numero }}" required disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="col-md-3 mb-3 divPerfil">
                                    <label>Complemento:</label>
                                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento" value="{{ Auth::guard('clientes')->user()->complemento }}" disabled>
                                </div>
                                <div class="col-md-3 mb-3 divPerfil">
                                    <label>Bairro:</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" value="{{ Auth::guard('clientes')->user()->bairro }}" required disabled>
                                </div>
                                <div class="col-sm-2 mb-3 divPerfil">
                                    <label>UF:</label>
                                    <input type="text" class="form-control" name="estado" id="estado" placeholder="UF" value="{{ Auth::guard('clientes')->user()->estado }}" required disabled>
                                </div>
                                <div class="col-md-4 mb-3 divPerfil">
                                    <label>Município:</label>
                                    <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Município" value="{{ Auth::guard('clientes')->user()->municipio }}" required disabled>
                                </div>
                                <div class="col-sm-3 divPerfil">
                                    <label>Data Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNasc" id="dataNasc" value="{{ Auth::guard('clientes')->user()->dataNasc }}" required disabled>
                                </div>
                                <div class="col-md-3 mb-3 divPerfil">
                                    <label>Celular:</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular" value="{{ Auth::guard('clientes')->user()->celular }}" required disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script>
    $("#btnEditPerfil").click(function () {
        $("#nome").removeAttr('disabled');
        $("#rg").removeAttr('disabled');
        $("#email").removeAttr('disabled');
        $("#password").removeAttr('disabled');
        $("#cep").removeAttr('disabled');
        $("#logradouro").removeAttr('disabled');
        $("#numero").removeAttr('disabled');
        $("#complemento").removeAttr('disabled');
        $("#bairro").removeAttr('disabled');
        $("#estado").removeAttr('disabled');
        $("#municipio").removeAttr('disabled');
        $("#dataNasc").removeAttr('disabled');
        $("#celular").removeAttr('disabled');
        $("#btnEditPerfil").hide();
        $("#btnSalvar").show();
    });
</script>

@endsection