<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Laravel Pos - Laravel Admin Starter</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

	<script src="{{ asset('js/app.js') }}"></script>

	<!-- themekit admin template asstes -->
	<link rel="stylesheet" href="{{ asset('all.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/css/theme.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="home-gradient-bg">
	<div class="container ">
		<div class="d-flex justify-content-between my-5">
			<div>
			</div>
			<div>
				<a class="btn btn-success btn-rounded mr-3" href="{{url('login')}}/">Admin</a>
			</div>
		</div>
		<div class="banner-text m-4 d-relative">
			A multi level pos, inventory and user management software
		</div>
	</div>
	<script src="{{ asset('all.js') }}"></script>

</body>

</html>