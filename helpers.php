<?php



function views($view, $dinamic = array())
{
    extract($dinamic);
    require "views/$view.tmp.php";

}

function controller($controller)
{
    if(empty($controller))
    {
        $controller = 'home';
    }

    $file = "controller/$controller.php";


    if(file_exists($file))
    {

    }else{
        header("HTTP/1.0 404 Not Found");
        exit("Pagina no encontrada");
    }


    require "controller/$controller.php";
}




