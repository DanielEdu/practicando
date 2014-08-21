<?

require 'helpers.php';
require 'setting.php';

//Library
require 'library/Request.php';

//controller($_GET['url']);
//$var = $_GET['url'];

$obj = new Request($_GET['url']);

var_dump($obj->getUrl());



