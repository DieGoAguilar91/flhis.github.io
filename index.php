<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilos.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap5.1.3/css/bootstrap-grid.css">
    <title>Fruver la Huerta</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <!--CSS estilos propios -->
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">


</head>
<body>
<div class="container-fluid text-dark bg-opacity-10 ">
    <!--  Navbar de inicio-->
    <div class="row shadow-lg rounded ">
        <div class="col-4 col-md-4 col-lg-4 text-center fs-5 bg-gris">📞 3106968428 <a href="">Contacto</a> | <a href="">Blog</a> </div>
        <div class="col-4 col-md-4 col-lg-4 text-center bg-gris">
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
                     "Envíos Gratis a Tunja",
                     "Entrega en 24 o 48 horas"
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
        <div class="col-4 col-md-4 col-lg-4 text-center fs-5 bg-gris">Siguenos 📧 📧 📧 📧</div>

        <div class="col-4 col-sm-3 col-md-4 col-lg-4 ">
            <img class="rounded" src="img/logo.png" width="100px"alt="">
        </div>
        <div class="col-8 col-sm-9 col-md-8 col-lg-8   text-center">
            <div class="row d-flex mx-auto my-4 align-content-center align-items-center justify-content-center  ">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar producto..." aria-label="Search">
                        <button class="text-dark btn btn-outline-success bg-success" type="submit">Buscar</button>
                    </form>  
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center"><a href="">Acceder/ Registrarse</a></div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4  text-center">🛒 $000</div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light "> <!-- fixed-top -->
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">FLHIS</a>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Tienda
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                          <li><a class="dropdown-item" href="#">Frutas</a></li>
                          <li><a class="dropdown-item" href="#">Verduras</a></li>
                          <li><a class="dropdown-item" href="#">Abarrotes</a></li>
                          <li><a class="dropdown-item" href="#">Carnes</a></li>
                          <li><a class="dropdown-item" href="#">Lacteos</a></li>
                          <!-- <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactanos</a>
                    </li>
                  </ul>
                
                </div>
              </div>
            </div>
        </nav>
        
        <!-- Modal de inio de secion -->
        <!-- 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>
        

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
            </div>
        </div> -->


        <!-- Carrito de compra ¡importante -->
        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

        <div class="offcanvas offcanvas-start col-5" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
        </div> -->
    
    </div>

    <!--  Carrusel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carrusel/image1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carrusel/image2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carrusel/image3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carrusel/image4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
    <!--  Seccion 1 -->
    <div class="row my-3" >
        <div class="col-12">
            <h1 class="text-center py-3 fw-bold ">Nuestros productos</h1>
            <p class="fs-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto provident eum necessitatibus eveniet quaerat blanditiis quam 
                consequuntur quasi exercitationem ab! Nemo iusto illum necessitatibus rem ratione ipsam sit inventore 
                doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ut, vero sunt fugit delectus
                velit a inventore fuga laboriosam culpa asperiores doloribus recusandae ullam accusantium reiciendis dicta, ad commodi obcaecati!
            </p>
        </div> 
        <div class="col-12 bg-success">
            <div class="row align-content-center d-flex justify-content-center">
                <div class="col-12 align-content-center d-flex justify-content-center">
                    <img src="img/Inicio-recursos/canastas.jpg" class="rounded-3" width="70%" alt="">
                </div>
                <div class="col-6 align-content-center d-flex justify-content-center ">
                    <div class="text-center rounded-3 bg-white" >
                        <h2>Online, sencillo y sabroso</h2> <br>
                        <p class="fs-5"  >
                            Fruta y verdura del campo a la mesa. En el Fruver la Huerta ofrecemos multitud
                            de productos saludables, desde gran variedad de frutas y verduras, como hierbas aromáticas,
                            productos gourmets  y magníficas cestas de frutas para regalar o para empresas. Un regalo saludable y a buen precio.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        
    <!--Seccion 2 -->
    <div class="row p-4 align-content-center d-flex justify-content-center">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0 "> <!-- Esta clase debes poner border radius = card -->
                    <img src="img/Categorias/MELOCOTON-buena-800x585.webp" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                    <h5 class="card-title">Frutas</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0">
                    <img src="img/Categorias/ROJO-buena-800x597.webp" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                    <h5 class="card-title">Verduras</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>  <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0">
                    <img src="img/Categorias/HIERBABUENA-buena-800x534.webp" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                    <h5 class="card-title">Aromaticas</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0">
                    <img src="img/Categorias/abarrotes.jpg" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                    <h5 class="card-title">Abarrotes</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0">
                    <img src="img/Categorias/food-tray-delicious-salami-pieces-600nw-537823303.webp" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                    <h5 class="card-title">Carnes</h5>
                    <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-2"> 
                <div class="card p-0 mx-0">
                    <img src="img/Categorias/Imagen1.jpg" class="card-img" height="270px">
                    <div class="card-img-overlay">
                        <br> <br> <br> <br> <br> <br> <br>
                        <h5 class="card-title">Lacteos</h5>
                        <p class="card-text">73 Productos</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
        
    <!--  Seccion 3 -->
    <div class="row my-3 p-4 align-content-center d-flex justify-content-center" >
        <div class="col-10 ">
            <div class="row  "> 
                <div class="card p-0 mx-0">
                    <img src="img/Inicio-recursos/persona-mercado.png" class="card-img">
                    <div class="card-img-overlay text-white align-content-center d-grid justify-content-star">
                        <h2 class="card-title ">Disfruta de fruta fresca en tu Oficina</h2>
                        <p class="card-text fs-5 ">¿Tienes una empresa? te proponemos un plan <br>
                            de fruta a medida que se ajuste a sus necesidades.
                        </p> <br>
                        <a href="#" class="btn btn-success col-5 col-sm-5">Solicitar Presupuesto</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- seccion 4 -->
    <div class="row p-4">
        <div class="col-12 my-3">
            <h2>Oferta de Frutas y Verduras de la semana</h2>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/aguacate.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aguacate</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/arandanos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Arandanos</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/jengibre.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Jengibre</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/mango.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mango</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <!--  Seccion 5 -->
    <div class="row my-3 p-4 align-content-center d-flex justify-content-center " >
        <div class="col-12 col-sm-7 col-md-7 col-lg-8 bg-white ">
            <h2>Gran variedad de fruta y verdura</h2>
            <p class="fs-5">
                Con un solo click en las frutas y verduras online que elijas puedes crear tu propia lista de la compra personalizada con fruta y verdura de primera calidad. <br>
                Tenemos gran variedad de fruta y verdura en nuestro catálogo. Si prefieres recibir cajas de frutas y cajas de verduras sin necesidad de seleccionarlas tu mismo también podemos ayudarte. <br>
                
                Disponemos de cajas de frutas y cajas de verduras preparadas que te permitirán comprar rápidamente sin necesidad de ver íntegro nuestro extenso catálogo, y sin tener que ir seleccionando uno a uno todos los productos. Nuestras cajas de frutas y verduras las preparamos con el mismo cuidado que los pedidos personalizados de nuestros clientes. Ponemos a tu disposición diferentes cajas de frutas y verduras para adaptarnos a las necesidades que puede tener cada familia. <br>
                
                Descubre las cajas de frutas y verduras que ponemos a tu disposición y selecciona la caja que más se adecue a tu consumo y al de tu familia, también disponemos de cajas para 2 personas o incluso de uso individual. <br>
                       
            </p>           
        </div> 
        <div class="col-12 col-sm-5 col-md-5 col-lg-4 align-content-center d-grid justify-content-center">
           <img src="img/Inicio-recursos/canastas-productos.jpg" class="w-100" alt="">           
        </div> 
        <div class=" col-12 my-3"></div> 
        <div class=" col-12 col-sm-5 col-md-5 col-lg-4 align-content-center d-grid justify-content-center">
            <img src="img/Inicio-recursos/canasta-mazorca.jpg" class="w-100" alt="">           
         </div> 
        <div class="col-12 col-sm-7 col-md-7 col-lg-8 bg-white ">
            <h2>Cestas de frutas perfectas para regalar</h2>
            <p class="fs-5">
                Con un solo click en las frutas y verduras online que elijas puedes crear tu propia lista de la compra personalizada con fruta y verdura de primera calidad. <br>
                Tenemos gran variedad de fruta y verdura en nuestro catálogo. Si prefieres recibir cajas de frutas y cajas de verduras sin necesidad de seleccionarlas tu mismo también podemos ayudarte. <br>
                
                Disponemos de cajas de frutas y cajas de verduras preparadas que te permitirán comprar rápidamente sin necesidad de ver íntegro nuestro extenso catálogo, y sin tener que ir seleccionando uno a uno todos los productos. Nuestras cajas de frutas y verduras las preparamos con el mismo cuidado que los pedidos personalizados de nuestros clientes. Ponemos a tu disposición diferentes cajas de frutas y verduras para adaptarnos a las necesidades que puede tener cada familia. <br>
                
                Descubre las cajas de frutas y verduras que ponemos a tu disposición y selecciona la caja que más se adecue a tu consumo y al de tu familia, también disponemos de cajas para 2 personas o incluso de uso individual. <br>
                       
            </p>           
        </div> 
       
    </div>

     <!-- seccion 6 -->
     <div class="row p-4 align-content-center d-flex justify-content-center">
        <div class="col-12 my-3">
            <h2>Frutas y Verduras mas populares</h2>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/aguacate.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Aguacate</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/arandanos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Arandanos</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/jengibre.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Jengibre</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/mango.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mango</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/pina.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Piña</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
            <div class="row p-1"> 
                <div class="card" style="width: 18rem;">
                    <img src="img/fruver/banano.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Banano</h5>
                      <p class="card-text">Venta por Kg <br> $9,000</p>
                      <a href="#" class="btn btn-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Seccion 7 -->
    <div class="row my-3 p-4 align-content-center d-flex justify-content-center" >
        <div class="col-10 ">
            <div class="row bg-warning "> 
                <div class="card p-0 mx-0">
                    <img src="img/Inicio-recursos/fruver-largo.jpg" class="card-img" height="200px">
                    <div class="card-img-overlay ">
                        <div class="row text-white align-content-center d-flex justify-content-star">
                            <div class="col-7">
                                <h2 class="card-title text-white align-content-center d-grid justify-content-star ">Registrate en nuestra Tienda</h2>
                                <p class="card-text fs-5 text-white align-content-center d-grid justify-content-star">Si te gusta la fruta, te interesa nuestra tienda. <br>
                                    Recibe nuestras ofertas, promociones y toda la información que te interesa en tu buzón de email.
                                </p> <br>
                            </div>
                            <div class="col-5 align-content-center d-grid justify-content-star"><a href="#" class="btn btn-success">Registrarse</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!--  Seccion 8 -->
    <div class="row my-3 align-content-center d-flex justify-content-center" >
        <div class="col-12 p-4  bg-white">
            <h1 class="text-center ">Nuestros productos</h1>
            <h3 class="text-center ">¿Porque comprar en Fruver la Huerta?</h3>
            <div class="row">
                <div class="col-12 col-sm-5 col-md-5 col-lg-4 ">
                    <img src="img/Inicio-recursos/mujer-jugo.jpg" class="w-100 rounded-3" alt="">
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-8 align-content-center d-grid justify-content-center">
                    <p class="fs-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Architecto provident eum necessitatibus eveniet quaerat blanditiis quam 
                        consequuntur quasi exercitationem ab! Nemo iusto illum necessitatibus rem ratione ipsam sit inventore 
                        doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ut, vero sunt fugit delectus
                        velit a inventore fuga laboriosam culpa asperiores doloribus recusandae ullam accusantium reiciendis dicta, ad commodi obcaecati!
                    </p>
                </div>
            </div>
          
        </div> 
    </div>

    <!-- Seccion 9 -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 ">
            <div class="row align-content-center d-flex justify-content-center">
                <div class="col-12 align-content-center d-flex justify-content-center">
                    <img src="img/Inicio-recursos/canastas.jpg" class="rounded-3 w-100"  alt="">
                </div>
                <div class="col-10 align-content-center d-flex justify-content-center ">
                    <div class="text-center rounded-3 bg-white" >
                        <h4>Frutas y verduras en Temporada</h4> 
                        <p class="fs-6"  >
                            Tener frutas y verduras en casa es más sencillo que nunca, con nuestra frutería online [...]
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 ">
            <div class="row align-content-center d-flex justify-content-center">
                <div class="col-12 align-content-center d-flex justify-content-center">
                    <img src="img/Inicio-recursos/fresas.jpg" class="rounded-3 w-100"  alt="">
                </div>
                <div class="col-10 align-content-center d-flex justify-content-center ">
                    <div class="text-center rounded-3 bg-white" >
                        <h4> Comprar frutas y verduras online, ¿conservan el sabor?</h4> 
                        <p class="fs-6"  >
                        Cada día estamos más acostumbrados a realizar todas nuestras compras en Internet, desde regalos hasta [...]
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 ">
            <div class="row align-content-center d-flex justify-content-center">
                <div class="col-12 align-content-center d-flex justify-content-center">
                    <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                </div>
                <div class="col-10 align-content-center d-flex justify-content-center ">
                    <div class="text-center rounded-3 bg-white" >
                        <h4> Fruver la Huerta 1.0</h4> 
                        <p class="fs-6"  >
                            Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
        
    <!-- Seccion de Comentarios -->
    <h1 class="text-center my-4 ">Que Opinan nuestros clientes</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/Inicio-recursos/espacioblanco.jpg" class="d-block w-100"  height="170px">
            <div class="carousel-caption d-none d-md-block">
              <h5> ⭐ ⭐ ⭐ ⭐ ⭐</h5>
              <p class="fst-italic">Productos frescos y un gran surtido</p>
              <p class=""> <b>Yudy Marcela Flores</b> / Facebook</p> 
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Inicio-recursos/espacioblanco.jpg" class="d-block w-100" height="170px">
            <div class="carousel-caption d-none d-md-block">
                <h5> ⭐ ⭐ ⭐ ⭐ ⭐</h5>
                <p class="fst-italic">Productos frescos y un gran surtido</p>
                <p class=""> <b>Yudy Marcela Flores</b> / Facebook</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Inicio-recursos/espacioblanco.jpg" class="d-block w-100" height="170px">
            <div class="carousel-caption d-none d-md-block">
                <h5> ⭐ ⭐ ⭐ ⭐ ⭐</h5>
                <p class="fst-italic">Productos frescos y un gran surtido</p>
                <p class=""> <b>Yudy Marcela Flores</b> / Facebook</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Seccion de Blog -->
    <h1 class="text-center my-4 ">Blog de Cocina - El Club de lo Sano</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner  pb-5">
          <div class="carousel-item active">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/canastas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4>Frutas y verduras en Temporada</h4> 
                                <p class="fs-6"  >
                                    Tener frutas y verduras en casa es más sencillo que nunca, con nuestra frutería online [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/fresas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Comprar frutas y verduras online, ¿conservan el sabor?</h4> 
                                <p class="fs-6"  >
                                Cada día estamos más acostumbrados a realizar todas nuestras compras en Internet, desde regalos hasta [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/canastas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4>Frutas y verduras en Temporada</h4> 
                                <p class="fs-6"  >
                                    Tener frutas y verduras en casa es más sencillo que nunca, con nuestra frutería online [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/fresas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Comprar frutas y verduras online, ¿conservan el sabor?</h4> 
                                <p class="fs-6"  >
                                Cada día estamos más acostumbrados a realizar todas nuestras compras en Internet, desde regalos hasta [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/canastas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4>Frutas y verduras en Temporada</h4> 
                                <p class="fs-6"  >
                                    Tener frutas y verduras en casa es más sencillo que nunca, con nuestra frutería online [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/fresas.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Comprar frutas y verduras online, ¿conservan el sabor?</h4> 
                                <p class="fs-6"  >
                                Cada día estamos más acostumbrados a realizar todas nuestras compras en Internet, desde regalos hasta [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="row align-content-center d-flex justify-content-center">
                        <div class="col-12 align-content-center d-flex justify-content-center">
                            <img src="img/Inicio-recursos/mango.jpg" class="rounded-3 w-100"  alt="">
                        </div>
                        <div class="col-10 align-content-center d-flex justify-content-center ">
                            <div class="text-center rounded-3 bg-white" >
                                <h4> Fruver la Huerta 1.0</h4> 
                                <p class="fs-6"  >
                                    Lo que hace unos años parecía impensable, hoy es una realidad. Fruver La Huerta 1.0 [...]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      
    </div>
    <div class="row">
        <div class="col-12 align-content-center d-flex justify-content-center">
            <a href="#" class="btn btn-success col-4 col-sm-5">Ir al Blog de Cocina</a>
        </div>
    </div>
    
    <!-- Seccion de Categorias -->
    <div class="row my-4">
        <a href="#" class="btn btn-success col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/MELOCOTON-buena-800x585.webp" class="w-100" height="200px" alt=""> 
            <h3>Frutas</h3>
        </a>
        <a href="#" class="btn btn-warning col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/ROJO-buena-800x597.webp" class="w-100" height="200px" alt=""> 
            <h3>Verduras</h3>
        </a>
        <a href="#" class="btn btn-success col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/HIERBABUENA-buena-800x534.webp" class="w-100" height="200px" alt=""> 
            <h3>Aromaticas</h3>
        </a>
        <a href="#" class="btn btn-warning col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/abarrotes.jpg" class="w-100" height="200px" alt=""> 
            <h3>Abarrotes</h3>
        </a>
        <a href="#" class="btn btn-success col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/food-tray-delicious-salami-pieces-600nw-537823303.webp" class="w-100" height="200px" alt=""> 
            <h3>Carnes</h3>
        </a>
        <a href="#" class="btn btn-warning col-4 col-sm-4 col-md-2 col-lg-2 align-content-center d-block justify-content-center">
            <img src="img/Categorias/leche.jpg" class="w-100" height="200px" alt=""> 
            <h3>Lacteos</h3>
        </a>
        
      
    </div>

    <!--  Pie de pagina -->
    <div class="container-fluid bg-white">
        <footer class="py-5">
          <div class="row">
            <div class="col-2">
              <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sección</font></font></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precios</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preguntas frecuentes</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de</font></font></a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sección</font></font></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precios</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preguntas frecuentes</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de</font></font></a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sección</font></font></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precios</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preguntas frecuentes</font></font></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de</font></font></a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-1">
              <form>
                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suscríbete a nuestro boletín</font></font></h5>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resumen mensual de nuestras novedades y novedades.</font></font></p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Dirección de correo electrónico">
                  <button class="btn btn-primary" type="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suscribir</font></font></button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2024 FLHIS, Inc. Todos los derechos reservados.</font></font></p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
          </div>
        </footer>
    </div>
    
</div> 



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

