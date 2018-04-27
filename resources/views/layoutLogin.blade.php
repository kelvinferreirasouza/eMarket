<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>eMarket - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/manager/login.css') }}" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                
                <div class="fadeIn first">
                    <p><img src="{{ asset('imgs/user-login.png') }}" id="userIcon" alt="User Icon" /></p>
                    <img src="{{ asset('imgs/logo.jpg') }}" id="logo" alt="User Icon" />

                </div>

                <h3>Login</h3>
            <form action="{{route('pessoa.login.efetuar')}}">
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="E-mail">
                    <input type="password" id="password" class="fadeIn third" name="login" placeholder="Senha">
                    <input type="submit" class="fadeIn fourth" value="Acessar" style="margin-top: 2%; margin-bottom: 3%;">
                </form>

                <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu a senha?</a>
                </div>
            </div>
        </div>
    </body>
</html>