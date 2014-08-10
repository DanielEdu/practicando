<?php

$op = $_GET['op'];
switch($op)
{
    case "reg":
        $content = "registro.html.php";
        $title   = "Registrar Usuario";
        break;
    default:
        $content = "index.html";
        $title   = "Home";
        break;

}