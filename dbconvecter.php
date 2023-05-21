<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Aquí puedes realizar la lógica de verificación de las credenciales
  // Comparar el email y contraseña con los valores correctos
  // Puedes usar una base de datos o cualquier otro método para almacenar y verificar las credenciales

  if ($email == "admin@admin" && $password == "314162412") {
    // Credenciales válidas, redireccionar al panel de administración o a la página deseada
    header("Location: panel_administracion.php");
    exit;
  } else {
    // Credenciales inválidas, mostrar un mensaje de error o redireccionar a una página de inicio de sesión incorrecta
    header("Location: inicio_sesion_incorrecto.php");
    exit;
  }
}
?>
