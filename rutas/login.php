<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruver La Huerta</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="../bootstrap5.1.3/css/bootstrap-grid.css">
     <link rel="icon" href="../img/logo.ico" type="image/x-icon">
 
     <!--CSS estilos propios -->
     <link rel="stylesheet" href="../css/login.css">
  
  
     <!-- Links Externos -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="shortcut icon" href="charizard.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
</head>
<body>
  <div class="fondo">
    <div class="bubbles">
        <span style="--i:11;"><img class="v" src="../img/fruver/aguacate.png" alt=""></span>
        <span style="--i:12;"><img class="f" src="../img/fruver/banano.png"  alt=""></span>
        <span style="--i:24;"><img src="../img/fruver/fresa.png" alt=""></span>
        <span style="--i:10;"><img class="v" src="../img/fruver/mango.png"  alt=""></span>
        <span style="--i:14;"><img class="f" src="../img/fruver/pina.png" alt=""></span>
        <span style="--i:23;"><img src="../img/fruver/manzana.png" alt=""></span>
        <span style="--i:18;"><img class="v" src="../img/fruver/uvas.png" alt=""></span>
        <span style="--i:16;"><img class="f" src="../img/fruver/granadilla.webp"  alt=""></span>
        <span style="--i:19;"><img src="../img/fruver/maracuya.png" alt=""></span>
        <span style="--i:20;"><img class="v" src="../img/fruver/tomate.png" alt=""></span>
        <span style="--i:22;"><img class="f"src="../img/fruver/papaya.webp" alt=""></span>
        <span style="--i:25;"><img src="../img/fruver/melon.png" alt=""></span>
        <span style="--i:18;"><img class="v"src="../img/fruver/arandanos.png" alt=""></span>
        <span style="--i:21;"><img class="f" src="../img/fruver/cebolla.webp" alt=""></span>
        <span style="--i:15;"><img src="../img/fruver/zanahoria.png" alt=""></span>
        <span style="--i:13;"><img class="v" src="../img/fruver/pimenton.png" alt=""></span>
        <span style="--i:26;"><img class="f"src="../img/fruver/limon.webp" alt=""></span>
        <!-- <span style="--i:17;"><img src="img/fruver/jengibre.png" alt=""></span> -->
        <span style="--i:13;"><img class="f"src="../img/fruver/calabaza.png" alt=""></span>
        <span style="--i:28;"><img class="v" src="../img/fruver/sandia.webp" alt=""></span> 
    </div>
  </div>

  <div class="container-fluid contenido">

      <div class="row login">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-login">
            <div class="bienvenida">
                <img src="../img/fondos/yipao1.png" class="yipao circulo-1"/>
                <h3>En Fruver La Huerta Encontraras:</h>
              <h4 id="texto-bienvenida"></h4>
              <script src="../js/efectoescritura.js"></script>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6  col-lg-6 formulario">
              <div class="form">
                  <form class="login-form" action="../controllers/login.php" method="post">
                    <h3>Iniciar Secion</h3>
                    <div class="d-flex iconos ">
                      <div class="ico col-2">
                          <svg>
                              <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                          </svg>
                          <i class='bx bxl-facebook-circle'></i>
                      </div>
                      <div class="ico col-2">
                          <svg>
                              <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                          </svg>
                          <i class='bx bxl-tiktok'></i> 
                      </div>   
                      <div class="ico col-2">
                        <svg>
                            <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                        </svg>
                        <i class='bx bxl-whatsapp'></i>
                    </div>
                    </div> 
                    <h5>¡Siguenos!</h5> 
                    <input type="text" placeholder="Correo Electronico" name="email" required />
                    <div class="input-group mb-3 " >
                      <input type="password" placeholder="Contraseña"  class="input-password "  name="clave" required />
                      <button id="show_password"  type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon "></span> </button>
                      <script src="../js/mostrar_contraseña.js"></script>
                    </div>
                    <button type="submit" class="acceder" onclick="validaringreso()">Acceder</button>
                    <p class="message">¿No tienes cuenta? <a href="#" class="toggle-form">Crea una cuenta</a></p>
                  </form>
                  
                  <form class="register-form" action="../controllers/registrarse.php" method="post">
                    <h3>Crear una Cuenta</h3>
                    <div class="d-flex iconos ">
                      <div class="ico col-2">
                          <svg>
                              <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                          </svg>
                          <i class='bx bxl-facebook-circle'></i>
                      </div>
                      <div class="ico col-2">
                          <svg>
                              <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                          </svg>
                          <i class='bx bxl-tiktok'></i> 
                      </div>   
                      <div class="ico col-2">
                        <svg>
                            <circle cx="20" cy="20" r=17.5  stroke-width="2" fill="none" ></circle>
                        </svg>
                        <i class='bx bxl-whatsapp'></i>
                    </div>
                    </div> 
                    <h5>¡Siguenos!</h5>
                    <input type="text" placeholder="Nombre" name="nombre_cliente" required> 
                    <div class="input-group" >
                      <input type="password" placeholder="Contraseña"  class="input-password" name="clave" required />
                      <button id="show_password"  type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      <script src="../js/mostrar_contraseña.js"></script>
                    </div>
                    <input type="text" placeholder="Correo Electronico" name="email"required />
                    <button type="submit" class="acceder">Registrarse</button>
                    <p class="message">¿Ya estas Registrado? <a href="#" class="toggle-form">Acceder</a></p>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // Código JavaScript para la transición
    $(document).ready(function() {
        $('.toggle-form').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        form.siblings('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        form.animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    });
  </script>
</body>
</html>







