<?php 
include_once "bd.php";

    $nombre = $_POST["nombre"];
    $rfc = $_POST["rfc"];
    $correo = $_POST["correo"];
    $tel = $_POST["tel"];
    $direccion = $_POST["direccion"];

    $sentencia = $base_de_datos->prepare("INSERT INTO proveedores(nombre, direccion, rfc, correo, telefono) VALUES (?,?,?,?,?)");
    $resultado = $sentencia->execute([$nombre, $direccion, $rfc, $correo, $tel]);

    if($resultado === TRUE){
        header("Location: ../proveedores.php");
        exit;
    }
    else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>


