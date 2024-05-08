<?php

    include "../conexion.php";
    include "../funciones.php";
    csrf();

    if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die();
    }

    $resultado = [
    'error' => false,
    'mensaje' => ''
    ];

    if (!isset($_GET['id'])) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'El Producto no existe ❌';
    }

       /* CATEGORIAS DEL PRODUCTO */
       $sqlcategorias = 'SELECT * FROM categoria ORDER BY NOMBRE_CATEGORIA ASC';
       $resultadoCategoria = $conn->query($sqlcategorias);
       $categorias = [];
       while ($fila = $resultadoCategoria->fetch(PDO::FETCH_ASSOC)) {
           $categorias[$fila['ID_CATEGORIA']] = $fila['NOMBRE_CATEGORIA'];
       
           /* Marcas */
           $sqlmarcas = 'SELECT * FROM marca ORDER BY NOMBRE_MARCA ASC';
       $resultadoMarca = $conn->query($sqlmarcas);
       $marcas = [];
       while ($fila = $resultadoMarca->fetch(PDO::FETCH_ASSOC)) {
           $marcas[$fila['ID_MARCA']] = $fila['NOMBRE_MARCA'];
       }
       
       }

    
    if (isset($_POST['submit'])) {
    try {

        $producto = [
        "id"        => $_GET['id'],
        "categoria"  => $_POST['categoria'],
        "nombre"    => $_POST['nombre'],
        "marca"     => $_POST['marca'],
        "presentacion"     => $_POST['presentacion'],
        "precio"      => $_POST['precio'],
        "descripcion"      => $_POST['descripcion'],
        "estado"      => $_POST['estado'],
      
       
        ];
        
        $consultaSQL = "UPDATE producto SET
            NOMBRE_PRODUCTO = :nombre,
            ID_CATEGORIA  = :categoria,
            ID_MARCA  = :marca,
            PRESENTACION  = :presentacion,
            PRECIO = :precio,
            DESCRIPCION = :descripcion,
            ESTADO = :estado
            WHERE ID_PRODUCTO = :id";
        $consulta = $conn->prepare($consultaSQL);
        $consulta->execute($producto);

    } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
    }
    }

    try {

        
    $ID_PRODUCTO = $_GET['id'];
    $consultaSQL = "SELECT * FROM producto WHERE ID_PRODUCTO =" . $ID_PRODUCTO;

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute();

    $producto = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$producto) {
        $resultado['error'] = true;
        $resultado['mensaje'] = 'No se ha encontrado el producto ❌';
    }

    } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
    }

 

    ?>



    <?php
    if ($resultado['error']) {
    ?>
    <div class="container mt-2">
        <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
            <?= $resultado['mensaje'] ?>
            </div>
        </div>
        </div>
    </div>
    <?php
    }
    ?>

    <?php
    if (isset($_POST['submit']) && !$resultado['error']) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                El producto ha sido actualizado correctamente, Verifica los cambios en el siguiente enlace: 
                    <a class="btn btn-success" href="../../adm/productos.php">Regresar al inicio</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .alert-success{
            text-align: center;
            position: absolute;
            top: 200px;
            left: 50%;
            transform: translateX(-50%);
            border: 3px solid #fff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
    <?php
    }
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
  <?php
    if (isset($producto) && $producto) 
  ?>
  <style>
    .formulario_edicion{
        margin-top: 200px;

    }
    body{
        background-color: #f5f5f5;
    }
  
    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .formulario_edicion {
        margin-top: 200px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    button:hover {
        background-color: #0056b3;
    }

  </style>
  <div class="container-fluid formulario_edicion">
    <div class="row ">
      <div class="col-md-12 ">
      <h2 class="text-center">Editando Datos de <?= escapar($producto['NOMBRE_PRODUCTO']) ?>
    <?php if ($producto['ID_MARCA'] != 1 && $marcas[$producto['ID_MARCA']] != '-SIN MARCA') { ?>
        <?= ' ' . escapar($marcas[$producto['ID_MARCA']]) ?>
    <?php } ?>
</h2>


        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">No.Producto</label>
                        <input type="text" name="id_producto" ID_PRODUCTO="id_producto" value="<?= escapar($producto['ID_PRODUCTO']) ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria" class="form-select" aria-label="Default select example"  required>
                        <option value="" disabled selected>Selecciona una opción</option>
                            <?php foreach ($categorias as $id => $nombre) { ?>
                                <option value="<?= $id ?>" <?= $id == $producto['ID_CATEGORIA'] ? 'selected' : '' ?>>
                                    <?= escapar($nombre) ?>
                                </option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">Nombre Producto</label>
                        <input type="text" name="nombre" ID_PRODUCTO="nombre" value="<?= escapar($producto['NOMBRE_PRODUCTO']) ?>" class="form-control" required>
                    </div>
                </div>
             
 
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <select id="marca" name="marca" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <?php foreach ($marcas as $id => $nombre) { ?>
                                <option value="<?= $id ?>" <?= $id == $producto['ID_MARCA'] ? 'selected' : '' ?>>
                                    <?= escapar($nombre) ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="presentacion">Presentacion</label>
                        <input type="text" name="presentacion" ID_PRODUCTO="presentacion" value="<?= escapar($producto['PRESENTACION']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" ID_PRODUCTO="precio" value="<?= escapar($producto['PRECIO']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-select" aria-label="Default select example"  required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Disponible" <?php if ($producto['ESTADO'] === 'Disponible') echo 'selected'; ?>>Disponible</option>
                            <option value="No Disponible" <?php if ($producto['ESTADO'] === 'No Disponible') echo 'selected'; ?>>No Disponible</option>
                        </select>
                    </div>
                </div>
              
            
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="foto_producto">Foto Producto</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="foto_producto" ID_PRODUCTO="foto_producto" value="<?= escapar($producto['FOTO_PRODUCTO']) ?>" accept='image/*' onchange="previewImage(event)">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 fotonueva">
                    <label for=" foto_producto">Vista Previa de la Imagen</label>
                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none;"/>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" required><?= escapar($producto['DESCRIPCION']) ?></textarea>
                    </div>
                </div>
               

            </div>
    
            <style>
                .fotonueva{
                    margin-bottom: 10px;
                }
                #imagePreview {
                    border-radius: 50%;
                    object-fit: cover;
                    width: 200px;
                    height: 200px;
                    border: 3px solid #fff;
                    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                }
            </style>
            <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function(){
                        var output = document.getElementById('imagePreview');
                        output.src = reader.result;
                        output.style.display = 'block';
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>
          <div class="form-group my-3">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            <a class="btn btn-primary" href="../../adm/productos.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
// Obtén el ID del producto
$id_producto = $_GET['id'];

// Verifica si se subió una imagen
if(isset($_FILES['foto_producto']) && $_FILES['foto_producto']['error'] == 0){
    // Obtiene la extensión de la imagen
    $extension = pathinfo($_FILES['foto_producto']['name'], PATHINFO_EXTENSION);

    // Define la ruta de la nueva imagen
    $nueva_ruta = "imagenes/" . $id_producto . "." . $extension;

    // Busca y borra la imagen anterior, sin importar su extensión
    $imagenes_anteriores = glob("imagenes/" . $id_producto . ".*");
    foreach($imagenes_anteriores as $imagen_anterior){
        if(is_file($imagen_anterior)){
            unlink($imagen_anterior);
        }
    }

    // Mueve la imagen subida a la nueva ruta
    if(move_uploaded_file($_FILES['foto_producto']['tmp_name'], $nueva_ruta)){
        // Actualiza la extensión de la imagen en la base de datos
        $stmt = $conn->prepare("UPDATE producto SET FOTO_PRODUCTO = ? WHERE ID_PRODUCTO = ?");
        $stmt->execute([$extension, $id_producto]);
    } else {
        echo "Hubo un error al guardar la imagen.";
    }
} else {
 
}
?>
  <?php
        $id_producto = $_GET['id'];
            // Consulta para obtener la extensión de la imagen del producto
            $stmt = $conn->prepare("SELECT FOTO_PRODUCTO FROM producto WHERE ID_PRODUCTO = ?");
            $stmt->execute([$id_producto]);
            $producto = $stmt->fetch();

            // Construye la ruta de la imagen
            $ruta_imagen = "imagenes/" . $id_producto . "." . $producto['FOTO_PRODUCTO'];
           
            ?>
            <img src="<?= $ruta_imagen ?>" alt="Foto del producto" class="foto_actual">
             <style>
                .foto_actual {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 200px;
                    height: 200px;
                    border-radius: 50%;
                    object-fit: cover;
                    border: 3px solid #fff;
                    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                }
            </style>


  </body>
  </html>