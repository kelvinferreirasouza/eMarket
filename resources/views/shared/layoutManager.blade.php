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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manager/jquery.mCustomScrollbar.css') }}">
    </head>

    <body>
        @yield('content')
    </body>

</html>