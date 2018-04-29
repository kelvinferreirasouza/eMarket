@extends('shared.layoutManager')

@section('content')
<div class="panel panel-default">

    <div class="panel-heading"><h3>Atualizar usuario</h3></div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{route ('atualizar', $usuario->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="{{$usuario->nome}}">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="{{$usuario->email}}">
                </div>
            </div>
            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="login" placeholder="Digite seu nome" value="{{$usuario->login}}">
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua nova senha ou deixe em branco para manter a antiga">
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="col-sm-2 control-label">CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="cpf" placeholder="Digite seu cpf" value="{{$usuario->cpf}}">
                </div>
            </div>


            @if( $usuario->tipoUsuario == 'Administrador')
                <div class="form-group">
                    <label for="tipoUsuario" class="col-sm-2 control-label">Tipo de Usuário</label>
                        <div class="col-sm-10">                    
                            <select class="form-control" name="tipoUsuario" value="{{$usuario->tipoUsuario}}">
                                <option {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                <option {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                <option {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                            </select>
                        </div>
                </div>
            @else
                <div class="form-group">
                    <label for="tipoUsuario" class="col-sm-2 control-label">Tipo de Usuário</label>
                        <div class="col-sm-10">                    
                            <select disabled class="form-control" name="" value="{{$usuario->tipoUsuario}}">
                                <option disabled {{($usuario->tipoUsuario == 'Administrador' ? 'selected' : '')}}>Administrador</option>
                                <option disabled {{($usuario->tipoUsuario == 'Gerente' ? 'selected' : '')}}>Gerente</option>
                                <option disabled {{($usuario->tipoUsuario == 'Cliente' ? 'selected' : '')}}>Cliente</option>
                            </select>
                        </div>
                </div>
            @endif

            <div class="form-group">
                <label for="fone" class="col-sm-2 control-label">Fone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fone" placeholder="Digite seu celular" value="{{$usuario->fone}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="reset" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection