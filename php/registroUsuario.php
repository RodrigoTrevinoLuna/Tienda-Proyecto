<?php 
include_once "bd.php";

    $nombre = $_POST["nombre"];
    $apelidoP = $_POST["apellidoP"];
    $apelidoM = $_POST["apellidoM"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $correo = $_POST["correo"];
    $tel = $_POST["tel"];
    $direccion = $_POST["direccion"];

    $sentencia = $base_de_datos->prepare("INSERT INTO usuarios(nombre, apellidoP, apellidoM, usuario, password, correo, telefono, direccion) VALUES (?,?,?,?,?,?,?,?)");
    $resultado = $sentencia->execute([$nombre,$apelidoP, $apelidoM,$usuario,$password,$correo,$tel, $direccion]);

    if($resultado === TRUE){
        header("Location: ../usuarios.php");
        exit;
    }
    else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>


