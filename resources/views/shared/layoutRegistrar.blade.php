<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eMarket - Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/auth/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/auth/registrar.css') }}" rel="stylesheet">
        <script src="{{ asset('js/auth/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js/auth/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            $(document).ready(function () {
                var $mascCpf = $("#cpf");
                var $mascCel = $("#fone");

                $mascCpf.mask('000.000.000-00', {reverse: true});
                $mascCel.mask('(00)00000-0000');
            });
        </script>
    </head>
    <body>
        @yield('content')
    </body>
</html>