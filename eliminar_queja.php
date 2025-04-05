<?php
// Conexión a la base de datos
$servername = "mysql.webcindario.com";
$username = "techshop";
$password = "TechShop44";
$dbname = "techshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar que el ID se recibió por POST
if (!isset($_POST['id'])) {
    die("ID no proporcionado.");
}

$id = intval($_POST['id']);

// Preparar y ejecutar la eliminación
$stmt = $conn->prepare("DELETE FROM quejas WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Redirigir de vuelta a la lista
    header("Location: quejas_lista.php");
    exit();
} else {
    echo "Error al eliminar la queja: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
