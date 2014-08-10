<?php include 'opciones.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?> </title>
	<link rel="stylesheet" href="normalize.css"/>     <!--- Normaliza estilos en navegadores -->
    <link rel="stylesheet" href="estilos.css"/>
    

</head>
<body>
<header>
    <figure id="logo1">
        <img src="logo.png"/>
    </figure>
    <h1><strong></strong><?= $titulo ?>: comunidad de personas atractivas y sexy</h1>
    <figure id="avatar1"></figure>
</header>
	<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">HTML5</a></li>
        <li><a href="#">Javascript</a></li>
        <li><a href="#">CSS3</a></li>
        <li><a href="contactos.php">Contactanos</a></li>
        <li id="boton_naranja"><a href="#" class="icon-brush" id="mostrar-form">Login</a></li>
    </ul>
	</nav>
	<form id="formulario" class="formulario" name="enviar_formulario" action="datos.php" method="post" />

		<input type="text" name="name" id="name" placeholder="E-mail" required>
		<input type="password" name="password" id="password" placeholder="Password" required>
		<input type="submit" name="send" id="send" value="OK">
		<p><a href="?op=reg">Registrate</a></p>
		<p> <?= $temp ?> </p>
	</form>

	
<?php include($content); ?>
	
	
<footer>
    <p> <strong>Power by Pinwii</strong> </p>
    <p>Mi casita 2014</p>
    
</footer>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="formulario.js"></script>
</body>
</html>