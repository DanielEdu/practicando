<?php

$op = $_GET['op'];
switch($op)
{
    case "reg":
        $content = "views/registro.html.php";
        $title   = "Registrar Usuario";
        break;
    default:
        $content = "views/home.html";
        $title   = "Home";
        break;

}