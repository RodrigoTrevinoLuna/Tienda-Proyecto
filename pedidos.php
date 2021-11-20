<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <!-- Importar estilos de la plantilla-->
    <link rel="stylesheet" href="css/contenido.css">

    <!-- Crear Estilos Ventana nueva con el nombre del archivo html (nameArchivoHtml.css)
        ejemplo-->
        <link rel="stylesheet" href="css/pedidos.css">
    
        
    
</head>
<body>
    <div class="container">
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
<!--************************************************************************************************************************************************************-->
                <!-- INICIO DE LOS ELEMENTOS A LA DERECHA DEL MENUBAR-->
                <div class="contenedor-secundario">
                    
                    <!--Nota 1 => aquí se agregaran los elementos de la pantalla-->
                    <!--Nota 2 => Si quieres agregar mas elementos a la derecha del menuBar solo pon div
                        Ejemplo: En este caso hay dos elementos alado del menuBars    
                        <div class="columna-1"> {Aqui escribe el codigo} </div>
                        <div class="columna-2"> {Aqui escribe el codigo} </div>
                    -->

                    <div class="columna-1" >
                        <!--Etiqueta para agregar el titulo No mover-->
                        <div class="div-titulo">
                            <h2 class="titulo"> Pedidos</h2>
                        </div>
                        <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                            <?php
                                        include_once "php/bd.php";
                                        
                                    ?>
                                <h1 class="titulo-pedidos">Lista de Pedidos</h1>
                                <br>
                                <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                                
                                    <table  >
                                        <thead>
                                            <tr>
                                                <td class="nameP">CLAVE</td>
                                                <td class="unidadI">ITEM</td>
                                                <td class="unidadN">UNIDADES EN STOCK</td>
                                                <td class="unidadI">PROVEEDOR</td>
                                                <td class="unidadN">UNIDADES A PEDIR</td>
                                                <td class="unidadN">ACCIÓN</td>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                    $sentencia9 = $base_de_datos->query("SELECT * FROM productos,pedidos,proveedores WHERE ((productos.id = pedidos.id_productos) and (productos.id_proveedor = proveedores.id_proveedor))" );
                                                    $pedidos = $sentencia9->fetchAll(PDO::FETCH_OBJ);
                                                 foreach($pedidos as $pedido){ ?>
                                            <tr class="fila">
                                                <td> <?php echo $pedido -> id?></td>
                                                <td class="P"><?php echo $pedido -> item?></td>
                                                <td class="P"><?php echo $pedido -> stock?></td>
                                                <td class="P"><?php echo $pedido -> nombre?></td>
                                                <td><?php echo $pedido -> pedir?></td>
                                                <td class="accion"><a href="#">Editar</a><a href="#">Eliminar</a></td>
                                            </tr>
                                            <?php } ?>
                                            <!--No borrar-->
                                            <tr><td></td><td></td><td></td><td></td><td></td><td class="accion"></td></tr>
                                        </tbody>
                                    </table>
                            </div>
                            </div><!--Cierre de div datos-->
                    </div>
                    <div class="columna-2">
                                
                                <section class="titulo-form">
                                    <h1 class="titulo-pedidos">Realizar Pedidos</h1>
                                  <img  src="imagenes/iconos/pedidos.png">
                                </section>
                                
                                <br>
                                <form action="php/newPedido.php" method="POST">
                                
                                    <div>
                                        <label>Item</label><section>:</section>
                                        <select name="id">
                                        <option selected="true" disabled="disabled">Seleccione uno</option>
                                            <optgroup label="Stock en cero">
                                            
                                                <?php
                                                    $sentencia2 = $base_de_datos->query("SELECT * FROM productos WHERE stock=0;");
                                                    $productos = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                                 foreach($productos as $producto){ ?>
                                                <option value="<?php echo $producto->id ?>"><?php echo $producto->item ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Stock de 1-5">
                                            <?php
                                                    $sentencia3 = $base_de_datos->query("SELECT * FROM `productos` WHERE (stock>=1) and (stock<=5);");
                                                    $productos3 = $sentencia3->fetchAll(PDO::FETCH_OBJ);
                                                 foreach($productos3 as $producto3){ ?>
                                                <option value="<?php echo $producto3->id ?>"><?php echo $producto3->item ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Stock de 6-10">
                                            <?php
                                                    $sentencia4 = $base_de_datos->query("SELECT * FROM `productos` WHERE (stock>=6) and (stock<=10);");
                                                    $productos4 = $sentencia4->fetchAll(PDO::FETCH_OBJ);
                                                 foreach($productos4 as $producto4){ ?>
                                                <option value="<?php echo $producto4->id ?>"><?php echo $producto4->item ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="division-txt">
                                        <hr>
                                        <p class="txt-infor">Información del Producto</p>
                                        <hr>
                                    </div>
                                   
                                    <div>
                                        <label>Pedir</label><section>:</section>
                                        <input type="number" name="pedir">
                                    </div>
                                    <hr>
                                    <div>
                                        <div class="btn">
                                    
                                        <button>Guardar Pedido</button>
                                        </div>
                                    </div>
                                </form>

                                
                    </div>
                    
                    <!--Aqui agregar si queires mas columnaas-->
                </div>

    </div> <!--final DIV container-->
    
</body>
</html>