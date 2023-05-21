<?php
// Obtener el ID de la reserva a denegar desde la URL (ej. denegar_reserva.php?id=1)
$id = $_GET['id'];

// Realizar las operaciones de denegación en la base de datos (requiere configuración y conexión a la base de datos)
// Aquí debes usar tu propio código para establecer la conexión a la base de datos y realizar las operaciones necesarias

// Redireccionar a la página del panel de administrador después de denegar la reserva
header('Location: panel_admin.php');
?>
