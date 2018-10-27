<html>
    <head>
        <title>PagSeguro Transparente Cartão</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <h1>Pagar com cartão</h1>

            {!! Form::open(['id' => 'form']) !!}
            <div class="form-group">
                <label>Número do cartão</label>
                {!! Form::text('cardNumber', null, ['class' => 'form-control', 'Placeholder' => 'Número do cartão', 'required']) !!}
            </div>
            <div class="form-group">
                <label>Mês de expiração</label>
                {!! Form::text('cardExpiryMonth', null, ['class' => 'form-control', 'Placeholder' => 'Mês de expiração', 'required']) !!}
            </div>
            <div class="form-group">
                <label>Ano de Expiração</label>
                {!! Form::text('cardExpiryYear', null, ['class' => 'form-control', 'Placeholder' => 'Ano de Expiração', 'required']) !!}
            </div>
            <div class="form-group">
                <label>Código de Segurança (3 números)</label>
                {!! Form::text('cardCVV', null, ['class' => 'form-control', 'Placeholder' => 'Código de Segurança', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::hidden('cardName', null) !!}
                {!! Form::hidden('cardToken', null) !!}
                <button type="submit" class="btn btn-default btn-buy">Enviar Agora</button>
            </div>
            {!! Form::close() !!}
            <div class="preloader" style="display: none;">Preloader...</div>
            <div class="message" style="display: none;"></div>
        </div>




        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--URL PagSeguro Transparent-->
        <script src="{{config('pagseguro.url_transparent_js')}}"></script>

        <script>
$(function () {
    setSessionId();

    $('#form').submit(function () {
        getBrand();

        startPreloader("Enviando dados...");

        return false;
    });
});

function setSessionId()
{
    var data = $('#form').serialize();

    $.ajax({
        url: "{{route('pagseguro.code.transparente.sandbox')}}",
        method: "POST",
        data: data,
        beforeSend: startPreloader("Carregando a sessão..., aguarde")
    }).done(function (data) {
        PagSeguroDirectPayment.setSessionId(data);
    }).fail(function () {
        alert("Fail request... :-(");
    }).always(function () {
        endPreloader();
    });

function getBrand()
{
    //alert($('input[name=cardNumber]').val().replace(/ /g, ''));
    PagSeguroDirectPayment.getBrand({
        cardBin: $('input[name=cardNumber]').val().replace(/ /g, ''),
        success: function (response) {
            console.log("Success getBrand");
            console.log(response);

            $("input[name=cardName]").val(response.brand.name);
            createCredCardToken();
        },
        error: function (response) {
            console.log("Error getBrand");
            console.log(response);
        },
        complete: function (response) {
            console.log("Success getBrand");
            //console.log(response);
        }
    });
}

function createCredCardToken()
{
    PagSeguroDirectPayment.createCardToken({
        cardNumber: $('input[name=cardNumber]').val().replace(/ /g, ''),
        brand: $('input[name=cardName]').val(),
        cvv: $('input[name=cardCVV]').val(),
        expirationMonth: $('input[name=cardExpiryMonth]').val(),
        expirationYear: $('input[name=cardExpiryYear]').val(),
        success: function (response) {
            console.log("Success createCredCardToken");
            console.log(response);
            $("input[name=cardToken]").val(response.card.token);

            createTransactionCard();
        },
        error: function (response) {
            console.log("Error createCredCardToken");
            console.log(response);
        },
        complete: function (response) {
            console.log("Success createCredCardToken");
            //console.log(response);

            endPreloader();
        }
    });
}

function createTransactionCard()
{
    var sendHash = PagSeguroDirectPayment.getSenderHash();

    var data = $('#form').serialize() + "&senderHash=" + sendHash;

    $.ajax({
        url: "{{route('pagseguro.card.transaction')}}",
        method: "POST",
        data: data,
        beforeSend: startPreloader("Realizando o pagamento com o cartão.")
    }).done(function (data) {
        if (data.success) {
            var urlPedidos = 'http://localhost:8000/meuspedidos/visualizar/' + data.id;
            location.href = urlPedidos;
        }
    }).fail(function () {
        alert("Fail request... :-(");
    }).always(function () {
        endPreloader();
    });
}

function startPreloader(msgPreloader)
{
    if (msgPreloader != "")
        $('.preloader').html(msgPreloader);

    $('.preloader').show();

    $('.btn-buy').addClass('disabled');
}

function endPreloader()
{
    $('.preloader').hide();

    $('.btn-buy').removeClass('disabled');
}
        </script>
    </body>
</html>