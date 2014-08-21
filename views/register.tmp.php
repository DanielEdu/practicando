    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?> </title>
        <link rel="stylesheet" href="estilos/normalize.css"/>     <!--- Normaliza estilos en navegadores -->
        <link rel="stylesheet" href="estilos/estilos.css"/>


    </head>
    <body>
    <header>
        <figure id="logo1">
            <img src="img/logo.png"/>
        </figure>
        <h1><strong> Geekon: comunidad de personas atractivas y sexy </strong> </h1>
        <figure id="avatar1"></figure>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">HTML5</a></li>
            <li><a href="#">Javascript</a></li>
            <li><a href="#">CSS3</a></li>
            <li><a href="#">Contactanos</a></li>
            <li id="boton_naranja"><a href="#" class="icon-brush" id="mostrar-form">Login</a></li>
        </ul>
    </nav>
    <form id="formulario" class="formulario" name="enviar_formulario" action="modelo/datos.php" method="post" />

    <input type="email" name="name" id="name" placeholder="E-mail" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <input type="submit" name="send" id="send" value="OK">
    <p><a href="?op=reg">Registrate</a></p>
    <p> <?= $_GET['ini'] ?> </p>
    </form>

    <form name="registro" action="modelo/registro.php" method="post">
        <fieldset>
            <legend>Registro de nuevo usuario</legend>
            <input type="email" name="email" placeholder="e-mail" required /><br>
            <input type="text" name="first_name" placeholder="Nombres" required /><br>
            <input type="text" name="last_name" placeholder="Apellidos" required /><br>
            <input type="password" name="password" placeholder="Password" required /><br>
            <select  id="pais" class="cambio" name="pais" required>
                <option value=""> - - - </option>
                <?php include("modelo/select_pais.php") ?>
            </select><br>
            <input type="submit" name="send" value="enviar"><br>

            <p><?= $_GET['mensaje'] ?></p>
        </fieldset>
    </form>



    <footer>
        <p> <strong>Power by Pinwii</strong> </p>
        <p>Mi casita 2014</p>

    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/formulario.js"></script>
    </body>
    </html>