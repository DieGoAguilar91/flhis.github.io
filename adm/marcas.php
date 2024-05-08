<?php
  include '../controllers/conexion.php';
  include '../controllers/funciones.php';

  csrf();
  if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die();
  }

  $error = false;

  try {

    if (isset($_POST['NOMBRE_MARCA']) && !empty($_POST['NOMBRE_MARCA'])) {
      $consultaSQL = "SELECT * FROM marca WHERE NOMBRE_MARCA LIKE '%" . $_POST['NOMBRE_MARCA'] . "%'";
  } else {
      $consultaSQL = "SELECT * FROM marca ORDER BY NOMBRE_MARCA ASC" ;
  }

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute();

    $marca = $sentencia->fetchAll();

  } catch(PDOException $error) {
    $error= $error->getMessage();
  }

  $titulo = isset($_POST['NOMBRE_MARCA']) ? 'Resultados de (' . $_POST['NOMBRE_MARCA'] . ')' : 'Listado de Productos';

?>
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
    <link rel="stylesheet" href="../css/adm_clientes.css">

    <!-- Links Externos -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

     <!-- Custom styles for this template -->
     <link href="navbar-top-fixed.css" rel="stylesheet">


</head>

<body>
  
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fruver la Huerta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<main class="container-fluid">
    
  <div class="bg-light rounded">
    <a href="../controllers/marcas/crear.php"  class="btn btn-primary mt-4">Nueva Marca</a>
    <button id="toggleViewButton"  class="btn btn-primary mt-4" onclick = "toggleView()" >Modo Tabla</button>
    <script>
      window.onload = function() {
          var tabla = document.getElementById("formato-tabla");
          var tarjetas = document.getElementById("formato-tarjetas");
          var boton = document.getElementById("toggleViewButton");

          boton.onclick = function() {
              if (tabla.style.display === "none") {
                  tabla.style.display = "block";
                  tarjetas.style.display = "none";
                  boton.innerHTML = "Modo Cards";
              } else {
                  tabla.style.display = "none";
                  tarjetas.style.display = "block";
                  boton.innerHTML = "Modo Tabla";
              }
          }
      }
     


    </script>
    <div class="row">
      <div class="col-md-12">
        <hr>
        <form method="post" class="form-inline">
          <div class="row">
            <div class="col-6">
                <div class="form-group mr-3">
                  <input type="text" id="NOMBRE_MARCA" name="NOMBRE_MARCA" placeholder="Buscar por Nombre de Marca" class="form-control">
                </div>
            </div>
            <div class="col-6">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
            </div>
          </div>
         
         
        </form>
      </div>
    </div>
  </div>
  <div class="row ">
    <h2 class="mt-3"><?= $titulo ?></h2>
      <div class="col-md-12 tabla" id="formato-tabla" style="display: none;">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>MARCA</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <?php
              if ($sentencia && $sentencia->rowCount() > 0) {
                foreach ($marca as $fila) {
                    ?>
                    <tr>
                        <td><?php echo escapar($fila["ID_MARCA"]); ?></td>
                        <td><?php echo escapar($fila["NOMBRE_MARCA"]); ?></td>
                        <td class="acciones">
                            <a href="<?= '../controllers/marcas/eliminar.php?id=' . escapar($fila["ID_MARCA"]) ?>">🗑️Borrar</a>
                            <a href="<?= '../controllers/marcas/editar.php?id=' . escapar($fila["ID_MARCA"]) ?>">✏️Editar</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            
                ?>
              <tbody>
            </table>
          </div>
  </div>
    
<div class="container-fluid resultados-tarjetas" id="formato-tarjetas" >
  <?php
  if ($sentencia && $sentencia->rowCount() > 0) {
      echo '<div class="row card-container">';
      foreach ($marca as $fila) {
          // Obtén el ID del cliente
          $id_producto = $fila["ID_MARCA"];

          // Consulta para obtener la extensión de la imagen del cliente
          $stmt = $conn->prepare("SELECT FOTO_PRODUCTO FROM marca WHERE ID_MARCA = ?");
          $stmt->execute([$id_producto]);
          $marca = $stmt->fetch();

          // Construye la ruta de la imagen
          $ruta_imagen = "../controllers/marcas/imagenes/" . $id_producto . "." . $marca['FOTO_PRODUCTO'];
          ?>
       <div class="col-12 col-sm-6 col-md-4 col-lg-3  mb-4">
    <div class="card h-100">
        <img src="<?= $ruta_imagen ?>" class="card-img-top" alt="Foto del Marca <?php echo escapar($fila["ID_MARCA"]); ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo escapar($fila["NOMBRE_MARCA"]); ?></h5>
            <p class="card-text">Categoría: <?php echo escapar($categorias[$fila["ID_CATEGORIA"]]); ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Marca: <?php echo escapar($marcas[$fila["ID_MARCA"]]); ?></li>
            <li class="list-group-item">Presentación: <?php echo escapar($fila["PRESENTACION"]); ?></li>
            <li class="list-group-item">Precio: $ <?php echo escapar($fila["PRECIO"]); ?></li>
            <li class="list-group-item">Estado: <?php echo escapar($fila["ESTADO"]); ?></li>
        </ul>
        <div class="card-body">
            <a href="<?= '../controllers/marcas/eliminar.php?id=' . escapar($fila["ID_MARCA"]) ?>" class="card-link">🗑️Borrar</a>
            <a href="<?= '../controllers/marcas/editar.php?id=' . escapar($fila["ID_MARCA"]) ?>" class="card-link">✏️Editar</a>
        </div>
    </div>
</div>

          <?php
      }
      echo '</div>';
  }
  ?>
  <style>
    .resultados-tarjetas{
      margin-top: 10px;
    }
    .card-container {
        display: flex;
        flex-wrap: wrap;
       
      }

      .card {
        
          padding-top: 10px;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
      }

      .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .card-img-top {
        margin: auto;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      }

      .card-title {
          font-size: 20px;
          font-weight: bold;
      }

      .card-text {
          font-size: 16px;
      }

      .list-group-item {
          font-size: 14px;
      }

      .card-link {
          color: #007bff;
          text-decoration: none;
      }

      .card-link:hover {
          color: #0056b3;
      }
      .card-body{
        padding: 10px;
        display: flex;
        justify-content: space-around;
        
      }
  </style>

</div>
    

</main>



      


    
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php
