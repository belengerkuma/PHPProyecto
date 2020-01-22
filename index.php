<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso usuarios</title>
        <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet"> 
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <center>
            <div class="formp">
                <div class="formh">
                    <h3>Ingreso sistema de facturación:</h3>
                    <div class="container">
                        <div>
                            <img src ="img/user.png" alt="ingreso" style="width: 70%;">
                        </div>
                        <div>
                            <form method ="POST">
                                <table>
                                    <tr class="marginForm">
                                        <td>
                                            Usuario:
                                        </td>
                                        <td>
                                            <input type="text" placeholder="Nombre de usuario" name="userName" style="width: 100%;" required>
                                        </td>
                                    </tr>
                                    <tr class="marginForm">
                                        <td>
                                            Contraseña:
                                        </td>
                                        <td>
                                            <input type="password" placeholder="Contraseña" name="pass" style="width: 100%;" required>
                                        </td>
                                    </tr>
                                </table>
                                <input type="submit" value="Ingresar" name="ingresar" class="boton">
                                <input type="reset" value="Restablecer" class="boton">
                            </form>
                        </div>
                    </div>
                <div>
            </div>
        </center>
        <?php
            if (isset($_POST['ingresar'])){
                require('verificacion.php');
            }
        ?>
    </body>
</html>
