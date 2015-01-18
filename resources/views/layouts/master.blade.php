<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Hawksmoor Construction Services Ltd">
	<meta name="author" content="Michael Norris">

	<!-- Application Title -->
	<title>Hawksmoor</title>

	<!-- Bootstrap CSS -->
	<link href="/css/app.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@include('partials.nav.default')

	@yield('content')

	@include('partials.footer')

	<!-- Bootstrap JavaScript -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>
