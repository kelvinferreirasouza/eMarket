@extends('shared.layoutStore')

@section('conteudoStore')

<center><h1>Ofertas</h1></center>

<section class="containerFlex flex flex-wrap gridProducts">
    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>

    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>
    <div class="itemFlex">
        <figure class="card card-product effectHover">
            <div class="img-wrap"><img src="{{ asset('https://emarketsoftware.com.br/imgs/produtos/nescau.png') }}"></div>
            <figcaption class="info-wrap">
                <h4 class="title">Achoc. Nescau 2.0 400g</h4>
            </figcaption>

            <div class="bottom-wrap">
                <div class="price-wrap h5">
                    <p><del class="price-old">De: R$12,95</del></p>
                    <span class="price-new">Por: R$10,98</span>
                </div>

                <div class="col-sm-8 input-group seletorQtd">
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
            </div>
            <center><button class="btn btn-sm btn-primary btnCart"><i class="fas fa-cart-plus fa-2x"></i> Adicionar ao Carrinho</button></center>
        </figure>
    </div>
</section>

@endsection