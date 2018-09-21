<!DOCTYPE html>
<html>
    <head>
        <script src="{{ asset('js/store/jquery-3.3.1.js') }}"></script>
        <link href="{{ asset('css/store/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <script src="{{ asset('js/store/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/store/store.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ asset('css/store/store.css') }}" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
        <link rel="shortcut icon" type="image/ico" href="../../imgs/favicon.ico"/>
        <title>eMarket</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <li class="upper-links dropdown"><a class="links" href="{{ route('loginCliente') }}"><i class="far fa-user"></i>
                                @if(auth()->guard('clientes')->check())
                                {{ Auth::guard('clientes')->user()->nome }}
                            </a>
                            <ul class="dropdown-menu">
                                <li class="profile-li"><a class="profile-links" href="{{route('logoutCliente')}}">Logout</a></li>
                            </ul>
                            @else
                            Login | Registre-se
                            </a>
                            @endif

                        </li>
                    </ul>
                </div>
                <div class="row row2">
                    <div class="col-sm-2">
                        <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Menu</span></h2>
                        <h1 style="margin:0px;"><span class="largenav"><a href="{{ route('index') }}"><img class="logoNav" src="{{ asset('../imgs/logoContorno2.png') }}"></a></span></h1>
                    </div>  
                    <div class="navbar-search smallsearch col-sm-8 col-xs-11">
                        <div class="row">

                            {!! Form::open(['route' => 'buscaProduto', 'class' => 'form form-inline']) !!}
                            {!! Form::text('key_search', null, ['class' => 'navbar-input col-xs-11', 'placeholder' => 'O que você procura?']) !!}

                            <button class="navbar-button col-xs-1">
                                <svg width="15px" height="15px">
                                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                                </svg>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="cart largenav col-sm-2">
                        <a href="{{ route('carrinho') }}" class="cart-button">
                            <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                            <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                            </svg> Carrinho
                            <span class="item-number">
                                @if(Session::has('carrinho'))
                                {{Session::get('carrinho')->totalItems()}}
                                @else
                                0
                                @endif
                            </span>
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
                            <a class="nav-link text-center" href="#">
                                <p><img src="{{ asset('https://emarketsoftware.com.br/imgs/icons/menu-icon.svg') }}" class="svg-icon"></i></p>
                                Todos
                            </a>				
                            <ul class="dropdown-menu" role="menu">
                                @foreach($setores as $setor)
                                @if($setor->imagem != "")
                                <li><a href="#"><img src="../../imgs/setores/{{$setor->imagem}}" class="svg-icon-all"> {{$setor->nome}}</a></li><hr>
                                @else
                                <li><a href=""><img src="../../imgs/setores/sem_foto.jpg" class="svg-icon-all"> {{$setor->nome}}</a></li><hr>
                                @endif
                                @endforeach
                            </ul>                  
                        </li>

                        @foreach($setores as $setor)
                        @if ($setor->isDestaque == 1 && $setor->imagem != "")
                        <li class="dropdown nav-item">
                            <a class="nav-link text-center" href="#">
                                <p><img src="../../imgs/setores/{{$setor->imagem}}" class="svg-icon"></p> {{$setor->nome}}
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($categorias as $categoria)
                                @if($categoria->produtoSetorId == $setor->id)
                                <li><a href="{{ route('index', ['setor' => $setor->nome, 'categoria' => $categoria->nome]) }}">{{$categoria->nome}}</a></li>
                                <hr>
                                @endif
                                @endforeach
                            </ul>                
                        </li>
                        @elseif ($setor->imagem == "")

                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="carousel fade-carousel slide propaganda" data-ride="carousel" data-interval="4000" id="bs-carousel" style="
             {{ (\Request::route()->getName() == 'carrinho' ||
                  Request::route()->getName() == 'loginCliente' ||
                  Request::route()->getName() == 'registerUser' ||
                  Request::route()->getName() == 'perfil' ||
                  Request::route()->getName() == 'buscaProduto') ? 'display:none' : '' }}">
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
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                </div>
            </div> 
        </div>

        <hr>

        <div class="conteudo">
            @yield('conteudoStore')
        </div>

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