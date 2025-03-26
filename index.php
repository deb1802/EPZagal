<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="title">Tienda de Electrónicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
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
    <h2 class="text-center" data-translate="nosotros">Nosotros</h2>
    <div class="nosotros-container">
        <p data-translate="nosotros_text_1" style="text-align: justify;">En TechShop, nos apasiona la tecnología y trabajamos cada día para ofrecerte los mejores productos electrónicos del mercado. Desde smartphones y laptops hasta accesorios innovadores, seleccionamos cuidadosamente cada artículo para asegurarnos de que cumpla con los más altos estándares de calidad.</p><br>

        <p data-translate="nosotros_text_2" style="text-align: justify;">Nos destacamos por brindar:<br>
        ✅ Productos 100% originales de marcas reconocidas.<br>
        ✅ Precios competitivos sin comprometer la calidad.<br>
        ✅ Atención personalizada para resolver todas tus dudas y asesorarte en tu compra.<br>
        ✅ Envíos rápidos y seguros, para que disfrutes de tu producto lo antes posible.<br></p>

        <p data-translate="nosotros_text_3" style="text-align: justify;">Nuestro compromiso es ofrecerte una experiencia de compra confiable y sencilla, con un equipo dispuesto a ayudarte en cada paso del proceso. ¡Tu satisfacción es nuestra prioridad!</p>
    </div>
</section>


    <section id="productos" class="container py-5">
    <h2 class="text-center" data-translate="productos">Nuestros Productos</h2>

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
                        <img src="img/T1.PNG" class="card-img-top" alt="Producto Apple 1">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_1_title">iPhone 13 Pro</h5>
                            <p class="card-text" data-translate="producto_apple_1_desc">Pantalla Super Retina, cámara triple, rendimiento A15 Bionic.</p>
                            <p><strong>$999</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/C1.PNG" class="card-img-top" alt="Producto Apple 2">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_2_title">MacBook Air M1</h5>
                            <p class="card-text" data-translate="producto_apple_2_desc">Ultra delgado, potente procesador M1, hasta 18 horas de batería.</p>
                            <p><strong>$1099</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/ap1.PNG" class="card-img-top" alt="Producto Apple 3">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_3_title">Apple Watch Series 7</h5>
                            <p class="card-text" data-translate="producto_apple_3_desc">Pantalla más grande, resistencia al agua, monitoreo de salud.</p>
                            <p><strong>$399</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/c2.PNG" class="card-img-top" alt="Producto Apple 4">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_4_title">iPad Pro 11</h5>
                            <p class="card-text" data-translate="producto_apple_4_desc">Pantalla Liquid Retina, chip M1, cámaras profesionales.</p>
                            <p><strong>$799</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/audi.PNG" class="card-img-top" alt="Producto Apple 5">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_5_title">AirPods Pro</h5>
                            <p class="card-text" data-translate="producto_apple_5_desc">Cancelación activa de ruido, sonido envolvente, cómoda adaptación.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/home.PNG" class="card-img-top" alt="Producto Apple 6">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_apple_6_title">HomePod Mini</h5>
                            <p class="card-text" data-translate="producto_apple_6_desc">Sonido envolvente, control por voz, integra con tu hogar inteligente.</p>
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
                        <img src="img/sam1.PNG" class="card-img-top" alt="Producto Samsung 1">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_1_title">Samsung Galaxy S21</h5>
                            <p class="card-text" data-translate="producto_samsung_1_desc">Pantalla Dynamic AMOLED, cámara triple, rendimiento Exynos.</p>
                            <p><strong>$799</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/note.PNG" class="card-img-top" alt="Producto Samsung 2">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_2_title">Samsung Galaxy Note 20</h5>
                            <p class="card-text" data-translate="producto_samsung_2_desc">Pantalla AMOLED, cámara ultra alta resolución, S Pen incluido.</p>
                            <p><strong>$999</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/RE.PNG" class="card-img-top" alt="Producto Samsung 3">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_3_title">Samsung Galaxy Watch 4</h5>
                            <p class="card-text" data-translate="producto_samsung_3_desc">Rendimiento rápido, monitoreo de salud avanzado, pantalla AMOLED.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/ta.PNG" class="card-img-top" alt="Producto Samsung 4">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_4_title">Samsung Galaxy Tab S7</h5>
                            <p class="card-text" data-translate="producto_samsung_4_desc">Pantalla LCD de alta resolución, procesador Snapdragon, S Pen incluido.</p>
                            <p><strong>$649</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/au.PNG" class="card-img-top" alt="Producto Samsung 5">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_5_title">Samsung Buds Pro</h5>
                            <p class="card-text" data-translate="producto_samsung_5_desc">Sonido envolvente, cancelación de ruido, resistencia al agua.</p>
                            <p><strong>$199</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/ho.PNG" class="card-img-top" alt="Producto Samsung 6">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_samsung_6_title">Samsung SmartThings Hub</h5>
                            <p class="card-text" data-translate="producto_samsung_6_desc">Automatiza tu hogar inteligente, compatible con Alexa y Google Assistant.</p>
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
                        <img src="img/moto1.PNG" class="card-img-top" alt="Producto Motorola 1">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_motorola_1_title">Motorola Edge 20</h5>
                            <p class="card-text" data-translate="producto_motorola_1_desc">Pantalla OLED, cámara triple, procesador Snapdragon.</p>
                            <p><strong>$599</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MOTO2.PNG" class="card-img-top" alt="Producto Motorola 2">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_motorola_2_title">Motorola Moto G100</h5>
                            <p class="card-text" data-translate="producto_motorola_2_desc">Pantalla FHD+, cámara cuádruple, rendimiento Qualcomm.</p>
                            <p><strong>$399</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MOTO3.PNG" class="card-img-top" alt="Producto Motorola 3">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_motorola_3_title">Motorola Moto G Power</h5>
                            <p class="card-text" data-translate="producto_motorola_3_desc">Batería de larga duración, pantalla de 6.6", procesador octa-core.</p>
                            <p><strong>$199</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MOTO4.PNG" class="card-img-top" alt="Producto Motorola 4">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_motorola_4_title">Motorola One Fusion+</h5>
                            <p class="card-text" data-translate="producto_motorola_4_desc">Pantalla Max Vision, cámara de 64 MP, batería de 5000mAh.</p>
                            <p><strong>$249</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/MOTO5.PNG" class="card-img-top" alt="Producto Motorola 5">
                        <div class="card-body">
                            <h5 class="card-title" data-translate="producto_motorola_5_title">Motorola Moto E</h5>
                            <p class="card-text" data-translate="producto_motorola_5_desc">Pantalla de 6.2", batería de 3550mAh, cámara dual.</p>
                            <p><strong>$149</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
<div class="col-md-4">
    <div class="card">
        <img src="img/MOTO6.PNG" class="card-img-top" alt="Producto Motorola 6">
        <div class="card-body">
            <h5 class="card-title" data-translate="producto_motorola_6_title">Motorola Razr 5G</h5>
            <p class="card-text" data-translate="producto_motorola_6_desc">Diseño plegable, pantalla OLED, cámara de 48 MP.</p>
            <p><strong>$1399</strong></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>

<section id="opiniones" class="container py-5">
    <h2 class="text-center" data-translate="opiniones">Opiniones de Clientes</h2>
    <div id="carouselOpiniones" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Primer slide con tres opiniones -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center gap-3">
                    <div class="opinion">
                        <img src="img/pho1.avif" alt="Cliente 1">
                        <p class="nombre" data-translate="opinion_1_nombre">Deba Picafresa</p>
                        <p data-translate="opinion_1_texto">"Excelente servicio y productos de calidad. ¡Muy recomendado!"</p>
                    </div>
                    <div class="opinion">
                        <img src="img/pho6.avif" alt="Cliente 2">
                        <p class="nombre" data-translate="opinion_2_nombre">Carlos Vergara</p>
                        <p data-translate="opinion_2_texto">"Rápida entrega y atención personalizada. ¡Volveré a comprar!"</p>
                    </div>
                    <div class="opinion">
                        <img src="img/pho2.avif" alt="Cliente 3">
                        <p class="nombre" data-translate="opinion_3_nombre">Yessi Martinez</p>
                        <p data-translate="opinion_3_texto">"Me sorprendió la rapidez del envío y la calidad del producto. ¡Muy satisfecho!"</p>
                    </div>
                </div>
            </div>

            <!-- Segundo slide con otras tres opiniones -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center gap-3">
                    <div class="opinion">
                        <img src="img/pho3.avif" alt="Cliente 4">
                        <p class="nombre" data-translate="opinion_4_nombre">Laura Gómez</p>
                        <p data-translate="opinion_4_texto">"Gran experiencia de compra, el producto superó mis expectativas."</p>
                    </div>
                    <div class="opinion">
                        <img src="img/pho5.avif" alt="Cliente 5">
                        <p class="nombre" data-translate="opinion_5_nombre">Mario Pérez</p>
                        <p data-translate="opinion_5_texto">"Buena calidad y excelente atención al cliente. ¡Volveré!"</p>
                    </div>
                    <div class="opinion">
                        <img src="img/pho4.avif" alt="Cliente 6">
                        <p class="nombre" data-translate="opinion_6_nombre">Ana Torres</p>
                        <p data-translate="opinion_6_texto">"Totalmente recomendable, todo llegó a tiempo y en buen estado."</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<section id="contacto" class="container py-5">
    <h2 class="text-center" data-translate="contacto">Contáctanos</h2>
    <form action="controller/contacto.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label" data-translate="contacto_nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" data-translate="contacto_email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label" data-translate="contacto_mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-info" data-translate="contacto_boton">Enviar</button>
    </form>
</section>
<footer class="bg-dark text-white text-center p-4">
    <div class="container">
        <div class="row">
            <!-- Columna 1: Enlaces adicionales -->
            <div class="col-md-4 mb-3">
                <p data-translate="footer_texto3">También visita:</p>
                <a href="https://jiks.webcindario.com"><img src="./img/jiks.png" width="100px" alt="Jiks"></a>
            </div>

            <!-- Columna 2: Redes sociales y contacto -->
            <div class="col-md-4 mb-3">
                <p data-translate="footer_texto2">Síguenos en redes sociales:</p>
                <a href="https://facebook.com" target="_blank"><img src="./img/face.jfif" width="75px" alt="Facebook"></a>
                <a href="https://twitter.com" target="_blank"><img src="./img/tw.png" width="75px" alt="Twitter"></a>
                <a href="https://instagram.com" target="_blank"><img src="./img/logoInta.avif" width="75px" alt="Instagram"></a>

                <p data-translate="footer_texto4" class="mt-3">Contacto:</p>
                <p>Email: <a href="mailto:contacto@techshop.com" class="text-white">contacto@techshop.com</a></p>
                <p>Tel: +52 123 456 7890</p>
            </div>

            <!-- Columna 3: Dirección y mapa -->
            <div class="col-md-4 mb-3">
                <p>Dirección: Universidad Politécnica del Estado de Morelos</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.9391500921024!2d-99.14288538908876!3d18.88978048220292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce7436090d122b%3A0x2acb88c1b5c1452a!2sUniversidad%20Polit%C3%A9cnica%20del%20Estado%20de%20Morelos!5e0!3m2!1ses!2smx!4v1741582830053!5m2!1ses!2smx" 
                    width="100%" 
                    height="300" 
                    style="border:0; border-radius:10px; margin-top:10px;" 
                    allowfullscreen="" 
                    loading="lazy" 
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>