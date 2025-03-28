<?php
// Conexión a la base de datos
$servername = "mysql.webcindario.com";
$username = "techshop";
$password = "TechShop44";
$dbname = "techshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario y sanitizarlos
$nombre = trim($_POST['nombre']);
$email = trim($_POST['email']);
$queja = trim($_POST['queja']);

// Usar una consulta preparada para mayor seguridad
$stmt = $conn->prepare("INSERT INTO quejas (nombre, email, queja, fecha) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sss", $nombre, $email, $queja);

if ($stmt->execute()) {
    // Redirigir automáticamente al index después de enviar la queja
    header("Location: ../index.php");
    exit(); // Asegurar que el script se detiene después de la redirección
} else {
    echo "Error al registrar la queja: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
