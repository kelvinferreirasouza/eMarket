@extends('shared.layoutStore')

@section('conteudoStore')

<div class="container">
    <div class="row">
        <h1>Escolha a forma de pagamento: </h1>

        <a href="#" id="payment-billet"><img class="icon-payment" src="../../imgs/SVG/boleto-icon.png" alt="Boleto Bancário"></a>
        {!! Form::open(['id' => 'form']) !!}
        {!! Form::close() !!}
        <div class="preloader" style="display: none">
            <a href="#" id="payment-billet"><img class="icon-payment" src="../../imgs/carregando.gif" alt="Boleto Bancário"></a>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!--URL PagSeguro Transparent-->
<script src="{{config('pagseguro.url_transparent_js')}}"></script>

<script>
    $(function(){
        $("#payment-billet").click(function(){
            setSessionId();
            $(".preloader").show();
            
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
        }).done(function(data){
            console.log(data);
            PagSeguroDirectPayment.setSessionId(data);
            paymentBillet();
        }).fail(function(){
            $(".preloader").hide();
            alert("Fail request... :-(");
        }).always(function(){
            
        });
    }
    
    function paymentBillet()
    {
        var sendHash = PagSeguroDirectPayment.getSenderHash();

        var data = $('#form').serialize()+"&sendHash="+sendHash;

        $.ajax({
            url: "{{route('pagseguro.billet')}}",
            method: "POST",
            data: data
        }).done(function(data){
            console.log(data);
            
            if(data.success){
                var urlBoleto  = data.payment_link;
                var urlPedidos = 'http://localhost:8000/meuspedidos';
                window.open(urlBoleto, '_blank');
                location.href=urlPedidos;
            } else {
                alert("Falha!");
            }
            
        }).fail(function(){
            alert("Fail request... :-(");
        }).always(function(){
            $(".preloader").hide();
        });
    }
</script>
@endpush