<?php
//Configuracion de la conexion a base de datos
$servidor = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tienda";
// Create connection-
$conn = new mysqli($servidor, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("FALLA CONEXIÓN AL SERVIDOR: " . $conn->connect_error);
} 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
   
// nombre de la tabla los campos de la tabla que se encuentra e la base de datos y las variables php 
$sql = "INSERT INTO usuarios (nombre,apellido,correo,telefono) VALUES ('$nombre','$apellido','$correo','$telefono')";
if ($conn->query($sql) === TRUE) {
    
//va a probar proceso y modificar esta pagina para que diga envio correcto
header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>