<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>eMarket - Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/manager/register.css') }}" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="{{route('cadastro.usuarios.store')}}" method="post">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="{{ asset('imgs/logo.jpg') }}" id="logo" alt="User Icon" />
                </div>

                <h3>Cadastro</h3>
                <form>
                    <input type="text" id="nome" class="fadeIn second" name="login" placeholder="Nome">
                    <input type="text" id="cpf" class="fadeIn second" name="login" placeholder="CPF"  >
                    <input type="text" id="email" class="fadeIn second" name="login" placeholder="E-mail">
                    <input type="password" id="password" class="fadeIn third password" name="login" placeholder="Senha">
                    <input type="text" id="sexo" class="fadeIn second" name="login" placeholder="Sexo">
                    <select>
                        <option value="volvo">Volvo</option>
                      </select>
                    <input type="text" id="telefone" class="fadeIn second" name="login" placeholder="Telefone">
                    <div>
                        <div class="col-sm-6">
                    <input type="submit" class="fadeIn fourth" value="Enviar" style="margin-top: 2%; margin-bottom: 3%;">
                </div>
                <div class="col-sm-6">
                    <input type="submit" class="fadeIn fourth" value="Enviar" style="margin-top: 2%; margin-bottom: 3%;">
                    </div>
                </div>
            </div>
        </div>
</form>
    </body>
</html>