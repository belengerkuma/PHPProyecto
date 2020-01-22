<?php
    require('expiracionSesion.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu Principal</title>
        <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
        <link href="menuFormulario.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="formp">
            <center>
                <div class="formh">
                    <div class="container">
                        <h2>Menu principal de facturación:</h2>
                        <div>
                            <nav>
                                <ul class="fancyTab">
                                    <li><a href="Clientes.php">Clientes</a></li>
                                    <li><a href="Proveedores.php">Proveedores</a></li>
                                    <li><a href="Productos.php">Productos</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <nav>
                                <ul class="fancyTab">
                                    <li><a href="Facturacion.php">Facturación</a></li>
                                    <li><a href="Ordenesc.php">Ordenes de compra</a></li>
                                    <li><a href="Garantias.php">Garantias</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <nav>
                                <ul class="fancyTab">
                                    <li><a href="index.php">Cerrar sesión</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>

