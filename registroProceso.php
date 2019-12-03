<?php
    include("conexion.php");

    $usuario = $_POST["usuario"];
    $contrasena = hash("whirlpool", $_POST["contrasena"]);
    $email = $_POST["email"];

    $statement = "INSERT INTO usuarios(nombre, contrasena, email) Values
                    ('$usuario', '$contrasena', '$email')";

    //echo $statement;
    $resultado = $conexionDB->query($statement);

    if($resultado){
        echo'<script languaje = "javascript">';
        echo'function r() { location.href="login.php" } 
        setTimeout ("r()", 2000);';
        echo'</script>';
        echo("<h1>Si se inserto el registro</h1>");
    }
    else{
        echo "No se inserto el registro";
    }
?>