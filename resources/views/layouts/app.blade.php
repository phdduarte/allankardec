<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="/images/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/black.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-green-light">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
            <div class="navbar-header">
                @if (Auth::guest())
                            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                @endif
                <a href="/">
                    <div><img src="/images/logo_2.png" width="298" height="96" alt="logo"></div>
                </a>
            </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <li><a href="{{ url('/manuscritos/') }}">Gerenciar itens</li>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <footer class="footer">
            <nav class="footer-exhibitions">
                <div class="container">
                    <div class="py2">
                        <a href="http://allankardec.online/links" target="_blank">LINKS DE INTERESSE PARA PESQUISADORES
                            E ESTUDIOSOS DO ESPIRITISMO</a>
                    </div>
                </div>
            </nav>
            <nav class="footer-navigation">
                <ul>
                    <li><a href="./sobre">SOBRE</a></li>
                    <li><a href="./contato">CONTATO</a></li>
                    <li><a href="./glossario">GLOSSÁRIO</a></li>
                    <li><a href="./mapadosite">MAPA DO SITE</a></li>
                    <li><a href="./termos">TERMOS E CONDIÇÕES</a></li>
                </ul>
            </nav>
            <nav class="footer-copyright">
                <div class="container">
                    <div>
                        ©Copyright 2019 Allan Kardec.online<span class="mobile-hide"> / Designed by: <a
                                href="http://www.pdwebdesign.com.br/">PDWebdesign</a></span>
                    </div>
                </div>
            </nav>
        </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
