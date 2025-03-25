<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "testdb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "HOLA MUNDO, la conexión a la base de datos se ha realizado de forma exitosa! Angel Jefferson Sanchez Ventura";

// Cerrar conexión
$conn->close();
?>
