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
    $resultado['mensaje'] = 'El administrador no existe ❌';
    }


    
    if (isset($_POST['submit'])) {
    try {

        $administrador = [
        "id"        => $_GET['id'],
        "nombre"    => $_POST['nombre'],
        "apellido"  => $_POST['apellido'],
        "email"     => $_POST['email'],
        "telefono"      => $_POST['telefono'],
        "genero"      => $_POST['genero'],
        "tipodocumento"      => $_POST['tipodocumento'],
        "no_doc"      => $_POST['no_doc'],
        "direccion"      => $_POST['direccion'],
        "tipousuario"      => $_POST['tipousuario'],
        "estado"      => $_POST['estado'],
        "clave"      => $_POST['clave'],
       
       
        ];
        
        $consultaSQL = "UPDATE administrador SET
            NOMBRE_ADMINISTRADOR = :nombre,
            APELLIDO_ADMINISTRADOR = :apellido,
            EMAIL = :email,
            TELEFONO = :telefono,
            GENERO = :genero,
            TIPO_DE_DOCUMENTO = :tipodocumento,
            NUMERO_DOCUMENTO = :no_doc,
            DIRECCION = :direccion,
            ESTADO = :estado,
            TIPOUSUARIO = :tipousuario,
            CLAVE = :clave,
            updated_at = NOW()
            WHERE ID_ADMINISTRADOR = :id";
        $consulta = $conn->prepare($consultaSQL);
        $consulta->execute($administrador);

    } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
    }
    }

    try {

        
    $ID_ADMINISTRADOR = $_GET['id'];
    $consultaSQL = "SELECT * FROM administrador WHERE ID_ADMINISTRADOR =" . $ID_ADMINISTRADOR;

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute();

    $administrador = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$administrador) {
        $resultado['error'] = true;
        $resultado['mensaje'] = 'No se ha encontrado el administrador ❌';
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
                El administrador ha sido actualizado correctamente, Verifica los cambios en el siguiente enlace: 
                    <a class="btn btn-success" href="../../adm/administradores.php">Regresar al inicio</a>
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
    if (isset($administrador) && $administrador) 
  ?>
  <style>
    .formulario_edicion{
        margin-top: 200px;

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
        <h2 class="text-center">Editando Datos de <?= escapar($administrador['NOMBRE_ADMINISTRADOR']) . ' ' . escapar($administrador['APELLIDO_ADMINISTRADOR'])  ?></h2>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">No.administrador</label>
                        <input type="text" name="id_administrador" ID_ADMINISTRADOR="id_administrador" value="<?= escapar($administrador['ID_ADMINISTRADOR']) ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" ID_ADMINISTRADOR="nombre" value="<?= escapar($administrador['NOMBRE_ADMINISTRADOR']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" ID_ADMINISTRADOR="apellido" value="<?= escapar($administrador['APELLIDO_ADMINISTRADOR']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" ID_ADMINISTRADOR="email" value="<?= escapar($administrador['EMAIL']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" ID_ADMINISTRADOR="telefono" value="<?= escapar($administrador['TELEFONO']) ?>" class="form-control" required>
                    </div>
                </div>
              
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select id="genero" name="genero"  class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Femenino" <?php if ($administrador['GENERO'] === 'Femenino') echo 'selected'; ?>>Femenino</option>
                            <option value="Masculino" <?php if ($administrador['GENERO'] === 'Masculino') echo 'selected'; ?>>Masculino</option>
                        </select>
                    </div>
                </div>
               
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="tipodocumento">Tipo de Documento</label>
                        <select id="tipodocumento" name="tipodocumento"  class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Tarjeta de Identidad" <?php if ($administrador['TIPO_DE_DOCUMENTO'] === 'Tarjeta de Identidad') echo 'selected'; ?>>Tarjeta de Identidad</option>
                            <option value="Cedula" <?php if ($administrador['TIPO_DE_DOCUMENTO'] === 'Cedula') echo 'selected'; ?>>Cédula</option>
                            <option value="Pasaporte" <?php if ($administrador['TIPO_DE_DOCUMENTO'] === 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
                            <option value="Registro Civil" <?php if ($administrador['TIPO_DE_DOCUMENTO'] === 'Registro Civil') echo 'selected'; ?>>Registro Civil</option>
                            <option value="Cedula de Extranjeria" <?php if ($administrador['TIPO_DE_DOCUMENTO'] === 'Cedula de Extranjeria') echo 'selected'; ?>>Cédula de Extranjería</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="no_doc">Documento</label>
                        <input type="text" name="no_doc" ID_ADMINISTRADOR="no_doc" value="<?= escapar($administrador['NUMERO_DOCUMENTO']) ?>" class="form-control" required>
                    </div>
                </div>
          
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" ID_ADMINISTRADOR="direccion" value="<?= escapar($administrador['DIRECCION']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="tipousuario">Tipo Usuario</label>
                        <select id="tipousuario" name="tipousuario"  class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Adm" <?php if ($administrador['TIPOUSUARIO'] === 'Adm') echo 'selected'; ?>>Adm</option>
                            <option value="User" <?php if ($administrador['TIPOUSUARIO'] === 'User') echo 'selected'; ?>>User</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado"  class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Activo" <?php if ($administrador['ESTADO'] === 'Activo') echo 'selected'; ?>>Activo</option>
                            <option value="Inactivo" <?php if ($administrador['ESTADO'] === 'Inactivo') echo 'selected'; ?>>Inactivo</option>
                        </select>
                    </div>
                </div>
           
                
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="clave">Clave</label>
                        <div class="input-group mb-3">
                            <input type="password" placeholder="Contraseña"  class="input-password form-control" name="clave" ID_ADMINISTRADOR="clave" value="<?= escapar($administrador['CLAVE']) ?>" aria-describedby="button-addon2" required>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2 show_password" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon "></span></button>
                            <script src="../../js/mostrar_contraseña.js"></script>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="foto_cliente">Foto administrador</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="foto_administrador" ID_ADMINISTRADOR="foto_administrador" value="<?= escapar($administrador['FOTO_ADMINISTRADOR']) ?>" accept='image/*' onchange="previewImage(event)">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 fotonueva">
                <label for=" foto_administrador">Vista Previa de la Imagen</label>
                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none;"/>
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
          <div class="form-group">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            <a class="btn btn-primary" href="../../adm/administradores.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
// Obtén el ID del administrador
$id_administrador = $_GET['id'];

// Verifica si se subió una imagen
if(isset($_FILES['foto_administrador']) && $_FILES['foto_administrador']['error'] == 0){
    // Obtiene la extensión de la imagen
    $extension = pathinfo($_FILES['foto_administrador']['name'], PATHINFO_EXTENSION);

    // Define la ruta de la nueva imagen
    $nueva_ruta = "perfiles/" . $id_administrador . "." . $extension;

    // Busca y borra la imagen anterior, sin importar su extensión
    $imagenes_anteriores = glob("perfiles/" . $id_administrador . ".*");
    foreach($imagenes_anteriores as $imagen_anterior){
        if(is_file($imagen_anterior)){
            unlink($imagen_anterior);
        }
    }

    // Mueve la imagen subida a la nueva ruta
    if(move_uploaded_file($_FILES['foto_administrador']['tmp_name'], $nueva_ruta)){
        // Actualiza la extensión de la imagen en la base de datos
        $stmt = $conn->prepare("UPDATE administrador SET FOTO_ADMINISTRADOR = ? WHERE ID_ADMINISTRADOR = ?");
        $stmt->execute([$extension, $id_administrador]);
    } else {
        echo "Hubo un error al guardar la imagen.";
    }
} else {
 
}
?>
  <?php
        $id_administrador = $_GET['id'];
            // Consulta para obtener la extensión de la imagen del administrador
            $stmt = $conn->prepare("SELECT FOTO_ADMINISTRADOR FROM administrador WHERE ID_ADMINISTRADOR = ?");
            $stmt->execute([$id_administrador]);
            $administrador = $stmt->fetch();

            // Construye la ruta de la imagen
            $ruta_imagen = "perfiles/" . $id_administrador . "." . $administrador['FOTO_ADMINISTRADOR'];
           
            ?>
            <img src="<?= $ruta_imagen ?>" alt="Foto del administrador" class="foto_actual">
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