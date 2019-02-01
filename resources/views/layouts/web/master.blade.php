<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>@yield('title','')</title>
		<meta charset="utf-8">
		
		<link rel="canonical" href="@yield('canonical','')"/>

		<meta name="google-site-verification" content="fvRqfNEPFhg21FWseMGrEbtJ2p6o_QXgXrHvNNXDogA" />

		<meta name="description" content="@yield('description','')">
		<meta name="keywords" content="@yield('keywords','')">
		<meta name="author" content="Andres verenzuela">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

		<!-- BASE CSS --> 
      	<link href="{{ asset('css/main.css') }}" rel="stylesheet">


		@yield('styles')

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51143520-4"></script>
		<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-51143520-4');

			// Feature detects Navigation Timing API support.
			if (window.performance) {
				// Gets the number of milliseconds since page load
				// (and rounds the result since the value must be an integer).
				var timeSincePageLoad = Math.round(performance.now());

				// Sends the timing event to Google Analytics.
				gtag('event', 'timing_complete', {
					'name': 'load',
					'value': timeSincePageLoad,
					'event_category': 'JS Dependencies'
				});
			}

		  
		</script>

	</head>

	<body>
		@yield('content')
	</body>

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/skel.min.js') }}"></script>
	<script src="{{ asset('js/util.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	
	@yield('script')

</html>