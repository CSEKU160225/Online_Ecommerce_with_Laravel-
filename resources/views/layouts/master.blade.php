<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce </title>
	@include('partials.style')
</head>
<body>
<div class="wrapper">
	
	@include('partials.nav')
	<!-- navebar ok -->
	@yield('content')

@include('partials.footer')


@include('partials.scripts')
</body>
</html>