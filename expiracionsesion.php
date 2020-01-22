<?php
    session_start();
    if($_SESSION["id"] != "granted"){
        header("Location:index.php");
    }
    
    if ($_SESSION['tiempo']>0) {
        $inactivo = 180;

        //Calculamos tiempo de vida inactivo.
        $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            session_unset();
            session_destroy();              
            header("Location:index.php");
        }
    }
    $_SESSION['tiempo']=time();


