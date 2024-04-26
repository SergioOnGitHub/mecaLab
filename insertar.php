<?php
// Conexión a la base de datos
$servername = "10.50.70.236";
$username = "TC2005B_602_04"; // Usuario por defecto de MySQL en XAMPP
$password = "vFc5vv*4P3Q="; // Sin contraseña por defecto en XAMPP
$dbname = "maquinas"; // Nombre de la base de datos que creaste

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$estado = $_POST['estado'];

// Insertar datos en la base de datos
$sql = "INSERT INTO maquinas (nombre, ubicacion, estado) VALUES ('$nombre', '$ubicacion', '$estado')";

if ($conexion->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
