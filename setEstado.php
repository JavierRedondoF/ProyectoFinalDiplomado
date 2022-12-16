<?php

include_once './model/connection.php';
$codigo = $_GET['codigo'];
$action = $_GET['action'];

$sentencia = $bd->prepare("UPDATE PQR SET ESTADO='{$action}' where ID = ?;");
$resultado = $sentencia->execute([$codigo]);

if ($resultado === true && $action === 'Resuelta') {
    header('Location: adminModule.php?mensaje=set_resuelta');
} elseif ($resultado === true && $action === 'Pendiente') {
    header('Location: adminModule.php?mensaje=set_pendiente');
} else {
    header('Location: adminModule.php?mensaje=error');
}
