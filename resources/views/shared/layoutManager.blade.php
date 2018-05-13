<!DOCTYPE html>
<html>
    <head>
        <title>eMarket - Manager</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="#">
        <meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <!-- Favicon iconn -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/bootstrap.min.css') }}">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/themify-icons.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" href="{{ asset('css/manager/icofont.css') }}">
        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.0.10/css/all.css') }}" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <!-- flag icon framework css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/flag-icon.min.css') }}">
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/component-menu-search.css') }}">
        <!-- Horizontal-Timeline css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/horizontal-timeline-style.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/style.css') }}">
        <!--color css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/linearicons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/simple-line-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/ionicons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/manager.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('https://fonts.googleapis.com/css?family=Cantarell:400,400italic,700italic,700') }}">
        <script src="{{ asset('js/auth/jquery-1.11.1.min.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    </head>
    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header" >
                    <div class="navbar-wrapper">
                        <div class="navbar-logo" data-navbar-theme="theme4">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>
                            <a href="index.html">
                                <img class="img-fluid" src="../../../imgs/logoEmarket.jpg" alt="eMarket" style="width: 140px;" />
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <div>
                                <ul class="nav-left">
                                    <li>
                                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                    </li>
                                    <li>
                                        <a class="main-search morphsearch-search" href="#">
                                            <!-- themify icon -->
                                            <i class="ti-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" onclick="javascript:toggleFullScreen()">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>

                                </ul>
                                <ul class="nav-right">
                                    <li class="user-profile header-notification">
                                        <a href="#!">
                                            <img src="../../imgs/user.png" alt="User-Profile-Image">
                                            @if (Auth::check())
                                            <span>{{ Auth::user()->nome }}</span>
                                            @endif
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification profile-notification">
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-settings"></i> Configurações
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ti-user"></i> Perfil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}">
                                                    <i class="ti-layout-sidebar-left"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- search -->
                                <div id="morphsearch" class="morphsearch">
                                    <form class="morphsearch-form">
                                        <input class="morphsearch-input" type="search" placeholder="Search..." />
                                        <button class="morphsearch-submit" type="submit">Search</button>
                                    </form>
                                    <div class="morphsearch-content">
                                    </div>
                                    <!-- /morphsearch-content -->
                                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                                </div>
                                <!-- search end -->
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar" >
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class=" ">
                                        <a href="{{ route('manager') }}">
                                            <span class="pcoded-micon"><i class="fas fa-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Inicio</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fab fa-sellsy"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Administrativo</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" >
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Vertical</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-static.html" data-i18n="nav.page_layout.vertical.static-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-header-fixed.html" data-i18n="nav.page_layout.vertical.header-fixed">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Header Fixed</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-compact.html" data-i18n="nav.page_layout.vertical.compact">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Compact</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-sidebar.html" data-i18n="nav.page_layout.vertical.sidebar-fixed">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Sidebar Fixed</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Horizontal</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-horizontal-static.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Fixed layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon.html" target="_blank" data-i18n="nav.page_layout.horizontal.static-with-icon">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static With Icon</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon-fixed.html" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-with-icon">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Fixed With Icon</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-bottom.html" data-i18n="nav.page_layout.bottom-menu">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Bottom Menu</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="box-layout.html" target="_blank" data-i18n="nav.page_layout.box-layout">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Box Layout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-rtl.html" target="_blank" data-i18n="nav.page_layout.rtl">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">RTL</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                            <span class="pcoded-micon"><i class="fas fa-donate"></i></span>
                                            <span class="pcoded-mtext">Financeiro</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="navbar-light.html" data-i18n="nav.navigate.navbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Caixa</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{ route('listarFormasPag') }}" data-i18n="nav.navigate.navbar-inverse">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Formas de Pagamento</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Navbar With Elements</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                            <span class="pcoded-micon"><i class="fas fa-users"></i></span>
                                            <span class="pcoded-mtext">Pessoas</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="navbar-light.html" data-i18n="nav.navigate.navbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Clientes</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Fornecedores</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="{{route('listarUsuarios')}}" data-i18n="nav.navigate.navbar-with-elements">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Usuários</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fas fa-dolly"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Produtos</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{ route('listarProdutos') }}" >
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Produtos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('listarSetores') }}" data-i18n="nav.navigate.navbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Setores</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('listarCategorias') }}" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Categorias</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('listarSubcategorias') }}" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Sub-Categorias</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('listarUnidades') }}" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Unidades</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('listarMarcas') }}" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Marcas</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                            <span class="pcoded-micon"><i class="fas fa-chart-line"></i></span>
                                            <span class="pcoded-mtext">Relatórios</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="navbar-light.html" data-i18n="nav.navigate.navbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Cadastrar Novo Produto</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Listar Produtos</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Navbar With Elements</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element"  >Configurações</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fas fa-server"></i></span>
                                            <span class="pcoded-mtext">Empresa</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.extra-components.main">
                                            <span class="pcoded-micon"><i class="fas fa-sitemap"></i></span>
                                            <span class="pcoded-mtext">Permissões</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="{{route('listarCargos')}}" data-i18n="nav.extra-components.session-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Cargos de Usuário</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="session-idle-timeout.html" data-i18n="nav.extra-components.session-idle-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="offline.html" data-i18n="nav.extra-components.offline">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Offline</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="page-body">
                            <div class="row">
                                <div class="conteudo col-sm-12">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Required Jqurey -->
    <script type="text/javascript" src="{{ asset('js/manager/jquery.min.js') }}"></script>
    <script src="{{ asset('js/manager/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('js/manager/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('js/manager/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/css-scrollbars.js') }}"></script>
    <!-- Calender js -->
    <script type="text/javascript" src="{{ asset('js/manager/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/pignose.calendar.min.js') }}"></script>
    <!-- classie js -->
    <script type="text/javascript" src="{{ asset('js/manager/classie.js') }}"></script>
    <!-- c3 chart js -->
    <script src="{{ asset('js/manager/c3.js') }}"></script>
    <!-- knob js -->
    <script src="{{ asset('js/manager/jquery.knob.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/jquery.sparkline.js') }}"></script>
    <!-- Rickshow Chart js -->
    <script src="{{ asset('js/manager/d3.js') }}"></script>
    <script src="{{ asset('js/manager/rickshaw.js') }}"></script>
    <!-- Morris Chart js -->
    <script src="{{ asset('js/manager/morris.raphael.min.js') }}"></script>
    <script src="{{ asset('js/manager/morris.js') }}"></script>
    <!-- Float Chart js -->
    <script src="{{ asset('js/manager/morris.js') }}"></script>
    <script src="{{ asset('js/manager/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/manager/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('js/manager/jquery.flot.pie.js') }}"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="{{ asset('js/manager/main.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('js/manager/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/jquery-i18next.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('js/manager/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/script.js') }}"></script>
    <!-- pcmenu js -->
    <script src="{{ asset('js/manager/pcoded.min.js') }}"></script>
    <script src="{{ asset('js/manager/demo-12.js') }}"></script>
    <script src="{{ asset('js/manager/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/manager/jquery.mousewheel.min.js') }}"></script>
</html>