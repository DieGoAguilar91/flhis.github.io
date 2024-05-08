<?php
 include "../conexion.php";
 include "../funciones.php";

  csrf();
  if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die();
  }

  if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El Producto ' . escapar($_POST['nombre']) . ' ha sido agregado con éxito ✅'
  ];

  try {
    
    $producto = [
        "nombre"    => $_POST['nombre'],
        "categoria"  => $_POST['categoria'],
        "marca"     => $_POST['marca'],
        "presentacion"     => $_POST['presentacion'],
        "precio"      => $_POST['precio'],
        "descripcion"      => $_POST['descripcion'],
        "estado"      => $_POST['estado'],

    ];
  
    $consultaSQL = "INSERT INTO producto (NOMBRE_PRODUCTO, ID_CATEGORIA , ID_MARCA , PRESENTACION, PRECIO ,DESCRIPCION, ESTADO)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($producto)) . ")";
   

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute($producto);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>
<?php
  if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>
<?php
  $sqlcategorias = 'SELECT * FROM  categoria ORDER BY NOMBRE_CATEGORIA ASC';
  $resultadoCategoria = $conn->query($sqlcategorias);

  $sqlmarcas = 'SELECT * FROM  marca ORDER BY NOMBRE_MARCA ASC';
  $resultadoMarca = $conn->query($sqlmarcas);
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
    <link rel="stylesheet" href="../../css/adm_clientes.css">
   
    <!-- Links Externos -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="charizard.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

     <!-- Custom styles for this template -->
     <link href="navbar-top-fixed.css" rel="stylesheet">


</head>
<body>
  <style>
    body{
        background-color: #f5f5f5;
    }
    .container {
   margin-top: 10px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
<div class="container">

<div class="row">
  <div class="col-md-12">
    <h2 class="mt-4">Crear un Producto</h2>
    <hr>
    <form method="post" enctype="multipart/form-data" >
      <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria" class="form-select" aria-label="Default select example"  required>
            <option value="" disabled selected>Selecciona una opción</option>
              <?php foreach ($resultadoCategoria as $nombrecategorias): ?>
                  <option value="<?php echo $nombrecategorias['ID_CATEGORIA']; ?>"><?php echo $nombrecategorias['NOMBRE_CATEGORIA']; ?></option>
              <?php endforeach; ?>
           </select>
          </div>
      </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="nombre">Nombre Producto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>
        </div>
      
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="marca">Marca</label>
            <select name="marca" id="marca"  class="form-select" aria-label="Default select example" required >
            <option value="" disabled selected>Selecciona una opción</option>
              <?php foreach ($resultadoMarca as $nombremarcas): ?>
                  <option value="<?php echo $nombremarcas['ID_MARCA']; ?>"><?php echo $nombremarcas['NOMBRE_MARCA']; ?></option>
              <?php endforeach; ?>
           </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="presentacion">Presentacion</label>
            <input type="text" name="presentacion" id="presentacion" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-select" aria-label="Default select example"  required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="Disponible">Disponible</option>
              <option value="No Disponible">No Disponible</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
          </div>
        </div>
 
       
      </div>
      <div class="form-group my-3">
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
        <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        <a class="btn btn-primary" href="../../adm/productos.php">Regresar al inicio</a>
      </div>
    </form>
  </div>
</div>
</div>
</body>
</html>
