<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Electrónicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/logoshop.png" alt="Logo" width="100" height="100" class="me-2"> 
                <b>TechShop </b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#opiniones">Opiniones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    
                    <!-- Lista Desplegable -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Más opciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#soporte">Soporte</a></li>
                            <li><a class="dropdown-item" href="#envios">Envíos</a></li>
                            <li><a class="dropdown-item" href="#devoluciones">Devoluciones</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="container mt-4">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/techshop5.png" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="img/techshop2.png" class="d-block w-100" alt="Imagen 2">
                </div>
                
                <div class="carousel-item">
                    <img src="img/techshop4.png" class="d-block w-100" alt="Imagen 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>

    <section id="nosotros" class="container py-5">
        <h2 class="text-center">Nosotros</h2>
        <p class="text-center">Somos una tienda especializada en productos electrónicos de alta calidad...</p>
    </section>

    <section id="productos" class="container py-5">
        <h2 class="text-center">Nuestros Productos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/producto1.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Gaming</h5>
                        <p class="card-text">Potente y rápida para juegos y trabajo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/producto2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Smartphone</h5>
                        <p class="card-text">Última generación con cámara profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="opiniones" class="container py-5">
        <h2 class="text-center">Opiniones de Clientes</h2>
        <div id="carouselOpiniones" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="opinion d-flex justify-content-center align-items-center">
                        <img src="img/deba.jpeg" alt="Cliente 1">
                        <div>
                            <p class="nombre">Deba Picafresa</p>
                            <p>"Excelente servicio y productos de calidad. ¡Muy recomendado!"</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="opinion d-flex justify-content-center align-items-center">
                        <img src="img/cliente2.jpg" alt="Cliente 2">
                        <div>
                            <p class="nombre">María Fernández</p>
                            <p>"Rápida entrega y atención personalizada. ¡Volveré a comprar!"</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>


    <section id="contacto" class="container py-5">
        <h2 class="text-center">Contáctanos</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Enviar</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center p-3">
        <p>&copy; 2025 TechShop. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
