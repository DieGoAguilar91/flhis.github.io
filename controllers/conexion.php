<?php
$servername = "localhost";
$dbname = "bd_fruver_la_huerta";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // establecer el modo de error de PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa"; 
}
catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>