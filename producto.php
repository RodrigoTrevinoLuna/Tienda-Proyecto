<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/producto.css">

    <script src="js/imprimir.js"></script>
    
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
<!--************************************* **********************************************-->
            <!-- INICIO LISTADO-CARRITO -->
            <div class="container-producto">
                
                
                    <!--PANEL PRINCIPAL-->
                    <div class="contenedor">
                        <h2 class="titulo"> Productos</h2>
                        <div class="a">
                            <div>
                                <a href="php/Imprimir/ImprimirProductos.php"><button class="btn-imprimir">Imprimir</button></a>
                            </div>
                        </div>
                            <!--PANEL IZQUIERDO-->
                            <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                            <?php
                                        include_once "php/bd.php";
                                        $sentencia2 = $base_de_datos->query("SELECT * FROM proveedores,productos WHERE proveedores.id_proveedor = productos.id_proveedor;");
                                        $productos = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                   
                                <table >
                                    <thead>
                                        <tr class="item">
                                            <th class="unidadN">CLAVE</th>
                                            <th class="name">ITEM</th>
                                            <th class="name">PROVEEDOR</th>
                                            <th class="unidadN">ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($productos as $producto){ ?>
                                        <tr class="fila">
                                            <td><?php echo $producto->codigo ?></td>
                                            <td><?php echo $producto->item ?></td>
                                            <td><?php echo $producto->nombre ?></td>
                                            <td class="accion"><a href="#">Editar</a><a href="#">Eliminar</a></td>
                                        </tr>
                                        
                                   <?php } ?>
                                        <!--No borrar-->
                                        <tr><td></td><td></td><td></td><td></td></tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                      <!--Panel derecho -->
                      <div class="form">
                          <section class="titulo-form">
                            <h2>Nuevo Producto</h2>
                          <img  src="imagenes/nuevo-producto.png">
                        </section>
                        
                        <form action="php/newproducto.php" method="POST">
                            <section>
                                <label>Clave</label>
                                <input type="text" name="clave">
                            </section>
                            <section>
                                <label>Nombre del ITEM</label>
                                <input type="text" name="item">
                            </section>
                            <section>
                                <label>Proveedor</label>
                                <select name="proveedor">
                                <option selected="true" disabled="disabled">Seleccione uno</option>
                                    <?php
                                        include_once "php/bd.php";
                                        $sentencia = $base_de_datos->query("SELECT * FROM proveedores;");
                                        $proveedores = $sentencia->fetchAll(PDO::FETCH_OBJ);
                                    ?>
                                    <?php foreach($proveedores as $proveedor){ ?>
                                    <option value="<?php echo $proveedor ->id_proveedor?>"><?php echo $proveedor ->nombre?></option>
                                    <?php } ?>
                                </select>
                                
                            </section>
                            <section class="btn-newP">
                                <div>
                                    <button class="btn-guardar" type="submit">Guardar</button>
                                </div>
                            </section>
                        </form>
                    </div>
                            
            </div>
        


    </div>
    
</body>
</html>