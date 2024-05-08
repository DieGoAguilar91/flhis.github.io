<?php
include "../conexion.php";
try {
    // Obtén el ID del cliente a eliminar (puedes pasarlo como parámetro en la URL)
    $producto_id = $_GET['id'];
    // Consulta para eliminar el cliente
    $consulta = "DELETE FROM producto WHERE ID_PRODUCTO = :producto_id";
    $stmt = $conn->prepare($consulta);
    $stmt->bindParam(':producto_id', $producto_id);
    $stmt->execute();

    // Redirige al usuario a la página de lista de clientes
    header("Location: ../../adm/productos.php");
} catch (PDOException $e) {
    echo "Error de conexión: ". $e->getMessage();
}

// Cierra la conexión
$conn = null;
?>