<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $fecha = $_POST["fecha"];
  $hora = $_POST["hora"];

  // Aquí puedes realizar la lógica para crear la reserva y asignar una mesa en la base de datos o en cualquier otro lugar de almacenamiento

  // Redirecciona a la página de reservas y gestión de mesas después de crear la reserva
  header("Location: reservas.html");
  exit;
}
?>
