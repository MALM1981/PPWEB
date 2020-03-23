<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('Titulo')</title>
</head>
<style type="text/css">
	.active a{
		color: red;
		text-decoration: none;
	}
</style>
<body>
    @include('Include.nav')
    @yield('TP')
<footer>
	<p>Pié de página</p>
</footer>
</body>
</html>