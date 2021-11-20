<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas</title>
    <!-- Importar estilos de la plantilla-->
    <link rel="stylesheet" href="css/contenido.css">


    <!-- Crear Estilos Ventana nueva con el nombre del archivo html (nameArchivoHtml.css)
        ejemplo-->
        <link rel="stylesheet" href="css/entrada.css">
    
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
                    
                    <!--Nota 1 => aquí se agregaran los elementos de la pantalla-->
                    <!--Nota 2 => Si quieres agregar mas elementos a la derecha del menuBar solo pon div
                        Ejemplo: En este caso hay dos elementos alado del menuBars    
                        <div class="columna-1"> {Aqui escribe el codigo} </div>
                        <div class="columna-2"> {Aqui escribe el codigo} </div>
                    -->

                    <div class="columna-1" >
                        <!--Etiqueta para agregar el titulo No mover-->
                        <div class="div-titulo">
                            <h2 class="titulo"> Entradas</h2>
                        </div>
                        <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                               <h1 class="titulo-pedidos">Entrada de Mercancias</h1>
                               <br>
                               <div class="filtro">
                                   <div><label>Fecha:</label><input type="date"></div>
                                   <div><label>Buscar:</label><input type="text"></div>
                               </div>

                               

                               <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                                
                                <table >
                                    <thead>
                                        <tr>
                                            <td class="nameP">CLAVE</td>
                                            <td class="unidadI">ITEM</td>
                                            <td class="unidadI">PROVEEDOR</td>
                                            <td class="unidadN">IMPORTE</td>
                                            <td class="unidadN">UNIDADES PEDIDAS</td>
                                            <td class="unidadN">ACCIÓN</td>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fila">
                                            <td>A-1</td>
                                            <td class="P">Producto 1</td>
                                            <td class="P">Tienda-1</td>
                                            <td>1000</td>
                                            <td>5.00</td>
                                            <td class="accion"><a href="#">Editar</a><a href="#">Eliminar</a></td>
                                        </tr>
                                        <tr class="fila">
                                            <td>A-1</td>
                                            <td class="P">Producto 1</td>
                                            <td class="P">Tienda-1</td>
                                            <td>9000</td>
                                            <td>5.00</td>
                                            <td class="accion"><a href="#">Editar</a><a href="#">Eliminar</a></td>
                                        </tr>
                                       
                                     
                                       
                                        <!--No borrar-->
                                        <tr><td></td><td></td><td></td><td></td><td></td><td class="accion"></td></tr>
                                    </tbody>
                                </table>
                        </div>
                        </div><!--Cierre de div datos-->
                        
                    </div>
                    <div class="columna-2">
                        <section class="titulo-form">
                            <h1 class="titulo-pedidos">Nueva Entrada</h1>
                            <img  src="imagenes/nuevo-producto.png">
                        </section>
                        <form action="">
                            <div>
                                <label>Item</label><section>:</section>
                                <select>
                                    
                                        <option>Producto1</option>
                                    
                                        <option>Producto2s</option>
                                    
                                </select>
                            </div>
                            <div class="division-txt">
                                <hr>
                                <p class="txt-infor">Información del Producto</p>
                                <hr>
                            </div>
                            <div>
                                <label>Clave</label><section>:</section>
                                <input type="text" class="readOnly" readonly >
                            </div>
                            <div>
                                <label>Importe</label><section>:</section>
                                <input type="text" class="readOnly" readonly >
                            </div>
                            <div>
                                <label>Proveedor</label><section>:</section>
                                <input type="text" class="readOnly" readonly >
                            </div>
                            <div>
                                <label>Unidades</label><section>:</section>
                                <input type="number">
                            </div>
                            <hr>
                            <div>
                                <div class="btn">
                            
                                <button>Guardar Registro</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    
                    <!--Aqui agregar si queires mas columnaas-->
                </div>

    </div> <!--final DIV container-->
    
</body>
</html>