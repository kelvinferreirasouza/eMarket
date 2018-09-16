<html>
    <head>
        <title>PagSeguro Transparente</title>
    </head>
    <body>
        {!! Form::open(['id' => 'form']) !!}
        {!! Form::close() !!}
        <a href="" class="btn-finished">Finalizar Compra!</a>
        
        <script src="{{config('pagseguro.url_transparente_js_sandbox')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(function(){
               $('.btn-finished').click(function(){
                   setSessionId();
                   
                  return false; 
               });
            });
            
            function setSessionId(){
                var data = $('#form').serialize();  
                
                $.ajax({
                   url: "{{route('pagseguroTransparenteCode')}}",
                   method: "POST",
                   data: data
                }).done(function(){
                    PagSeguroDirectPayment.setSessionId(data);
                }).fail(function(){
                    alert("Request Falhou");
                });
            }
        </script>
    </body>
</html>
