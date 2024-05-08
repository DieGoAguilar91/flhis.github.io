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
    <link rel="stylesheet" href="../css/tienda.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/efectoparalax/style.css">

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
                            <a href="rutas/login.php" class="cliente"><img src="../img/iconos/cliente.png" class="icon" alt=""></a>        
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
                                <a class="nav-link dropdown-toggle active" href="tienda.php" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link" href="catalogo.php">📖 Catalogo</a>
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

    <!--  Efecto scroll -->
        <main>  
            <section>  
                <style>
                    /* Estilo para la imagen de fondo */
                    #bg {
                        position: absolute;
                        background-size: cover;
                        width: 100%;
                        height: 160vh;
                    }
                </style>
              <div id="bg"></div>
              <script>
                // Función para cambiar la imagen cuando el ancho de la pantalla sea menor o igual a 400 píxeles
                function cambiarImagen() {
                    const bgElement = document.getElementById('bg');
                    const windowWidth = window.innerWidth;
        
                    if (windowWidth <= 600) {
                        // Cambia la ruta de la imagen según tus necesidades
                        bgElement.style.backgroundImage = 'url("../img/fondos/vertical.jpg")';
                    } else {
                        // Restaura la imagen original
                        bgElement.style.backgroundImage = 'url("../img/fondos/eje_cafetero.jpg")';
                    }
                }
        
                // Ejecuta la función al cargar la página y cuando se redimensiona la ventana
                window.addEventListener('load', cambiarImagen);
                window.addEventListener('resize', cambiarImagen);
            </script>

                <h2 id="text">Fruver La Huerta</h2>
                <img src="../img/fondos/frutas.png" id="man" class="personaje" />
                <img src="../img/recursos/clouds_1.png" id="clouds_1"/>
                <img src="../img/recursos/clouds_2.png" id="clouds_2"/>
            </section>
        </main>
        <div id="lastray" class="element"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>
        <script src="../js/efectoparallax.js"></script>

    <!-- Contenido de la pagina -->
    <!--Seccion 1 -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-3  filtros ">
            <h2>Filtros</h2> 
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="1">Frutas</option>
                <option value="2">Verduras</option>
                <option value="3">Aromaticas</option>
                <option value="4">Abarrotes</option>
                <option value="5">Carnes</option>
                <option value="3">Lacteos</option>
            </select>
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Marca</option>
                <option value="1">Zenu</option>
                <option value="2">Nutresa</option>
                <option value="3">Fruco</option>
                <option value="4">Bary</option>
                <option value="5">Colanta</option>
                <option value="3">Riopaila</option>
            </select>
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Rango de precio</option>
                <option value="1">$1000-$2000</option>
                <option value="2">$5000-$10000</option>
                <option value="3">$10000-$15000</option>
                <option value="4">$20000-$30000</option>
                <option value="5">$40000-$50000</option>
                <option value="3">$50000-Mas..</option>
            </select>
             <br>
            <div class="row gap-3 d-flex justify-content-center align-content-center  mt-3 text-center">
                <div class="">
                    <label for="">Desde</label>
                    <input type="text">
                </div>
              
               
                <div class="">
                    <label for="">Hasta</label>
                    <input type="text">
              </div>
            </div>
            <br>
            <div class="align-content-center d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mx-auto ">Aplicar Filtros</button>
            </div>
            
        </div>
        <div class="my-3 col-12 col-sm-12 col-md-8 col-lg-9 align-content-center d-flex justify-content-center">
            <div class="row align-content-center d-flex justify-content-center">
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/aguacate.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Aguacate</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/arandanos.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Arandanos</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/jengibre.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Jengibre</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3  ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/mango.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center ">
                              <h5 class="card-title">Mango</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/banano.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Banano</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/limon.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Limon</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/fresa.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Fresa</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/calabaza.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Calabaza</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/guayaba.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Guayaba</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3  ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/cebolla.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center ">
                              <h5 class="card-title">Cebolla</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/granadilla.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Granadilla</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/manzana.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Manzana</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/maracuya.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Maracuya</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/melon.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Melon</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/papaya.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Papaya</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/pimenton.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Pimenton</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/sandia.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Sandia</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/tomate.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Tomate</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/uvas.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Uvas</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 ">
                    <div class="row p-1"> 
                        <div class="card card-producto" style="width: 18rem;">
                            <img src="../img/fruver/zanahoria.png" class="card-img-top" alt="...">
                            <div class="card-body text-center align-content-center">
                              <h5 class="card-title">Zanahoria</h5>
                              <p class="card-text">Venta por Kg <br> $9,000</p>
                              <button type="submit" class="btn btn-warning mx-auto ">Añadir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seccion de Informacion -->
                <div class="col-12 my-5">
                    <h2>Fruta de la Huerta a la Ciudad</h2>
                    <p class="parrafo">
                        <b>Las frutas</b>, esos regalos coloridos y jugosos de la naturaleza,
                        no solo son deliciosas, sino también esenciales para nuestra salud y
                        bienestar. Aquí te presento un breve párrafo que destaca la importancia
                        de las frutas y sus beneficios: <br>
                        <b>Las frutas: Nutrición en su forma más dulce</b>
                        Las frutas son verdaderas joyas de la alimentación. Repletas de vitaminas,
                        minerales, antioxidantes y fibra, estas maravillas naturales nos brindan
                        una variedad de beneficios para la salud: <br>
        
                        1. <b>Vitaminas y Minerales</b>: Las frutas son una fuente inagotable
                        de vitaminas esenciales, como la vitamina C, que fortalece nuestro 
                        sistema inmunológico, y el potasio, que regula la presión arterial.
                        Además, contienen minerales como el calcio y el magnesio, fundamentales
                        para la salud ósea y muscular. <br>
        
                        2. <b>Antioxidantes</b>: Los colores vibrantes de las frutas son un
                        indicio de su riqueza en antioxidantes. Estos compuestos protegen
                        nuestras células del daño causado por los radicales libres, reduciendo 
                        el riesgo de enfermedades crónicas y el envejecimiento prematuro. <br>
        
                        3. <b>Fibra Digestiva</b>: Las frutas son excelentes fuentes de fibra, 
                        que favorece la digestión, previene el estreñimiento y mantiene nuestro 
                        sistema gastrointestinal en óptimas condiciones. <br>
        
                        4. <b>Hidratación Natural </b>: Con alto contenido de agua, las frutas 
                        nos mantienen hidratados y refrescados, especialmente en climas cálidos. <br>
        
                        5. <b>Control del Peso</b>: Su dulzura natural satisface nuestros antojos 
                        de azúcar sin añadir calorías vacías. Además, la fibra nos hace sentir 
                        saciados, ayudando en la pérdida de peso. <br>
        
                        6. <b>Salud Cardiovascular</b>: Consumir frutas regularmente reduce el 
                        riesgo de enfermedades cardíacas al mantener los niveles de colesterol 
                        bajo control y mejorar la circulación sanguínea. <br>
        
                        7. <b>Prevención de Enfermedades Crónicas</b>: Estudios sugieren que una
                        dieta rica en frutas está asociada con una menor incidencia de diabetes 
                        tipo 2, ciertos tipos de cáncer y enfermedades neurodegenerativas.
                    </p>
                    <h2 class="tema">Prueba nuestras frutas de temporada y disfruta de todo su sabor y aroma</h2>
                    <p class="parrafo">
                        <b>Fruver La Huerta</b> te invita a descubrir la frescura y la vitalidad de las frutas de temporada. 
                        Nuestro compromiso es brindarte productos de alta calidad, directamente de los 
                        huertos locales a tu mesa. ¿Por qué elegirnos? <br>
                        <b>Frutas de Temporada</b>: En Fruver La Huerta, celebramos la diversidad de las estaciones. 
                        Durante la primavera, encontrarás jugosas fresas y cerezas. En verano, las sandías y melocotones 
                        son las estrellas. El otoño nos trae manzanas crujientes y peras dulces, mientras que en invierno, 
                        las naranjas y mandarinas llenan nuestras canastas. ¡Cada fruta tiene su momento perfecto! <br>
                        <b>Calidad Garantizada</b>: Seleccionamos cuidadosamente cada pieza para asegurarnos de 
                        que esté en su punto óptimo de madurez. Queremos que disfrutes de la frescura y el sabor auténtico de la naturaleza. <br>
                        <b>Entrega Rápida</b>: ¿Antojo de frutas? No esperes más. Nuestros horarios de entrega son flexibles: <b>24/48</b> 
                        horas desde que realizas tu pedido hasta que lo tienes en tus manos. Frescura exprés para ti y tu familia.
                        <b>Variedad Nutricional</b>: Las frutas son una fuente inigualable de vitaminas, minerales y antioxidantes. Desde las 
                        clásicas manzanas hasta las exóticas pitahayas, tenemos una amplia variedad para satisfacer todos los gustos y necesidades nutricionales. <br>
                        <b>Apoyo a los Agricultores Locales</b>: Comprando en Fruver La Huerta, apoyas a los agricultores locales y contribuyes 
                        al desarrollo sostenible de nuestra comunidad. <br> <br>

                        Así que, ¿listo para llenar tu cesta con la frescura y la vitalidad de las frutas? ¡Visítanos en línea o en nuestras tiendas 
                        físicas y descubre por qué somos la elección natural para los amantes de la salud y el sabor! 🌱🌟
                    </p>
                </div>
            </div>
        </div>
       
    </div>

    <!-- Seccion de Categorias -->
    <div class="row my-4">
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

