@extends('shared.layoutRegistrar')

@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="{{ asset('imgs/logo.jpg') }}" id="logo" alt="User Icon" />
        </div>
        <h3>Registre-se</h3>
        <form method="post" action="{{route ('salvar')}}">
            {{ csrf_field() }}
            <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome Completo" required>
            <input type="email" id="email" class="fadeIn second" name="email" placeholder="E-Mail" required >
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login" required>
            <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha" required>
            <input type="text" id="cpf" class="fadeIn second" name="cpf" placeholder="CPF" required>
            <input type="text" id="fone" class="fadeIn second" name="fone" placeholder="Celular" required>
            <p class="fadeIn second" style="margin-bottom: -1%"><b>Data de Nascimento</b></p>
            <input type="date" id="dataNasc" class="fadeIn second" name="dataNasc" placeholder="Data Nascimento" required>

                <p class="fadeIn second" style="margin-bottom: -2%"><b>Sexo</b></p>
                <label><input type="radio" class="option-input radio" name="sexo" value="Masculino" required/>Masculino</label>
                <label><input type="radio" class="option-input radio" name="sexo" value="Feminino"/>Feminino</label>
                <label><input type="radio" class="option-input radio" name="sexo" value="Outro"/>Outro</label>

            <input type="submit" class="fadeIn fourth" value="Enviar">
            <input type="reset" class="fadeIn fourth" value="Limpar">
        </form>
    </div>
</div>

@endsection