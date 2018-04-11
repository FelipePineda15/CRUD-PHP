<?php

include '../Clases/Usuario.php';
include '../Clases/Conexion.php';

$ObjConexion = new Conexion;
$ObjUsuario = new Usuario();

$Conexion = $ObjConexion->Conectar();
echo $ObjUsuario->Eliminar($_GET['ID'], $Conexion);
echo "<br>";
echo "<br>";
echo "<a href='../index.php'>Inicio</a>";
