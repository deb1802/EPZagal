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
                <img src="img/za.png" alt="Logo" width="100" height="100" class="me-2"> 
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
                            <li><a class="dropdown-item" href="#quejas" data-translate="queja">Quejas</a></li>
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
                            <p data-translate="p1"><strong>$19,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_1">Peso: 204 g</p> 
                            <p data-translate="p1_">Dimensiones: 169.2 x 76.0 x 9.4 mm</p> 
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
                            <p data-translate="p2"><strong>$22,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_2">Peso: 1.29 kg</p> 
                            <p data-translate="p2_">Dimensiones: 159.77 x 75.73 x 8.6 mm</p> 
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
                            <p data-translate="p3"><strong>$8,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_3">Peso: 32 g</p> 
                            <p data-translate="p3_">Dimensiones: 169.2 x 72.6 x 7.9 mm</p>
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
                            <p data-translate="p4"><strong>$17,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_4">Peso: 466 g</p> 
                            <p data-translate="p4_">Dimensiones: 163.3 x 76.0 x 7.9 mm</p>
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
                            <p data-translate="p5"><strong>$5,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_5">Peso: 5.4 g (cada uno)</p> 
                            <p data-translate="p5_">Dimensiones: 168.48 x 74.38 x 9.49 mm</p>
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
                            <p data-translate="p6"><strong>$2,199 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_6">Peso: 345 g</p> 
                            <p data-translate="p6_">Dimensiones: 165.3 x 75.8 x 9.6 mm</p>
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
                            <p ><strong data-translate="p7">$15,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_7">Peso: 204 g</p> 
                            <p data-translate="p7_">Dimensiones: 169.2 x 76.0 x 9.4 mm</p> 
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
                            <p ><strong data-translate="p8">$22,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_8">Peso: 1.29 kg</p>  
                            <p data-translate="p8_">Dimensiones: 159.77 x 75.73 x 8.6 mm</p>
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
                            <p ><strong data-translate="p9">$5,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_9">Peso: 32 g</p> 
                            <p data-translate="p9_">Dimensiones: 169.2 x 72.6 x 7.9 mm</p>
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
                            <p ><strong data-translate="p10">$11,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_10">Peso: 466 g</p>
                            <p data-translate="p10_">Dimensiones: 163.3 x 76.0 x 7.9 mm</p>
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
                            <p ><strong data-translate="p11">$3,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_11">Peso: 5.4 g (cada uno)</p>
                            <p data-translate="p11_">Dimensiones: 168.48 x 74.38 x 9.49 mm</p>
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
                            <p ><strong data-translate="p12">$2,499 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_12">Peso: 345 g</p> 
                            <p data-translate="p12_">Dimensiones: 165.3 x 75.8 x 9.6 mm</p>

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
                            <p><strong data-translate="p13">$11,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_13">Peso: 204 g</p> 
                            <p data-translate="p13_">Dimensiones: 169.2 x 76.0 x 9.4 mm</p> 
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
                            <p data-translate="p14"><strong>$7,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_14">Peso: 1.29 kg</p> 
                            <p data-translate="p14_">Dimensiones: 159.77 x 75.73 x 8.6 mm</p>
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
                            <p data-translate="p15"><strong>$3,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_15">Peso: 32 g</p> 
                            <p data-translate="p15_">Dimensiones: 169.2 x 72.6 x 7.9 mm</p>
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
                            <p data-translate="p16"><strong>$5,299 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_16">Peso: 466 g</p> 
                            <p data-translate="p16_">Dimensiones: 163.3 x 76.0 x 7.9 mm</p>
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
                            <p data-translate="p17"><strong>$2,799 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_17">Peso: 500 g</p> 
                            <p data-translate="p17_">Dimensiones: 168.48 x 74.38 x 9.49 mm</p>
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
                            <p data-translate="p18"><strong>$27,999 MXN</strong></p> <!-- Precio en formato mexicano -->
                            <p data-translate="p_18">Peso: 345 g</p> 
                            <p data-translate="p18_">Dimensiones: 165.3 x 75.8 x 9.6 mm</p>
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
                        <p data-translate="opinion_1_fecha"><small>Fecha: <time datetime="2023-03-12">12/03/2023</time></small></p> <!-- Formato: Fecha -->
                    </div>
                    <div class="opinion">
                        <img src="img/pho6.avif" alt="Cliente 2">
                        <p class="nombre" data-translate="opinion_2_nombre">Carlos Vergara</p>
                        <p data-translate="opinion_2_texto">"Rápida entrega y atención personalizada. ¡Volveré a comprar!"</p>
                        <p data-translate="opinion_2_fecha"><small>Fecha: <time datetime="2023-03-13">13/03/2023</time></small></p> <!-- Formato: Fecha -->
                    </div>
                    <div class="opinion">
                        <img src="img/pho2.avif" alt="Cliente 3">
                        <p class="nombre" data-translate="opinion_3_nombre">Yessi Martinez</p>
                        <p data-translate="opinion_3_texto">"Me sorprendió la rapidez del envío y la calidad del producto. ¡Muy satisfecho!"</p>
                        <p data-translate="opinion_3_fecha"><small>Fecha: <time datetime="2023-03-14">14/03/2023</time></small></p> <!-- Formato: Fecha -->
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
                        <p data-translate="opinion_4_fecha"><small>Fecha: <time datetime="2023-03-15">15/03/2023</time></small></p> <!-- Formato: Fecha -->
                    </div>
                    <div class="opinion">
                        <img src="img/pho5.avif" alt="Cliente 5">
                        <p class="nombre" data-translate="opinion_5_nombre">Mario Pérez</p>
                        <p data-translate="opinion_5_texto">"Buena calidad y excelente atención al cliente. ¡Volveré!"</p>
                        <p data-translate="opinion_5_fecha"><small>Fecha: <time datetime="2023-03-16">16/03/2023</time></small></p> <!-- Formato: Fecha -->
                    </div>
                    <div class="opinion">
                        <img src="img/pho4.avif" alt="Cliente 6">
                        <p class="nombre" data-translate="opinion_6_nombre">Ana Torres</p>
                        <p data-translate="opinion_6_texto">"Totalmente recomendable, todo llegó a tiempo y en buen estado."</p>
                        <p data-translate="opinion_6_fecha"><small>Fecha: <time datetime="2023-03-17">17/03/2023</time></small></p> <!-- Formato: Fecha -->
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
<!-- FORMULARIO CONTACTO -->
<section id="contacto" class="container py-5">
    <h2 class="text-center" data-translate="contacto">Contáctanos</h2>
    <form action="controller/contacto.php" method="POST" class="form-contacto">
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

<!-- FORMULARIO QUEJAS -->
<section id="quejas" class="container py-5">
    <h2 class="text-center" data-translate="quejas">Quejas de Usuarios</h2>
    <form action="controller/quejas.php" method="POST" class="form-quejas">
        <div class="mb-3">
            <label for="nombre" class="form-label" data-translate="quejas_nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" data-translate="quejas_email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="queja" class="form-label" data-translate="quejas_mensaje">Queja</label>
            <textarea class="form-control" id="queja" name="queja" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger" data-translate="quejas_boton">Enviar Queja</button>
    </form>
    <a href="quejas_lista.php" class="btn btn-info mt-3" data-translate="quejas_ver">Mostrar Quejas</a>
</section>


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
                <script src="https://cdn.userway.org/widget.js" data-account="kjnqkEfZx0" data-size="large"></script>
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
        <a href="https://wa.me/7775368702" class="whatsapp-button" target="_blank">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_j6zKHu8BEYzvw9sK3O5kVj2jE5xA0NNdYw&s" alt="WhatsApp">
        </a>
    </div>
</footer>

<style>
/* Estilos para posicionar el widget de accesibilidad */
.userway-widget-container {
    position: fixed;
    bottom: 20px; /* Ajusta la distancia desde la parte inferior */
    right: 20px;  /* Ajusta la distancia desde la parte derecha */
    z-index: 9999; /* Asegura que esté por encima de otros elementos */
}
</style>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




<script src="js/main.js"></script>
</body>
</html>