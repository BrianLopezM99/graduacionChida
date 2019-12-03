<?php
session_start();
$idUsuario = $_SESSION["datosUsuario"]["id"];

include("conexion.php");
$mesas = "";

$plantillaMesa = file_get_contents("templates/mesa.html");
$plantillaSilla = file_get_contents("templates/silla.html");

$statementMesas = "SELECT id, numero
                   FROM mesas";
$resultadoMesas = $conexionDB->query($statementMesas);

foreach($resultadoMesas as $fila){
    $sillas = "";
    $idMesa = $fila["id"];


    $statementSillas = "SELECT S.id, S.posicion, P.paquete, R.paquete as packselect, U.nombre FROM sillas S LEFT JOIN reservaciones R ON R.idSilla = S.id LEFT JOIN usuarios U ON U.id = R.idUsuario LEFT JOIN usuarios_paquetes P ON P.idUsuario = R.idUsuario WHERE idMesa = $idMesa";
    $resultadoSillas = $conexionDB->query($statementSillas);

    foreach($resultadoSillas as $fila){
        $idSilla=$fila["id"];
        $nombre = $fila["nombre"];
        $paquete1 = $fila["packselect"];

        $posicion = $fila["posicion"];
        $reservada = $fila["paquete"] ? "silla-reservada" : "";
        $mensaje = $nombre ? "title=\"Esta silla ya la tiene $nombre! con el paquete $paquete1\"" : "";
    
        $sillas .=  sprintf($plantillaSilla, $posicion, $reservada, $mensaje, $idSilla, $paquete1);
    }
    $mesas .= sprintf($plantillaMesa, $idMesa, $sillas);
}
?>