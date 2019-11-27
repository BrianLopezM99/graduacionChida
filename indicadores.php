<?php
session_start();
$idUsuario = $_SESSION["datosUsuario"]["id"];

include("conexion.php");
$statement = "SELECT IdUsuario, paquete, lugares
              FROM usuarios_paquetes
              WHERE IdUsuario = $idUsuario";
$resultado = $conexionDB->query($statement);

$compras = array();
while($fila = mysqli_fetch_assoc($resultado)){
    $compras[] = $fila;
}

echo json_encode($compras);
?>