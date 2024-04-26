<?php
// Verificar si se ha enviado un ID válido para borrar
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Recuperar el ID del elemento a borrar
    $id = $_GET['id'];

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

    // Consulta para borrar el elemento de la base de datos
    $sql = "DELETE FROM maquinas WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir de vuelta a la página principal después de borrar
        header('Location: index.php');
        exit;
    } else {
        echo "Error al borrar el elemento: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "ID no válido para borrar.";
}
?>
