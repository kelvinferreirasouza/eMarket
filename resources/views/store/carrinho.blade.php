@extends('shared.layoutStore')

@section('conteudoStore')

<div class="carrinhoPedido">
    <section class="jumbotron text-center">
        <div class="container">
            <div class="col-sm-3">
                <img src="../imgs/shopping-cart.png" class="imgCart">
            </div>
            <div class="col-sm-9">
                <h1 class="jumbotron-heading">CARRINHO DE COMPRAS</h1>
            </div>

        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th class="titleListCart" scope="col">Produto</th>
                                <th scope="col">Disponibilidade</th>
                                <th scope="col" class="text-center">Quantidade</th>
                                <th scope="col" class="text-center">Preço Unitário</th>
                                <th scope="col" class="text-right">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($produtos as $produto)
                            <tr>
                                <td><img src="../imgs/produtos/{{$produto['item']->imagem1}}" height="80px" width="80px" /> </td>
                                <td>{{$produto['item']->produtoNome}}</td>
                                <td>Em estoque</td>
                                <td>
                                    <div class="col-sm-6 input-group seletorQtdCart ">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-primary btn-number" data-type="minus" data-field="" onclick="window.location.href ='{{route ('remove', $produto['item']->id)}}'">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity1" name="quantity1" class="form-control input-number" style="text-align: center" value="{{$produto['qtd']}}" min="0" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="addQtd btn btn-primary btn-number" data-type="plus" data-field="" onclick="window.location.href ='{{route ('addCarrinho', $produto['item']->id)}}'" >
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="text-center">R$ {{str_replace(".", ",", number_format((float)$produto['item']->precoVenda, 2, '.', ''))}}</td>
                                <td class="text-right"> R$ {{str_replace(".", ",", number_format((float)$produto['item']->precoVenda * $produto['qtd'], 2, '.', ''))}}</td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-sm btn-danger" data-type="delete" data-field="" onclick="window.location.href ='{{route ('delete', $produto['item']->id)}}'" >
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>   
                            </tr>
                            @empty
                        <td colspan="20">Carrinho Vazio</td>
                        @endforelse
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="subTotal text-right">Sub-Total:</td>
                            <td class="subTotalValor text-right ">R$ {{str_replace(".", ",", number_format((float)$total, 2, '.', ''))}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 0;">
                                
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="frete text-right">Frete:</td>
                                <?php $valor_frete = 0.00 ?>
                                @foreach($fretes as $frete)
                                    @if($frete->estado == Auth::guard('clientes')->user()->estado)
                                        @if($frete->municipio == Auth::guard('clientes')->user()->municipio)
                                            <?php $valor_frete = $frete->valor ?>
                                                <input type="text" class="form-control" value="{{$valor_frete}}" style="display:none">
                                        @endif
                                    @endif  
                                @endforeach
                                @if($valor_frete == 0)
                                <td class="freteValor text-right">INDISPONÍVEL</td>
                                <script> $("#finalizarPedido").attr('disabled', 'disabled');</script>
                                @else
                                    <td class="freteValor text-right">R$ {{str_replace(".", ",", number_format((float)$valor_frete, 2, '.', ''))}}</td>
                                @endif
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="totalPedido text-right">Total:</td>
                            <td class="totalPedidoValor text-right ">R$ {{str_replace(".", ",", number_format((float)$total + $valor_frete, 2, '.', ''))}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{route('redirectBack')}}" class="btn btn-block btn-info">Continuar Comprando <i class="fas fa-undo"></i></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="{{route('metodoPagamento')}}" id="finalizarPedido" class="btn btn-block btn-success text-uppercase">Finalizar Pedido <i class="fas fa-check"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function disabledFinalizarPedido(){
        $("#finalizarPedido").attr('disabled', 'disabled');
    }
 </script>

@endsection