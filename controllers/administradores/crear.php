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
    'mensaje' => 'El Administrador ' . escapar($_POST['nombre']) . ' ha sido agregado con éxito ✅'
  ];

  try {
    
    $administrador = [
        "nombre"    => $_POST['nombre'],
        "apellido"  => $_POST['apellido'],
        "email"     => $_POST['email'],
        "telefono"      => $_POST['telefono'],
        "genero"      => $_POST['genero'],
        "tipodocumento"      => $_POST['tipodocumento'],
        "no_doc"      => $_POST['no_doc'],
        "direccion"      => $_POST['direccion'],
        "estado"      => $_POST['estado'],
        "clave"      => $_POST['clave'],
        "tipousuario"      => $_POST['tipousuario'],
    ];

    $consultaSQL = "INSERT INTO administrador (NOMBRE_ADMINISTRADOR, APELLIDO_ADMINISTRADOR, EMAIL, TELEFONO ,GENERO,TIPO_DE_DOCUMENTO, NUMERO_DOCUMENTO, DIRECCION, ESTADO, CLAVE, TIPOUSUARIO)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($administrador)) . ")";
   

    $sentencia = $conn->prepare($consultaSQL);
    $sentencia->execute($administrador);

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
      body {
          background-color: #f5f5f5;
      }

          .container {
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
    </style>  
<div class="container my-3">

<div class="row">
  <div class="col-md-12">
    <h2 class="mt-4">Crear un Administrador</h2>
    <hr>
    <form method="post" enctype="multipart/form-data" >
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="genero">Genero</label>
            <select id="genero" name="genero" class="form-select" aria-label="Default select example" required>
              <option value="" disabled selected >Selecciona una opción</option>
              <option value="Femenino" >Femenino</option>
              <option value="Masculino" >Masculino</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="tipodocumento">Tipo de Documento</label>
            <select id="tipodocumento" name="tipodocumento"class="form-select" aria-label="Default select example" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
              <option value="Cedula">Cédula</option>
              <option value="Pasaporte">Pasaporte</option>
              <option value="Registro Civil">Registro Civil</option>
              <option value="Cedula de Extranjeria">Cédula de Extranjería</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="no_doc">Documento</label>
            <input type="text" name="no_doc" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="tipousuario">Tipo Usuario</label>
            <select id="tipousuario" name="tipousuario" class="form-select" aria-label="Default select example" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="Adm">Adm</option>
              <option value="User">User</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-select" aria-label="Default select example" required>
              <option value="" disabled selected>Selecciona una opción</option>
              <option value="Activo">Activo</option>
              <option value="Inactivo">Inactivo</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <div class="form-group">
            <label for="clave">Clave</label>
            <div class="input-group mb-3" required>
              <input type="password" placeholder="Contraseña"  class="input-password form-control" name="clave" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2 show_password" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon "></span></button>
              <script src="../../js/mostrar_contraseña.js"></script>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
        <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        <a class="btn btn-primary" href="../../adm/administradores.php">Regresar al inicio</a>
      </div>
    </form>
  </div>
</div>
</div>
</body>
</html>
