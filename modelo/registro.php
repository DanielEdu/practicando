<?php$email = $_POST['email'];$fname = $_POST['first_name'];$lname = $_POST['last_name'];$psswd = $_POST['password'];$pais  = $_POST['pais'];include('conection.php');$query  = "SELECT * FROM usuario WHERE email='$email'";$xquery = $plug->query($query);$flag   = $xquery->num_rows;