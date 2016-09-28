<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{ asset('images/favicon.png')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Propio Marte</title>
    
    <meta name="description" content="Propio Marte somos una empresa joven que brinda servicios profesionales de excelencia, buscando siempre satisfacer de la mejor forma las necesidades de nuestros clientes. Nos destacamos en el análisis y evaluación global, sectorial y microeconómica. Brindamos información y proyecciones sobre la situación económica mundial, nacional y local, definiendo los escenarios alternativos posibles.">
    <meta name="keywords" content="propio pyme,Industria,producción,empleo,inflación,inversión,proyecciones,finanzas,empresas,PyMEs,agroindustria,desarrollo,mercado de trabajo,indicadores,financiamiento, Comercio exterior,consultora económica">
    <meta NAME="revisit-after" content="14 days">
    <meta NAME="robots" content="index,follow">
    <meta NAME="distribution" content="global">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <!-- Styles -->
    {!! Html::style('bootstrap/css/bootstrap.css') !!}
    {!! Html::style('css/scrolling-nav.css') !!}
    {!! Html::style('css/full-slider.css') !!}
    {!! Html::style('css/carousel.css') !!}
    {!! Html::style('css/accordion.css') !!}
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/gotham.css') !!}

    <style>
        body {
            font-family: 'gothamregular';
        }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @include('layouts.navbar-frontend')
    
    @yield('content')

    <!-- JavaScripts -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('bootstrap/js/bootstrap.js') !!}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    {!! Html::script('js/jquery.easing.min.js') !!}
    {!! Html::script('js/scrolling-nav.js') !!}
    {!! Html::script('js/accordion.js') !!}
    {!! Html::script('js/clients.js') !!}
    {!! Html::script('js/app.js') !!}
    @yield('javascript')
  </body>
</html>
