@extends('shared.layoutManager')

@section('content')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Usuarios</div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>  
                        <th>Fone</th>
                        <th>Login</th>
                        <th>Ações</th>
                    </tr>
                </thead>            
                <tbody>            
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->nome}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->cpf}}</td>
                        <td>{{$usuario->fone}}</td>
                        <td>{{$usuario->login}}</td>
                        <center><td>
                            <a href="{{route('editar', $usuario->id)}}"><i class="fas fa-pencil-alt" style="margin-right:10%"></i></a>
                            <a href="{{route('editar', $usuario->id)}}"><i class="fas fa-eye" style="margin-right:10%"></i></a>  
                            <a href="{{route('editar', $usuario->id)}}"><i class="far fa-trash-alt"></i></a></td></center>
                    </tr>                         
                    @endforeach                                
                </tbody>
            </table> 
        </div> 
    </div>
</div>
@endsection