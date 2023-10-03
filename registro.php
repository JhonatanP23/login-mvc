<?php
include("/laragon/www/LOGIN_A/model/conn.php");

// Verificar si la conexión tuvo éxito
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

// Insertar los datos en la base de datos (debes definir la tabla)
$sql = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña) VALUES ('$nombre','$apellido','$usuario', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    header("Location: index.html");
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
