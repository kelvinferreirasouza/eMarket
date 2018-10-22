@extends('shared.layoutStore')

@section('conteudoStore')

<div class="col-sm-12 text-center"><h1>OFERTAS</h1></div>

<section class="containerFlex flex flex-wrap gridProducts">
    @forelse($ofertas as $produto)
    
    <div class='itemFlex'>
        <figure class='card card-product effectHover'>
            <div class='img-wrap'><img src='../imgs/produtos/{{$produto->imagem1}}'></div>
            <figcaption class='info-wrap'>
                <h4 class='title text-center'>{{$produto->produtoNome}}</h4>
            </figcaption>

            <div class='bottom-wrap text-center'>
                <div class='price-wrap h5'>
                    <p><del class='price-old'>De: R$12,95</del></p>
                    <span class='price-new'>Por: R${{$produto->precoVenda}}</span>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route ('addCarrinho', $produto->id)}}" class="btn btn-sm btn-primary btnCart"><i class='fas fa-cart-plus fa-2x'></i> Adicionar ao Carrinho</a></div>
        </figure>
    </div>
    @empty
    <p>Não há produtos em oferta!</p>
    @endforelse
</section>

@endsection