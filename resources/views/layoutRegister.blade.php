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
    <form action="{{route('efetuarCadastro')}}" method="post">

        {{ csrf_field() }}

            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <div class="fadeIn first">
                        <img src="{{ asset('imgs/logo.jpg') }}" id="logo" alt="User Icon" />
                    </div>
                    <h3>Registre-se</h3>
                        <input type="text" id="nome" class="fadeIn second" name="nomeRazaoSocial" placeholder="Nome">
                        <input type="text" id="cpf" class="fadeIn second" name="cpfCnpj" placeholder="CPF"  >
                        <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail">
                        <input type="password" id="password" class="fadeIn third password" name="password" placeholder="Senha">
                        <input type="text" id="telefone" class="fadeIn second" name="fone" placeholder="Telefone">
                        <input type="date" id="dataNasc" class="fadeIn second" name="dataNasc" placeholder="Data Nascimento">
                        <p class="fadeIn second" style="margin-left: -350px; margin-bottom: -10px">Sexo</p>
                        
                        <input type="submit" class="fadeIn fourth" value="Enviar">
                        <input type="submit" class="fadeIn fourth" value="Limpar">
                </div>
            </div>
        </form>
    </body>
</html>