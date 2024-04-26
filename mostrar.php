

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

// Consulta para obtener todas las máquinas
$sql = "SELECT * FROM maquinas";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo '<tr class="table-cell">';
        echo '<td>' . $fila['nombre'] . '</td>';
        echo '<td><strong>Ubicación:</strong> ' . $fila['ubicacion'] . '</td>';
        echo '<td><strong>Estado:</strong> ' . $fila['estado'] . '</td>';
        echo '<td><a href="borrar.php?id=' . $fila['id'] . '" onclick="return confirm(\'¿Estás seguro de que deseas borrar este elemento?\');">Borrar</a></td>';
        echo '</tr>';
    }
} else {
    echo "No hay máquinas registradas.";
}

// Cerrar la conexión
$conexion->close();
?>
