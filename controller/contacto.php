<?php
include '../../EPZagal/model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $mensaje = trim($_POST["mensaje"]);

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $sql = "INSERT INTO contacto (nombre, email, mensaje, fecha) VALUES (?, ?, ?, NOW())";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $mensaje);
            $ejecutado = mysqli_stmt_execute($stmt);

            if ($ejecutado) {
                header("Location: ../index.php?status=success"); // Redirigir con éxito
                exit();
            } else {
                header("Location: ../index.php?status=error"); // Redirigir con error
                exit();
            }

            mysqli_stmt_close($stmt);
        } else {
            header("Location: ../index.php?status=error");
            exit();
        }
    } else {
        header("Location: ../index.php?status=empty");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>
