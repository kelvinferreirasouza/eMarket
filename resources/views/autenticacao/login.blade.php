@extends('shared.layoutLogin')
 
@section('content')
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <p><img src="{{ asset('imgs/user-login.png') }}" id="userIcon" alt="User Icon" /></p>
            <img src="{{ asset('imgs/logo.jpg') }}" id="logo" alt="User Icon" />
        </div>

        <h3>Login</h3>
        <form method="post" action="{{route ('logar')}}">
            {{ csrf_field() }}
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
            <input type="submit" class="fadeIn fourth" value="Acessar" style="margin-top: 2%; margin-bottom: 3%;">
        </form>

        <div id="formFooter">
            <a class="underlineHover" style="margin-right: 5%;" href="#">Esqueceu a senha?</a>
            <a class="underlineHover" href="{{route ('registrar')}}">Cadastre-se</a>
        </div>
    </div>
</div>
@endsection