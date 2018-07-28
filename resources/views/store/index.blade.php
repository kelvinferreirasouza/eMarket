<!DOCTYPE html>
<html>
    <head>
        <script src="{{ asset('js/store/jquery-3.3.1.js') }}"></script>
        <link href="{{ asset('css/store/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <script src="{{ asset('js/store/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/store/store.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ asset('css/store/store.css') }}" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/ico" href="../imgs/favicon.ico"/>
        <title>eMarket</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    </head>
    <body>

        <div id="navbar" class="navbar">
            <div class="container">
                <div class="ro row1">
                    <ul class="largenav pull-right">
                        <li class="upper-links"><a class="links" href="#"><i class="fas fa-dolly"></i> Meus Pedidos</a></li>
                        <li class="upper-links"><a class="links" href="#"><i class="far fa-address-card"></i> Minha Conta</a></li>
                        <li class="upper-links"><a class="links" href="#"><i class="fas fa-building"></i> Quem Somos</a></li>
                        <li class="upper-links"><a class="links" href="#"><i class="fas fa-comments"></i> Atendimento</a></li>
                        <li class="upper-links"><a class="links" href="#"><i class="fas fa-user-shield"></i> Sac</a></li>
                        <li class="upper-links"><a class="links" href="#"><i class="fas fa-phone"></i> (53) 3255-1492</a></li>
                        <li class="upper-links dropdown"><a class="links" href="#"><i class="far fa-user"></i> Login | Cadastre-se</a>
                            <ul class="dropdown-menu">
                                <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="#">Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="row row2">
                    <div class="col-sm-2">
                        <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Menu</span></h2>
                        <h1 style="margin:0px;"><span class="largenav"><img class="logoNav" src="{{ asset('../imgs/logoContorno2.png') }}"></span></h1>
                    </div>  
                    <div class="navbar-search smallsearch col-sm-8 col-xs-11">
                        <div class="row">
                            <input class="navbar-input col-xs-11" type="text" placeholder="O que você procura?" name="search">
                            <button class="navbar-button col-xs-1">
                                <svg width="15px" height="15px">
                                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="cart largenav col-sm-2">
                        <a class="cart-button">
                            <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                            <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                            </svg> Carrinho
                            <span class="item-number ">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="container" style="background-color: #2874f0; padding-top: 10px;">
                <span class="sidenav-heading">Home</span>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            </div>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </div>

        <div class="subnav navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Sub Navbar -->
                <div class="collapse navbar-collapse" id="bs-slide-dropdown">
                    <ul class="nav navbar-nav mr-auto">

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/menu-icon.svg') }}" class="svg-icon"></i></p>
                                    Todos</center>
                            </a>				
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/mercearia-icon.svg') }}" class="svg-icon-all"> Bazar</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/bebidas-icon.svg') }}" class="svg-icon-all"> Bebidas</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/carnes-icon.svg') }}" class="svg-icon-all"> Carnes</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/congelados-icon.svg') }}" class="svg-icon-all"> Congelados</a></li><hr>                               
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/natural-icon.svg') }}" class="svg-icon-all"> Dietéticos & Naturais</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/mercearia-icon.svg') }}" class="svg-icon-all"> Mercearia</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/friosLaticinios-icon.svg') }}" class="svg-icon-all"> Frios & Laticinios</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/hortifruti-icon.svg') }}" class="svg-icon-all"> Hortifruti</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/padaria-icon.svg') }}" class="svg-icon-all"> Padaria</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/higiene-icon.svg') }}" class="svg-icon-all"> Higiene</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/limpeza-icon.svg') }}" class="svg-icon-all"> Limpeza</a></li><hr>
                                <li><a href="#"><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/petShop-icon.svg') }}" class="svg-icon-all"> Pet Shop</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/mercearia-icon.svg') }}" class="svg-icon"></p>
                                    Mercearia</center>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Arroz & Feijão</a></li><hr>
                                <li><a href="#">Açúcar & Adoçante</a></li><hr>
                                <li><a href="#">Biscoitos & Salgadinhos</a></li><hr>
                                <li><a href="#">Bomboniere</a></li><hr>
                                <li><a href="#">Caldos & Temperos</a></li><hr>
                                <li><a href="#">Conservas & Enlatados</a></li><hr>
                                <li><a href="#">Cereais & Grãos</a></li><hr>
                                <li><a href="#">Doces & Sobremesas</a></li><hr>
                                <li><a href="#">Farinhas & Farofas</a></li><hr>
                                <li><a href="#">Óleos & Azeites</a></li><hr>
                                <li><a href="#">Massas & Molhos</a></li><hr>
                                <li><a href="#">Matinais</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/carnes-icon.svg') }}" class="svg-icon"></i></p>
                                    Carnes</center>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Aves</a></li><hr>
                                <li><a href="#">Bovinos</a></li><hr>
                                <li><a href="#">Frango</a></li><hr>
                                <li><a href="#">Peixes & Frutos do Mar</a></li><hr>
                                <li><a href="#">Suínos</a></li><hr>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/congelados-icon.svg') }}" class="svg-icon"></p>
                                    Congelados</center>
                            </a>				

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Petiscos & Empanados</a></li><hr>
                                <li><a href="#">Hambúrguer</a></li><hr>
                                <li><a href="#">Pizzas</a></li><hr>
                                <li><a href="#">Lasanhas</a></li><hr>
                                <li><a href="#">Legumes</a></li><hr>
                                <li><a href="#">Sorvetes</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/friosLaticinios-icon.svg') }}" class="svg-icon"></p>
                                    Frios & Laticinios</center>
                            </a>				

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Cremes & Requeijão</a></li><hr>   
                                <li><a href="#">Defumados</a></li><hr>  
                                <li><a href="#">Leites & Lácteos</a></li><hr>
                                <li><a href="#">Manteiga & Margarina</a></li><hr>
                                <li><a href="#">Presuntos & Queijos</a></li><hr>
                                <li><a href="#">Iogurtes & Sobremesas</a></li><hr>
                                <li><a href="#">Massas Frescas</a></li>

                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/bebidas-icon.svg') }}" class="svg-icon"></p>
                                    Bebidas</center>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Água Mineral</a></li><hr>
                                <li><a href="#">Aguardente & Cachaça</a></li><hr>
                                <li><a href="#">Cervejas</a></li><hr>
                                <li><a href="#">Chá</a></li><hr>
                                <li><a href="#">Champagne & Espumante</a></li><hr>
                                <li><a href="#">Energéticos</a></li><hr>
                                <li><a href="#">Refrigerante</a></li><hr>
                                <li><a href="#">Vinhos</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/hortifruti-icon.svg') }}" class="svg-icon"></p>
                                    Hortifruti</center>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Frutas</a></li><hr>
                                <li><a href="#">Legumes</a></li><hr>
                                <li><a href="#">Verduras</a></li><hr>
                                <li><a href="#">Ovos</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/padaria-icon.svg') }}" class="svg-icon"></p>
                                    Padaria</center>
                            </a>				
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Pães</a></li><hr>
                                <li><a href="#">Bolos & Tortas</a></li><hr>
                                <li><a href="#">Doces</a></li><hr>
                                <li><a href="#">Folhados</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/higiene-icon.svg') }}" class="svg-icon"></p>
                                    Higiene</center>
                            </a>				
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Higiene Bucal</a></li><hr>
                                <li><a href="#">Higiene Pessoal</a></li><hr>
                                <li><a href="#">Higiene Íntima</a></li>
                            </ul>                
                        </li>

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/limpeza-icon.svg') }}" class="svg-icon"></p>
                                    Limpeza</center>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Casa</a></li><hr>
                                <li><a href="#">Roupas</a></li><hr>
                                <li><a href="#">Cozinha</a></li><hr>
                                <li><a href="#">Banheiro</a></li>
                            </ul>                
                        </li>       

                        <li class="dropdown nav-item">
                            <a class="nav-link" href="#">
                                <center><p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/petShop-icon.svg') }}" class="svg-icon"></p>
                                    Pet Shop</center>
                            </a>				
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Aves</a></li><hr>
                                <li><a href="#">Cães</a></li><hr>
                                <li><a href="#">Gatos</a></li>
                            </ul>                
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="carousel fade-carousel slide propaganda" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
                <li data-target="#bs-carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Açougue</h1>        
                            <h3>Get start your next awesome project</h3>
                        </hgroup>       
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Padaria</h1>        
                            <h3>Get start your next awesome project</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-4"></div>
                </div>
            </div> 
        </div>

        <hr>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <h6 class="heading7">Sobre</h6>
                    <p align="justify">O eMarket está sendo desenvolvido por Kelvin Ferreira Souza como projeto de TCC para a Faculdade de Tecnologia Senac Pelotas.
                        Tem como objetivo desenvolver um e-commerce completo totalmente gerenciavel para oferecer aos seus clientes mais um canal de vendas.</p>
                    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-pin"></i>
                        <span itemprop="streetAddress">Av. Jose Bonifácio, 57 - Pedro Osório / RS - Brasil</span>
                    <p><i class="fa fa-phone"></i> Telefone:
                        <span itemprop="telephone"><a href="tel:(53) 99167-3413" class="fields"
                                                      title="Contact Madgeek Pvt Ltd"> (53) 99167-3413</a></span></p>
                    <p><i class="fa fa-envelope"></i> E-mail :
                        <span itemprop="email"><a href="mailto:kelvin@ferreirasouza.com" class="fields"
                                                  title="Kelvin Ferreira Souza">kelvin@ferreirasouza.com</a></span></p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Links Úteis</h6>
                    <ul class="footer-ul">
                        <li><a href="#" title="Sobre Nos"> <i class="fa fm fa-angle-double-right"></i> Sobre Nós</a>
                        </li>
                        <li><a href="#" title="Politica de Privacidade"> <i class="fa fm fa-angle-double-right"></i> Privacidade</a></li>
                        <li><a href="#" title="Termos & Condições"> <i class="fa fm fa-angle-double-right"></i>
                                T & Condições</a></li>
                        <li><a href="#" title="Contato"> <i
                                    class="fa fm fa-angle-double-right"></i> Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Facebook</h6>
                    <div class="fb-page" data-href="https://www.facebook.com/mercadobomchurrasco/" data-tabs="timeline"
                         data-small-header="true" data-width="270px" data-hide-cover="true"
                         data-height="260px"
                         data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/mercadobomchurrasco//" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/mercadobomchurrasco/">Bom Churrasco</a></blockquote>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Redes Sociais</h6>
                    <ul class="footer-ul">
                        <li>
                            <div class="fb-like" data-href="https://www.facebook.com/mercadobomchurrasco/" data-layout="standard"
                                 data-width="250px"
                                 data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
                        </li>
                        <li>
                            <a href="https://twitter.com/kelvinferreiraa" class="twitter-follow-button"
                               data-show-count="false">Follow @eMarket</a>
                            <script defer async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li>
                            <div class="g-follow" data-href="https://plus.google.com/107750645446351770147"
                                 data-rel="relationshipType"></div>
                            <script src="https://apis.google.com/js/platform.js" async defer></script>
                        </li>
                        <li>
                            <script defer src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                            <script defer type="IN/FollowCompany" data-id="7599317" data-counter="right" async></script>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <p>© 2018 - Todos os Direitos Reservados. <a href="//madgeek.in">Kelvin Ferreira Souza MEI</a> | CNPJ : 23.045.909/0001-10</p>
            </div>
        </div>
    </div>

    <script>
        window.onscroll = function () {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        });
    </script>

    <script>
        $(document).ready(function () {

            var quantitiy = 0;
            $('.addQtd').click(function (e) {

                e.preventDefault();

                var quantity = parseInt($('#quantity').val());

                $('#quantity').val(quantity + 1);

            });

            $('.quantity-left-minus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 1) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
    <script src="{{ asset('js/store/face.js') }}" type="text/javascript"></script>
</body>

</html>




























