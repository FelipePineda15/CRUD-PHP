<?php

include '../Clases/Conexion.php';
include '../Clases/Usuario.php';

$ObjConexion = new Conexion();
$Conexion = $ObjConexion->Conectar();

$ObjUsuario = new Usuario();
echo $ObjUsuario->Registrar($Conexion, $_POST['Nombre'], $_POST['Email'], $_POST['Password']);
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Inicio</a>";