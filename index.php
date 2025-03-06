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
                <h1><b>TechShop </b></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    
                    <!-- Lista Desplegable -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Más opciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#soporte">Opiniones</a></li>
                            <li><a class="dropdown-item" href="#envios">Contáctanos</a></li>
                            <li><a class="dropdown-item" href="#devoluciones">Facebook</a></li>
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

    <!-- Lista de Marcas -->
    <div class="text-center mb-4">
        <ul class="nav nav-pills justify-content-center" id="productosNav" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="apple-tab" data-bs-toggle="pill" href="#apple" role="tab" aria-controls="apple" aria-selected="true">Apple</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="samsung-tab" data-bs-toggle="pill" href="#samsung" role="tab" aria-controls="samsung" aria-selected="false">Samsung</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="motorola-tab" data-bs-toggle="pill" href="#motorola" role="tab" aria-controls="motorola" aria-selected="false">Motorola</a>
            </li>
        </ul>
    </div>

    <!-- Productos -->
    <div class="tab-content" id="productosTabContent">

        <!-- Apple -->
        <div class="tab-pane fade show active" id="apple" role="tabpanel" aria-labelledby="apple-tab">
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product1.jpg" class="card-img-top" alt="Producto Apple 1">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 13 Pro</h5>
                            <p class="card-text">Pantalla Super Retina, cámara triple, rendimiento A15 Bionic.</p>
                            <p><strong>$999</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product2.jpg" class="card-img-top" alt="Producto Apple 2">
                        <div class="card-body">
                            <h5 class="card-title">MacBook Air M1</h5>
                            <p class="card-text">Ultra delgado, potente procesador M1, hasta 18 horas de batería.</p>
                            <p><strong>$1099</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product3.jpg" class="card-img-top" alt="Producto Apple 3">
                        <div class="card-body">
                            <h5 class="card-title">Apple Watch Series 7</h5>
                            <p class="card-text">Pantalla más grande, resistencia al agua, monitoreo de salud.</p>
                            <p><strong>$399</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product4.jpg" class="card-img-top" alt="Producto Apple 4">
                        <div class="card-body">
                            <h5 class="card-title">iPad Pro 11</h5>
                            <p class="card-text">Pantalla Liquid Retina, chip M1, cámaras profesionales.</p>
                            <p><strong>$799</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product5.jpg" class="card-img-top" alt="Producto Apple 5">
                        <div class="card-body">
                            <h5 class="card-title">AirPods Pro</h5>
                            <p class="card-text">Cancelación activa de ruido, sonido envolvente, cómoda adaptación.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/apple_product6.jpg" class="card-img-top" alt="Producto Apple 6">
                        <div class="card-body">
                            <h5 class="card-title">HomePod Mini</h5>
                            <p class="card-text">Sonido envolvente, control por voz, integra con tu hogar inteligente.</p>
                            <p><strong>$99</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Samsung -->
        <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product1.jpg" class="card-img-top" alt="Producto Samsung 1">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S21</h5>
                            <p class="card-text">Pantalla Dynamic AMOLED, cámara triple, rendimiento Exynos.</p>
                            <p><strong>$799</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product2.jpg" class="card-img-top" alt="Producto Samsung 2">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy Note 20</h5>
                            <p class="card-text">Pantalla AMOLED, cámara ultra alta resolución, S Pen incluido.</p>
                            <p><strong>$999</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product3.jpg" class="card-img-top" alt="Producto Samsung 3">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy Watch 4</h5>
                            <p class="card-text">Rendimiento rápido, monitoreo de salud avanzado, pantalla AMOLED.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product4.jpg" class="card-img-top" alt="Producto Samsung 4">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy Tab S7</h5>
                            <p class="card-text">Pantalla LCD de alta resolución, procesador Snapdragon, S Pen incluido.</p>
                            <p><strong>$649</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product5.jpg" class="card-img-top" alt="Producto Samsung 5">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Buds Pro</h5>
                            <p class="card-text">Sonido envolvente, cancelación de ruido, resistencia al agua.</p>
                            <p><strong>$199</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/samsung_product6.jpg" class="card-img-top" alt="Producto Samsung 6">
                        <div class="card-body">
                            <h5 class="card-title">Samsung SmartThings Hub</h5>
                            <p class="card-text">Automatiza tu hogar inteligente, compatible con Alexa y Google Assistant.</p>
                            <p><strong>$119</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Motorola -->
        <div class="tab-pane fade" id="motorola" role="tabpanel" aria-labelledby="motorola-tab">
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product1.jpg" class="card-img-top" alt="Producto Motorola 1">
                        <div class="card-body">
                            <h5 class="card-title">Motorola Edge 20</h5>
                            <p class="card-text">Pantalla OLED, cámara triple, procesador Snapdragon.</p>
                            <p><strong>$599</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product2.jpg" class="card-img-top" alt="Producto Motorola 2">
                        <div class="card-body">
                            <h5 class="card-title">Motorola Moto G100</h5>
                            <p class="card-text">Pantalla FHD+, cámara cuádruple, rendimiento Qualcomm.</p>
                            <p><strong>$399</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product3.jpg" class="card-img-top" alt="Producto Motorola 3">
                        <div class="card-body">
                            <h5 class="card-title">Motorola Moto G Power</h5>
                            <p class="card-text">Batería de larga duración, pantalla de 6.6", procesador octa-core.</p>
                            <p><strong>$199</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product4.jpg" class="card-img-top" alt="Producto Motorola 4">
                        <div class="card-body">
                            <h5 class="card-title">Motorola One Fusion+</h5>
                            <p class="card-text">Pantalla Max Vision, cámara de 64 MP, batería de 5000mAh.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product5.jpg" class="card-img-top" alt="Producto Motorola 5">
                        <div class="card-body">
                            <h5 class="card-title">Motorola Moto E</h5>
                            <p class="card-text">Pantalla de 6.2", batería de 3550mAh, cámara dual.</p>
                            <p><strong>$149</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/motorola_product6.jpg" class="card-img-top" alt="Producto Motorola 6">
                        <div class="card-body">
                            <h5 class="card-title">Motorola Razr 5G</h5>
                            <p class="card-text">Diseño plegable, pantalla OLED, cámara de 48 MP.</p>
                            <p><strong>$1399</strong></p>
                        </div>
                    </div>
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
                        <img src="img/deb.jpeg" alt="Cliente 1">
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