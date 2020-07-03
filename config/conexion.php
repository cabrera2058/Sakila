<?php

$usuario = "root";
$password = "Pedro205819";

$errores = [];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $password);
}catch(PDOException $exception){
    array_push($errores, $exception -> getMessage());
}


