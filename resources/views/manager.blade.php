@extends('shared.layoutManager')

@section('content')

<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>
<!-- Pre-loader end -->
<!-- Menu header start -->
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
                        <img class="img-fluid" src="http://oi65.tinypic.com/1043pra.jpg" alt="eMarket" style="width: 140px;" />
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
                                    <img src="imgs/user.png" alt="User-Profile-Image">
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
                                        <a href="{{route('logout')}}">
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
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                        <h3>Sara Soueidan</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                        <h3>Shaun Dona</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="imgs/avatar-1.png" alt="PagePreloadingEffect" />
                                        <h3>Page Preloading Effect</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="imgs/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                        <h3>Draggable Dual-View Slideshow</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="imgs/avatar-1.png" alt="TooltipStylesInspiration" />
                                        <h3>Tooltip Styles Inspiration</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="imgs/avatar-1.png" alt="NotificationStyles" />
                                        <h3>Notification Styles Inspiration</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="card-block">
                            <div class="right-icon-control">
                                <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                <div class="form-icon">
                                    <i class="icofont icofont-search"></i>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u1.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-2.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-3.png" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Michael Scofield</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-4.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Irina Shayk</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-5.png" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Sara Tancredi</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Samon</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Daizy Mendize</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-3.png" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Loren Scofield</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-4.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Shayk</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Sara</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/avatar-1.png" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="imgs/task-u1.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="imgs/avatar-1.png" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="imgs/avatar-2.png" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="icofont icofont-paper-plane"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" >
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Menu</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="">
                                    <span class="pcoded-micon"><i class="fas fa-home"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
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
                                        <a href="navbar-dark.html" data-i18n="nav.navigate.navbar-inverse">
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
                                        <a href="navbar-elements.html" data-i18n="nav.navigate.navbar-with-elements">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Funcionários</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" data-i18n="nav.navigate.main">
                                    <span class="pcoded-micon"><i class="fas fa-dolly"></i></span>
                                    <span class="pcoded-mtext">Produtos</span>
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
                                    <li class=" ">
                                        <a href="session-timeout.html" data-i18n="nav.extra-components.session-timeout">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">Session Timeout</span>
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
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-header">
                                    <div class="page-header-title">
                                        <h4>Dashboard</h4>
                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html">
                                                    <i class="icofont icofont-home"></i>
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="page-body">
                                    <div class="row">
                                        <div class="conteudo">
                                            @yield('conteudo')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

@endsection