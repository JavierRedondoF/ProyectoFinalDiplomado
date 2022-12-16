<?php

$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];

$usuarioPermitido = "admin";
$passwordAcceso = "1234";

//validacion para usuario y password
if ($usuario !== $usuarioPermitido || $password !== $passwordAcceso) {
    header('Location: /proyectoFinal/adminLogin.php?mensaje=invalido');
} else {
    header('Location: /proyectoFinal/adminModule.php?mensaje=autenticado');
}
