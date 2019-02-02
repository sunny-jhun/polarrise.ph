<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Polarrise | @yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

        {{-- favicon icon --}}
        <link rel="shortcut icon" href="{{{ asset('img/logo.png') }}}">
        <!-- Theme style -->
        <link href="{{ asset('/bower_components/admin-lte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-purple-light.min.css')}}" rel="stylesheet" type="text/css"/>

         <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-purple.min.css')}}" rel="stylesheet" type="text/css"/>



         {{-- <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-black.min.css')}}" rel="stylesheet" type="text/css"/> --}}

      {{--    <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-purple.css')}}" rel="stylesheet" type="text/css"/>
 --}}
        {{-- <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-black-light.min.css')}}" rel="stylesheet" type="text/css"/> --}}


        <!-- Select2 -->
        <link href="{{ asset('/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
        <!-- DataTable -->
        <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"/>
        <!-- Main Style -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-purple sidebar-mini" >
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <span class="logo-mini">
                    <b>Polarrise</b>
                </span>
                <span class="logo-lg">
                     <img width="40px" src='{{ asset('img/logo.png') }}' alt=''/>
                    <b style="font-family: 'Merienda One', cursive;">Polarrise </b>
                </span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @yield('header-menu')
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Body -->
                                {{-- <li>
                                    <a href="/settings">
                                        Settings
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('sidebar')

        @yield('content')

        @include('admin.admin-footer')