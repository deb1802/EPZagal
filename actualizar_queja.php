<?php
$servername = "mysql.webcindario.com";
$username = "techshop";
$password = "TechShop44";
$dbname = "techshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica que vienen los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $queja = trim($_POST['queja']);

    $stmt = $conn->prepare("UPDATE quejas SET nombre = ?, email = ?, queja = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nombre, $email, $queja, $id);

    if ($stmt->execute()) {
        header("Location: quejas_lista.php"); // Ajusta si tu archivo tiene otro nombre
        exit();
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
