@extends('shared.layoutStore')

@section('conteudoStore')

<div id="preloader-payment"></div>
<div class="container text-center">
    <div class="row">
        <h1 class="titlePag">Escolha a Forma de Pagamento: </h1>

        <a href="#" id="btnBillet"><img class="icon-payment-billet" src="../../imgs/boleto-icon.png" alt="Boleto Bancário"></a>
        <a href="#" id="btnCard"><img class="icon-payment-card" src="../../imgs/credit-card-icon.png" alt="Cartão de Crédito"></a>

        {!! Form::open(['id' => 'form']) !!}
        {!! Form::close() !!}
        <div class="preloader" style="display: none;">
            <a href="#" id="payment-billet"><img class="icon-payment" src="../../imgs/carregando.gif" alt="Carregando!"></a>
        </div>

        <div class="pagCard" id="pagCard" style="display: none">
            <div class="payment-title">
                <h1 class="infoCard">Informações do Cartão:</h1>
            </div>
            <div class="container-card preload col-sm-6">
                <div class="creditcard">
                    <div class="front">
                        <div id="ccsingle"></div>
                        <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                            <g id="Front">
                                <g id="CardBackground">
                                    <g id="Page-1_1_">
                                        <g id="amex_1_">
                                            <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                  C0,17.9,17.9,0,40,0z" />
                                        </g>
                                    </g>
                                    <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                </g>
                                <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">STEVE JOBS</text>
                                <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">nome</text>
                                <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiração</text>
                                <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">número cartão</text>
                                <g>
                                    <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                    <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                    <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                    <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                </g>
                                <g id="cchip">
                                    <g>
                                        <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                              c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                        </g>
                                        <g>
                                            <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                        </g>
                                        <g>
                                            <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                                  c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                                  C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                                  c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                                  c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                        </g>
                                        <g>
                                            <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                        </g>
                                        <g>
                                            <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                        </g>
                                        <g>
                                            <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                        </g>
                                        <g>
                                            <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="Back">
                            </g>
                        </svg>
                    </div>
                    <div class="back">
                        <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                            <g id="Front">
                                <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                            </g>
                            <g id="Back">
                                <g id="Page-1_2_">
                                    <g id="amex_2_">
                                        <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                              C0,17.9,17.9,0,40,0z" />
                                    </g>
                                </g>
                                <rect y="61.6" class="st2" width="750" height="78" />
                                <g>
                                    <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                          C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                    <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                    <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                    <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                </g>
                                <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                <g class="st8">
                                    <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">código segurança</text>
                                </g>
                                <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">STEVE JOBS</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            {!! Form::open(['id' => 'formCard']) !!}
            <div class="form-container col-sm-6" style="display: none">
                <div class="field-container">
                    <label for="name">Nome:</label>
                    {!! Form::text('', null, ['id' => 'name', 'maxlength' => '20', 'style' => 'text-transform:uppercase', 'required']) !!}
                </div>
                <div class="field-container">
                    <label for="cardnumber">Número do Cartão:</label><span id="generatecard" style="display: none">generate random</span>
                    {!! Form::text('cardNumber', null, ['id' => 'cardnumber', 'required', 'inputmode' => 'numeric']) !!}
                    <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                    </svg>
                </div>
                <div class="field-container">
                    <label for="expirationdate">Expiração (mm/aa):</label>
                    {!! Form::text('cardExpiry', null, ['id' => 'expirationdate', 'inputmode' => 'numeric', 'required']) !!}
                </div>
                <div class="field-container">
                    <label for="securitycode">Cod. Segurança:</label>
                    {!! Form::text('cardCVV', null, ['id' => 'securitycode', 'inputmode' => 'numeric', 'pattern' => '[0-9]*', 'maxlength' => '3','required']) !!}
                </div>
                <div class="field-container">
                    {!! Form::hidden('cardName', null) !!}
                    {!! Form::hidden('cardToken') !!}
                </div>    
            </div>
            <button type="submit" class="btn btn-default btn-buy btnPagarCard">Realizar Pagamento <i class="fas fa-check"></i></button>
            {!! Form::close() !!}
        </div>
        <img src="{{ asset('imgs/formas-pagamento.png')}}" class="img-formas-pag">
    </div>
</div>


@endsection

@push('scripts')
<!--URL PagSeguro Transparent-->
<script src="{{config('pagseguro.url_transparent_js')}}"></script>
<script src="{{ asset('js/store/pedidos/form-cartao.js')}}"></script>

<script>
$(document).ready(function () {
    $('#preloader-payment').delay(2000).fadeOut('slow');
});

$(function () {
    $("#btnBillet").click(function () {
        $(".pagCard").fadeOut(3000).hide();
        $(".form-container").fadeOut(3000).hide();
        $(".icon-payment-billet").css("background-color", "#0095e5");
        setSessionId();
        $(".preloader").show();
        return false;
    });

    $("#btnCard").click(function () {
        $(".icon-payment-card").css("background-color", "#0095e5");
        $(".pagCard").fadeIn(3000).show();
        $(".form-container").fadeIn(3000).show();
        setSessionIdCard();
        $(".preloader").show();
        return false;
    });

    $('#formCard').submit(function () {
        getBrand();
        return false;
    });
});

function setSessionId()
{
    var data = $('form#form').serialize();

    $.ajax({
        url: "{{route('pagseguro.code.transparent')}}",
        method: "POST",
        data: data
    }).done(function (data) {
        PagSeguroDirectPayment.setSessionId(data);
        paymentBillet();
    }).fail(function () {
        $(".preloader").hide();
        alert("Fail request... :-(");
    }).always(function () {
        $(".preloader").hide();
    });
}

function setSessionIdCard()
{
    var data = $('#form').serialize();

    $.ajax({
        url: "{{route('pagseguro.code.transparente.sandbox')}}",
        method: "POST",
        data: data
    }).done(function (data) {
        PagSeguroDirectPayment.setSessionId(data);
        $(".preloader").hide();
    }).fail(function () {
        alert("Fail request... :-(");
        $(".preloader").hide();
    }).always(function () {
        $(".preloader").hide();
    });
}

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

function paymentBillet()
{
    var sendHash = PagSeguroDirectPayment.getSenderHash();

    var data = $('#form').serialize() + "&sendHash=" + sendHash;

    $.ajax({
        url: "{{route('pagseguro.billet')}}",
        method: "POST",
        data: data
    }).done(function (data) {
        if (data.success) {
            var urlBoleto = data.payment_link;
            var urlPedidos = 'http://emarketsoftware.herokuapp.com/meuspedidos/visualizar/' + data.id;
            window.open(urlBoleto, '_blank');
            location.href = urlPedidos;
        } else {
            alert("Falha!");
        }

    }).fail(function () {
        alert("Falha na Requisição..");
    }).always(function () {
        $(".preloader").hide();
    });
}

function createCredCardToken()
{
    var monthYearExpiration = $('input[name=cardExpiry]').val();
    var split = monthYearExpiration.split("/");
    var monthExpiration = split[0];
    var yearExpiration = '20' + split[1];

    PagSeguroDirectPayment.createCardToken({
        cardNumber: $('input[name=cardNumber]').val().replace(/ /g, ''),
        brand: $('input[name=cardName]').val(),
        cvv: $('input[name=cardCVV]').val(),
        expirationMonth: monthExpiration,
        expirationYear: yearExpiration,
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
        }
    });
}

function createTransactionCard()
{
    var sendHash = PagSeguroDirectPayment.getSenderHash();

    var data = $('#formCard').serialize() + "&senderHash=" + sendHash;

    $.ajax({
        url: "{{route('pagseguro.card.transaction')}}",
        method: "POST",
        data: data,
        beforeSend: startLoader()
    }).done(function (data) {
        if (data.success) {
            var urlPedidos = 'http://emarketsoftware.herokuapp.com/meuspedidos/visualizar/' + data.id;
            location.href = urlPedidos;
        }
    }).fail(function () {
        alert("Fail request... :-(");
    }).always(function () {

    });
}

function startPreloader(msgPreloader)
{
    if (msgPreloader != "")
        $('.preloader').html(msgPreloader);

    $('.preloader').show();

    $('.btn-buy').addClass('disabled');
}

function startLoader()
{
    $('#preloader-payment').show();
}

function endPreloader()
{
    $('.preloader').hide();

    $('.btn-buy').removeClass('disabled');
}
</script>
<link rel="stylesheet" href="{{ asset('css/store/metodoPag.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    @endpush