@extends('shared.layoutStore')

@section('conteudoStore')

<div class="carrinhoPedido">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">CARRINHO DE COMPRAS</h1>
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
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Achocolato em Pó Nescau 400g</td>
                                <td>Em estoque</td>
                                <td>
                                    <div class="col-sm-6 input-group seletorQtdCart ">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-primary btn-number"  data-type="minus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity1" name="quantity1" class="form-control input-number" style="text-align: center" value="1" min="0" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="addQtd btn btn-primary btn-number" data-type="plus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="text-center">R$ 70,00</td>
                                <td class="text-right"> R$ 70,00</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> </button> </td>    
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Toto</td>
                                <td>Em estoque</td>
                                <td>
                                    <div class="col-sm-8 input-group seletorQtdCart ">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-primary btn-number"  data-type="minus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity1" name="quantity1" class="form-control input-number" style="text-align: center" value="1" min="0" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="addQtd btn btn-primary btn-number" data-type="plus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="text-center">R$ 70,00</td>
                                <td class="text-right">R$ 70,00</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Titi</td>
                                <td>Em estoque</td>
                                <td>
                                    <div class="col-sm-8 input-group seletorQtdCart ">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-primary btn-number"  data-type="minus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity1" name="quantity1" class="form-control input-number" style="text-align: center" value="1" min="0" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="addQtd btn btn-primary btn-number" data-type="plus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class="text-center">R$ 70,00</td>
                                <td class="text-right">R$ 70,00</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> </button> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="subTotal text-right">Sub-Total:</td>
                                <td class="subTotalValor text-right ">R$ 12,00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 0;">
                                    <div class="row form-group calcFrete">
                                        <div class="input-group">
                                            <span class="input-group-addon danger"><i class="fas fa-map-marker-alt"></i></span>
                                            <input type="text" class="form-control" placeholder="Digite seu CEP">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-success btnCalcFrete">Calcular</button></td>
                                <td></td>
                                <td></td>
                                <td class="frete text-right">Frete:</td>
                                <td class="freteValor text-right ">R$ 8,00</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="totalPedido text-right">Total:</td>
                                <td class="totalPedidoValor text-right ">R$ 20,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-info">Continuar Comprando <i class="fas fa-undo"></i></button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-block btn-success text-uppercase">Finalizar Pedido <i class="fas fa-check"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection