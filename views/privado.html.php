<?php include("../sesion/sesion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>geekon</title>
	<link rel="stylesheet" href="../estilos/normalize.css"/>     <!--- Normaliza los estilos en todos los navegadores -->
    <link rel="stylesheet" href="../estilos/estilos.css"/>

</head>
<body>

<head><h2>Welcome <?= $name ?></h2></head>
<nav>
    <ul>
        <li><a href="#">Index</a></li>
        <li><a href="#">MENU 2</a></li>
        <li><a href="#">MENU 3</a></li>
        <li id="boton_naranja"><a href="../sesion/exit.php">Sign out</a></li>
    </ul>
</nav>

<p><spam><h3>PRIVADOO!!!!</h3></spam></p>



</body>


<footer>
    <p>
        <strong>Power by Pinwii</strong>
    </p>
    <p>The *** - 2014</p> 
</footer>

<script src="formulario.js"></script>
</html>