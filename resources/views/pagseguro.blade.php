<html>
    <head>
        <title>PagSeguro</title>
    </head>
    <body>

        <a href="#" class="btn-buy">Finalizar Compra</a>

        {{ csrf_field() }}

        <div class="preloader" style="display: none"> Carregando...</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
$(function () {
$('.btn-buy').click(function () {
$.ajax({
url: "{{route('pagseguroLightBoxCode')}}",
        method: "POST",
        data: {_token: $('input[name=_token]').val()},
        beforeSend: startPreloader()
}).fail(function(){
    alert("Erro inesperado, tente novamente!")
});
});
return false;
});
});
function lightbox(code) {
var isOpenLightbox = PagSeguroLightbox({
code: code
}, {
success: function (transactionCode) {
alert("Pedido Realizado com Sucesso: " + transactionCode);
},
        abort: function () {
        alert("Compra cancelada!");
        }
});
//verifica se o navegador tem suporte para lightbox se n redireciona para a pagina do pagseguro        
if (!isOpenLightbox) {
location.href = "{{config('pagseguro.url_redirect_after_request')}}" + code;
}
}
        </script>

        <script src="{{config('pagseguro.url_lightbox_sandbox')}}"></script>

    </body>
</html>
