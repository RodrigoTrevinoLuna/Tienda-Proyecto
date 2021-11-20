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
                           <a href="#"> <img src="imagenes/iconos/salida.png"><P>Cerrar sesión</P></a>
                           </ul>
                   
               </div>
               <!-- FIN MENUBAR -->
               
                <div class="container-secundario">
                    <div class="listado-venta">
                            <div class="div-titulo">
                                <h2 class="titulo"> Registro de Ventas</h2>
                            </div>
                            <div class="contenedor-clave"><label class="clave">Clave: <input  class="producto" type="text"></label></div>
                            <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">
                                
                                <table >
                                    <thead>
                                        <tr>
                                            <td class="nameP">PRODUCTO</td>
                                            <td class="unidadN">PRECIO UNIT</td>
                                            <td class="unidadN">DESCTO</td>
                                            <td class="unidadN">CANT</td>
                                            <td class="unidadT">IMPORTE</td>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fila">
                                            <td class="P">Producto 1</td>
                                            <td>150</td>
                                            <td>0.10</td>
                                            <td>5.00</td>
                                            <td>675.00</td>
                                        </tr>
                                        <tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.00</td>
                                            <td>3.00</td>
                                            <td>450.00</td>
                                        </tr>
                                        <tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.20</td>
                                            <td>3.00</td>
                                            <td>360.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr>
                                        <tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr><tr class="fila">
                                            <td class="P">Producto 2</td>
                                            <td>150</td>
                                            <td>0.30</td>
                                            <td>3.00</td>
                                            <td>315.00</td>
                                        </tr>
                                   
                                        <!--No borrar-->
                                        <tr><td></td><td></td><td></td><td></td><td></td></tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="resultados">
                            <section><label>Subtotal</label><input type="text" value="1800" readonly></section>
                            <section><label>Iva 16%</label><input type="text" value="288" readonly></section>
                        </div>
                    </div>
                    <div class="interaccion-venta">
                        <h1 class="txtTitulo">TOTAL</h1>
    <input class="textboxTotal" type="text" value="$1,512.00">
    
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
            <p>[F6] Cancelar Venta</p>
        </button>
       <img  class="logo" src="imagenes/logo.jpg">
    </div>            
                    </div>
                    
                                
                                

            </div><!--Fin Container-secundario-->
        


                
                
                </div><!--Fin del div Container-->  
</body>
</html>