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
        <link rel="stylesheet" href="css/Proveedor.css">
</head>
<body>
    <div class="container">
         <!-- INICIO MENUBAR-->
                        <div class="menuBar" >
                                        
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
                            <a href="administracion.php"><img src="imagenes/iconos/administracion.png"><P>administración</P></a>
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

                    <div class="columna-1" >
                        <!--Etiqueta para agregar  el titulo No mover-->
                        <div class="div-titulo">
                            <h2 class="titulo">Proveedores</h2>
                        </div>

                        <form>
                            <div class="form-registro">
                                <h2>Registro de Proveedores</h2>
                            </div>
                            <div class="form">
                                    <div class="seccion1">
                                        <div><label>Nombre de Proveedor:<input class="textbox" type="text" placeholder="Ingrese Nombre"></label></div>
                                        <div><label>Correo Electronico <input class="textbox" type="email" placeholder="Ingrese Correo"></label></div>
                                    </div>

                                    <div class="seccion2" >  
                                        <div><label>Dirección<input class="textbox" type="text" placeholder="Ingrese Direccion"></label></div>
                                        <div><label>Telefono<input class="textbox" type="tel" placeholder="Ingrese Telefono"></label></div>
                                    </div>

                                    <div class="seccion3" >
                                         <div> <label>RFC<input class="textbox" type="text" placeholder="Ingrese RFC"></label></div>
                                    </div>
                                   
                            </div>
                            <div class="boton">
                                 <button type="submit">Registrar</button>
                            </div>
                        </form>
                        <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                        <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                                <table>
                                    <thead>
                                        <tr class="Item">
                                            <th class="cla">Clave</th>
                                            <th class="nameP">Nombre del Proveedor</th>
                                            <th class="dat">Telefono</th>
                                            <th class="dat">Correo Electronico</th>
                                            <th class="dat">RFC</th>
                                            <th class="dat">Opcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor1</td>
                                            <td>Telefono1</td>
                                            <td>Correo1</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor2</td>
                                            <td>Telefono2</td>
                                            <td>Correo2</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor3</td>
                                            <td>Telefono3</td>
                                            <td>Correo3</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor4</td>
                                            <td>Telefono4</td>
                                            <td>Correo4</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor5</td>
                                            <td>Telefono5</td>
                                            <td>Correo5</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor6</td>
                                            <td>Telefono6</td>
                                            <td>Correo6</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                        <tr>
                                            <td class="P"></td>
                                            <td>Proveedor7</td>
                                            <td>Telefono7</td>
                                            <td>Correo7</td>
                                            <td></td>
                                            <td class="accion">
                                                <a href="#">Editar</a><a href="#">Eliminar</a>
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div><!--Cierre de div datos-->
                        
                    </div>
                    <!--Aqui agregar si queires mas columnaas-->
    </div> <!--final DIV container-->
    
</body>
</html>