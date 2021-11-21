<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <!-- Importar estilos de la plantilla-->
    <link rel="stylesheet" href="css/contenido.css">


    <!-- Crear Estilos Ventana nueva con el nombre del archivo html (nameArchivoHtml.css)
        ejemplo-->
        <link rel="stylesheet" href="css/salida.css">
    
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
                            <h2 class="titulo"> Salidas</h2>
                        </div>
                        <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                            <h1 class="titulo-pedidos">Salidas de Mercancias</h1>
                            <br>
                            <div class="filtro" style="position:relative; right:200px" >
                                <div><label>Fecha:</label><input type="date"></div>
                                <div><label>Buscar:</label><input type="text"></div>
                            </div>
                            
                            <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                                
                                <table>
                                    <thead>
                                        <tr>
                                            <td class="nameP">ID VENTA</td>
                                            <td class="unidadI">ITEM</td>
                                            <td class="unidadI">PROVEEDOR</td>
                                            <td class="unidadN">PRECIO UN.</td>
                                            <td class="unidadN">UNIDADES SALIENTES</td>
                                            <td class="unidadN">IMPORTE</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php include_once "php/bd.php";
                                                    $sentencia9 = $base_de_datos->query("SELECT * FROM productos,productos_vendidos,proveedores WHERE ((productos.id = productos_vendidos.id_producto) and (productos.id_proveedor = proveedores.id_proveedor))" );
                                                    $salidas = $sentencia9->fetchAll(PDO::FETCH_OBJ);
                                                 foreach($salidas as $salida){ ?>
                                        <tr class="fila">
                                            <td></td>
                                            <td class="P"><?php echo $salida ->item?></td>
                                            <td class="P"><?php echo $salida ->nombre?></td>
                                            <td><?php echo $salida ->precioVenta?></td>
                                            <td><?php echo $salida ->cantidad?></td>
                                            <td>0.00</td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div><!--Cierre de div datos-->
                    </div>
                    
                    <!--Aqui agregar si queires mas columnaas-->
                </div>

    </div> <!--final DIV container-->
    
</body>
</html>