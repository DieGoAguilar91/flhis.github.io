<?php 
include 'conexion.php';
// Funcion crear clientes

function crearCliente($nombre_cliente, $clave, $email) {
    global $conn;

    try{
        //Preparar la consulta sql
        $sql= "INSERT INTO cliente(nombre_cliente, clave, email) VALUES (?, ?, ?)" ;
        $stmt= $conn->prepare($sql);

        // Vincular los parametros
        $stmt-> bindParam(1, $nombre_cliente);
        $stmt-> bindParam(2, $clave);
        $stmt-> bindParam(3, $email) ;

        //Ejecutar consulta
        $stmt -> execute();

            // Comprobar si se ingeso el registro
            if ($stmt -> rowCount()>0){
                return true;
            } else{
                return false;
            }
        } catch(PDOException $e){
            //Manejo de errores
            echo" Error al crear el Cliente" . $e-> getMessage();
            return false;
        }
    
    }

    // Verificar si se han recibido datos de formulario
    if( $_SERVER['REQUEST_METHOD'] =='POST'){
        //Obtener los datos del formulario
        $nombre_cliente= $_POST["nombre_cliente"];
        $clave= $_POST["clave"];
        $email= $_POST["email"];
        //Llamar a la funcion para crear un nuevo cliente
        if(crearcliente($nombre_cliente, $clave,  $email)){
            echo $nombre_cliente . " creado con exito" ;
            header("Location: ../index.html");
            exit;
        }else{
            echo "Error al crear el cliente  ";
        }
    }
?>