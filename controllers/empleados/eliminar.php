<?php
include "../conexion.php";
try {
    // Obtén el ID del cliente a eliminar (puedes pasarlo como parámetro en la URL)
    $empleado_id = $_GET['id'];
    // Consulta para eliminar el cliente
    $consulta = "DELETE FROM empleados WHERE ID_EMPLEADO = :empleado_id";
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':empleado_id', $empleado_id);
    $stmt->execute();

    // Redirige al usuario a la página de lista de clientes
    header("Location: ../../adm/empleados.php");
} catch (PDOException $e) {
    echo "Error de conexión: ". $e->getMessage();
}

// Cierra la conexión
$conn = null;
?>