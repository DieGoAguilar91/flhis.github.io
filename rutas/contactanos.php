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

    <link rel="stylesheet" href="../css/contacto.css">
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
                                <a class="nav-link " href="catalogo.php">📖 Catalogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="blog.php">📒 Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="nosotros.php">👨‍🌾 Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contactanos.php">📞 Contactanos</a>
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

<!-- Ubicacion -->
<div class="carusel-promociones">

</div>
<div class="row">
    <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d992.8367463175532!2d-73.36142073049959!3d5.515411334550445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzAnNTUuNSJOIDczwrAyMSczOC44Ilc!5e0!3m2!1ses!2sco!4v1710796820186!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
    <!-- Contenido de la pagina -->

    <h1 class="my-2 text-center">Fruver la Huerta</h1>
    <h4 class="my-2 text-center">Somos Fruver La huerta, Una empresa con responsabilidad social</h4>
    <div class="row pading-7">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
            <h4>Envianos un Email</h4>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 align-content-center justify-content-center p-2">
                    <label for="">Nombre Completo</label> 
                    <input type="text" class="w-100">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 align-content-center justify-content-center p-2">
                    <label for="">Correo Electronico</label> 
                    <input type="email" class="w-100">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 align-content-center justify-content-center p-2">
                    <label for="">Telefono</label> 
                    <input type="text" class="w-100">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 align-content-center justify-content-center p-2">
                    <label for="">Nombre de tu Negocio</label> 
                    <input type="email" class="w-100">
                </div>
                <div class="col-12 align-content-center justify-content-center p-2">
                    <label for="">Mensaje</label> 
                   <textarea name="" id="" cols="30" rows="10" class="w-100"></textarea>
                </div>
                <div class="col-6">
                    <button class="text-dark btn btn-outline-warning bg-warning" type="submit">Enviar Mensaje</button>
                </div>
                
                
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <h5>Queremos Escucharte</h5>
            <p> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi eum quasi nihil esse iure temporibus est, quos autem impedit commodi fugit magni voluptas ut at dolorum dolores obcaecati consectetur vel. <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum praesentium adipisci obcaecati iusto culpa perferendis nam saepe, iste, dolore, sapiente officia minima voluptates harum qui? Minus quos in sapiente! Accusantium.
            </p>
            <h5>Medios de Contacto</h5>
            <div class="row">
                <div class="col-6">
                    <div class="row ">
                        <div class="col-5 d-flex justify-content-center align-items-center aling-content-center">
                            <img src="../img/iconos/soporte-de-contacto.png" class="mediosdecomunicacion">
                        </div>
                        <div class="col-7 text-center d-grid justify-content-center align-items-center aling-content-center">
                           <p> <h5 class="verde"> Call Center</h5>310 6968428</p>
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center aling-content-center">
                            <img src="../img/iconos/calendario.png" class="mediosdecomunicacion">
                        </div>
                        <div class="col-7 text-center d-grid justify-content-center align-items-center aling-content-center">
                           <p> <h5 class="verde">Horarios</h5>Lunes a Sabado <br> 7:30 a.m - 8:00 p.m</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="row ">
                        <div class="col-5 d-flex justify-content-center align-items-center aling-content-center">
                            <img src="../img/iconos/whatsapp.png" class="mediosdecomunicacion">
                        </div>
                        <div class="col-7 text-center d-grid justify-content-center align-items-center aling-content-center">
                           <p> <h5 class="verde">Whatsapp</h5>310 6968428</p>
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center aling-content-center">
                            <img src="../img/iconos/mapa.png" class="mediosdecomunicacion">
                        </div>
                        <div class="col-7 text-center d-grid justify-content-center align-items-center aling-content-center">
                           <p> <h5 class="verde">Ubicacion</h5>Cl 4A #4-12 a 4-52 Tunja, Boyacá</p>
                        </div>
                    </div>
                    
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

