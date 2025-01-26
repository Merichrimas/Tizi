<?php
$servername = "localhost";
$username = "root"; // Cambia si tienes otro usuario en MySQL
$password = ""; // Cambia si tienes contraseña en MySQL
$database = "turismo_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
