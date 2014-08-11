<?php
include('conection.php');

$email = $_POST["name"];
$password = $_POST["password"];

$query  = "SELECT psswd FROM usuario WHERE email='$email'";
$xquery = $plug->query($query);
$varquery = $xquery->fetch_assoc();



if($varquery['psswd'] == $password){
    //inicio de sesion
    session_start();

    //declarar variables de sesion
    $_SESSION["value"] = true;
    $_SESSION["user"] = $email;

    require "../views/privado.html.php";
}else{
    $temp = "Usuario o Password incorrecto";
    header("Location: ../index.php?ini='$temp'");
}

?>