<?php

    include '../Clases/Conexion.php';
    include '../Clases/Usuario.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Conectar();
    echo $ObjUsuario->Editar($Conexion, $_POST ['Nombre'], $_POST ['Email'], $_POST ['ID']);
    echo "<br>";
    echo "<br>"; 
    echo "<a href='../index.php'>Inicio</a>";