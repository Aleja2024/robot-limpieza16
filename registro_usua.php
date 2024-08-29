<?php

// Definir las variables de conexión a la base de datos
$host = "localhost:3306";
$usuario = "root";
$contrasena = "";
$base_datos = "usuarios";

// Conectar a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if (!$conexion) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

// Recibir los datos del formulario
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contrasena"];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre,correo,contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar el resultado
if (!$resultado) {
  echo "Error al registrar el usuario: " . mysqli_error($conexion);
} else {
  echo "Usuario registrado correctamente.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
<div class="container">
        
        <h2>Ingreso</h2>
        <form action=registro_usua.php method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            
            <label for="correo">Correo:</label><br>
            <input type="varchar" id="correo" name="correo"  required><br>
            
            <label for="contrasena">Contraseña:</label><br>
            <input type="varchar" id="contrasena" name="contrasena" required><br><br>
            
            <input type="submit" value="Aceptar">
        </form>
    </div>
    <img src="Img/Img.png" class="danife" alt="Danife Image">
</body>
</html>
