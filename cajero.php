<?php session_start();
    if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
    $granTotal = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja</title>
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/cajero.css">
</head>
<body>
    <div class="container">
        <!-- INICIO MENUBAR-->
                       <div class="menuBar">
                                       
                           <ul class="principal">
                            <!--Ventas-->
                                <a href="cajero.html"><img src="imagenes/iconos/caja-registradora.png"><P>Caja</P></a>
                                <a href="puntoVenta.html"><img src="imagenes/iconos/Punto-de-Venta.png"><P>Punto de Venta</P></a>
                                <hr>
                                <!--Stock-->
                                <a href="inventario.html"><img src="imagenes/iconos/inventario.png"><P>Inventario</P></a>
                                <a href="producto.html"><img src="imagenes/iconos/producto.png"><P>Producto</P></a>
                                <a href="pedidos.html"><img src="imagenes/iconos/pedidos.png"><P>Pedidos</P></a>
                                <a href="entrada.html"><img src="imagenes/iconos/entrada.png"><P>Entradas</P></a>
                                <a href="salida.html"><img src="imagenes/iconos/salida.png"><P>Salidas</P></a>
                                <hr>
                                <!---->
                                <a href="administracion.html"><img src="imagenes/iconos/administracion.png"><P>administración</P></a>
                                <a href="usuarios.html"><img src="imagenes/iconos/usuarios.png"><P>Usuarios</P></a>
                                <a href="proveedores.html"><img src="imagenes/iconos/Proveedor.png"><P>Proveedores</P></a>
                                <hr>
                                <!---->
                                <a href="ventas.html"><img src="imagenes/iconos/ventas.png"><P>Ventas</P></a>
                                <a href="gastos.html"><img src="imagenes/iconos/gastos.png"><P>Gastos</P></a>
                                
                           </ul>
                           <ul class="secundario">
                           <a href="#"> <img src="imagenes/iconos/salida.png"><P>Cerrar sesión</P></a>
                           </ul>
                   
               </div>
               <!-- FIN MENUBAR -->
               
                <div class="container-secundario">
                    <div class="listado-venta">
                            <div class="div-titulo">
                                <h2 class="titulo"> Registro de Ventas</h2>
                            </div>
                            <div class="contenedor-clave"><form method="POST" action="php/agregarAlCarrito.php"><label class="clave">Clave: <input autocomplete="off" autofocus class="producto" type="text" name="codigo"></label></form></div>

                            <!--Alertas php-->
                            <?php
                                        if(isset($_GET["status"])){
                                            if($_GET["status"] === "1"){
                                                ?>
                                                    <div class="alert alert-success">
                                                        <strong>¡Correcto!</strong> Venta realizada correctamente
                                                    </div>
                                                <?php
                                            }else if($_GET["status"] === "2"){
                                                ?>
                                                <div class="alert alert-info">
                                                        <strong>Venta cancelada</strong>
                                                    </div>
                                                <?php
                                            }else if($_GET["status"] === "3"){
                                                ?>
                                                <div class="alert alert-info">
                                                        <strong>Ok</strong> Producto quitado de la lista
                                                    </div>
                                                <?php
                                            }else if($_GET["status"] === "4"){
                                                ?>
                                                <div class="alert alert-warning">
                                                        <strong>Error:</strong> El producto que buscas no existe
                                                    </div>
                                                <?php
                                            }else if($_GET["status"] === "5"){
                                                ?>
                                                <div class="alert alert-danger">
                                                        <strong>Error: </strong>El producto está agotado
                                                    </div>
                                                <?php
                                            }else{
                                                ?>
                                                <div class="alert alert-danger">
                                                        <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
                                                    </div>
                                                <?php
                                            }
                                        }
                                    ?>
                            <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                                
                                <table >
                                    <thead>
                                        <tr>
                                            <td >CLAVE</td>    
                                            <td class="nameP">PRODUCTO</td>
                                            <td class="unidadN">PRECIO UNIT</td>
                                            <td class="unidadN">DESCTO</td>
                                            <td class="unidadN">CANT</td>
                                            <td class="unidadT">IMPORTE</td>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--PHP-->
                                    <?php foreach($_SESSION["carrito"] as $indice => $producto){ 
	                                            $granTotal = $producto  -> total + $granTotal;
                                        ?><!-- FIN PHP-->

                                        <tr class="fila">
                                            <td><?php echo $producto->codigo?></td>
                                            <td class="P"><?php echo $producto->item?></td>
                                            <td><?php echo $producto->precioVenta?></td>
                                            <td>descuentos </td>
                                            <td><?php echo $producto->cantidad?></td>
                                            <td><?php echo $producto->total?></td>
                                        </tr>
                                            <?php } ?>
                                        <!--No borrar-->
                                        <tr><td></td><td></td><td></td><td></td><td></td></tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="resultados">
                            <section><label>Subtotal</label><input type="text" value="<?php echo "$" . $granTotal; ?>" readonly></section>
                            <section><label>Iva 16%</label><input type="text" value="<?php echo "$" . $granTotal*.16; ?>" readonly></section>
                        </div>
                    </div>
                    <div class="interaccion-venta">
                        <h1 class="txtTitulo">TOTAL</h1>
                        <?php $neto = ($granTotal*.16) + $granTotal ?>
    <input class="textboxTotal" type="text" value="<?php echo "$" . $neto; ?>">
    
    <div class="opciones">
        <button class="btn-opcion">
            <img src="imagenes/cobrar.png">
            <p>[F4] Cobrar</p>
        </button>

        <button class="btn-opcion">
            <img src="imagenes/retiro.png">
            <p>[F1] Retiro</p>
            
        </button>

        <button class="btn-opcion">
            <img src="imagenes/buscar.png">
            <p>[F3] Buscar</p>
        </button>

        <button class="btn-opcion">
            <img src="imagenes/editar.png">
            <p> [F2] Editar</p>
        </button>

        <button class="btn-opcion">
            <img src="imagenes/eliminar.png">
            <p>[F5] Eliminar Producto</p>
        </button>

        <button class="btn-opcion">
            <img src="imagenes/cancelar-venta.png">
            <a href="php/cancelarVenta.php">[F6] Cancelar Venta</a>
            
        </button>
       <img  class="logo" src="imagenes/logo.jpg">
    </div>            
                    </div>
                    
                                
                                

            </div><!--Fin Container-secundario-->
        


                
                
                </div><!--Fin del div Container-->  
</body>
</html>