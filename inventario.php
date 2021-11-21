<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/inventario.css">
</head>
<body>
    <div class="container">

        <!--***********************************************************************************-->
            <!-- INICIO MENUBAR-->
            <div class="menuBar">
                        
                <ul class="principal">
                    <!--Ventas-->
                    <a href="cajero.php"><img src="imagenes/iconos/caja-registradora.png"><P>Caja</P></a>
                    <a href="puntoVenta.php"><img src="imagenes/iconos/Punto-de-Venta.png"><P>Punto de Venta</P></a>
                    <hr>
                    <!--Stock-->
                    <a href="inventario.php"><img src="imagenes/iconos/inventario.png"><P>Inventario</P></a>
                    <a href="producto.php"><img src="imagenes/iconos/producto.png"><P>Producto</P></a>
                    <a href="pedidos.php"><img src="imagenes/iconos/pedidos.png"><P>Pedidos</P></a>
                    <a href="entrada.php"><img src="imagenes/iconos/entrada.png"><P>Entradas</P></a>
                    <a href="salida.php"><img src="imagenes/iconos/salida.png"><P>Salidas</P></a>
                    <hr>
                    <!---->
                    <a href="usuarios.php"><img src="imagenes/iconos/usuarios.png"><P>Usuarios</P></a>
                    <a href="proveedores.php"><img src="imagenes/iconos/Proveedor.png"><P>Proveedores</P></a>
                    <hr>
                    <!---->
                    <a href="ventas.php"><img src="imagenes/iconos/ventas.png"><P>Ventas</P></a>
                    <a href="gastos.php"><img src="imagenes/iconos/gastos.png"><P>Gastos</P></a>
                </ul>
                <ul class="secundario">
                   <a href="#"><img src="imagenes/iconos/salida.png"><P>Cerrar sesión</P></a>
                </ul>
           
   </div>
<!-- FIN MENUBAR -->
<!--***********************************************************************************-->
            <!-- INICIO LISTADO-CARRITO -->
            
            <div class="container-inventario">
                <h2 class="titulo"> Inventario</h2>
                    
                <div class="contenido">
                
                    <!--PANEL PRINCIPAL-->
                    <div class="datos">
                    <?php
                                include_once "php/bd.php";
                                $sentencia = $base_de_datos->query("SELECT * FROM productos,proveedores WHERE (proveedores.id_proveedor = productos.id_proveedor) ;");
                                $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                            ?>
                        <section class="input-btn">
                            <input class="input-buscar" type="text" value="Buscar...">
                            <section class="btn-group">
                                <a href="php/Imprimir/ImprimirInventario.php" target="_blank"><button class="btn-imprimir">Imprimir</button></a>
                            </section>
                        </section>   
                       <table class="table-inventario">
                                    <thead>
                                        <tr>
                                            <td class="unidadN">CLAVE</td>
                                            <td class="nameP">ITEM</td>
                                            <td class="nameProveedor">PROVEEDOR</td>
                                           
                                            <td class="unidadN">STOCK</td>
                                            

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($productos as $producto){ ?>
                                        <tr>
                                            <?php 
                                                

                                            ?>
                                            <td class="C"><?php echo $producto->codigo?></td>
                                            <td class="P"><?php echo $producto->item?></td>
                                            <td><?php echo $producto->nombre?></td>
                                            <td><?php echo $producto->stock?></td>
                                          
                                            
                                            
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td class="C"></td>
                                            <td class="P"></td>
                                            <td></td>
                                            
                                            <td></td>
                                            
                                            
                                        </tr>
                                    </tbody>
                                </table>
                    </div> <!--Fin de datos-->
                   
                    
                </div>
            </div>
        <!-- FIN LISTADO-CARRITO -->


    </div>
</body>
</html>