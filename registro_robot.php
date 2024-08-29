<?php

$host = 'localhost:3306';
$usuario = 'root';
$contrasena = ''; 
$basededatos = 'usuarios';

$conexion = new mysqli($host, $usuario, $contrasena, $basededatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$video = $_POST['video'];
$tprecio = $_POST['precio'];

$sql = "INSERT INTO usuarios (nombre, descripcion, imagen, video, precio) VALUES ('$nombre', '$descripcion', '$imagen', '$video', '$precio')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro insertado exitosamente";
} else {
    echo "Error al insertar registro: " . $conexion->error;
}

$conexion->close();
?>