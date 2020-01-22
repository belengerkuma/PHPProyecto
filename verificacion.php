<?php
    $userName = $_POST['userName'];
    $pass = $_POST['pass'];
    
    $link = mysqli_connect("localhost", "root", "", "empresadb");
    if ($link){
        $consulta = mysqli_query($link, "select * from usuario where nombreUsuario = '$userName' and password = md5('$pass')");
        $nr = mysqli_num_rows($consulta);
        if($nr>0){
            session_start();
            session_set_cookie_params(0, "/", $HTTP_SERVER_VARS["HTTP_HOST"], 0);
            $_SESSION["id"] = "granted";
            $_SESSION['tiempo']=time();
            header("Location:menuFormulario.php");
        }
        else{
            echo "<script>alert(\"Nombre de usuario o contraseña erroneos\")</script>";
        }
    }
    else{
        echo "<script>alert(\"Conexión fallida.\")</script>";
    }
    mysqli_free_result($consulta);
    mysqli_close($link);
