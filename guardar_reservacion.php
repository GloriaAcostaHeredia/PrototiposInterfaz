<?php
// Conectar a la base de datos (reemplaza los valores con los de tu base de datos)
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "saporiditalia";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Resto del código para consultar y mostrar las reservaciones

// Cerrar la conexión
$conn->close();

?>
