<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>InfyOm</b>
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
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="data:image/jpeg;base64,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"

                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
{{--                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"--}}
{{--                                         class="img-circle" alt="User Image"/>--}}
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @stack('scripts')
</body>
</html>
