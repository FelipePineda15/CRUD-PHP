<?php

include '../Clases/Conexion.php';
include '../Clases/Usuario.php';

$ObjConexion = new Conexion();
$Conexion = $ObjConexion->Connect();

$ObjUsuario = new Usuario();
if (!empty($_POST['cargoId'])) {
    echo $ObjUsuario->Registrar($Conexion,
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $_POST['password'],
        $_POST['cargoId']);
}
echo "<br>";
echo "<br>";
echo "<a href='../Vistas/index.php'>Inicio</a>";