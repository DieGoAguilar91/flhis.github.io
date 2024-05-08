<?php 
include 'conexion.php';
// Función para validar el ingreso de un usuario


function validarIngreso($email, $clave) {
    global $conn;

    try {
        // Consulta para verificar si el administrador existe y obtener su tipo
        $sql = "SELECT tipousuario FROM administrador WHERE email = ? AND clave = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $clave);
        $stmt->execute();

        // Obtener el tipo de usuario (si existe)
        $tipoUsuario = $stmt->fetchColumn();

        if ($tipoUsuario === "Adm") {
            // Redirigir al archivo "../adm/inicio.php" para administradores
            header("Location: ../adm/inicio.php");
            exit;
        } else {
            // Consultar en la tabla cliente
            $sql = "SELECT tipousuario FROM cliente WHERE email = ? AND clave = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $clave);
            $stmt->execute();

            // Obtener el tipo de usuario (si existe)
            $tipoUsuario = $stmt->fetchColumn();

            if ($tipoUsuario === "User") {
                // Redirigir al archivo "../index.html" para usuarios normales
                header("Location: ../index.html");
                exit;
            } else {
                // Consultar en la tabla empleado
                $sql = "SELECT tipousuario FROM empleado WHERE email = ? AND clave = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $email);
                $stmt->bindParam(2, $clave);
                $stmt->execute();

                // Obtener el tipo de usuario (si existe)
                $tipoUsuario = $stmt->fetchColumn();

                if ($tipoUsuario === "empleado") {
                    // Redirigir al archivo "../ruta-para-empleados.php" para empleados
                    header("Location: ../adm/inicio.php");
                    exit;
                } else {
                    echo "Credenciales incorrectas o usuario no válido";
                }
            }
        }
    } catch (PDOException $e) {
        echo "Error al validar el usuario: " . $e->getMessage();
    }
}

// Verificar si se han recibido datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $emailUsuario = $_POST["email"];
    $claveUsuario = $_POST["clave"];
    // Llamar a la función para validar el ingreso
    validarIngreso($emailUsuario, $claveUsuario);
}

?>
