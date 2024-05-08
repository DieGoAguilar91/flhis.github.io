<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Icono -->
        <link rel="icon" href="../img/logo.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap5.1.3/css/bootstrap-grid.css">
        <title>Fruver La Huerta 🍎🥦</title>
        <script>
            let doctitle = document.title;
            const messages = [
            "¡Bienvenido administrador! 😁",
            "¿Qué deseas hacer hoy? 🤔",
            "¿Necesitas ayuda? 🆘",
            "Fruver La Huerta 🍎🥦",
            ];

            let currentIndex = 0;

            function changeTitle() {
                document.title = messages[currentIndex];
                currentIndex = (currentIndex + 1) % messages.length;
            }

            // Cambia el título cada segundo
            setInterval(changeTitle, 1000);

            // Restaura el título original cuando la ventana pierde el foco
            window.addEventListener("blur", () => {
                document.title = doctitle;
            });

        </script>
        <!--CSS estilos propios -->
        <link rel="stylesheet" href="../css/adm_inicio.css">
        
    
        <!-- Links Externos -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="charizard.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fruver la Huerta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="productos.php">Nuevos Productos</a></li>
            <li><a class="dropdown-item" href="stock.php">Stock</a></li>
            <li><a class="dropdown-item" href="marcas.php">Marcas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="facturar.php">Facturar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nomina
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="nominas.phph">Realizar Nomina</a></li>
            <li><a class="dropdown-item" href="#">Variables de entorno</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Historial de Nominas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="clientes.php">Clientes</a></li>
            <li><a class="dropdown-item" href="empleados.php">Empleados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="administradores.php">Administradores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="pedidos.php">Pedidos</a>
        </li>   
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Caja
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="caja.php">Formularios De Caja</a></li>
            <li><a class="dropdown-item" href="ventas.php">Venta del dia</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Historial de Cajas</a></li>
          </ul>
        </li>         
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscador Fruver La Huerta..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    </div>
    <div class="container-fluid">

        <div class="row">
           
            <div class="col-9 contenido">
                <h2 class="text-center">Bienvenido DieGo</h2>
                <h5 class="text-center">Administra el Fruver la Huerta</h5>
                <h4>Listado de notificaciones</h4>
                <!-- Simple table -->
                <table>
                    <tr>
                    <td>#</td>
                    <td>Tema</td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Productos</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Clientes</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Empleados</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Pediodos</td>
                    </tr>
         
                </table>
    
               <h4>Alertas de no disponibilidad o poca cantidad</h4> 
              <!-- Simple table -->
              <table>
                <tr>
                <td>#</td>
                <td>Tema</td>
                </tr>
                <tr>
                <td>1</td>
                <td>Productos</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Clientes</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Empleados</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Pedidos</td>
                </tr>
     
            </table>
            <h4>Listado de Pedidos en curso</h4>
                    <!-- Simple table -->
                    <table>
                        <tr>
                        <td>#</td>
                        <td>Fecha de Ingreso</td>
                        <td>Productos</td>
                        <td>Distribuidor</td>
                        <td>Estado</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>19/jun/2024</td>
                        </tr>
                    </table>
    
                    <h4>Listado de Pedidos en curso</h4>
                    <!-- Simple table -->
                    <table>
                        <tr>
                        <td>#</td>
                        <td>Fecha de Ingreso</td>
                        <td>Productos</td>
                        <td>Distribuidor</td>
                        <td>Estado</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>19/jun/2024</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>19/jun/2024</td>
                        </tr>
                    </table>
            </div>
        </div>
            <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
  
</body>
</html>