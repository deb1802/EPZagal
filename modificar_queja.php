<?php
// Conexión
$servername = "mysql.webcindario.com";
$username = "techshop";
$password = "TechShop44";
$dbname = "techshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se envió un ID por GET
if (!isset($_GET['id'])) {
    die("ID de queja no proporcionado.");
}

$id = intval($_GET['id']);

// Consulta la queja
$sql = "SELECT * FROM quejas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Queja no encontrada.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="title">Tienda de Electrónicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

    

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="img/logoshop.png" alt="Logo" width="100" height="100" class="me-2"> 
            <h1><b>TechShop </b></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php" data-translate="nosotros">Página Principal</a></li>
                <li class="nav-item"><a class="nav-link" href="#nosotros" data-translate="nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#productos" data-translate="productos">Productos</a></li>
                
                <!-- Lista Desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-translate="mas_opciones">
                        Más opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#opiniones" data-translate="opiniones">Opiniones</a></li>
                        <li><a class="dropdown-item" href="#contacto" data-translate="contacto">Contáctanos</a></li>
                    </ul>
                </li>
                <!-- Idioma -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-translate="idioma">
                        Idioma
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#" data-lang="es">Español</a></li>
                        <li><a class="dropdown-item" href="#" data-lang="en">English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    <div class="container-form">
        <form action="actualizar_queja.php" method="POST">
            <h2 class="text-center">Editar Queja</h2>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($row['nombre']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($row['email']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="queja" class="form-label">Queja:</label>
                <textarea class="form-control" name="queja" rows="4" required><?= htmlspecialchars($row['queja']) ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="lista_quejas.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</body>


<footer class="bg-dark text-white text-center p-4">
    <div class="container">
        <div class="row">
            <!-- Columna 1: Enlaces adicionales -->
            <div class="col-md-4 mb-3">
                <p data-translate="footer_texto3">También visita:</p>
                <a href="https://jiks.webcindario.com">
                    <img src="./img/jiks.png" width="100px" alt="Jiks">
                </a>
            </div>

            <!-- Columna 2: Redes sociales y contacto -->
            <div class="col-md-4 mb-3">
                <p data-translate="footer_texto2">Síguenos en redes sociales:</p>
                <a href="https://facebook.com" target="_blank">
                    <img src="./img/face.jfif" width="50px" alt="Facebook">
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="./img/tw.png" width="50px" alt="Twitter">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="./img/logoInta.avif" width="50px" alt="Instagram">
                </a>

                <p class="mt-3" data-translate="footer_texto4">Contacto:</p>
                <p>
                    <span data-translate="footer_texto5">Correo:</span> 
                    <a href="mailto:contacto@techshop.com" class="text-white">contacto@techshop.com</a>
                </p>
                <p data-translate="footer_texto6">Teléfono: +52 123 456 7890</p>
            </div>

            <!-- Columna 3: Dirección y mapa -->
            <div class="col-md-4 mb-3">
                <p data-translate="footer_texto7">Dirección:</p>
                <p>Universidad Politécnica del Estado de Morelos</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.9391500921024!2d-99.14288538908876!3d18.88978048220292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce7436090d122b%3A0x2acb88c1b5c1452a!2sUniversidad%20Polit%C3%A9cnica%20del%20Estado%20de%20Morelos!5e0!3m2!1ses!2smx!4v1741582830053!5m2!1ses!2smx" 
                    width="100%" height="250" 
                    style="border:0; border-radius:10px; margin-top:10px;" 
                    allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Fila extra: Derechos reservados -->
        <div class="row mt-3">
            <p data-translate="footer_texto1">&copy; 2025 TechShop. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>

<?php
$stmt->close();
$conn->close();
?>
