<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{ asset('images/favicon.jpg')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Propio Marte</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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

        .fa-btn {
            margin-right: 6px;
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Scrolling Nav JavaScript -->
    {!! Html::script('js/jquery.easing.min.js') !!}
    {!! Html::script('js/scrolling-nav.js') !!}
    {!! Html::script('js/accordion.js') !!}
    {!! Html::script('js/clients.js') !!}
    {!! Html::script('js/app.js') !!}
    @yield('javascript')
  </body>
</html>
