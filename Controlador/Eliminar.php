<?php

include '../Clases/Usuario.php';
include '../Clases/Conexion.php';

$ObjConexion = new Conexion();
$Conexion = $ObjConexion->Connect();

$ObjUsuario = new Usuario();
echo $ObjUsuario->Eliminar($_GET['idUsuario'], $Conexion);
echo "<br>";
echo "<br>";
echo "<a href='../Vistas/index.php'>Inicio</a>";
