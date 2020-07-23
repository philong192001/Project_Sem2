	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>
		{{-- <base href="{{ asset('') }}"> --}}
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->

			<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
			<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('css/main.css') }}">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		</head>
		<body>

			


			@include('header')

			@yield('content')
			
			@include('footer')

			

			<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script type="text/javascript" src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script>
			<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
			<script src="{{ asset('js/easing.min.js') }}"></script>
			<script src="{{ asset('js/hoverIntent.js') }}"></script>
			<script src="{{ asset('js/superfish.min.js') }}"></script>
			<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
			<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
			<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
			<script src="{{ asset('js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
			<script src="{{ asset('js/parallax.min.js') }}"></script>
			<script src="{{ asset('js/waypoints.min.js') }}"></script>
			<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
			<script src="{{ asset('js/mail-script.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>




		</body>
		</html>



