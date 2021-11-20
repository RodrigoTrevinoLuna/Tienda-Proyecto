<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <!-- Importar estilos de la plantilla-->
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/ventas.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>


    <!-- Crear Estilos Ventana nueva con el nombre del archivo html (nameArchivoHtml.css)
        ejemplo-->
        <link rel="stylesheet" href="css/Plantilla.css">
    
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
                
                    <div class="columna-1" >
                        <!--Etiqueta para agregar el titulo No mover-->
                        <div class="div-titulo">
                            <h2 class="titulo">Ventas</h2>
                        </div>
                        <div class="datos">

                            <div class="graf">
                                <canvas id="grafica"></canvas>
                                <script src="js/ventas.js"></script>
                            </div>
                            
                        </div><!--Cierre de div datos-->
                    </div>
                    <div class="columna-2">
                        <br>
                        <h1>Columna 2</h1>
                        <h3>Tamaño de largo=> width:20%</h3>
                    </div>
                    <!--Aqui agregar si queires mas columnaas-->
                </div>

    </div> <!--final DIV container-->

</body>
</html>