<!DOCTYPE html>
<html>
    <head>
        <title>eMarket - Admin Page</title>
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
        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/bootstrap.min.css') }}">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/themify-icons.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" href="{{ asset('css/manager/icofont.css') }}">
        <!-- flag icon framework css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/flag-icon.min.css') }}">
        <!--SVG Icons Animated-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/svg-weather.css') }}">
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/component-menu-search.css') }}">
        <!-- Horizontal-Timeline css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/horizontal-timeline-style.css') }}">
        <!-- amchart css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/amchart.css') }}">
        <!-- Calender css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/pignose.calendar.min.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/style.css') }}">
        <!--color css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/linearicons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/simple-line-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/ionicons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/jquery.mCustomScrollbar.css') }}">
    </head>

    <body>
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
                                <img class="img-fluid" src="http://oi65.tinypic.com/2hfnp91.jpg" alt="eMarket" style="width: 140px;" />
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
                                    <li class="mega-menu-top">
                                        <a href="#">
                                            Mega
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification row">
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Popular Links</h6>
                                                <ul class="mega-menu-links">
                                                    <li><a href="form-elements-component.html">Form Elements</a></li>
                                                    <li><a href="button.html">Buttons</a></li>
                                                    <li><a href="map-google.html">Maps</a></li>
                                                    <li><a href="user-card.html">Contact Cards</a></li>
                                                    <li><a href="user-profile.html">User Information</a></li>
                                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Mailbox</h6>
                                                <ul class="mega-mailbox">
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-folder"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Data Backup</h5>
                                                                <small class="text-muted">Store your data</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-headphone-alt"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Support</h5>
                                                                <small class="text-muted">24-hour support</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-dropbox"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Drop-box</h5>
                                                                <small class="text-muted">Store large amount of data in one-box only
                                                                </small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="media">
                                                            <div class="media-left">
                                                                <i class="ti-location-pin"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5>Location</h5>
                                                                <small class="text-muted">Find Your Location with ease of use</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <h6 class="mega-menu-title">Contact Us</h6>
                                                <div class="mega-menu-contact">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                                        <div class="col-9">
                                                            <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                        <div class="col-9">
                                                            <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                                        <div class="col-9">
                                                            <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                        <div class="col-9">
                                                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav-right">
                                    <li class="user-profile header-notification">
                                        <a href="#!">
                                            <img src="imgs/user.png" alt="User-Profile-Image">
                                            <span>Kelvin Ferreira</span>
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification profile-notification">
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-settings"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ti-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="ti-email"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html">
                                                    <i class="ti-lock"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
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
                                    <li class="active">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>    
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
                                                    <li class="breadcrumb-item"><a href="#!">Pages</a>
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
    </div>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
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
    <!-- amchart js -->
    <script type="text/javascript" src="{{ asset('js/manager/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/light.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/manager/custom-amchart.js') }}"></script>
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
</body>

</html>