<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerClientes($conexion){

    $sql = "SELECT * FROM customer";

    return $conexion->query($sql)->fetchAll();

}