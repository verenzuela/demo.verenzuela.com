<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="canonical" href="@yield('canonical','')"/>

    <meta name="description" content="@yield('description','')">
    <meta name="keywords" content="@yield('keywords','')">
    <meta name="author" content="Andres verenzuela">

    <title>@yield('title','Andres Verenzuela | Backend')</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon-32x32.png')}}" type="image/x-icon">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome Icons -->
    <link href="{{ asset('css/font-awesome.min-4.7.0.css') }}" rel="stylesheet">

    <!-- IonIcons -->
    <link href="{{ asset('css/ionicons.min.2.0.1.css') }}" rel="stylesheet">

    <!-- Theme style -->
    <link href="{{ asset('css/adminlte.min.3.0.0-Alpha.css') }}" rel="stylesheet">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('styles')
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to to the body tag
  to get the desired effect
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  
  @yield('content')
  

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.3.3.1.js') }}"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.bundle.4.1.2.min.js') }}"></script>

  <!-- AdminLTE -->
  <script src="{{ asset('js/adminlte.3.0.0-beta.1.js') }}"></script>

  @yield('script')

</html>
