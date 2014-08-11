
	<form name="registro" action="registro.php" method="post">
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

		
	</fieldset>
	</form>


 CFAFSDFASDF