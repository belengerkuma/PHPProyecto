<!DOCTYPE html>
<?php
    require ('expiracionSesion.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clientes</title>
        <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet"> 
        <link href="Clientes.css" rel="stylesheet" type="text/css">
        <script>
            function validar_texto(e){
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==8){
                    return true;
                }
                patron =/[0-9]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
            }
        </script>
    </head>
    <body>
        <div class="formp">
            <center>
                <div class="formh">
                    <br>
                    <a href="menuFormulario.php"><img src="img/atras.png" alt="Volver atras" title="Volver atras" style="width: 7%;" align="left"></a>
                    <h2>Formulario de clientes</h2>
                    <form method="POST">
                        <table>
                            <tr>
                                <td>Documento de identidad:</td>
                                <td><input type="text" placeholder="Documento identidad" name="id" style="width: 100%;" onkeypress="return validar_texto(event)" required></td>
                            </tr>
                            <tr>
                                <td>Nombre:</td>
                                <td><input type="text" placeholder="Nombre" name="nombreCliente" style="width: 100%;" value="<?php echo isset($row['nombre'])? $row['nombre'] : '';?>" required></td>
                            </tr>
                            <tr>
                                <td>Dirección:</td>
                                <td><input type="text" placeholder="Dirección" name="direccion" style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td>Telefono</td>
                                <td><input type="text" placeholder="Telefono" name="telefono" style="width: 100%;" required></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" placeholder="Email" name="email" style="width: 100%;"></td>
                            </tr>
                        </table>
                        <div style="margin-top: 10px;">
                            <input type="submit" name="nuevoRegistro" value="Nuevo registro" class="button">
                            <input type="button" name="consultarRegistro" value="Consultar cliente" class="button">
                            <input type="submit" name="modificarRegistro" value="Modificar cliente" class="button"><br>
                            <input type="button" name="eliminarRegistro" value="Eliminar cliente" class="button">
                            <input type="reset" value="Reestablecer" class="button">
                            <input type="button" name="cerrarSesion" value="Cerrar sesión" class="button">
                        </div>
                    </form>
                </div>
            </center>
        </div>
        <?php
            require('Clientes1.php');
        ?>
    </body>
</html>
