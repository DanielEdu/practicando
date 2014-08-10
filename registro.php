<?php

$email = $_POST['email'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$psswd = $_POST['password'];
$pais  = $_POST['pais'];




//coneccion con el servidor de Mysql
$conexion = mysql_connect("localhost","root","root") or die("ERROR!!!!!!! XD");

//coneccion con la BD
mysql_select_db("USUARIOS") or die("ERROR>>>  No se encontro DB ");

//crear una consulta
$query1 = "INSERT INTO usuario (email, f_name, l_name, psswd, id_pais)
VALUES(".$email.",".$fname.",".$lname.",".$psswd.",".$pais.")";

// ejecutar consulta, usa 2 datos
$ejecute_query = mysql_query($query1,$conexion) or die ("no se ejecuto");

