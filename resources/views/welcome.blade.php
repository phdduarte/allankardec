<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALLANKARDEC.online</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/black.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <link href="https://unpkg.com/basscss@8.0.2/css/basscss.min.css" rel="stylesheet">
    <style>
    @import url("http://fast.fonts.net/t/1.css?apiType=css&projectid=6e2dd28a-95b6-42bd-9f5c-9da3895eca41");

    /* ===============
     * GILL SANS
     * =============*/
    @font-face {
        font-family: "Gill Sans";
        src: url("./fonts/gill-sans/beab4258-af94-4971-a0db-b7bc2bef74bc.eot?#iefix");
        src: url("./fonts/gill-sans/beab4258-af94-4971-a0db-b7bc2bef74bc.eot?#iefix") format("eot"),
            url("./fonts/gill-sans/cd5a93fc-2bb1-48df-8982-11119cd6e270.woff") format("woff"),
            url("./fonts/gill-sans/b6bdc93b-2720-4c92-b68d-48499456178e.ttf") format("truetype"),
            url("./fonts/gill-sans/944cce8d-20bf-41c1-ae29-2bc8199859db.svg#944cce8d-20bf-41c1-ae29-2bc8199859db") format("svg");
        font-weight: normal;
    }

    @font-face {
        font-family: "Gill Sans";
        src: url("../fonts/gill-sans/1a6dec8e-26f9-4243-8495-835709538f92.eot?#iefix");
        src: url("../fonts/gill-sans/1a6dec8e-26f9-4243-8495-835709538f92.eot?#iefix") format("eot"),
            url("../fonts/gill-sans/f05272f9-83e3-4de6-8423-5d57f730c87b.woff") format("woff"),
            url("../fonts/gill-sans/33f5d8d9-105f-4a49-9351-74ecae7f4a49.ttf") format("truetype"),
            url("../fonts/gill-sans/b56150eb-5caa-4385-b907-373e97ddb2ff.svg#b56150eb-5caa-4385-b907-373e97ddb2ff") format("svg");
        font-weight: bold;
    }

    /* ===============
     * BERGAMONT
     * =============*/
    @font-face {
        font-family: 'Bergamo';
        src: url('../fonts/bergamo-pro/bergamopro-regular-webfont.eot');
        src: url('../fonts/bergamo-pro/bergamopro-regular-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/bergamo-pro/bergamopro-regular-webfont.woff') format('woff'),
            url('../fonts/bergamo-pro/bergamopro-regular-webfont.ttf') format('truetype'),
            url('../fonts/bergamo-pro/bergamopro-regular-webfont.svg#bergamo_proregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Bergamo';
        src: url('../fonts/bergamo-pro/bergamopro-italic-webfont.eot');
        src: url('../fonts/bergamo-pro/bergamopro-italic-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/bergamo-pro/bergamopro-italic-webfont.woff') format('woff'),
            url('../fonts/bergamo-pro/bergamopro-italic-webfont.ttf') format('truetype'),
            url('../fonts/bergamo-pro/bergamopro-italic-webfont.svg#bergamo_proitalic') format('svg');
        font-weight: normal;
        font-style: italic;
    }

    @font-face {
        font-family: 'Bergamo';
        src: url('../fonts/bergamo-pro/bergamopro-bold-webfont.eot');
        src: url('../fonts/bergamo-pro/bergamopro-bold-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/bergamo-pro/bergamopro-bold-webfont.woff') format('woff'),
            url('../fonts/bergamo-pro/bergamopro-bold-webfont.ttf') format('truetype'),
            url('../fonts/bergamo-pro/bergamopro-bold-webfont.svg#bergamo_probold') format('svg');
        font-weight: bold;
        font-style: normal;
    }

    @font-face {
        font-family: 'Bergamo';
        src: url('../fonts/bergamo-pro/bergamopro-bolditalic-webfont.eot');
        src: url('../fonts/bergamo-pro/bergamopro-bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/bergamo-pro/bergamopro-bolditalic-webfont.woff') format('woff'),
            url('../fonts/bergamo-pro/bergamopro-bolditalic-webfont.ttf') format('truetype'),
            url('../fonts/bergamo-pro/bergamopro-bolditalic-webfont.svg#bergamo_probold_italic') format('svg');
        font-weight: bold;
        font-style: italic;
    }


    html,
    body {
        background-color: #fff;
        color: #740303;
        font-family: "Gill Sans", sans-serif;
        height: 100vh;
        margin: 0;
    }

    .wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0 auto -350px;
    }

    /*header*/

    /*end header*/

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    /*footer*/
    .footer {
        margin-top: 50px;
    }

    .footer,
    .push {
        height: 300px;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    .footer .footer-navigation {
        font-family: "Gill Sans", sans-serif;
        font-size: 18px;
        position: relative;
        height: 130px;
        background: #740303;
        text-align: center;
    }

    .footer .footer-copyright {
        height: 170px;
        background: #333333;
    }

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .footer .footer-exhibitions>div.container {
        font-family: "Gill Sans", sans-serif;
        position: relative;
        top: 50%;
        text-align: center;
        color: #999999;
        font-size: 18px;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }

    .footer .footer-exhibitions>div.container a {
        font-family: "Gill Sans", sans-serif;
        color: #92ABA0;
        font-size: 18px;
        color: #fff;
        padding: 3px;
        margin-top: 15px;
        letter-spacing: 3px;
        text-decoration: none;
        text-transform: uppercase;
        border-bottom: 1px solid #740303;
    }

    a {
        text-decoration: none;
        color: #5E776C;
    }

    .footer .footer-navigation ul {
        position: relative;
        max-width: 940px;
        padding: 0 30px;
        margin: auto;
        overflow: hidden;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    ol,
    ul {
        list-style: none;
    }

    .footer .footer-navigation ul li {
        display: inline-block;
        margin: 0 15px;
    }

    .footer .footer-navigation ul li a {
        display: inline-block;
        color: white;
        text-transform: uppercase;
        text-decoration: none;
        padding-bottom: 3px;
        border-bottom: 3px solid #fff;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .footer .footer-navigation ul li.empty {
        margin: 0;
        width: 160px;
    }

    .footer .footer-navigation ul li {
        display: inline-block;
        margin: 0 15px;
    }

    .footer-logo {
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -60px;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .footer .footer-copyright {
        height: 170px;
        background: #333333;
    }

    .footer .footer-copyright>div.container a {
        font-family: "Gill Sans", sans-serif;
        color: #92ABA0;
    }

    .footer .footer-copyright>div.container>div {
        padding: 5px 0;
    }

    .footer .footer-copyright>div.container a {
        font-family: "Gill Sans", sans-serif;
        color: #92ABA0;
    }

    .mobile-only {
        display: none;
    }

    .footer .footer-copyright>div.container {
        font-family: "Gill Sans", sans-serif;
        position: relative;
        top: 50%;
        text-align: center;
        color: #999999;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    /*end footer*/

    .carousel .carousel-item {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .carousel .carousel-item .carousel-caption {
        position: absolute;
        bottom: 0px;
        min-height: 0.1rem;
        background: #740303;
        background: rgba(116, 3, 3, 0.9);
        z-index: 10;
        font-family: "Gill Sans", sans-serif;
        font-size: 0.8rem;
        line-height: 1.3em;
        color: white;
        text-transform: uppercase;
        text-align: center;
        width: 100%;
        left: 0;

    }

    .carousel .carousel-item .carousel-caption .container {
        padding: 10px 20px;
        max-width: 800px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .white {
        color: #fff;
    }

    .owl-carousel .owl-item {
        position: relative;
        min-height: 1px;
        height: 100%;
        float: left;
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }


    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    dt {
        font-family: "Gill Sans", sans-serif;
        line-height: 1.3em;
        color: #323232;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    h2 {
        font-size: 28px;
    }

    .heading h2 {
        float: left;
    }

    .heading {
        padding: 33px;
        margin-top: 12px;
        min-height: 40px;
    }

    figcaption {
        font-family: "Gill Sans", sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: #4D4D4F;
        line-height: 1.3em;
        text-transform: uppercase;
    }


    .come-in {
  transform: translateY(600px);
  animation: come-in 0.8s ease forwards;
}
.come-in:nth-child(odd) {
  animation-duration: 0.6s;
}
.already-visible {
  transform: translateY(0);
  animation: none;
}

@keyframes come-in {
  to { transform: translateY(0); }
}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="flex-center position-ref" style="height: 12rem;">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Dashboard</a>
                @else
                <!-- <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a> -->
                @endif
            </div>
            @endif
            <div class="">
                <div class="row">
                    <div class="col m-1">
                        <span class="h3"> ALLAN </span>
                    </div>
                    <div class="col m-1">
                        <img src="./images/logo.PNG" width="100" height="150" class="footer-logo"
                            alt="Bodleian Library">
                    </div>
                    <div class="col m-1">
                        <span class="h3"> KARDEC </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/IMG_2248.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/IMG_2238.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/IMG_2245.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/IMG_2239.jpg" alt="Four slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/IMG_2394.jpg" alt="Five slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/IMG_2251.jpg" alt="Six slide">
                        <div class="carousel-caption">
                            <div class="">
                                <span class="white">ALLANKARDEC.ONLINE</span> apresenta um museu on line para obras
                                raras de Kardec e do Espiritismo.
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Grid row -->
        <div class="container">
            <div class="center py3">
                <h2 class="h1">O MUSEU</h2>
            </div>
        </div>
        <div class="container">
            <div class="pb3 clearfix">
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">    
                    <figure class="px2">
                        <a href="/manuscrito">
                        <div class="p1">
                            <img class="img-fluid" src="./images/tipos/manuscrito.jpg">
                        </div>
                        </a>
                        <figcaption class="">MANUSCRITOS</figcaption>
                    </figure>
                </div>
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">
                    <figure class="px2">
                        <a href="/cartas">
                        <div class="p1">
                            <img class="img-fluid" src="./images/tipos/Einbrief.jpg">
                        </div>
                        </a>
                        <figcaption class="">CARTAS</figcaption>
                    </figure>
                </div>
            </div>
            <br>
            <div class="pb3 clearfix">
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">
                    <figure class="px2">
                        <a href="/fotos">
                        <div class="p1">
                            <img class="img-fluid" src="./images/tipos/fotos.jpg">
                        </div>
                        </a>
                        <figcaption class="">FOTOS</figcaption>
                    </figure>
                </div>
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">    
                    <figure class="px2">
                        <a href="/jornais">
                        <div class="p1">    
                            <img class="img-fluid" src="./images/tipos/jornais.jpg">
                        </div>
                        </a>
                        <figcaption class="">JORNAIS</figcaption>
                    </figure>
                </div>    
            </div>
            <br>
            <div class="pb3 clearfix">
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">
                    <figure class="px2">
                        <a href="/livros">
                        <div class="p1">    
                            <img class="img-fluid" src="./images/tipos/livros.jpg">
                        </div>
                        </a>
                        <figcaption class="">livros</figcaption>
                    </figure>
                </div> 
                <div class="module sm-col sm-col-12 md-col-6 lg-col-6">
                    <figure class="px2">
                        <a href="/revistas">
                        <div class="p1">    
                            <img class="img-fluid" src="./images/tipos/revistas.jpg">
                        </div>
                        </a>
                        <figcaption class="">REVISTAS</figcaption>
                    </figure>
                </div>    
            </div>
        </div>
        <!-- Grid row -->
        <footer class="footer">
            <nav class="footer-exhibitions">
                <div class="container">
                    <div>
                        <a href="/links" target="_blank">LINKS DE INTERESSE PARA PESQUISADORES
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
                                href="https://www.pdwebdesign.com.br/">PDWebdesign</a></span>
                    </div>
                </div>
            </nav>
        </footer>
    </div>
    <script>
    (function($) {
        
        /**
        * Copyright 2012, Digital Fusion
        * Licensed under the MIT license.
        * http://teamdf.com/jquery-plugins/license/
        *
        * @author Sam Sehnert
        * @desc A small plugin that checks whether elements are within
        *     the user visible viewport of a web browser.
        *     only accounts for vertical position, not horizontal.
        */
        
        $.fn.visible = function(partial) {
            
            var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
            
            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
            
        };
        
    })(jQuery);
    
    var win = $(window);
    
    var allMods = $(".module");
    
    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible"); 
        } 
    });
    
    win.scroll(function(event) {
        
        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in"); 
            } 
        });
        
    });
    </script>
</body>

</html>