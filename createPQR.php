<?php

include './model/connection.php';

$identificacion = $_POST["txtIdentificacion"];
$tipo = $_POST["txtTipo"];
$asunto = $_POST["txtAsunto"];
$estado = "Pendiente";
$correo = $_POST["txtEmail"];

// sentencia SQL que inserta los campos de la PQR en la tabla 'PQR'
$sentencia = $bd->prepare("INSERT INTO PQR(CEDULA, TIPO, ASUNTO, ESTADO, CORREO) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$identificacion, $tipo, $asunto, $estado, $correo]);

$sentencia2 = $bd->prepare("SELECT * from PQR where CEDULA = ?;");
$sentencia2->execute([$identificacion]);
$pqr = $sentencia2->fetch(PDO::FETCH_OBJ);
$idPQR = $pqr->ID;


if ($resultado === true) {
    header("Location: envioExitoso.php?mensaje=envio_exitoso&correo={$correo}&ticket={$idPQR}");
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
