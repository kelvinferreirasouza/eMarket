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
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha" required>
            <input type="text" id="cpf" class="fadeIn second" name="cpf" placeholder="CPF" required>
            <input type="text" id="fone" class="fadeIn second" name="celular" placeholder="Celular" required>
            <p class="fadeIn second" style="margin-bottom: -1%"><b>Data de Nascimento</b></p>
            <input type="date" id="dataNasc" class="fadeIn second" name="dataNasc" placeholder="Data Nascimento" required>

            <p class="fadeIn second" style="margin-bottom: -2%"><b>Sexo</b></p>
            <label><input type="radio" class="option-input radio" name="sexo" value="1" required/>Masculino</label>
            <label><input type="radio" class="option-input radio" name="sexo" value="2"/>Feminino</label>
            <label><input type="radio" class="option-input radio" name="sexo" value="Outro"/>Outro</label>
            <input style="display: none" type="text" name="cargoId" value="4">

            <center><div class="g-recaptcha" data-sitekey="6LfDIVYUAAAAAD5GtthGjPBC_HQehSl1LC0xDEcW" style="margin-top:5%;margin-bottom:3%;"></div></center>

            <input type="submit" class="fadeIn fourth" value="Enviar">
            <input type="reset" class="fadeIn fourth" value="Limpar">
        </form>
    </div>
</div>

@endsection