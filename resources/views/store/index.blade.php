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
        <div id="navbar" class="navbar fixed-top">
            <div class="container">
                <div class="row row1">
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
                        <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                        <h1 style="margin:0px;"><span class="largenav"><img class="logoNav" src="{{ asset('../imgs/logoContorno2.png') }}"></span></h1>
                    </div>  
                    <div class="navbar-search smallsearch col-sm-8 col-xs-11">
                        <div class="row">
                            <input class="navbar-input col-xs-11" type="text" placeholder="Pesquisar Produtos..." name="search">
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

        <div class="carousel fade-carousel slide propaganda" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>Hortifruti</h1>        
                            <h3>Trabalhamos apenas com legumes e frutas fresquinhas!</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                    </div>
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
            </div> 
        </div>
    </body>
</html>




























