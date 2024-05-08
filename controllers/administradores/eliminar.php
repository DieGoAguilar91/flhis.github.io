<?php
include "../conexion.php";
try {
    // Obtén el ID del administrador a eliminar (puedes pasarlo como parámetro en la URL)
    $cliente_id = $_GET['id'];
    // Consulta para eliminar el administrador
    $consulta = "DELETE FROM administrador WHERE ID_ADMINISTRADOR = :administrador_id";
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':administrador_id', $cliente_id);
    $stmt->execute();

    // Redirige al usuario a la página de lista de clientes
    header("Location: ../../adm/clientes.php");
} catch (PDOException $e) {
    echo "Error de conexión: ". $e->getMessage();
}

// Cierra la conexión
$conn = null;
?>