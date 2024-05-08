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
    $resultado['mensaje'] = 'El Empleado no existe ❌';
    }


    
    if (isset($_POST['submit'])) {
    try {

        $empleado = [
        "id"        => $_GET['id'],
        "nombre"    => $_POST['nombre'],
        "apellido"  => $_POST['apellido'],
        "email"     => $_POST['email'],
        "telefono"      => $_POST['telefono'],
        "genero"      => $_POST['genero'],
        "fechanacimiento"      => $_POST['fechanacimiento'],
        "tipodocumento"      => $_POST['tipodocumento'],
        "no_doc"      => $_POST['no_doc'],
        "direccion"      => $_POST['direccion'],
        "estado"      => $_POST['estado'],
        "contactofamiliar"      => $_POST['contactofamiliar'],
        "parentesco"      => $_POST['parentesco'],
        "clave"      => $_POST['clave'],
       
        ];
        
        $consultaSQL = "UPDATE empleado SET
            NOMBRE_EMPLEADO = :nombre,
            APELLIDO_EMPLEADO = :apellido,
            EMAIL = :email,
            TELEFONO = :telefono,
            GENERO = :genero,
            FECHA_NACIMIENTO = :fechanacimiento,
            TIPO_DE_DOCUMENTO = :tipodocumento,
            NUMERO_DOCUMENTO = :no_doc,
            DIRECCION = :direccion,
            ESTADO = :estado,
            CONTACTO_FAMILIAR = :contactofamiliar,
            PARENTESCO = :parentesco,
            CLAVE = :clave,
            updated_at = NOW()
            WHERE ID_EMPLEADO = :id";
        $consulta = $conn->prepare($consultaSQL);
        $consulta->execute($empleado);

    } catch(PDOException $error) {
        $resultado['error'] = true;
        $resultado['mensaje'] = $error->getMessage();
    }
    }

    try {

        
    $ID_CLIENTE = $_GET['id'];
    $consultaSQL = "SELECT * FROM empleado WHERE ID_EMPLEADO =" . $ID_CLIENTE;

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute();

    $empleado = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$empleado) {
        $resultado['error'] = true;
        $resultado['mensaje'] = 'No se ha encontrado el empleado ❌';
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
                El empleado ha sido actualizado correctamente, Verifica los cambios en el siguiente enlace: 
                    <a class="btn btn-success" href="../../adm/empleados.php">Regresar al inicio</a>
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
    if (isset($empleado) && $empleado) 
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
        <h2 class="text-center">Editando Datos de <?= escapar($empleado['NOMBRE_EMPLEADO']) . ' ' . escapar($empleado['APELLIDO_EMPLEADO'])  ?></h2>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">No.Empleado</label>
                        <input type="text" name="id_empleado" ID_EMPLEADO="id_empleado" value="<?= escapar($empleado['ID_EMPLEADO']) ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" ID_EMPLEADO="nombre" value="<?= escapar($empleado['NOMBRE_EMPLEADO']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" ID_EMPLEADO="apellido" value="<?= escapar($empleado['APELLIDO_EMPLEADO']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="genero">Genero</label>
                        <select id="genero" name="genero" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Femenino" <?php if ($empleado['GENERO'] === 'Femenino') echo 'selected'; ?>>Femenino</option>
                            <option value="Masculino" <?php if ($empleado['GENERO'] === 'Masculino') echo 'selected'; ?>>Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="fechanacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control" value="<?= escapar($empleado['FECHA_NACIMIENTO']) ?>" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="tipodocumento">Tipo de Documento</label>
                        <select id="tipodocumento" name="tipodocumento" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Tarjeta de Identidad" <?php if ($empleado['TIPO_DE_DOCUMENTO'] === 'Tarjeta de Identidad') echo 'selected'; ?>>Tarjeta de Identidad</option>
                            <option value="Cedula" <?php if ($empleado['TIPO_DE_DOCUMENTO'] === 'Cedula') echo 'selected'; ?>>Cédula</option>
                            <option value="Pasaporte" <?php if ($empleado['TIPO_DE_DOCUMENTO'] === 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
                            <option value="Registro Civil" <?php if ($empleado['TIPO_DE_DOCUMENTO'] === 'Registro Civil') echo 'selected'; ?>>Registro Civil</option>
                            <option value="Cedula de Extranjeria" <?php if ($empleado['TIPO_DE_DOCUMENTO'] === 'Cedula de Extranjeria') echo 'selected'; ?>>Cédula de Extranjería</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="no_doc">Documento</label>
                        <input type="text" name="no_doc" ID_EMPLEADO="no_doc" value="<?= escapar($empleado['NUMERO_DOCUMENTO']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" ID_EMPLEADO="telefono" value="<?= escapar($empleado['TELEFONO']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" ID_EMPLEADO="email" value="<?= escapar($empleado['EMAIL']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" ID_EMPLEADO="direccion" value="<?= escapar($empleado['DIRECCION']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-select" aria-label="Default select example"  required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Activo" <?php if ($empleado['ESTADO'] === 'Activo') echo 'selected'; ?>>Activo</option>
                            <option value="Inactivo" <?php if ($empleado['ESTADO'] === 'Inactivo') echo 'selected'; ?>>Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="contactofamiliar">Contacto Familiar</label>
                        <input type="text" name="contactofamiliar" ID_EMPLEADO="contactofamiliar" value="<?= escapar($empleado['CONTACTO_FAMILIAR']) ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="parentesco">Parentesco</label>
                        <select id="parentesco" name="parentesco" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="Madre/Padre" <?php if ($empleado['PARENTESCO'] === 'Madre/Padre') echo 'selected'; ?>>Madre/Padre</option>
                            <option value="Hermano/Hermana" <?php if ($empleado['PARENTESCO'] === 'Hermano/Hermana') echo 'selected'; ?>>Hermano/Hermana</option>
                            <option value="Hijo/Hija" <?php if ($empleado['PARENTESCO'] === 'Hijo/Hija') echo 'selected'; ?>>Hijo/Hija</option>
                            <option value="Esposo/Esposa" <?php if ($empleado['PARENTESCO'] === 'Esposo/Esposa') echo 'selected'; ?>>Esposo/Esposa</option>
                            <option value="Abuelo/Abuela" <?php if ($empleado['PARENTESCO'] === 'Abuelo/Abuela') echo 'selected'; ?>>Abuelo/Abuela</option>
                            <option value="Tío/Tía" <?php if ($empleado['PARENTESCO'] === 'Tío/Tía') echo 'selected'; ?>>Tío/Tía</option>
                            <option value="Primo/Prima" <?php if ($empleado['PARENTESCO'] === 'Primo/Prima') echo 'selected'; ?>>Primo/Prima</option>
                            <option value="Amigo" <?php if ($empleado['PARENTESCO'] === 'Amigo') echo 'selected'; ?>>Amigo</option>
                            <option value="Otro" <?php if ($empleado['PARENTESCO'] === 'Otro') echo 'selected'; ?>>Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="clave">Clave</label>
                        <div class="input-group mb-3">
                            <input type="password" placeholder="Contraseña"  class="input-password form-control" name="clave" ID_EMPLEADO="clave" value="<?= escapar($empleado['CLAVE']) ?>" aria-describedby="button-addon2" required>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2 show_password" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon "></span></button>
                            <script src="../../js/mostrar_contraseña.js"></script>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="foto_empleado">Foto Empleado</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" name="foto_empleado" ID_EMPLEADO="foto_empleado" value="<?= escapar($empleado['FOTO_EMPLEADO']) ?>" accept='image/*' onchange="previewImage(event)">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 fotonueva">
                    <label for=" foto_empleado">Vista Previa de la Imagen</label>
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
            <a class="btn btn-primary" href="../../adm/empleados.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
// Obtén el ID del empleado
$id_empleado = $_GET['id'];

// Verifica si se subió una imagen
if(isset($_FILES['foto_empleado']) && $_FILES['foto_empleado']['error'] == 0){
    // Obtiene la extensión de la imagen
    $extension = pathinfo($_FILES['foto_empleado']['name'], PATHINFO_EXTENSION);

    // Define la ruta de la nueva imagen
    $nueva_ruta = "perfiles/" . $id_empleado . "." . $extension;

    // Busca y borra la imagen anterior, sin importar su extensión
    $imagenes_anteriores = glob("perfiles/" . $id_empleado . ".*");
    foreach($imagenes_anteriores as $imagen_anterior){
        if(is_file($imagen_anterior)){
            unlink($imagen_anterior);
        }
    }

    // Mueve la imagen subida a la nueva ruta
    if(move_uploaded_file($_FILES['foto_empleado']['tmp_name'], $nueva_ruta)){
        // Actualiza la extensión de la imagen en la base de datos
        $stmt = $conn->prepare("UPDATE empleado SET FOTO_EMPLEADO = ? WHERE ID_EMPLEADO = ?");
        $stmt->execute([$extension, $id_empleado]);
    } else {
        echo "Hubo un error al guardar la imagen.";
    }
} else {
 
}
?>
  <?php
        $id_empleado = $_GET['id'];
            // Consulta para obtener la extensión de la imagen del empleado
            $stmt = $conn->prepare("SELECT FOTO_EMPLEADO FROM empleado WHERE ID_EMPLEADO = ?");
            $stmt->execute([$id_empleado]);
            $empleado = $stmt->fetch();

            // Construye la ruta de la imagen
            $ruta_imagen = "perfiles/" . $id_empleado . "." . $empleado['FOTO_EMPLEADO'];
           
            ?>
            <img src="<?= $ruta_imagen ?>" alt="Foto del empleado" class="foto_actual">
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