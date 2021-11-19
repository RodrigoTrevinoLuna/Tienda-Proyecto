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
         
    
        <link rel="stylesheet" href="css/Usuarios.css">
        <link rel="stylesheet" href="css/modal.css">
       
        
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
                            <h2 class="titulo">Usuarios</h2>
                        </div>
                            <form method="post" action="php/registroUsuario.php">
                                <div class="form-registro">
                                    <h2>Registro de Usuarios</h2>
                                </div>
                                <div class="form">
                                        <div class="seccion1">
                                            
                                            <div><label>Nombre<input  type="text" placeholder="Ingrese su Nombre" name="nombre"></label></div>
                                            <div><label>Usuario<input  type="text" placeholder="Ingrese su Correo" name="usuario"></label></div>
                                                <div><label>Correo<input  type="text" placeholder="Ingrese su Nombre" name="correo"></label></div>
                                        </div>
                                        <div class="seccion2" >
                                                
                                            <div><label>Apellido Paterno<input type="text" placeholder="Ingrese su Apellido" name="apellidoP"></label></div>
                                            <div><label>Contraseña<input type="text" placeholder="Ingrese contraseña" name="password"></label></div>
                                                <div><label>Telefono<input type="text" placeholder="Ingrese Telefono" name="tel"></label></div>
                                            
                                        </div>
                                        <div class="seccion3" >
                                            <label>Apellido Materno<input type="text" placeholder="Ingrese su Apellido" name="apellidoM"></label>
                                            <label>Confirmar contraseña<input type="text" placeholder=""></label>
                                            <label>Direccion<input type="text" placeholder="Ingrese su Direccion" name="direccion"></label>
                                        </div>
                            </div>
                                <button type="submit">Registrar</button>
                            </form>
                        
                        
                            <div class="datos">
                            <!--Apartir de aqui abajo ya puedes escribir codigo -->
                            <?php
                                include_once "php/bd.php";
                                $sentencia = $base_de_datos->query("SELECT * FROM usuarios;");
                                $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
                            ?>

                            <table>
                                <thead>
                                    <tr>
                                        <th class="cla">Clave</th>
                                        <th class="dat">Nombre</th>
                                        <th class="dat">Apellido Paterno</th>
                                        <th class="dat">Apellido Materno</th>
                                        <th class="dat">Usuario</th>
                                        <th class="dat">Contraseña</th>
                                        <th class="nameP">Correo Electronico</th>
                                        <th class="nameP">Telefono</th>
                                        <th class="nameP">Direccion</th>
                                        <th class="dat">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($usuarios as $usuario){ ?>
                                        
                                    <tr>
                                        <td><?php echo $usuario->id_usuario ?></td>
                                        <td><?php echo $usuario->nombre ?></td>
                                        <td><?php echo $usuario->apellidoP ?></td>
                                        <td><?php echo $usuario->apellidoM ?></td>
                                        <td><?php echo $usuario->usuario ?></td>
                                        <td><?php echo $usuario->password ?></td>
                                        <td><?php echo $usuario->correo ?></td>
                                        <td><?php echo $usuario->telefono ?></td>
                                        <td ><?php echo $usuario->direccion ?></td>
                                        <td class="accion" ><a href="#" type="button" data-open="modal1<?php echo $usuario->id_usuario ?>">Editar</a><a href="#" type="button" data-open="modaleliminar<?php echo $usuario->id_usuario ?>">Eliminar</a></td>
                                    </tr>

                                    <!--Modal Editar usuario-->
                                    <div class="modal" id="modal1<?php echo $usuario->id_usuario ?>" data-animation="slideInOutLeft">
                                            <div class="modal-dialog">
                                                
                                                <header class="modal-header">
                                                    <h3 style="text-align: center; width: 100%;">Editar Datos de Usuario</h3>
                                                
                                                <button class="close-modal btn-modal" aria-label="close modal" data-close>
                                                    ✕  
                                                </button>
                                                </header>
                                                <form class="modal-form"method="POST" action="php/editarGuardar.php">
                                                <section class="modal-content">
                                                    
                                                    <!--INICIO DEL Formulario-->
                                                            <div><label>Clave</label><input  type="text" value="<?php echo $usuario->id_usuario ?>" name="id_usuario" readonly></div>
                                                            <div><label>Nombre</label><input  type="text" value="<?php echo $usuario->nombre ?>" name="nombre"></div>
                                                            <div><label>Usuario</label><input  type="text" value="<?php echo $usuario->usuario ?>" name="usuario"></div>
                                                            <div><label>Correo</label><input  type="text" value="<?php echo $usuario->correo ?>" name="correo"></div>
                                                            <div><label>Apellido Paterno</label><input type="text" value="<?php echo $usuario->apellidoP ?>" name="apellidoP"></div>
                                                            <div><label>Contraseña</label><input type="text" value="<?php echo $usuario->password ?>" name="password"></div>
                                                            <div><label>Telefono</label><input type="text" value="<?php echo $usuario->telefono ?>" name="tel"></div>
                                                            <div><label>Apellido Materno</label><input type="text"  value="<?php echo $usuario->apellidoM ?>" name="apellidoM"></div>
                                                            <div><label>Direccion</label><input type="text" value="<?php echo $usuario->direccion ?>"  name="direccion"></div>
                                                    <!--Fin del Formulario-->
                                                </section>
                                                <footer class="modal-footer" style="text-align: right;">
                                                <button style="width: max-content;">Guardar</button>
                                                </footer>
                                                </form>
                                            </div>
                                            </div><!-- FIN DELModal Editar usuario-->

                                            <!--Modal ELIMINAR usuario-->
                                    <div class="modal" id="modaleliminar<?php echo $usuario->id_usuario ?>" data-animation="slideInOutLeft">
                                            <div class="modal-dialog">
                                                
                                                <header class="modal-header">
                                                    <h3 style="text-align: center; width: 100%;">ELIMINAR Datos de Usuario</h3>
                                                
                                                <button class="close-modal btn-modal" aria-label="close modal" data-close>
                                                    ✕  
                                                </button>
                                                </header>
                                                <form class="modal-form"method="POST" action="php/eliminarUsuario.php">
                                                <section class="modal-content">
                                                    <h1>¿Estas seguro que deseas Eliminar a este usuario?</h1>
                                                    <!--INICIO DEL Formulario-->
                                                            <div><label>Clave</label><input  type="text" value="<?php echo $usuario->id_usuario ?>" name="id_usuario" readonly></div>
                                                            <div><label>Nombre</label><input  type="text" value="<?php echo $usuario->nombre ?>" name="nombre" readonly></div>
                                                            <div><label>Usuario</label><input  type="text" value="<?php echo $usuario->usuario ?>" name="usuario" readonly></div>
                                                            <div><label>Correo</label><input  type="text" value="<?php echo $usuario->correo ?>" name="correo" readonly></div>
                                                            <div><label>Apellido Paterno</label><input type="text" value="<?php echo $usuario->apellidoP ?>" name="apellidoP" readonly></div>
                                                            <div><label>Contraseña</label><input type="text" value="<?php echo $usuario->password ?>" name="password" readonly></div>
                                                            <div><label>Telefono</label><input type="text" value="<?php echo $usuario->telefono ?>" name="tel" readonly></div>
                                                            <div><label>Apellido Materno</label><input type="text"  value="<?php echo $usuario->apellidoM ?>" name="apellidoM" readonly></div>
                                                            <div><label>Direccion</label><input type="text" value="<?php echo $usuario->direccion ?>"  name="direccion" readonly></div>
                                                    <!--Fin del Formulario-->
                                                </section>
                                                <footer class="modal-footer" style="text-align: right;">
                                                <button style="width: max-content; background: red;">Eliminar</button>
                                                </footer>
                                                </form>
                                            </div>
                                            </div><!-- FIN DELModal ELIMINAR usuario-->    

                                    <?php } ?>

                                    <!--NO BORRAR-->
                                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                </tbody>
                                
                            </table>
                        </div><!--Cierre de div datos-->
                        
                
                    <!--Aqui agregar si queires mas columnaas-->
                </div>
    </div> <!--final DIV container-->





   





 





<script src="JS/modal.js"></script>
</body>
</html>