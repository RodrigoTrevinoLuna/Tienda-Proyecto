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
        <link rel="stylesheet" href="css/administracion.css">
    
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
                            <h2 class="titulo"> Administracion</h2>
                        </div>
                        <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                            <?php
                                include_once "php/bd.php";
                                $sentencia = $base_de_datos->query("SELECT * FROM permisos, usuarios WHERE permisos.id_usuario = usuarios.id_usuario;");
                                $permisos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <h1 class="titulo-pedidos">Permisos</h1>
                            <div class="buscar">
                                <label>Buscar:</label><input type="text">
                            </div>
                            <div class="tabla my-custom-scrollbar table-wrapper-scroll-y">

                                <table  >
                                    <thead>
                                        <tr>
                                            <td class="unidadI">CLAVE </td>
                                            <td class="unidadI">NOMBRE </td>
                                            <td class="unidadN">NOMBRE USUARIO</td>
                                            <td class="unidadN">NIVEL DE PERMISO</td>
                                            <td class="unidadN">ACCIÓN</td>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($permisos as $permiso){ ?>
                                        <tr class="fila">
                                            <td><?php echo $permiso->id_usuario?></td>
                                            <td class="P"><?php echo $permiso->nombre?></td>
                                            <td ><?php echo $permiso->usuario?></td>
                                            <td><?php echo $permiso->nivel_acceso?></td>
                                            <td class="accion"><a href="#">Editar</a><a href="#">Eliminar</a></td>
                                        </tr>
                                        
                                        <?php } ?>
                                        <!--No borrar-->
                                        <tr><td></td><td></td><td></td><td></td><td class="accion"></td></tr>
                                    </tbody>
                                </table>
                        </div>
                            </div><!--Cierre de div datos-->
                    </div>
                            <!--Cierre de div datos-->
                    
                    <div class="columna-2">
                        <section class="titulo-form">
                            <h1 class="titulo-pedidos">Nivel de Permisos</h1>
                            <br>
                            <img  src="imagenes/Nivel-permisos.png">
                        </section>
                        <br>
                        <form action="php/newPermiso.php" method="POST">
                            <div>
                                <label>Usuario</label><section>:</section>
                                <select name="usuario">
                                
                                <option selected="true" disabled="disabled">Seleccione un Usuario</option>
                                        <?php $sentencia2 = $base_de_datos->query("SELECT * FROM permisos, usuarios WHERE NOT(permisos.id_usuario = usuarios.id_usuario) ;");
                                $usuarios = $sentencia2->fetchAll(PDO::FETCH_OBJ);
                                     foreach($usuarios as $usuario){ ?>
                                        <option value="<?php echo $usuario->id_usuario?>"><?php echo $usuario->usuario?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="division-txt">
                                <hr>
                                <p class="txt-infor">Permiso de Usuario</p>
                                <hr>
                            </div>
                            <div>
                                <label>Nivel Permiso</label><section>:</section>
                                <select name="nivelacceso">
                                    
                                        <option value="Administrador">Administrador</option>
                                        <option value="Empleado">Empleado</option>
                                    
                                </select>
                            </div>
                            
                            <div>
                                <div class="btn">
                            
                                <button type="submit">Guardar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    </div>
                    
                    <!--Aqui agregar si queires mas columnaas-->
                </div>

    </div> <!--final DIV container-->
    
</body>
</html>