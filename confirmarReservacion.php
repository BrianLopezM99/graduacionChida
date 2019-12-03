<?php
session_start();
include("conexion.php");


$idUsuario = $_SESSION["datosUsuario"]["id"];
$idSilla = $_POST["silla"];
$paquete1 = $_POST["paquete"];
$sql = "SELECT * FROM usuarios_paquetes";

$paquete = $conexionDB->query($sql);

if(mysqli_num_rows($paquete)>0){
    $fila = $paquete->fetch_array(MYSQLI_ASSOC);
    $_SESSION["Usuario"] = $fila["idUsuario"];
    $_SESSION["Paquete"] = $fila["paquete"];
    $_SESSION["Lugares"] = $fila["lugares"];

}else{
    echo "No hay resultados";
}


$statement = "INSERT INTO reservaciones (idSilla,idUsuario,paquete) VALUES ('$idSilla','$idUsuario','$paquete1')";

$resultado = $conexionDB->query($statement);

if($resultado){
    echo "Registro exitoso";
}else{
    echo "Error de registro equisde";
}

?>