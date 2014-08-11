<?php

function connection()
{
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $bd         = "usuarios";

    $connector = new mysqli($server,$user,$password,$bd) or die("no se pudo conectar");

    return $connector;
}

$plug = connection();

?>