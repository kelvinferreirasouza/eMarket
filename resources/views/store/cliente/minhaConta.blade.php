@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container">
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
        <div class="form-row">
            <div class="col-sm-12">
                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Nome:</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" value="{{ Auth::guard('clientes')->user()->nome }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom02">CPF:</label>
                    <input type="text" class="form-control" placeholder="CPF" value="{{ Auth::guard('clientes')->user()->cpf }}" required disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="col-md-5 mb-3">
                        <label for="validationCustom03">Email:</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="CPF" value="{{ Auth::guard('clientes')->user()->email }}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Senha: </label>
                        <input type="text" class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">CEP:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Logradouro" value="{{ Auth::guard('clientes')->user()->cep  }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom05">Logradouro:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Logradouro" value="{{ Auth::guard('clientes')->user()->logradouro }}" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Número:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" value="{{ Auth::guard('clientes')->user()->numero }}" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Complemento:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Complemento" value="{{ Auth::guard('clientes')->user()->complemento }}" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Bairro:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Logradouro" value="{{ Auth::guard('clientes')->user()->bairro }}" required>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="validationCustom05">Estado:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" value="{{ Auth::guard('clientes')->user()->estado }}" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Município:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" value="{{ Auth::guard('clientes')->user()->municipio }}" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" value="{{ Auth::guard('clientes')->user()->dataNasc }}" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Contato:</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" value="{{ Auth::guard('clientes')->user()->celular }}" required>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


</div>


@endsection