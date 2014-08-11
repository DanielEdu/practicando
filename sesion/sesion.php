<?php
session_start();

if(!$_SESSION["value"]){
    require "exit.php";
}
?>