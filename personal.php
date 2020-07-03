<?php

$nombrePagina = "personal";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_direccion.php";
$direcciones = obtenerDirecciones($conexion);
require_once "modelos/modelo_tienda.php";
$tiendas = obtenerTiendas($conexion);

//Declaro variables para obtener informacion//
$nombre = $_GET['nombre'] ?? "";
$apellido = $_GET['apellido'] ?? "";
$direccion = $_GET['direccion'] ?? "";
$foto = $_GET['foto'] ?? "";
$correo = $_GET['correo'] ?? "";
$tienda = $_GET['tienda'] ?? "";
$activo = $_GET['activo'] ?? "";
$nombreUsuario = $_GET['nombreUsuario'] ?? "";
$contraseña = $_GET['contraseña'] ?? "";

if(isset($_GET['btnGuardarPersonal'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_personal.php";