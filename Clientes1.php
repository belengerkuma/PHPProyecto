<?php
    
    if(isset($_POST['nuevoRegistro'])){
        $link = mysqli_connect("localhost", "root", "", "empresadb");
        $id = $_POST['id'];
        $nombre = $_POST['nombreCliente'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        if($link){
            $consulta = mysqli_query($link, "select * from clientes where idCliente = '$id'");
            $nr = mysqli_num_rows($consulta);
            if($nr>0){
                echo "<script>alert(\"Cliente ya existe con dicho id.\")</script>";
            }
            else{
                $sql = "insert into clientes values ('$id', '$nombre', '$direccion', '$telefono', '$email')";
                if(mysqli_query($link, $sql)){
                    echo "<script>alert(\"Cliente creado satisfactoriamente.\")</script>";
                }
                else{
                    echo "<script>alert(\"No se pudo crear dicho cliente.\")</script>";
                }
            }
        }
        else{
            echo "<script>alert(\"Conexión fallida.\")</script>";
        }
        mysqli_free_result($consulta);
        mysqli_close($link);
    }
    
    if(isset($_POST['modificarRegistro'])){
        $link = mysqli_connect("localhost", "root", "", "empresadb");
        $id = $_POST['id'];
        $nombre = $_POST['nombreCliente'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        if($link){
            $consulta = mysqli_query($link, "select * from clientes where idCliente = '$id'");
            $nr = mysqli_num_rows($consulta);
            if($nr>0){
                $sql = "update clientes set nombre='$nombre', direccion='$direccion', telefono='$telefono', email='$email' where idCliente = '$id' limit 1";
                if(mysqli_query($link, $sql)){
                    echo "<script>alert(\"Cliente actualizado satisfactoriamente.\")</script>";
                }
                else{
                    echo "<script>alert(\"No se pudo actualizar dicho cliente.\")</script>";
                }
            }
            else{
                echo "<script>alert(\"Cliente no existe con dicho id.\")</script>";
            }
        }
        else{
            echo "<script>alert(\"Conexión fallida.\")</script>";
        }
        mysqli_free_result($consulta);
        mysqli_close($link);
    }
    
    if(isset($_POST['eliminarRegistro'])){
        $link = mysqli_connect("localhost", "root", "", "empresadb");
        $id = $_POST['id'];
        if($link){
            $consulta = mysqli_query($link, "select * from clientes where idCliente = '$id'");
            $nr = mysqli_num_rows($consulta);
            if($nr>0){
                $sql = "delete from clientes where idCliente='$id' limit 1";
                if(mysqli_query($link, $sql)){
                    echo "<script>alert(\"Cliente eliminado satisfactoriamente.\")</script>";
                }
                else{
                    echo "<script>alert(\"No se pudo eliminar dicho cliente.\")</script>";
                }
            }
            else{
                echo "<script>alert(\"Cliente no existe con dicho id.\")</script>";
            }
        }
        else{
            echo "<script>alert(\"Conexión fallida.\")</script>";
        }
        mysqli_free_result($consulta);
        mysqli_close($link);
    }
    
    if(isset($_POST['consultarRegistro'])){
        $link = mysqli_connect("localhost", "root", "", "empresadb");
        $id = $_POST['id'];
        
        if($link){
            $consulta = mysqli_query($link, "select * from clientes where idCliente = '$id' limit 1");
            $nr = mysqli_num_rows($consulta);
            if($nr>0){
                $row = MYSQLI_ASSOC($consulta);
                //$row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
                //$_post['nombreCliente'] = $row['nombre'];
            }
            else{
                echo "<script>alert(\"Cliente no existe con dicho id.\")</script>";
            }
        }
        else{
            echo "<script>alert(\"Conexión fallida.\")</script>";
        }
        mysqli_free_result($consulta);
        mysqli_close($link);
    }
    
    if(isset($_POST['cerrarSesion'])){
        session_start();
        session_unset();
        session_destroy();              
        header("Location:index.php");
    }
    
