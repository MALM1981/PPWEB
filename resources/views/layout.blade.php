<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('Titulo')</title>
</head>
<body>
 <nav>
 	<?php echo "<li><a href=". route('Inicio').">Home</a></li>"; ?>
 	<?php echo "<li><a href=". route('About').">About</a></li>"; ?>
    <li><a href="/contactanos">Contáctanos</a></li>
    <li><a href="/portafolio">Portafolio</a></li>
 </nav>
    @yield('TP')
<footer>
	<p>Pié de página</p>
</footer>
</body>
</html>