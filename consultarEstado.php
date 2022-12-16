<?php

include_once './model/connection.php';

$ticket = $_POST["txtTicket"];
$sentencia = $bd->prepare("SELECT * from PQR where ID = ?;");
$sentencia->execute([$ticket]);
$pqr = $sentencia->fetch(PDO::FETCH_OBJ);
$estadoPQR = $pqr->ESTADO;
$fechaPQR = $pqr->FECHA;

// validacion para estado de PQR
if (!empty($pqr)) {
    header("Location: formPage.php?fecha={$fechaPQR}&estado={$estadoPQR}&mensaje=PQR_encontrada#consultar");
} else {
    header('Location: formPage.php?mensaje=PQR_no_encontrada#consultar');
    exit();
}
