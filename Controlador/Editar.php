<?php

    include '../Clases/Conexion.php';
    include '../Clases/Usuario.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Connect();
    echo $ObjUsuario->Editar($_POST ['idUsuario'], $Conexion, $_POST ['name'], $_POST ['surname'], $_POST ['email'], $_POST ['password'], $_POST ['idCargo']);
    echo "<br>";
    echo "<br>"; 
    echo "<a href='../Vistas/index.php'>Inicio</a>";