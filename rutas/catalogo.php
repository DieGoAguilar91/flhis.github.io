<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap5.1.3/css/bootstrap-grid.css">
    <title>Fruver la Huerta</title>
    <link rel="icon" href="../img/logo.ico" type="image/x-icon">

    <!--CSS estilos propios -->

    <link rel="stylesheet" href="../css/catalogo.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/general.css">

    <!-- Links Externos -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="charizard.png" type="image/x-icon">
    


</head>
<body>
<div class="container-fluid  ">
    <!--  Navbar de inicio-->
    <div class="row menu-total">
        <div class="col-12 menu">
            <div class="row bg-white">
                <div class="col-4 col-md-4 col-lg-4  encabezado1"> ☎️ 3106968428 <a href="" class="mx-3">📞 Contacto</a> | <a href="" class="mx-3">📒 Blog</a> </div>
                <div class="col-12 col-sm-12  mx-0 my-0 col-md-12 col-lg-4 text-center mensaje-auto">
                    <style>
                        /* Estilo para el mensaje */
                        #mensaje {
                            font-size: 16px;
                            font-weight: bold;
                            text-align: center;
                            opacity: 0; /* Inicialmente oculto */
                            transition: opacity 1s ease-in-out;
                        }
                    </style>
                     <div id="mensaje">Envíos Gratis a Tunja</div>
        
                     <script>
                         // Array con los mensajes
                         const mensajes = [
                             "✅ Envíos GRATIS en Tunja capital a partir de $10.000",
                             " Entrega en 24 o 48 horas 🛵"
                         ];
                 
                         // Elemento del DOM para mostrar el mensaje
                         const mensajeElement = document.getElementById("mensaje");
                 
                         // Índice actual del mensaje
                         let indiceMensaje = 0;
                 
                         // Función para cambiar el mensaje cada 5 segundos
                         function cambiarMensaje() {
                             // Aplica la transición de difuminado al ocultar
                             mensajeElement.style.opacity = "0";
                 
                             setTimeout(() => {
                                 // Cambia el mensaje
                                 mensajeElement.textContent = mensajes[indiceMensaje];
                 
                                 // Incrementa el índice (circular)
                                 indiceMensaje = (indiceMensaje + 1) % mensajes.length;
                 
                                 // Aplica la transición de difuminado al mostrar
                                 mensajeElement.style.opacity = "1";
                             }, 1000);
                         }
                 
                         // Inicializa el cambio de mensajes
                         cambiarMensaje();
                         setInterval(cambiarMensaje, 5000); // Cambia cada 5 segundos
                     </script>
                </div>
                <div class="col-4 col-md-4 col-lg-4  mx-0 my-0 text-center align-content-center align-items-center justify-content-center encabezado1 redes">
                    <div class="iconos">
                       
                        <div class="ico">
                            <svg>
                                <circle cx="20" cy="20" r=17.5 stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-instagram'></i>
                        </div>
                        <div class="ico">
                            <svg>
                                <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-facebook-circle'></i>
                        </div>
                        <div class="ico">
                            <svg>
                                <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-whatsapp'></i>
                        </div>
                        <div class="ico">
                            <svg>
                                <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-x' >
                                <!-- Imagen 1 -->
                                <img src="../img/iconos/x-negro.png" alt="Imagen 1" class="imagen" id="imagen1" heigth="32" width="32">

                                <!-- Imagen 2 (inicialmente oculta) -->
                                <img src="../img/iconos/x.png" heigth="37" width="37" alt="Imagen 2" class="imagen" id="imagen2" style=" display: none; ">
                                
                                <script>
                                    // Obtener referencias a las imágenes
                                    const imagen1 = document.getElementById('imagen1');
                                    const imagen2 = document.getElementById('imagen2');

                                    // Evento al pasar el cursor sobre la imagen 1
                                    imagen1.addEventListener('mouseover', () => {
                                        // Ocultar imagen 1
                                        imagen1.style.display = 'none';
                                        // Mostrar imagen 2
                                        imagen2.style.display = 'block';
                                    });

                                    // Evento al quitar el cursor de la imagen 2
                                    imagen2.addEventListener('mouseout', () => {
                                        // Mostrar imagen 1
                                        imagen1.style.display = 'block';
                                        // Ocultar imagen 2
                                        imagen2.style.display = 'none';
                                    });
                                </script>
                               
                            
                            </i>
                        </div>
                        <div class="ico">
                            <svg >
                                <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-youtube'></i>
                        </div>
                        <div class="ico">
                            <svg>
                                <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                            </svg>
                            <i class='bx bxl-tiktok'></i>
                        </div>   
                    </div>
                </div>

                <div class="col-4 col-sm-3 col-md-3 col-lg-4   mx-0 my-0 align-content-center d-flex justify-content-center encabezado2">
                    <img class="circulo-1" src="../img/banner.png"  width="90%">    
                </div>
                <div class="col-8 col-sm-9 col-md-9 col-lg-8 text-center  mx-0 my-0 encabezado2">
                    <div class="row d-flex mx-auto my-4 align-content-center align-items-center justify-content-center  ">
                        <div class="col-4 col-sm-4 col-md-6 col-lg-6 text-center">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Buscar producto..." aria-label="Search">
                                <button class="text-dark btn btn-outline-success bg-success" type="submit">Buscar</button>
                            </form>  
                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 text-center"><a href="login.php"> Acceder/ Registrarse</a></div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3  text-center">
                            <button type="submit" class="btn btn-warning "><img src="../img/iconos/carrito-de-compras.png" class="icon" alt="">  000 $</button>
                        </div>
                    </div>
                </div>

                <nav class="col-12 navbar navbar-expand-lg navbar-light mx-0 my-0 "> <!-- fixed-top -->
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="navbar-brand">
                            <a href="" class="flhis">FLHIS </a>
                            <a href="" class="cesta"><img src="../img/iconos/carrito-de-compras.png" class="icon" alt=""></a>
                            <a href="" class="cliente"><img src="../img/iconos/cliente.png" class="icon" alt=""></a>        
                      </div>
                      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu  </h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="../index.html">🏠 Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="tienda.php" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    🏪 Tienda
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                  <li><a class="dropdown-item" href="tienda.php">🍇 Frutas</a></li>
                                  <li><a class="dropdown-item" href="tienda.php">🥑 Verduras</a></li>
                                  <li><a class="dropdown-item" href="tienda.php">🧃 Abarrotes</a></li>
                                  <li><a class="dropdown-item" href="tienda.php">🥩 Carnes</a></li>
                                  <li><a class="dropdown-item" href="tienda.php">🧀 Lacteos</a></li>
                                  <li>
                                    <hr class="dropdown-divider">
                                  </li>
                                  <li><a class="dropdown-item" href="tienda.php">Ingresar a la tienda</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="ofertas.php">🎁 Ofertas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="catalogo.php">📖 Catalogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">📒 Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.php">👨‍🌾 Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactanos.php">📞 Contactanos</a>
                            </li>
                          </ul>
                        
                        </div>
                      </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Menu -->
        <style>
            /* Estilo para la barra de navegación (navbar) */
            .menu {
             
            top: -300px; /* Inicialmente oculto arriba */
            left: 0;
            width: 100%;
            transition: top 0.3s ease; /* Transición suave */
            z-index: 100;
            }
            .menu.mostrar {
                z-index: 100;
                position: fixed;
                top: 0px;  
            }
        .mensaje-auto.ocultar {
                visibility: hidden;
                height: 0;
                width: 0;
                padding: 0;
            }
            .encabezado1.ocultar {
                visibility: hidden;
                height: 0;
                width: 0;
                padding: 0;
            }
            .redes.ocultar {
                visibility: hidden;
                height: 0;
                width: 0;
                padding: 0;
            }
        </style>
        
        <script>
            // JavaScript para mostrar la barra de navegación al deslizar hacia abajo
            window.addEventListener('scroll', function() {
                const menu = document.querySelector('.menu ');
                if (window.scrollY >= 500) {
                    menu.classList.add('mostrar');
                } else {
                    menu.classList.remove('mostrar');
                }
            });

            window.addEventListener('scroll', function() {
                const ocultar = document.querySelector('.mensaje-auto');
                if (window.scrollY >= 500) {
                    ocultar.classList.add('ocultar');
                } else {
                    ocultar.classList.remove('ocultar');
                }
            });

            window.addEventListener('scroll', function() {
                const ocultar = document.querySelector('.encabezado1');
                if (window.scrollY >= 500) {
                    ocultar.classList.add('ocultar');
                } else {
                    ocultar.classList.remove('ocultar');
                }
            });
                window.addEventListener('scroll', function() {
                const ocultar = document.querySelector('.redes');
                if (window.scrollY >= 500) {
                    ocultar.classList.add('ocultar');
                } else {
                    ocultar.classList.remove('ocultar');
                }
            });
        </script>
        

    
    </div>

<!-- Carrusel Promosiones -->
<div class="carusel-promociones">

</div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../img/ofertas/arandanos.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/ofertas/fresas.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/ofertas/manzanasrojas.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>T</h5>
        <p></p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../img/ofertas/acelgas.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- Contenido de la pagina -->
    <!--Seccion 1 -->
    <div class="row p-1 align-content-center d-flex justify-content-center text-center my-2">
        <h2>Categorias</h2>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen"> <!-- Esta clase debes poner border radius = card -->
                    <img src="../img/Categorias/frutas.jpg" class="card-img imagen" >
                    <div class="card-img-overlay">
                        <div class="espacio"></div>
                    <h5 class="card-title">Frutas</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen">
                    <img src="../img/Categorias/pimenton.jpg" class="card-img imagen">
                    <div class="card-img-overlay">
                        <div class="espacio"></div>
                    <h5 class="card-title">Verduras</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>  <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen">
                    <img src="../img/Categorias/yerbas.jpg" class="card-img imagen">
                    <div class="card-img-overlay">
                        <div class="espacio"></div>
                    <h5 class="card-title">Aromaticas</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen">
                    <img src="../img/Categorias/abarrotes.jpg" class="card-img imagen">
                    <div class="card-img-overlay">
                        <div class="espacio"></div>
                    <h5 class="card-title">Abarrotes</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen">
                    <img src="../img/Categorias/carnes.jpg" class="card-img imagen">
                    <div class="card-img-overlay ">
                        <div class="espacio"></div>
                    <h5 class="card-title ">Carnes</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 contenedor-imagen">
                    <img src="../img/Categorias/lacteos.jpg" class="card-img imagen" >
                    <div class="card-img-overlay ">
                    <div class="espacio"></div>
                        <h5 class="card-title ">Lacteos</h5>
                        <p class="card-text ">73 Productos</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- seccion 2 -->
    <div class="row align-content-center d-flex justify-content-center">
        <div class="col-12 my-3">
            <h2>Nuestros Productos mas vendidos</h2>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/aguacate.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Aguacate</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/arandanos.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Arandanos</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/jengibre.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Jengibre</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/mango.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Mango</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/pina.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Piña</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card card-producto" style="width: 18rem;">
                    <img src="../img/fruver/banano.png" class="card-img-top" alt="...">
                    <div class="card-body text-center align-content-center">
                      <h5 class="card-title">Piña</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 align-content-center d-flex justify-content-center my-3">
            <a href="tienda.php" class="btn btn-success col-6 col-sm-5 col-md-4 col-lg-3">Ir a la Tienda</a>
        </div>
     
    </div>

    <!-- seccion 3 -->
    <div class=" align-content-center d-flex justify-content-center redondear-1">
        <div class="card col-12 col-sm-11 col-md-10 col-lg-9 redondear-1">
            <div class="redondear-1 card-img w-100" id="anuncio"></div>
          <script>
            // Función para cambiar la imagen cuando el ancho de la pantalla sea menor o igual a 400 píxeles
            function cambiarImagen() {
                const bgElement = document.getElementById('anuncio');
                const windowWidth = window.innerWidth;
    
                if (windowWidth <= 700) {
                    // Cambia la ruta de la imagen según tus necesidades
                    bgElement.style.backgroundImage = 'url("../img/fondos/mercado.jpg")';
                } else {
                    // Restaura la imagen original
                    bgElement.style.backgroundImage = 'url("../img/fondos/mercado1.jpg")';
                }
            }
    
            // Ejecuta la función al cargar la página y cuando se redimensiona la ventana
            window.addEventListener('load', cambiarImagen);
            window.addEventListener('resize', cambiarImagen);
        </script>
            <div class="card-img-overlay text-white align-content-center d-grid justify-content-star presupuesto-empresa">
                <h2 class="card-title ">Razones por las cuales debes comprar en Fruver La Huerta</h2>
                <p class="card-text">
                    Cuando compras en nuestra tienda, no solo llenas tu despensa 
                    con frutas frescas y saludables, sino que también apoyas directamente a nuestros campesinos.
                </p> 
                <a href="tienda.php" class="btn btn-success col-5 col-sm-4">Comprar Ahora</a>
            </div>
        </div>
    </div>

    <!-- Seccion 4 -->
    <div class="row my-3 pictures p-1">
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 p-1">
            <img src="../img/ofertas/fruverlauerta.gif" class="w-100 redondear-1" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-1">
            <img src="../img/ofertas/llegoelmercado.png" class="w-100 redondear-1" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-3 p-1">
            <img src="../img/ofertas/papa.oferta.png" class="w-100 redondear-1" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-9 p-1">
            <img src="../img/ofertas/Promoción.gif" class="w-100 redondear-1" alt="">
        </div>
    </div>

    <!-- seccion 2 -->
    <div class="row align-content-center d-flex justify-content-center">
        <div class="col-12 my-3 text-center">
            <h2>Razones para comprar en Fruver La Huerta</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
          <img src="../img/recursos/bolsa.png" class="w-100" alt="">
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
                <div class="col-12">
                    <h3>Cumplimiento</h3> <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro ut quos aliquid aut officiis est, optio earum consequatur adipisci sit totam voluptatum nihil sint officia, reprehenderit ipsum accusantium similique!
                </div>
            </div>
        </div>
     
    </div>


    <!-- Seccion de Categorias -->
    <div class="row my-1">
        <a href="#" class=" col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/frutas.jpg" class="imagen-cambiante circulo-1 " height="200px" alt=""> 
            <h3>Frutas</h3>
        </a>
        <a href="#" class=" col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/pimenton.jpg" class="imagen-cambiante circulo-1 "  alt=""> 
            <h3>Verduras</h3>
        </a>
        <a href="#" class=" col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/yerbas.jpg" class="imagen-cambiante circulo-1 "  alt=""> 
            <h3>Aromaticas</h3>
        </a>
        <a href="#" class="col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/abarrotes.jpg" class="imagen-cambiante circulo-1 "  alt=""> 
            <h3>Abarrotes</h3>
        </a>
        <a href="#" class=" col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/carnes.jpg" class="imagen-cambiante circulo-1 "  alt=""> 
            <h3>Carnes</h3>
        </a>
        <a href="#" class="col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center card-cat">
            <img src="../img/Categorias/lacteos.jpg" class="imagen-cambiante circulo-1 " alt=""> 
            <h3>Lacteos</h3>
        </a>
        
      
    </div>
  
    <!--  Pie de pagina -->
    <?php
        include "../templates/footer.php"
    ?>  
</div> 



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
